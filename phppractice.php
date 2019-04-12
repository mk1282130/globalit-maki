<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice PHP</title>
</head>
<body>

    <h1>My first PHP page</h1>

    <?php
    echo "Hellow World!";
    

    $name = "Maki";
    echo "My name is $name !";

    $color = "blue";
    echo "My favorite color is <FONT COLOR='BLUE'> $color </FONT>";
    
    $num1 = 10;
    $num2 = 15;
    echo $num1 + $num2;

    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";

    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!";

    $name2 = Maki;
    $birthday = 1993;
    $age = 25;
    $currentAge = 2030 - $birthday;

    echo "<h3>Personal Details</h3>";
    echo "Name: $name2<br>";
    echo "Age: $age<br>";

    echo "In 2030, My age will be $currentAge";

    $string1 = "This is a text!";
    $string2 = 'This is a text!';

    echo "<br>";
    echo "<br>";

    echo $string1;
    echo "<br>";
    echo $string2;
    
    echo "<br>";

    $int = 12000;
    var_dump($int);

    echo "<br>";
    var_dump($string1);

    echo "<br>";
    $fl = "10.234.2";
    var_dump($fl);

    echo "<br>";
    $kuruma = array("Toyota","Honda","Nissan");
    var_dump($kuruma);

    echo "<br>";

    $hi = "Hello Hello!";
    $hi = "";
    var_dump($hi);

    echo "<br>";
    echo strlen("Hello world!");

    echo "<br>";
    echo str_word_count("Hello Cebu Pholippines!");

    echo "<br>";
    echo strrev("I want to reverse");

    echo "<br>";
    $moneyInBank = 5000;
    $webDesign = 15000;
    $onlineWork = 25000;
    $currentMoney = $moneyInBank + $webDesign + $onlineWork;
    echo $currentMoney;

    echo "<br>";
    $spend = 20800;
    $now = $currentMoney - $spend;
    echo $now;

    echo "<br>";
    $regular = 30000;
    echo $regular * 12;

    $toMother = 15000;
    echo "<br>";
    echo $regular - $toMother;

    echo "<br>";
    $x = 5;
    $y = 5.0;
    var_dump($x == $y);
    
    echo "<br>";
    $x = "5";
    $y = 5;
    var_dump($x === $y);
       
    echo "<br>";
    $x = "Hi";
    $y = "HI";
    var_dump($x === $y);

    echo "<br>";
    $x = 5;
    $y = 5;
    var_dump($x !== $y);

    echo "<br>";
    $x = 8;
    $y = 8;
    var_dump($x < $y);

    echo "<br>";
    var_dump($x <= $y);

    echo "<br>";
    $txt1 = "Hello ";
    $txt2 = "Aubrey";
    echo $txt1 . $txt2;
    echo "<br>";
    echo $txt1 .= $txt2;

    echo "<br>";echo "<br>";

    $my_name = "Makii";
    if ( $my_name == "Maki") {
        echo "Your name is Maki!<br>";
    }
    
    echo "Welcome to PHP Basics!";
    
    echo "<br>";echo "<br>";

    $input1 = 5;
    $input2 = 5;

    if ( $input1 == $input2 ) {
        echo "IT IS THE SAME";
    }

    echo "<br>";echo "<br>";

    $number = 83;

    if ($number == 3) {
        echo "The number is 3";
    } else {
        echo "The number is $number it is not 3";
    }

    echo "<br>";echo "<br>";

    if ($number > 30) {
        echo "YOU ARE OLD!";
    } else {
        echo "YOU ARE NOT YET OLD!";
    }

    echo "<br>";echo "<br>";

    if ( $number == 3 ) {
        echo "The number is 3";
    } elseif ( $number == 123 ) {
        echo "The number is 123";
    } else {
        echo "The number is $number it is not 3 or 123";
    }

    echo "<br>";echo "<br>";
    
    $number = "hello";
    if (is_string($number)) {
        echo "This is not valid scure";
    } elseif ( $number >= 80 && $number <= 100 ) {
        echo "Your score is $number. It is Excellent";
    } elseif ( $number >= 70 && $number <= 79 ) {
        echo "Your score is $number. It is very good";
    } elseif ( $number >= 60 && $number <= 69 ) {
        echo "Your score is $number. It is good";
    } elseif ( $number >= 0 && $number <= 59 ) {
        echo "Your score is $number. It is failure";
    } elseif (is_string($number) ) {
        echo "This is not valid scure";
    }

    echo "<br>";

    $favcolor = "pink";
    switch ($favcolor) {
        case "red":
          echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
    
    echo "<br>";

    $food = "nori";
    switch ($food) {
        case "shushi":
          echo "Healty and GOOD!";
            break;
        case "french fries":
            echo "Oily but Yummy!";
            break;
        case "salad":
            echo "No commet :D!";
            break;
        case "nori":
            echo "Is it food?";
            break;
        default:
            echo "Your food is $food!";
    }





    ?>


</body>
</html>