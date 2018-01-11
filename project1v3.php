<!doctype html>
<html>
 <head>
     <meta charset="utf-8" />
     <meta name="robots" content="noindex,nofollow" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="styles.css">
     <title>Temperature Conversion</title>
</head>
<body>
  <div class="tc">
<?php
// show the form
  echo '<center>
<h1> Temperature Converter </h1>
<br>
<form class="tempConversion" action="" method ="post">

<input name="num1" type="text" size="27" placeholder="Enter Temperature Value" > 
		
<br/>

From: 

	<select name="var1">
		<option value="" disabled selected>Select your option</option>
		<option value="kelvin">Kelvin</option>
		<option value="celsius">Celsius</option>
		<option value="fahrenheit">Fahrenheit</option>
  	</select>
<br/>
To:

	 <select name="var2">
		<option value="" disabled selected>Select your option</option>
		<option value="kelvin">Kelvin</option>
		<option value="celsius">Celsius</option>
		<option value="fahrenheit">Fahrenheit</option>
	 </select>

<br/>
<br/>
<div class="submit">
<input class="button" type="submit" value="Calculate">
<input type="reset" name="resetButton" class="button" /> 
</div>
</form>
  ';

//*if there is userinput, show the answer
if(isset($_POST['var1'])){
$type1 = $_POST['var1'];
$type2 = $_POST['var2'];
$value = $_POST['num1']; // set varibles to inputs
if(!(is_numeric($value))){
  echo"<center> Please enter a number </center>";
}
else{
  if($type1 == "fahrenheit" && $type2 == "celsius"){
     $conversion = ($value - 32) * 5/9;
 }
  else if($type1 == "fahrenheit" && $type2 == "kelvin"){
     $conversion = ($value - 32) * 5/9 + 273.15;
 }
  else if($type1 == "celsius" && $type2 == "fahrenheit"){
     $conversion = ($value * 9/5) + 32;
 }
  else if($type1 == "celsius" && $type2 == "kelvin"){
     $conversion = $value + 273.15;
 }
  else if($type1 == "kelvin" && $type2 == "celsius"){
     $conversion = $value - 273.15;
 }
  else if($type1 == "kelvin" && $type2 == "fahrenheit"){
     $conversion = ($value - 273.15) * 9/5 + 32;
 }
 else if($type1 == "kelvin" && $type2 == "kelvin"){
    $conversion = $value;
}
else if($type1 == "celsius" && $type2 == "celsius"){
  $conversion = $value;
}
else if($type1 == "fahrenheit" && $type2 == "fahrenheit"){
  $conversion = $value;
}
 echo $value, " degrees ", $type1, " is ", round($conversion, 2), " degrees ", $type2;
}
echo '</center>';
}
?>
</div>
</body>
</html>