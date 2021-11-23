<?php
//error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);
echo "<body style='background-color: lightgreen; margin-left: 40%;'>";

$BisPF= $_POST['BPF'];
$DirtDev= $_POST['DD'];
$B31= $_POST['B31'];
$Shark = $_POST['shark'];
$Eureka = $_POST['eureka'];
$Hoover = $_POST['hoover'];
$Shipping = $_POST['shipping'];
$Password = $_POST['pass'];
//$Shipping = 44;

$BisPFtot = ($BisPF*59.99);
$DirtDevtot = ($DirtDev*39.99);
$B31tot = ($B31*23.99);
$Sharktot = ($Shark*99.99);
$Eurekatot = ($Eureka*109.99);
$Hoovertot = ($Hoover*69.99);

$totalMon = $BisPFtot + $DirtDevtot + $B31tot + $Sharktot + $Eurekatot + $Hoovertot + $Shipping;

echo "<h1>Receipt</h1>";
echo "<div id='text-box'>Bissell Powerforce(".$BisPF."x) ------- $".$BisPFtot."</div>";
echo "<div id='text-box'>Dirt Devil(".$DirtDev."x) ------------------ $".$DirtDevtot."</div>";
echo "<div id='text-box'>Bissell 3-in-1(".$B31."x) -------------- $".$B31tot."</div>";

echo "<div id='text-box'>Eureka FloorRover(".$Eureka."x) ------- $".$Eurekatot."</div>";
echo "<div id='text-box'>Shark Pro Swivel(".$Shark."x) --------- $".$Sharktot."</div>";
echo "<div id='text-box'>Hoover WindTunnel(".$Hoover."x) ----- $".$Hoovertot."</div>";
if($Shipping == 0)
{
    echo "<div id='text-box'>Shipping ------------------------ $0.00</div><br>";
}
else
{
    echo "<div id='text-box'>Shipping ------------------------ $".$Shipping.".00</div><br>";
}


echo "<div id='total-box'>Total ------------------------ $".$totalMon."</div><br>";
echo "<h2>Thanks for shopping with us!</h2><br>";
echo "<p>Password: ".$Password."</p>";
echo "</body>";



?>
