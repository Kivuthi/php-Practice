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

$x = "42";
echo "<p>" . var_dump($x) . "</p>";
echo "<p>" . var_export($x) . "</p>";

$age = 18;

if ($age >= 18) {
    echo "<p>" . "You are an adult." . "</p>";
}

// echo "<br>";

$time = 20; // 8PM

if ($time < 18) {
    echo "Good day!";
} else {
    echo "<p>" . "Good evening!" . "</p>";
}

// echo "<br>";

$grade = 75;

if ($grade >= 90) {
    echo "A";
} elseif ($grade >= 80) {
    echo "B";
} elseif ($grade >= 70) {
    echo "<p>" . "C" . "</p>";
} else {
    echo "F";
}

// echo "<br>";

$day = "Tuesday";

switch ($day) {
    case "Monday":
        echo "Start of the week";
        break;
    case "Tuesday":
        echo "Second day!";
        break;
    case "Friday":
        echo "Weekend is near!";
        break;
    default:
        echo "Just another day";
}

// Write a program that checks the current hour (date("H")) and prints:
// "Good morning" if before 12
// "Good afternoon" if between 12–18
// "Good evening" otherwise

$time = date("H");
if ($time <12){
    echo "<p>" . "Good morning" . "</p>";
} elseif ($time >=12 && $time <=18){
    echo "<p>" . "Good afternoon" . "</p>";
} else {
    echo "Good evening";
}

// Create a variable $marks. If marks are:
// 90+ → "Excellent"
// 70–89 → "Good"
// 50–69 → "Pass"
// Below 50 → "Fail"

$marks = 92;
if ($marks >=90){
    echo "<p>" . "Excellent" . "</p>";
} elseif ($marks >=70 && $marks<=89){
    echo "<p>" . "Good" . "</p>";
} elseif ($marks >=50 && $marks<=69){
    echo "<p>" . "Pass" . "</p>";
} else {
    echo "<p>" . "Fail" . "</p>";
}

// Use a switch to check the value of $color.
// If "red" → "Stop"
// If "yellow" → "Caution"
// If "green" → "Go"
// Otherwise → "Unknown color"

$color = "Black";

switch ($color) {
    case "red":
        echo "<p>" . "Stop" . "</p>";
        break;
    case "yellow":
        echo "<p>" . "Caution" . "</p>";
        break;
    case "green":
        echo "<p>" . "Go" . "</p>";
        break;
    default:
        echo "<p>" . "Unknown Color" . "</p>";
}

// Use a ternary operator:
// If $isLoggedIn = true → "Welcome back"
// Otherwise → "Please log in"

$isLoggedIn = true;
echo ($isLoggedIn == true) ? "Welcome back" : "Please log in";
?>

</body>
</html>

