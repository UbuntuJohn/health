<DOCTYPE html>
<html lang="en">
<head>
<title>Calorie and BMR Calculator by John Keenan</title>
<style type="text/css">

* {
	font-family: helvetica;
	color: #000623;
}

body {
	background-color: #000623;
}
.wrapper {
	margin: 0 auto;
	width: 800px;
	text-align: center;
}

.ui {
	margin-top: 80px;
	background-color: #4A6C74;
	padding: 20px;
	border-radius: 3px;
	border: 3px solid #8BA693;
}

input:not([type='radio']) {
	height: 50px;
	width: 240px;
	font-size: 18px;
	border-radius: 6px;
	border: none;
}

input[type='submit'] {
	background-color: #28475C;
	color: #F0E3C0;
}

strong {
	color: #F0E3C0;
	line-height: 24px;
}

hr {
	border: 0; 
	height: 0; 
	border-top: 1px solid rgba(0, 0, 0, 0.1); 
	border-bottom: 1px solid rgba(255, 255, 255, 0.3);
}

p {
	color: #F0E3C0;
}

</style>
</head>
<body>
<div class="wrapper">
<div class="ui">
<h2>BMI Calculator</h2>
<form action="" method="get">
<div>
<strong>Weight:</strong><br />
<input type="number" name="weight" value="<?php echo $_GET['weight']; ?>" required/>
</div>
<br />
<div>
<strong>Height:</strong><br />
<input type="number" style="width: 120px" name="feet"  value="<?php echo $_GET['feet']; ?>" placeholder="Feet" required/>
<input type="number" style="width: 120px" name="inches" value="<?php echo $_GET['inches']; ?>" placeholder="Inches" required/>
</div>
<br />
<br />
<div>
	<br />
<input type="submit" value="Calculate!" />
</div>
</form>
<hr>
<?php

if(isset($_GET['weight']) && isset($_GET['inches'])) {

	$pounds = $_GET['weight'];
	$feet = $_GET['feet'] * 12;
	$inches = $_GET['inches'];
	$height = $feet + $inches;
	$bmi = ($pounds / ($height * $height)) * 703;

	echo "<p>Your Body Mass Index is ".substr($bmi,0, 4)."</p>";

}

?>
</div>
</div>
</body>
</html>