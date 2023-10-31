<?php defined('BASEPATH') OR exit ('No direct script access allowed');
class Transaksi extends CI_Controller{
{
    protected $paketModel;
    public function __construct()
    {
    $this->paketModel = new paketModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Admin | Movies',
               'paket' => $this->paketModel->getpaket()
           ];
        
           echo view('index', $data);
    }
    public function home()
    {
        $data = [
            'title' => 'Admin | Movies',
           ];
        
           echo view('view_berlangganan'), $data);
    }

    public function Berlangganan($id)
    {
        $nama_paket = $this->paketModel->getpaket($id);

        if ($nama_paket) {
            $cart = session('cart') ?? [];

            if (isset($cart[$kode_paket])) {
                $cart[$kode_paket]['quantity']++;
            } else {
                $cart[$kode_paket] = [
                    'menu' => $nama_paket,
                    'quantity' => 1
                ];
            }

            session()->set('cart', $cart);

            return redirect()->to(site_url('/'));
        } else {
            return redirect()->back()->with('error', 'Paket not found');
        }
    }


// Helper function to calculate total price
function calculateTotal($cart)
{
    $total = 0;

    foreach ($cart as $item) {
        $total += $item['menu']['harga'] * $item['quantity'];
    }

    return $total;
}

    public function checkout()
    {
        $cart = session('cart');
        $total = 0;

        // Hitung total harga
        if ($cart) {
            foreach ($cart as $item) {
                $total += $item['menu']['harga'] * $item['quantity'];
            }
        }

        return view('kasir/checkout', ['cart' => $cart, 'total' => $total]);
    }

    public function processOrder()
    {
        $cart = session('cart');
        $noNota = $this->request->getPost('no_nota');
        $namaPelanggan = $this->request->getPost('nama_pelanggan');
        $noMeja = $this->request->getPost('no_meja');

        // Insert data transaksi ke dalam tabel tbl_transaksi
        $transaksiModel = new TransaksiModel();
        $transaksiData = [
            'no_nota' => $noNota,
            'nama_pelanggan' => $namaPelanggan,
            'no_meja' => $noMeja,
        ];
        $transaksiModel->insert($transaksiData);

        // Insert detail transaksi ke dalam tabel tbl_detail_transaksi
        $detailTransaksiModel = new DetailTransaksiModel();
        if ($cart) {
            foreach ($cart as $item) {
                $detailData = [
                    'no_nota' => $noNota,
                    'kode_menu' => $item['menu']['kode_menu'],
                    'qty' => $item['quantity'],
                    'harga_perjenis' =>$item['menu']['harga'] * $item['quantity'],
                    
                ];
                $detailTransaksiModel->insert($detailData);
            }
        }

        session()->remove('cart');

        return redirect()->to('')->with('success', 'Order berhasil diproses');

        }
        public function history_order()
        {
            $transaksiModel = new TransaksiModel();
            $detailTransaksiModel = new DetailTransaksiModel();
        
            // Ambil semua data transaksi
            $transaksi = $transaksiModel->findAll();
        
            // Loop melalui setiap transaksi
            foreach ($transaksi as &$trx) {
                $noNota = $trx['no_nota'];
                // Ambil detail transaksi berdasarkan no nota
                $detailTransaksi = $detailTransaksiModel->joinMenu($noNota);
        
                // Masukkan detail transaksi ke dalam transaksi
                $trx['detail_transaksi'] = $detailTransaksi;
            }
        
            // Tampilkan view dengan data transaksi
            return view('kasir/history_order', ['transaksi' => $transaksi]);
        }

        public function export_pdf($noNota)
{
    $transaksiModel = new TransaksiModel();
    $detailTransaksiModel = new DetailTransaksiModel();

    // Ambil data transaksi berdasarkan no nota
    $transaksi = $transaksiModel->where('no_nota', $noNota)->first();

    // Ambil detail transaksi berdasarkan no nota dengan nama menu
    $detailTransaksi = $detailTransaksiModel->joinMenu($noNota);

    // Load library dan helper yang dibutuhkan
    $this->loadHelpers(['pdf', 'url']);

    // Mulai pembuatan PDF
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // Set dokumen informasi
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Admin CoffeeShop');
    $pdf->SetTitle('Struk Pembelian');
    $pdf->SetSubject('STRUK');

    // Atur margin
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // Atur font
    $pdf->SetFont('helvetica', '', 11);

    // Tambahkan halaman baru
    $pdf->AddPage();

    // Tampilkan judul
    $pdf->Cell(0, 10, 'STRUK', 0, 1, 'C');

    // Tampilkan tabel
    $pdf->SetFont('helvetica', 'B', 10);
    $pdf->Cell(30, 10, 'No. Nota', 1, 0, 'C');
    $pdf->Cell(40, 10, 'Nama Pelanggan', 1, 0, 'C');
    $pdf->Cell(30, 10, 'No. Meja', 1, 0, 'C');
    $pdf->Cell(40, 10, 'Nama Menu', 1, 0, 'C');
    $pdf->Cell(20, 10, 'Qty', 1, 0, 'C');
    $pdf->Cell(30, 10, 'Harga Total', 1, 1, 'C');

    // Tampilkan data transaksi
    foreach ($detailTransaksi as $index => $detail) {
        if ($index === 0) {
            $pdf->Cell(30, count($detailTransaksi) * 10, $transaksi['no_nota'], 1, 0, 'C', false);
            $pdf->Cell(40, count($detailTransaksi) * 10, $transaksi['nama_pelanggan'], 1, 0, 'C', false);
            $pdf->Cell(30, count($detailTransaksi) * 10, $transaksi['no_meja'], 1, 0, 'C', false);
        }
        $pdf->Cell(40, 10, $detail['nama_menu'], 1, 0, 'C', false);
        $pdf->Cell(20, 10, $detail['qty'], 1, 0, 'C', false);
        $pdf->Cell(30, 10, $detail['harga_perjenis'], 1, 1, 'C', false);
    }
    // Tambahkan total pembayaran
    $totalPembayaran = 0;
    foreach ($detailTransaksi as $detail) {
        $subtotal = $detail['harga_perjenis'];
        $totalPembayaran += $subtotal;
    }
    $pdf->Cell(140, 10, 'Total Pembayaran', 1, 0, 'R', false);
    $pdf->Cell(30, 10, 'Rp. ' . $totalPembayaran, 1, 1, 'C', false);

    // Outputkan PDF
    $pdf->Output('order_list.pdf', 'I');
}

    public function resetCart()
    {
        // Hapus data keranjang dari session
        session()->remove('cart');

        // Redirect kembali ke halaman utama
        return redirect()->to('/');
    }
}


