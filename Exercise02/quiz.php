<?php
//error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);


$color = $_POST["color"];
$month = $_POST["month"];
$holiday = $_POST["holiday"];
$number = $_POST["favNum"];
$season = $_POST["season"];
$x = 0;
$amtCorrect = 0;

echo "<div id='grade-box'>Question 1: What is your favorite color?<br>&emsp;
You answered: ".$color."<br>&emsp;Correct answer: Black</div><br>";

echo "<div id='grade-box'>Question 2: What is your favorite month?<br>&emsp;
You answered: ".$month."<br>&emsp;Correct answer: June</div><br>";

echo "<div id='grade-box'>Question 3: What is your favorite holiday?<br>&emsp;
You answered: ".$holiday."<br>&emsp;Correct answer: Presidents Day</div><br>";

echo "<div id='grade-box'>Question 4: What is your favorite number?<br>&emsp;
You answered: ".$number."<br>&emsp;Correct answer: 22</div><br>";

echo "<div id='grade-box'>Question 5: What is your favorite season?<br>&emsp;
You answered: ".$season."<br>&emsp;Correct answer: Fall</div><br>";

if($color == "Black")
{
  $x = 20;
  $amtCorrect = $amtCorrect+1;
}
if($month == "June")
{
  $x = $x+20;
  $amtCorrect = $amtCorrect+1;
}
if($holiday == "Presidents Day")
{
  $x = $x+20;
  $amtCorrect = $amtCorrect+1;
}
if($number == 22)
{
  $x = $x+20;
  $amtCorrect = $amtCorrect+1;
}
if($season == "Fall")
{
  $x = $x+20;
  $amtCorrect = $amtCorrect+1;
}

echo "You got ".$amtCorrect."/5 correct<br>";
echo "You got a: ".$x."%<br>";


?>
