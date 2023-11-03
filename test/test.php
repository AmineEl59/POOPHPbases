<?php
require_once('../mesClasses/Arme.php');
require_once('../modeles/ArmeBDD.php');

$arme1 =new Arme("50","Épée", "../img/epee/epee1.png","Une épée");

$idArme= $arme1->getId();
$nomArme = $arme1->getNom();
$imageArme = $arme1->getImage();
$descriptonArme=$arme1->getDescription();

$infoArme = $arme1->toString();

$armes = new ArrayObject();

$arme2 = new Arme("1","Épée", "../img/epee/epee1.png", "Une épée.");
$armes[] = $arme2;

$arme3 = new Arme("2","Hache", "../img/hache/hache1.png", "Une hache.");
$armes[] = $arme3;

$arme4 = new Arme("3","Fleau", "../img/fleau/fleau1.png", "Un Fleau.");
$armes[] = $arme4;



// 7.2
$arme = new Arme("4","Fléau", "../img/fleau/fleau2.png", " Un Fléau");

$resultat = ajouteArme($arme);

if ($resultat) {
    echo "L'arme a été ajoutée";
} else {
    echo "Erreur";
}


// 8.2

$armesV1 = getAllArmesV1();
echo "Version 1 - Tableau associatif (var_dump) :<br>";
var_dump($armesV1);

echo "Version 1 - Tableau associatif (foreach + echo) :<br>";
foreach ($armesV1 as $arme) {
    echo "ID: " . $arme['id'] . ", Nom: " . $arme['nom'] . ", Image: " . $arme['nom_image'] . ", Description: " . $arme['description'] . "<br>";
}

$armesV2 = getAllArmesV2();
echo "Version 2 - Tableau d'objets (var_dump) :<br>";
var_dump($armesV2);

echo "Version 2 - Tableau d'objets (foreach + echo) :<br>";
foreach ($armesV2 as $arme) {
    echo "ID: " . $arme->getId() . ", Nom: " . $arme->getNom() . ", Image: " . $arme->getImage() . ", Description: " . $arme->getDescription() . "<br>";
}


//9.2

try {
    //Tableau associatif
    $armeV1 = getArmeByIdV1($idArme);
    echo "Version 1 - Tableau associatif (var_dump) :<br>";
    var_dump($armeV1);

    echo "Version 1 - Tableau associatif (echo) :<br>";
    echo "ID: " . $armeV1['id'] . ", Nom: " . $armeV1['nom'] . ", Image: " . $armeV1['nom_image'] . ", Description: " . $armeV1['description'] . "<br>";

    //o bjet
    $armeV2 = getArmeByIdV2($idArme);
    echo "Version 2 - Objet (var_dump) :<br>";
    var_dump($armeV2);

    echo "Version 2 - Objet (echo) :<br>";
    echo "ID: " . $armeV2->getId() . ", Nom: " . $armeV2->getNom() . ", Image: " . $armeV2->getImage() . ", Description: " . $armeV2->getDescription() . "<br>";
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
?>