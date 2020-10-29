<?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

    $Nama  = "Rivaldi Nazar Yuniar";
    $Nim   = "17190659";
    $Kelas = "17.3E.07";

	$input = $_GET['input'];

    if ($input >= "0" && $input <= "9")
    {
        $output = "Satuan";
    }
    else if($input >= "10" && $input <= "99")
    {
        $output = "Puluhan";
    }
    else if($input >= "100" && $input <= "999")
    {
        $output = "Ratusan";
    }
    else if($input >= "1000" && $input <= "9999")
    {
        $output = "Ribuan";
    }
    else if($input >= "10000" && $input <= "99999")
    {
        $output = "Puluhribuan";
    }     
	?>

<!DOCTYPE html>
<html>
<head>
	<style>	
	    table {
	    	padding-left: 40px; 
	    }	
		body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: #34495e;
        }
        td {
        	color: white;
        	font-family: 
        }
        h2 {
        	text-transform: uppercase;
        	color: white;
        	font-weight: 500;
        	padding-left: 40px; 
        }
        </style>
	<title>Percabangan</title>
</head>
<body>
	<h2>PEMOGRAMAN WEB PERT KE-6</h2>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
	<table>
		<tr>
			<td>Nama</td>
		    <td>:</td>
		    <td><?php echo $Nama?></td>
	    </tr>
	    <tr>
			<td>Nim</td>
		    <td>:</td>
		    <td><?php echo $Nim?></td>
	    </tr>
	    <tr>
			<td>Kelas</td>
		    <td>:</td>
		    <td><?php echo $Kelas?></td>
	    </tr>
	    <tr>
	        <td>Input</td>
	        <td>:</td>
	        <td><input type="textbox" name="input" placeholder="Masukkan Angka 0 - 99999" required></td>
	        <td><input type="submit" name="kirim" value="Confirm"></td>
	    </tr>
	    <tr>
            <td>Ouput</td>
            <td>:</td>
            <td><?php echo $output ?></td>
	    </tr>
	</table>
    </form>
</body>
</html>
