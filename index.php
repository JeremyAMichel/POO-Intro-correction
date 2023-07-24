<?php

require_once('utils/loadClass.php');

// TEST formule 1 

echo 'TEST FORMULE 1 <br> ///////////////////////// <br><br>';
$testF1 = new Formule1();
$testF1->drive();
$testF1->shiftGear(20);
$testF1->drive();
$testF1->shiftGear(400);
$testF1->drive();

echo '<br><br>';

// TEST animals


