<html>
<head>
    <title>Temperature Conversion</title>
    <link rel="stylesheet" href="p1_tempConvert_v1.css" type="text/css" media="all" />
</head>
<body>
    <h1>Temperature Converter</h1>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

    <input type="text" name="value">
        
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
    
    <input type="submit" name="convertButton" class="button" />
    <input type="reset" name="resetButton" class="button" />    
   
    </form>
        
<?php
// conversion equations
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

// if value is entered, set variable
if(isset($_POST['value'])){
    $value = $_POST['value'];
    // if value entered is a numberic value, set variables
    if(is_numeric($value)){
        $type = $_POST['type'];
        $newtype = $_POST['newtype']; 
        // if measurement types are different, proceed with calculations
        if($type != $newtype){
            $conversion = tempConvert($value, $type, $newtype);
            echo "$value $type = $conversion $newtype";
        }else{
            echo "Please choose different measurement types";
        }   
    }else{
        echo "Please enter a number";
    } 
}
?>

</body>
</html>