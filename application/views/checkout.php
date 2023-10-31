<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<title>Movies Streaming</title>

<style>
    body {
        font-family: 'Yanone Kaffeesatz', sans-serif;
    }

    .btn-pesan {
        background-color: #09675E;
    }

    #jenis_kopi {
        background-color: #E8DEAB;
        padding-bottom: 150px;
    }

    .text-army {
        color: #002B27;
    }

    .text-green {
        color: #09675E;
    }
</style>

<div class="container mt-5 pt-5">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-8 border rounded p-3 mt-3 pt-4">
            <h1 class="fw-bold text-army">Checkout</h1>
            <hr>
            <form action="<?= site_url('kasir/processOrder'); ?>" method="POST">
                <div class="mb-3">
                    <label for="no_nota" class="form-label">ID Transaksi</label>
                    <input type="text" name="idtrans" id="idtrans" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="no_meja" class="form-label"></label>
                    <input type="text" name="" id="" class="form-control" required>
                </div>

                <div class="mt-5">
                    <?php if ($cart) : ?>
                        <?php foreach ($cart as $kode_menu => $item) : ?>
                            <div>
                                <h3 class="text-army"><?= $item['menu']['nama_menu']; ?></h3>
                                <h5><?= $item['menu']['nama_jenis']; ?></h5>
                                <div class="row">
                                    <h5 class="col-6">Qty: <?= $item['quantity']; ?></h5>
                                    <h5 class="col-6 text-end"><?= $item['menu']['harga'] * $item['quantity']; ?></h5>
                                </div>
                                <hr>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p></p>
                    <?php endif; ?>

                    <?php if ($cart) : ?>
                        <h3 class="text-end">Total: <?= $total; ?></h3>
                        <button type="submit" class="btn btn-success px-3">Buy</button>
                        <a href="<?= site_url('kasir/index'); ?>" class="btn btn-danger px-3 mt-3">Cancel</a>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
