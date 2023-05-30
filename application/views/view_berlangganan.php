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
	<form method="post" action="">
		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama" required>

		<label for="user">Username:</label>
		<input type="text" id="" name="user" required>

		<label for="jenis-langganan">Jenis Langganan:</label>
		<select id="jenis-langganan" name="jenis_langganan">
			<option value="basic">Basic</option>
			<option value=""></option>
			<option value=""></option>
		</select>

		<label for="durasi-langganan">Durasi Langganan (bulan):</label>
		<input type="number" id="durasi-langganan" name="durasi_langganan" min="1" max="12" required>
		<label for="user">Jumlah Bayar:</label>
		<input type="text" id="" name="jumlah" required>
		<input type="submit" value="Berlangganan">
	</form>
</body>
</html>








