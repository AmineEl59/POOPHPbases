<?php
require_once('../mesClasses/Arme.php');
/*TEST*/
$arme1 =new Arme("50","Épée", "../img/epee/epee1.png","Une épée");

$nomArme = $arme1->getNom();
$imageArme = $arme1->getImage();
$descriptonArme=$arme1->getDescription();

$infoArme = $arme1->toString();

$armes = new ArrayObject();

$arme2 = new Arme("Épée", "epee.png", "Une épée.");
$armes[] = $arme2;

$arme3 = new Arme("Hache", "hache.png", "Une hache.");
$armes[] = $arme3;

$arme4 = new Arme("Fusil", "arc.png", "Un Fusil.");
$armes[] = $arme4;
?>