<!-- Nama   : Rivaldi Nazar Yuniar -->
<!-- NIM    : 17190659 -->
<!-- Kelas  : 17.3E.07 -->
<!-- Matkul : Web Programming I Pert Ke-4 -->

<!DOCTYPE html>
<html>
<head>
	<title>Web Programming I Pert Ke-3</title>
</head>
<body>
<?php 
   $Panjang =5;
   $Lebar   =10;
   $Luas    =$Panjang*$Lebar;
?>
Nama Saya Rivaldi Nazar Yuniar (17190659)<br>
Belajar Menghitung Luas Persegi<br>

<table>
   <tr>
      <td>Panjang</td>
      <td>=</td>
      <td><?php echo "$Panjang "; ?></td>
      <td>cm</td>
   </tr>
      <tr>
      <td>Lebar</td>
      <td>=</td>
      <td><?php echo "$Lebar"; ?></td>
      <td>cm</td>
   </tr>
      <tr>
      <td>Luas</td>
      <td>=</td>
      <td><?php echo "$Luas"; ?></td>
      <td>cm</td>
   </tr>
</table>
</body>
</html>
