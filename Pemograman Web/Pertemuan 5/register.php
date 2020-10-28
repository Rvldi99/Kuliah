<!-- Nama   : Rivaldi Nazar Yuniar -->
<!-- NIM    : 17190659 -->
<!-- Kelas  : 17.3E.07 -->
<!-- Matkul : Web Programming I Pert Ke-5 -->

<!DOCTYPE html>
<html>
<head>
	<style>
		body {
            height: 100%;
            margin: 0;
        }
        .center {
        	margin-left: auto;
            margin-right: auto;
        }
		.bg{
			background-image: url("bg.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
		}
		table.pp, th.pp, td.pp {
            border: 1px solid black;
            border-collapse: collapse;
        }
		table.pp {
            margin-left:auto; 
            margin-right:auto;
        }
	<title>Welcome To Salty Spiton</title>
    </style>
</head>
<body>
	    <div class="bg">Background
        <h1 style="text-align:center;">Welcome To Salty Spitoon</h1>
        <h2 style="text-align:center;">Register You Account To Free Join our club</h2>
        <table class="pp">
        	<tr>
                <th class="pp" bgcolor="white">Owner Salty Spitoon</th>
            </tr>
        	<tr>
                <th class="pp" bgcolor="white"><img src="Reg.png" alt="Reg" width="100"></th>
            </tr>
        	<tr>
                <th class="pp" bgcolor="white">Reg</th>
            </tr>
        </table>
        <p style="text-align:center;">Register Your Name, Gender, Date of birth, E-Mail!</p>
        <p style="text-align:center;">Warning! only the baddest of the bad can get in.</p>
		<form action="output.php" method="post">
		<table class="center">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="textbox" name="name" style="background-color:#white; color:#black ;border:1px solid #54a9be;"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
				</td>
			</tr>
			<tr>
				<td>Date of birth</td>
				<td>:</td>
				<td><input type="textbox" name="birth" style="background-color:#white; color:#black ;border:1px solid #54a9be;"></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td>:</td>
				<td><input type="textbox" name="email" style="background-color:#white; color:#black ;border:1px solid #54a9be;"></td>
			</tr>
			<tr>
				<td>How tough are you</td>
				<td>:</td>
				<td><textarea rows="5" cols="25" name="comment" style="background-color:#white; color:#black ;border:1px solid #54a9be;"></textarea></td>
			</tr>
			<tr>	
				<td colspan="3">
					<input type="submit" name="Confirm" value="Confirm">
					<input type="reset" name="Cancel" value="Cancel">
				</td>
			</tr>
		</table>
	</form>
	</div>
	<p style="text-align: center">This website is alpha version made on date 10/22/2020 by Rivaldi Nazar Yuniar (17190659) </p>>
</body>
</html>
