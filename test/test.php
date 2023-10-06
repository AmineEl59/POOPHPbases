<?php
require_once('../mesClasses/Arme.php');

$arme1 =new Arme("50","Épée", "../img/epee/epee1.png","Une épée");

$idArme= $arme1->getId();
$nomArme = $arme1->getNom();
$imageArme = $arme1->getImage();
$descriptonArme=$arme1->getDescription();

$infoArme = $arme1->toString();

$armes = new ArrayObject();

$arme2 = new Arme("01","Épée", "epee.png", "Une épée.");
$armes[] = $arme2;

$arme3 = new Arme("02","Hache", "hache.png", "Une hache.");
$armes[] = $arme3;

$arme4 = new Arme("03","Fusil", "arc.png", "Un Fusil.");
$armes[] = $arme4;
?>