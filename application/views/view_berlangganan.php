<!DOCTYPE html>
<html>
<head>
	<title>Halaman Berlangganan Aplikasi Streaming Film</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
		}
		form {
			max-width: 500px;
			margin: 50px auto;
			background-color: #fff;
			padding: 20px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			border-radius: 5px;
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type=text],
		input[type=email],
		select,
		input[type=number] {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 20px;
			box-sizing: border-box;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		input[type=submit]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<h1>Langganan Aplikasi Streaming Film</h1>
	<form method="post" action="<?php echo base_url('berlangganan/proses_langganan'); ?>">
    <label for="jenis-langganan">Jenis Langganan:</label>
    <select id="jenis-langganan" name="jenis_langganan" onchange="updatePrice()">
        <?php foreach ($paket as $k) { ?>
            <option value="<?php echo $k['id_paket']; ?>" data-harga="<?php echo $k['harga']; ?>">
                <?php echo $k['nama_paket']; ?> | Rp. <?php echo $k['harga']; ?>
            </option>
        <?php } ?>
    </select>

    <label for="durasi-langganan">Durasi Langganan (bulan):</label>
    <?php $durasi = [1, 6, 12]; ?>
    <select id="durasi-langganan" name="durasi_langganan" onchange="updatePrice()">
        <?php foreach ($durasi as $drs) { ?>
            <option value="<?php echo $drs; ?>"><?php echo $drs; ?> Bulan</option>
        <?php } ?>
    </select>

    <label for="jumlah-bayar">Jumlah Bayar:</label>
    <input type="number" id="jumlah-bayar" name="hargaakhir">

    <input type="submit" value="Berlangganan">
</form>


	<script>
		function updatePrice() {
			var selectedPackage = document.getElementById("jenis-langganan");
			var selectedDuration = document.getElementById("durasi-langganan");
			var price = parseFloat(selectedPackage.options[selectedPackage.selectedIndex].getAttribute("data-harga"));
			var duration = selectedDuration.value;
			var total = (price * duration).toFixed(2);

			document.getElementById("jumlah-bayar").value = total;
		}

	</script>
</body>
</html>
