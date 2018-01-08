<?php

// show the form
  echo '<center>
<h1> Temperature Converter </h1>
<br>

<form action="" method ="post">

<input name="num1" type="text"  >

  <select name="var1">
    <option value="kelvin">Kelvin</option>
    <option value="celsius">Celsius</option>
  </select>
 to
 <select name="var2">
   <option value="kelvin">Kelvin</option>
   <option value="celsius">Celsius</option>
 </select>
  <br><br>
  <input type="submit">
</form>

  ';


	//*if there is userinput, show the answer
if(isset($_POST['var1'])){

$type1 = $_POST['var1'];
$type2 = $_POST['var2'];

$number = $_POST['num1']; // set varibles to inputs

if(!(is_numeric($number))){
  echo"<center> Please enter a number </center>";
}
else{
if ( $type1 == 'kelvin'){
  if ($type2 == 'celsius'){
  echo $number, " degrees Kelvin is ", $number -273.15, " degree Celsius";
}
else{
  echo $number, " degrees Kelvin is ", $number, " degree Kelvin";

}
}
elseif( $type1 == "celsius" ) {
  if($type2 == "kelvin"){
  echo $number, " degrees Celsius is ", $number +273.15, " degree Kelvin";
}
else{
  echo $number, " degrees Celsius is ", $number, " degree Celsius";

}
}

else{

}
}

echo '</center>';

}
