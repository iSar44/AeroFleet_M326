<?php

require_once("./fleet.php");
require_once("./aircraft.php");
require_once("./airplane.php");
require_once("./glider.php");
require_once("./engine.php");

$lstAeronefs = array("");
$lstAvions = array("");
$lstPlaneur = array("");

$flotteCfpt = new Fleet("CFPT airplanes", $lstAeronefs, $lstAvions, $lstPlaneur);

$moteur100 = new Engine(100, 23);
$moteur220 = new Engine(220, 82);

$duoDiscus = new Glider("Duo Discus", "HB-123", 1, 100, 45);
$robinDR401 = new Airplane("Robin DR401", "HB-ABC", 3, 200, 237, 1, $moteur100);
$piperPA34 = new Airplane("Piper PA34", "HB-DEF", 5, 500, 378, 2, $moteur220);

$flotteCfpt->AddPlaneur($duoDiscus);
$flotteCfpt->AddAvion($robinDR401);
$flotteCfpt->AddAvion($piperPA34);


echo "<pre>";
print_r($flotteCfpt);
echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>




</body>

</html>