<?php

require_once('utils/loadClass.php');

// TEST formule 1 

echo 'TEST FORMULE 1 <br> ////////////////////////////// <br><br>';

$testF1 = new Formule1();
$testF1->drive();
$testF1->shiftGear(20);
$testF1->drive();
$testF1->shiftGear(400);
$testF1->drive();

echo '<br><br>';

// TEST animals

echo 'TEST ANIMALS INHERITANCE <br> /////////////////////////////////////////////// <br><br>';

$Fido = new Dog();
$Fido->getInfo();
$Fido->getInfoPlus();
$Fido->crie();

echo '<br><br>';

// TEST Machine à Café

echo 'TEST MACHINE A CAFE <br> /////////////////////////////////////////////// <br><br>';

$machine = new MachineACafe("Senseo");
$machine->allumage(true);
$machine->mettreUneDosette();
$machine->mettreUneDosette();
$machine->mettreUneDosette();
$machine->faireDuCafe();
$machine->faireDuCafe();
$machine->faireDuCafe();
$machine->allumage(false);
$machine->faireDuCafe();