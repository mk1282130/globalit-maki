<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>


</style>

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

    $food = "salad";
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

    echo "<br>";
    echo "<br>";

    $input1 = 5.1;
    $input2 = 1;
    $operator = "add";
    $sasult1 = $input1 + $input2;
    $sasult2 = $input1 - $input2;
    $sasult3 = $input1 * $input2;
    $sasult4 = $input1 / $input2;

    switch ($operator) {
        case "add":
            echo "Result is $sasult1";
            break;
        case "minus":
            echo "Result is $sasult2";
            break;
        case "multiply":
            echo "Result is $sasult3";
            break;
        case "divide":
            echo "Result is $sasult4";
            break;
        default:
            echo "Invalid data";
    }

    echo "<br>";

    $x = 7;
    while ($x <= 7) {
        echo "The number is: $x <br>";
        $x++;
    }

    echo "<br>";

    $x = 7;

    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 7);

    echo "<br>";

    for ($x = 6; $x <= 7; $x++) {
        echo "The number is: $x <br>";
    }

    $colors = array("red", "green", "blue", "yellow"); 

    foreach ($colors as $value) {
    echo "$value <br>";
    }

    echo "<br>";

    
    $x = 7;
    while ($x <= 7) {
        echo "The number is: $x <br>";
        $x++;
    }
    
    echo "<br>";

    // $x = 1;
    // switch ($x) {
    //     case ($x <= 9):
    //         while ($x <= 9) {
    //             echo "The number is: $x <br>";
    //             $x++;

    //             echo "$x";
    //             break;
    //         case ($x == 10):
    //             echo "$x";
    //             break;
    // }

    // for ($a = 1; $a <= 10; $a ++) {
    //     if ($a <= 9) {
    //         echo "$a-";
    //     } else {
    //         echo "$a";
    // }

    // $num = 1;

    // while ($num <= 10) {
    //     if ($num != 10) {

    //     echo $num . "-";
    //     $num++;
    
    //     } else {
    //         echo $num;
    //     }

    // }



    $x = 1;
    for ($x = 1; $x <= 4; $x++) {
        echo "This is Data1: $x <br>";
    }

    
    ?>

<table class="table table-striped">
        <thead>
            <tr>
                <th>Number</th>
                <th>Description</th>
            </tr>
            <?php
                for ($x = 1; $x <= 4; $x++) {
                    echo "<tr>";
                    echo "<td>$x</td>";
                    echo "<td>This is Data1: $x </td>";
                    echo "</tr>";
                    }
            ?>
        
        </tbody>
</table>

<br><br><br>

<?php
    for ($x = 1; $x <= 4; $x++) {
        echo "<tr>";
        echo "<td>$x</td>";
        echo "This is Data1: $x <br>";
        echo "</tr>";
    }

    for ($row = 1; $row <= 5; $row++) {
        for ($star = 1; $star <= $row; $star++) {
            echo "*";
        }
    echo "<br>";
    }


// for ($x = "*"; $x <= "***"; $x++) {
//     case "*":
//         echo "*";
//         break;
//     case "**":
//         echo "**";
//         break;   
//     default:
//         echo ""; 
//         break;

// }

// for (int i = 1; i <= 5; i++) {
//     for (int n = 0; n < 5 - i; n++) {
//         System.out.print("  ");
//     }
//     for (int n = 0; n < i; n++) {
//         System.out.print("■");
//     }
//     System.out.println();
// }
// }
// }


function helloMsg() {
    echo "Hello world!";
}

helloMsg();

function famname($firstname) {
    echo "$firstname Fukudome.<br>";
}

famname("Maki");
famname("Mai");
famname("Mako");
famname("Mami");

echo "<br><br>";

function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 6 = " . sum(1,2) . "<br>";
echo "6 + 7 = " . sum(2,3) . "<br>";
echo "7 + 8 = " . sum(4,5) . "<br>";

echo "<br>";


$x = 10;
function myCheck() {
    global $x;
    echo "Variable x inside function is: $x";
} 

myCheck();

echo "<br>";
echo "Variable x outside function is: $x";

echo "<br>";
echo "<br>";

$cars = array("Toyota", "Nissan", "Honda");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . 
$cars[2] . ".";

// ; Displays the length of the array.
echo count($cars);

echo "<br><br>";

$cars = array("Toyota", "Nissan", "Honda");
sort($cars);

$arrlength = count($cars);

for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

echo "<br><br>";

$cars = array("10", "17", "22", "2", "7", "1", "11");
sort($cars);
for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

?>

<br><br>


<div class="row">
<div class="col-sm-4" style="background-color: antiquewhite">.col-sm-4</div>
<div class="col-sm-4" style="background-color: antiquewhite">.col-sm-4
    <table class="table table-striped width="270px" height="270px" cellspacing="0px" cellpadding="0px" border="1px">
            <body>
                <!-- <tr>
                    <th>Number</th>
                    <th>Description</th>
                </tr> -->
                <?php
                    for ($x = 1; $x <= 8; $x++) {
                        echo "<tr>";
                        echo "<td>$x</td>";
                        echo "<td>$x</td>";
                        echo "<td>$x</td>";
                        echo "<td>$x</td>";
                        echo "<td>$x</td>";
                        echo "<td>$x</td>";
                        echo "<td>$x</td>";
                        echo "<td>$x</td>";
                        echo "</tr>";
                        }
                ?>
            
            </body>
    </table>
</div>
<div class="col-sm-4" style="background-color: antiquewhite">.col-sm-4</div>
</div>


<br><br>



<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
<!-- cell 270px wide (8 columns x 60px) -->
    <?php
    for($row=1;$row<=8;$row++)
    {
        echo "<tr>";
        for($col=1;$col<=8;$col++) {
            $total=$row+$col;
        if($total%2==0) {
            echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
        } else {
        echo "<td height=30px width=30px bgcolor=#000000></td>";
        }
        }
        echo "</tr>";
    }
    ?>
</table>
<br><br>


<?php

for ($x = 1; $x <= 500; $x++) {
    if($x <=10 ) {
        echo "<span style='color:red'>".$x." </span>";
    }elseif($x >= 11 && $x <= 50) {
        echo "<span style='color:yellow'>".$x." </span>";
    }elseif($x >= 51 && $x <= 100) {
        echo "<span style='color:green'>".$x." </span>";
    }elseif($x >= 101 && $x <= 500) {
        echo "<span style='color:blue'>".$x." </span>";
    }
}


echo "<br><br><br>";


for ($input = 1; $input <= 5; $input++) {
    if ($input == 1 || $input == 5) {
        echo "※※※※※";
    } else {
        echo "※　　　※";
    }
    echo "<br>";
}

echo "<br><br><br>";
?>



<div class="row">
    <div class="col-sm-4" style="background-color: antiquewhite">4
        <p class="text-right">
            <?php

                for ($i=6; $i>=1; $i--) {  
                    for($j=1; $j<=$i; $j++) {  
                    echo '&nbsp;';  
                    }
                    $j--;
                for ($k=1; $k<=(7-$j); $k++) {  
                    echo "＊";   
                }  
                echo "<br>\n";
                }

            ?>
        </p>
    </div>
    <div class="col-sm-4" style="background-color:aquamarine">4</div>
    <div class="col-sm-4" style="background-color:cadetblue">4</div>
</div>
<br><br><br>

    
    
</body>
</html>
