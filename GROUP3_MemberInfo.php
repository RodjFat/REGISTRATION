<!DOCTYPE html>
<html>
<head>
	<title>Member Information</title>
	<style>
	
@import url('https://fonts.googleapis.com/css2?family=Monoton&family=Poppins:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Monoton&family=Montserrat:wght@500&display=swap');


body{
	background-image: url('BG-2.png');
	background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
	}

.header_title{
	position: absolute;
	z-index: 1;
	font-family: 'Monoton', cursive;
	font-size: 25px;
	text-align: left;
	line-height: 1;
	top: 100px;
	left: 135px;
	background: -webkit-linear-gradient(#708cd5, #052865);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
	}
	
.information{
	position: absolute;
	z-index: 1;
	font-family: 'Poppins', sans-serif;
	font-size: 25px;
	text-align: left;
	top: 185px;
	left: 135px;
	color: #ffda00;
	}	
	
.infoimage {
	z-index: -1;
	right: 200px;
	top: 170px;
	width: 750px;
	height: 750px;
	position: absolute;
	}

#screen {
text-align: left;
display: inline-block;
width:100%;
max-width: 8in;
}

table {
	top: 370px;
	left: 130px;
	z-index: 1;
	position: absolute;
	font-size: 25px;
	font-family: Arial;
}

tr > td:first-child {
	font-size: 20px;
	text-align: right;
}

tr > td:nth-child(2) {
	border-bottom: 1px solid #fff6;
	border-left: 1px solid #fff6;
}
.tablel {
	text-align: center;

}
td {
	text-align: left;
	padding: 1pt 5pt 1pt 5pt;
}

.watermark {
	z-index: -1;
	right: 0px;
	top: 25px;
	width: 12%;
	position: absolute;
	}

button {
  width: 250px;
  margin-left: 75px;
  margin-top: 8px;
  margin-bottom: 8px;
  padding: 8px;
  background: #052865;
  outline: none;
  border: none;
  border-radius: 20px;
  color: white;
  font-size: 16px;
  cursor: pointer;
  transition: 0.5s;
}
.buttonpos {
	top: 800px;
	left: 350px;
	position: absolute;
}

a:link {
  text-decoration: none;
}
a { 
  color: white;
}


	</style>
</head>
<body>

<div class="header_title">
<h1> RICHARD GWAPO <br> COOPERATIVE  INCORPORATED </h1>
</div>

<div class="information">
<h1> MEMBER INFORMATION </h1>
</div>

<img src="Infor.png" alt="Infor" class="infoimage">
<img src="WATERMARK.png" alt="watermark" class="watermark">
<div id="screen">
	<div class="tablel">
		<table>
			<tbody>
				<tr><td>Name</td>
						<td><?php echo $_POST["lname"] . ", " . $_POST["fname"] . ", " . strtoupper($_POST["mname"]) . ".";?></td></tr>
				<tr><td>Address</td>
						<td><?php echo $_POST["addr"];?></td></tr>
				<tr><td>Phone #</td>
						<td><?php echo $_POST["tel"];?></td></tr>
				<tr><td>Date of Birth</td>
						<td><?php echo $_POST["bday"];?></td></tr>
				<tr><td>Gender</td>
						<td><?php if($_POST["sex"] == "a") { echo "Male"; } else { echo "Female"; } ?></td></tr>
				<tr><td>Office Address</td>
						<td><?php echo $_POST["oaddr"];?></td></tr>
				<tr><td>Landline #</td>
						<td><?php echo $_POST["lnum"];?></td></tr>
				<tr><td>Position</td>
						<td><?php echo $_POST["pos"];?></td></tr>
				<tr><td>Employment Status</td>
						<td><?php if($_POST["emp"] == "a") { echo "Permanent"; } else { echo "Casual"; } ?></td></tr>
				<tr><td>Monthly Salary</td>
						<td><?php if($_POST["msal"] == "a") { echo "Below Php10,000.00";} elseif($_POST["msal"] == "b") { echo "Php10,000.00 – Php20,000.00";} else { echo "Above Php20,000.00";} ?></td></tr>
				<tr><td>Co-Borrower</td>
						<td><?php echo $_POST["cb"];?></td></tr>
			</tbody>
		</table>
		
		<button type="submit" class="buttonpos"> <a href="Group3_Index.php" > Back to Form</button></a>
	</div>

</div>
</body>
</html>