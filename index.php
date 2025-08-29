<!-- day 1 exercise -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php session</title>
</head>
<body>
    <h1>This is me trying php</h1>

<?php
echo "<p> my name is Dennis Musyoka </p>";

echo " <p>Today's date is " . date("Y/m/d") . "</p>";

// another date format

echo " <p> another format is " . date("d-m-Y") . "</p>";

echo date("l, F j, Y");

// day 2 session

$name="Dennis Musyoka";
$age=20;
$height="5'6";
$isStudent="YES";
$favoriteColor="black";

// <br>

echo "<p> Name: $name<?/p>";
echo "<p> Age: $age</p>";
echo "<p> Height: $height</p>";
echo "<p> Student: $isStudent</p>";
echo "<p> Favorite color: $favoriteColor</p>";


$quote = "No man is free who is not a master of himself";
echo "<p> Length: " . strlen($quote) . "</p>";
echo "<p> Uppercase: " . strtoupper($quote) . "</p>";

$a = 10;
$b = 6;
echo $a + $b;
echo $a * $b;
echo $b / $a;
echo $a - $b;

// day 3 session
// Write a program that takes two numbers and prints their sum, difference, product, division, and modulus.
$x = 6;
$y = 3;

echo "<p>Sum: " . ($x + $y) . "</p>";
echo "<p>Difference: " . ($x - $y) . "</p>";
echo "<p>Product: " . ($x * $y) . "</p>";
echo "<p>Division: " . ($x / $y) . "</p>";
echo "<p>Modulus: " . ($x % $y) . "</p>";

// Create a variable $age. If it’s greater than 18 and less than 30, print "You are young". Otherwise, print "Not in the range".
$age = 20;

if ($age > 18 && $age <30){
    echo "<p> You are young</p>";
} else{
    echo "<p> Not in the range</p>";
}

//  Create two strings and join them with " - " in between.
$fName= "Dennis";
$lName= "Musyoka";
echo "<p>" . $fName . "-" . $lName . "</p>";

// Bonus: Try $a == $b vs $a === $b with different values (integer vs string).
$c = 5;
$d = "5";

echo "<p>" . var_export($c == $d, true) . "</p>";
echo "<p>" . var_export($c === $d, true) . "</p>";


?>

</body>
</html>

