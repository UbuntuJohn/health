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

ul {

}

ul li {
	list-style: none;
	line-height: 30px;
}

a:link {
	color: #F0E3C0;
}

a:visited {
	color: #F0E3C0;
}



</style>
</head>
<body>
<div class="wrapper">
<div class="ui">
<h2>Health Calculators</h2>
<ul>
<?php
$path = "scripts/";
$d = opendir($path);
// check for opendir error here.

$count = 0; // initialize counter.

while (($file = readdir($d)) !== false) { 

    if (($file != ".") && ($file != "..") && ($file[0] != '.')){


    	if(strlen($file) <= 7) {
        //....process files here.
       echo "<li><a href='scripts/".$file."'>".strtoupper(substr($file, 0, -4))." Calculator</a></li>";
        $count++; // done with one file..increment counter.
        if($count == 400) // have we reached the limit ?
            break; // if yes break.


        } else {

        	 echo "<li><a href='scripts/".$file."'>".substr($file, 0, -4)." Calculator</a></li>";
        $count++; // done with one file..increment counter.
        if($count == 400) // have we reached the limit ?
            break; // if yes break.

        

        }


    }
}
?>
</ul>
</div>
</div>
</body>
</html>