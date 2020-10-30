
<!-- Nama   : Rivaldi Nazar Yuniar -->
<!-- NIM    : 17190659 -->
<!-- Kelas  : 17.3E.07 -->
<!-- Matkul : Web Programming I Pert Ke-6 -->

<?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

    $nilai1 = $_GET['nilai1'];
    $nilai2 = $_GET['nilai2'];
    $rumus  = $_GET['rumus'];

    if($rumus == 'Luas Segitiga')
    {
    	if($nilai1 != 0 && $nilai2 != 0)
    	{
    		$output = 1/2 * ($nilai1 * $nilai2);
    	}
    	else
    	{
    		$output = "Tidak ada hasil";
    	}
    }
    else if($rumus == 'Luas Persegi')
    {
    	if($nilai1 != 0 && $nilai2 != 0)
    	{
    	    $output = $nilai1 * $nilai2;
        }
    	else
    	{
    		$output = "Tidak ada hasil";
    	}
    }
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		.IO{
			background-color: white;
			color: black;
		}
		body{
			background-color: #244484;
		}
		table{
			margin: auto;
			border-color: #1d2a44;
			text-align: center;
			background-color: #1d2a44;
			color: white;
			font-family: sans-serif;
			border-radius: 5px;
		    top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
		}
	</style>
	<title>Rumus Segitiga & Persegi</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
	<table border="1">
		<tr>
			<td colspan="2">RUMUS</td>
		</tr>
		<tr>
			<td>Nilai 1</td>
			<td><input type="textbox" name="nilai1" placeholder="Input Nilai 1" ></td>
		</tr>
		<tr>
			<td>Nilai 2</td>
			<td><input type="textbox" name="nilai2" placeholder="Input Nilai 2"></td>
		</tr>
		<tr>
			<td>Rumus</td>
			<td><input type="radio" name="rumus" value="Luas Segitiga">Luas Segitiga <br><input type="radio" name="rumus" value="Luas Persegi">Luas Persegi</td>
		</tr>
		<tr>
	        <td colspan="2"><input type="submit" name="submit" value="submit & reset"></td>
	    </tr>
	    <tr>
	    <tr>
	    	<td>Rumus</td>
	    	<td class="IO"><?php echo $rumus ?></td>
	    </tr>
	    <tr>
	    	<td>Nilai 1</td>
	    	<td class="IO"><?php echo $nilai1 ?></td>
	    </tr>
	    <tr>
	    	<td>Nilai 2</td>
	    	<td class="IO"><?php echo $nilai2 ?></td>
	    </tr>
	    <tr>
	    	<td>Hasil</td>
	    	<td class="IO"><?php echo $output ?></td>
	    </tr>
	</table>
    </form>
</body>
</html>
