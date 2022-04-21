<!DOCTYPE html>
<html>
<title> RGC Incorporated </title>
<head>
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
	
.register{
	position: absolute;
	z-index: 1;
	font-family: 'Poppins', sans-serif;
	font-size: 13px;
	text-align: left;
	top: 210px;
	left: 135px;
	color: #ffda00;
	}

.registerimage {
	z-index: -1;
	left: 50px;
	top: 208px;
	width: 1100px;
	height: 750px;
	position: absolute;
	}

.container {
	width: 500px;
	height: 600px;
	margin: 150px auto;
	display: flex;
	background-color: white;
	border-radius: 10px;
	box-shadow: 5px 5px 7px #102048, -5px -5px 7px #102048;
	position: absolute;
	left: 1100px;
	top: 135px;
	}

.register {
  width: 1000px;
	}

form {
	width: 420px;
	height: 520px;
	margin-left: 47px;
	margin-top: 20px;
	margin-bottom: 8px;
	overflow: hidden visible;
	}

form h1 {
	text-align: center;
	font-weight: bolder;
	line-height: 1;
	font-family: 'Poppins', sans-serif;
	}

form h3 {
	text-align: center;
	line-height: 0;
	font-family: 'Poppins', sans-serif;
}

form h5 {
	text-align: center;
	line-height: 0;
	font-family: 'Poppins', sans-serif;

}

p {
  font-family: Arial;
  line-height: 0;
	}
	
form label {
  display: block;
  font-size: 16px;
  font-weight: 600;
  padding: 8px;
	}
	
input {
  width: 94%;
  padding: 8px;
  margin-left: 0px;
  margin-top: 0px;
  margin-bottom: 8px;
  outline: none;
  border: none;
  border: 1px solid gray;
  border-radius: 5px;3
}


::-webkit-input-placeholder{
  text-align: center;
}

select {
	width: 98.5%;
	padding: 8px;
	margin-left: 0px;
	margin-top: 0px;
	margin-bottom: 8px;
	outline: none;
	border: none;
	border: 1px solid gray;
	border-radius: 5px;3
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

hr {
  border-top: 5px solid;
  color: #052865;
  width: 100%;
}

.watermark {
	z-index: -1;
	right: 0px;
	top: 25px;
	width: 12%;
	position: absolute;
	}

</style>
</head>

<body>

<div class="header_title">
<h1> RICHARD GWAPO <br> COOPERATIVE  INCORPORATED </h1>
</div>

<div class="register">
<h1> Join us in our company! Just register down below. </h1>
</div>

<img src="Register.png" alt="Register Picture" class="registerimage">
<img src="WATERMARK.png" alt="watermark" class="watermark">

<div class="container">
<div class="login">
        <form action="GROUP3_MemberInfo.php" method="post">
          <h1>RGC Inc.</h1>
		  <h3>Forever Gwapo St., Mandaluyong City</h3>
		  <h5>Telephone #: 143-4456</h5>
          <hr />
		  
			<p>Complete Name:</p> 
			<input required="" placeholder="Last Name" name="lname">
			<input required="" placeholder="First Name" name="fname">
			<input required="" placeholder="Middle Initial" name="mname">
			
			<p>Address:</p> 
			<input required="" placeholder="House #, Street, Brgy., City" name="addr">
			<p>Contact Number:</p> 
			<input required="" placeholder="09XX-XXX-XXXX" name="tel">
			<p>Date of Birth:</p> 
			<input required="" placeholder="YYYY-MM-DD" name="bday">
			

			<p>Gender:</p>
				<select name="sex">		
					<option value="a">Male</option>
					<option value="b">Female</option>
				</select>
			
			<p>Office Address:</p>
			<input required="" placeholder="Street, Brgy., City" name="oaddr">
			<p>Landline Number:</p>
			<input required="" placeholder="XXX-XXXX" name="lnum">
			
			<p>Position:</p>
			<input required="" placeholder="Engineer, Staff, etc." name="pos">
			<p>Employment Status:</p>
				<select name="emp">
					<option value="a">Permanent</option>
					<option value="b">Casual</option>
				</select>
			
			<p>Monthly Salary:</p>
				<select name="msal">
					<option value="a">Below Php10,000.00</option>
					<option value="b">Php10,000.00 – Php20,000.00</option>
					<option value="c">Above Php20,000.00</option>
				</select>
				
			<p>Co-Borrower:</p>
			<input required="" placeholder="First name, Last name" name="cb">
			
			<button type="submit" value="Submit Registration"> Submit</button></a>
			<button type="reset" value="Clear Form"> Reset</button></a>
		</form>
         
</div>
</div>

</body>
</html>