<!-- Nama   : Rivaldi Nazar Yuniar -->
<!-- NIM    : 17190659 -->
<!-- Kelas  : 17.3E.07 -->
<!-- Matkul : Web Programming I Pert Ke-5 -->

<?php
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$birth = $_POST['birth'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];

?>

		<table align="center">
			<tr>
				<td colspan="3" align="center">Success Register!</td>
			</tr>
			<tr>
				<td colspan="3" align="center">Data profile</td>
			</tr>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><?php echo $name; ?></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td><?php echo $gender; ?></td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td>:</td>
				<td><?php echo $birth; ?></td>
			</tr>
			<tr>
				<td>E-Mail</td>
				<td>:</td>
				<td><?php echo $email ?></td>
			</tr>
			<tr>
				<td>How tough are you ? </td>
				<td>:</td>
				<td><?php echo $comment; ?></td>
			</tr>
		</table>
