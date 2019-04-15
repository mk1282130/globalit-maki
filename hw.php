<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php

$number1 = 1;
$number2 = 2;

function add() {
    global $number1, $number2;
    $result = $number1 + $number2; 
    
    echo "The sum of $number1 and $number2 is $result<br><br>"; 
    echo "$number1 + $number2 = $result"; 
    exit; 
}

function minus () {
    global $number1, $number2;
    $result = $number1 - $number2; 
    
    echo "The sum of $number1 and $number2 is $result<br><br>"; 
    echo "$number1 - $number2 = $result"; 
    exit; 
}

function multiply () {
    global $number1, $number2;
    $result = $number1 * $number2; 
    
    echo "The sum of $number1 and $number2 is $result<br><br>"; 
    echo "$number1 * $number2 = $result"; 
    exit; 
}

function divided () {
    global $number1, $number2;
    $result =$number1 / $number2; 
    
    echo "The sum of $number1 and $number2 is $result<br><br>"; 
    echo "$number1 / $number2 = $result"; 
    exit; 
}

// Controler
divided ();

echo "<br>";

$x = 7;
for ($x = 6; $x <= 7; $x++) {
    echo "$x <br>";
}



?>

</body>
</html>