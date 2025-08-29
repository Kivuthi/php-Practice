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

echo $name . $age . $height . $isStudent . $favoriteColor;

$quote = "No man is free who is not a master of himself";
echo strlen($quote);
echo strtoupper($quote);


?>

</body>
</html>

