<html>
<head>
    <title>Temperature Conversion</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <center>

    <input type="text" name="value" size="7">
        
    <select name="type">
        <option disabled>Measurement Type</option>
        <option value="celsius">Celsius</option>
        <option value="fahrenheit">Fahrenheit</option>
        <option value="kelvin">Kelvin</option>
    </select>
        
    <select name="newtype">
        <option disabled>Convert to</option>
        <option value="celsius">Celsius</option>
        <option value="fahrenheit">Fahrenheit</option>
        <option value="kelvin">Kelvin</option>
    </select>    
        
    <input type="submit" name="convertButton" />
    <input type="reset" name="resetButton" />    
    
    </center>    
    </form>
        
<?php
function tempConvert($value, $type, $newtype)
{
   if($type == "fahrenheit" && $newtype == "celsius"){
       $conversion = ($value - 32) * 5/9;
   }
    else if($type == "fahrenheit" && $newtype == "kelvin"){
       $conversion = ($value - 32) * 5/9 + 273.15;
   }
    else if($type == "celsius" && $newtype == "fahrenheit"){
       $conversion = ($value * 9/5) + 32;
   }
    else if($type == "celsius" && $newtype == "kelvin"){
       $conversion = $value + 273.15;
   }
    else if($type == "kelvin" && $newtype == "celsius"){
       $conversion = $value - 273.15;
   }
    else if($type == "kelvin" && $newtype == "fahrenheit"){
       $conversion = ($value - 273.15) * 9/5 + 32;
   }
   return $conversion;
}

$value = $_POST['value'];
$type = $_POST['type'];
$newtype = $_POST['newtype'];    
$conversion = tempConvert($value, $type, $newtype);
echo "<center>$value $type = $conversion $newtype</center>";
?>

</body>
</html>