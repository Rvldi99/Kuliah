<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		h1 {
			text-align: center;
			font-family: Helvetica;
		}
		td {
			width: 160px;
			border-radius: 3px;
			font-family: Helvetica;
		}
		table {
			border-radius: 3px;
		}
		.size {
			width: 181px;
		}
		.center {
			margin-right: auto;
			margin-left: auto;
			text-align: center;
		}
        td input[type="Submit"], input[type="Reset"] {
            display: block;
            margin: 0 auto;
            margin-top: 10px; 
		}
	</style>
	<title>PROGRAM GAJI KARYAWAN</title>
</head>
<body>
	<form action="Output.php" method="post">
	<h4 style="font-family: Helvetica"># Layar Masukkan</h4>
	<h1>PROGRAM GAJI KARYAWAN</h1>
	<table border="1" align="center">
		<tr>
			<td colspan="2" align="center">Silahkan input data kalian</td>
		</tr>
		<tr>
			<td style="text-indent: 3px;">Nama</td>
			<td><input style="width: 173px" type="textbox" name="nama" placeholder="Input Nama" required></input></td>
		</tr>
		<tr>
			<td style="text-indent: 3px;">Golongan Penjabat</td>
			<td><input type="radio" name="type" value="1">1<input type="radio" name="type" value="2">2<input type="radio" name="type" value="3">3</td>
		</tr>
		<tr>
			<td style="text-indent: 3px;">Pendidikan</td>
			<td><select class="size" name="pendidikan"><option value="-Pilih-">-PILIH-</option><option value="SMA/SMK">SMA/SMK</option><option value="D1">D1</option><option value="D2">D2</option><option value="S1">S1</option><option value="S2">S2</option></td>
		</tr>
		<tr>
			<td style="text-indent: 3px;">Jumlah Jam Kerja</td>
			<td><input style="width: 173px" type="textbox" name="jam" placeholder="Input Jam Kerja" required></td>
		</tr>
	</table>
	<table align="center">
		<tr>
			<td><input type="Submit" name="Submit" value="Submit"></td>
			<td><input type="Reset" name="Reset" value="Reset"></td>
		</tr>
	</table>
	</form>
</body>
</html>
