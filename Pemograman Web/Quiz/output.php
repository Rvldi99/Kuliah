<?php
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

	$nama = $_POST['nama']; //Nama Karyawan
	$type = $_POST['type']; //Type Golongan Penjabat
	$pend = $_POST['pendidikan']; //Golongan Pendidikan
	$jam  = $_POST['jam']; //Jam Kerja karyawan

	$pokok = 3800000; //Gaji Pokok Perbulan
	$honor = 25000; //Honor Lembur jika jam kerja > 8 jam, maka dikalikan setiap kelebihan jam kerja karyawan

	switch ($type) { //Type Golongan Penjabat dari input "Radiobox"
		case '1':
			$tj = 5/100 * $pokok;
			break;
		
		case '2':
			$tj = 10/100 * $pokok;
			break;
		
		case '3':
			$tj = 15/100 * $pokok;
			break;
	}

	switch ($pend) { //Type Golongan Pendidikan dari input "Select Option"
		case 'SMA/SMK':
			$tp = 2.5/100 * $pokok;
			break;

		case 'D1':
			$tp = 5/100 * $pokok;
			break;	

		case 'D2':
			$tp = 20/100 * $pokok;
			break;

		case 'S1':
			$tp = 25/100 * $pokok;
			break;

		case 'S2':
			$tp = 35/100 * $pokok;
			break;
	}

    if($jam <= 8) //jam kerja karyawan
    {
    	$jl = "Tidak ada Honor";
    }
	else if($jam == 9)
	{
		$jl = 1 * $honor;
	}
	else if($jam == 10)
	{
		$jl = 2 * $honor;
	}
	else if($jam == 11)
	{
		$jl = 3 * $honor;
	}
	else if($jam == 12)
	{
		$jl = 4  * $honor;
	}
	else if($jam > 12)
	{
		$jl = "ERROR";
	}

	$total_gaji = $pokok + $tj + $tp + $jl; 
	$pajak = 10/100 * $total_gaji;
	$gaji_bersih = $total_gaji - $pajak;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		h1 {
			text-align: center;
			font-family: Helvetica;
		}
		td {
			width: 180px;
			border-radius: 3px;
			font-family: Helvetica;
		}
		table{
            margin-top: 24px;
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
        td input[type="Reset"] {
            display: block;
            margin: 0 auto;
            margin-top: 10px; 
		}
	</style>
	<title>PROGRAM GAJI KARYAWAN</title>
</head>
<body>
	<h4 style="font-family: Helvetica;"># Layar Tampilan</h4>
	<h1>SLIP GAJI KARYAWAN</h1>
	<table border="1" align="center">
		<tr>
			<td colspan="2" align="center">Tampilan data kalian</td>
		</tr>
		<tr>
			<td style="text-indent: 3px;">Nama</td>
			<td style="text-indent: 3px;"><?php echo $nama ?></td>
		</tr>
		<tr>
			<td style="text-indent: 3px;">Golongan Penjabat</td>
			<td style="text-indent: 3px;"><input type="radio" name="" checked="checked"><?php echo $type ?></td>
		</tr>
		<tr>
			<td style="text-indent: 3px;">Pendidikan</td>
			<td style="text-indent: 3px;"><?php echo $pend ?></td>
		</tr>
		<tr>
			<td style="text-indent: 3px;">Jumlah Jam Kerja</td>
			<td style="text-indent: 3px;"><?php echo $jam ?> jam</td>
		</tr>
	</table>
	<table border="1" align="center">
		<tr>
			<td style="text-indent: 3px;">Gaji Pokok</td>
			<td style="text-indent: 3px;">Rp. <?php echo $pokok ?></td>
		</tr>
		<tr>
			<td style="text-indent: 3px;">Tunjangan Jabatan</td>
			<td style="text-indent: 3px;">Rp. <?php echo $tj ?></td>
		</tr>
		<tr>
			<td style="text-indent: 3px;">Tunjangan Pendidikan</td>
			<td style="text-indent: 3px;">Rp. <?php echo $tp ?></td>
		</tr>
		<tr>
			<td style="text-indent: 3px;">Honor Lembur</td>
			<td style="text-indent: 3px;">Rp. <?php echo $jl ?></td>
		</tr>
		<tr>
			<td style="text-indent: 3px;"></td>
			<td style="text-indent: 3px;">—————————— +</td>
		</tr>
		<tr>
			<td style="text-indent: 3px;">Total Gaji</td>
			<td style="text-indent: 3px;">Rp. <?php echo $total_gaji ?></td>
		</tr>
		<tr>
			<td style="text-indent: 3px;">PPh</td>
			<td style="text-indent: 3px;">Rp. <?php echo $pajak ?></td>
		</tr>
		<tr>
			<td style="text-indent: 3px;"></td>
			<td style="text-indent: 3px;">—————————— ‒</td>
		</tr>
		<tr>
			<td style="text-indent: 3px;">Total gaji yang diterima</td>
			<td style="text-indent: 3px;">Rp. <?php echo $gaji_bersih ?></td>
		</tr>
	</table>
	<table align="center">
		<tr>
			<td><a href="input.php"><input type="Reset" name="Cancel" value="Go Back"></a></td>
		</tr>
	</table>
</body>
</html>
