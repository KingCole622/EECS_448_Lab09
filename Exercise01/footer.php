<?php
//error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "<div id='base-box'>"." "."</div>";
for ($i = 1; $i<=100; $i++)
{
  echo "<div id='base-box'>".$i."</div>";
}

for ($i = 1; $i<=100; $i++)
{
  echo "<div id='base-box'>".$i."</div>";
   for ($j=1; $j<=100; $j++)
   {
     echo "<div id='grid-box'>".$i*$j."</div>";
   }
   echo "\n";
}


?>
