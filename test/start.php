<?php
require __DIR__ . "/../vendor/autoload.php";

$ProcessCalcTime = new ssmr9dt\ProcessCalcTime("All");

for ($i=0; $i<10000; $i++) {
    echo "aaaaa";
}

$ProcessCalcTime->finish();