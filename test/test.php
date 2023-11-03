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

$id=50;

// 7.2
echo "7.2";
// changer id à la main
$arme = new Arme("29","Fléau", "../img/fleau/fleau2.png", " Un Fléau");

$resultat = ajouteArme($arme);

if ($resultat) {
    echo "<br>L'arme a été ajoutée <br>";
} else {
    echo "Erreur";
}


// 8.2
echo "<br>8.2<br>";

$armesV1 = getArmesV1();
echo "<br>Version 1 - Tableau associatif var_dump() :<br><br>";
var_dump($armesV1);
echo "<br><br>Version 1 - Tableau associatif (foreach + echo) :<br><br>";
foreach ($armesV1 as $arme) {
    echo "ID: " . $arme['id'] . ", Nom: " . $arme['nom'] . ", Image: " . $arme['nom_image'] . ", Description: " . $arme['description'] . "<br><br>";
}

$armesV2 = getArmesV2();
echo "<br>Version 2 - Tableau d'objets :<br><br>";
var_dump($armesV2);

echo "<br><br>Version 2 - Tableau d'objets (foreach + echo) :<br><br>";
foreach ($armesV2 as $arme) {
    echo "ID: " . $arme->getId() . ", Nom: " . $arme->getNom() . ", Image: " . $arme->getImage() . ", Description: " . $arme->getDescription() . "<br><br>";
}


//9.2

echo "9.2<br>";

try {
    //Tableau associatif
    $armeV1 = getArmeByIdV1($idArme);
    echo "<br>Version 1 - Tableau associatif (var_dump) :<br><br>";
    var_dump($armeV1);

    echo "<br><br>Version 1 - Tableau associatif (echo) :<br><br>";
    echo "<br>ID: " . $armeV1['id'] . ", Nom: " . $armeV1['nom'] . ", Image: " . $armeV1['nom_image'] . ", Description: " . $armeV1['description'] . "<br><br>";

    //o bjet
    $armeV2 = getArmeByIdV2($idArme);
    echo "<br>Version 2 - Objet (var_dump) :<br><br>";
    var_dump($armeV2);

    echo "<br><br>Version 2 - Objet (echo) :<br><br>";
    echo "ID: " . $armeV2->getId() . ", Nom: " . $armeV2->getNom() . ", Image: " . $armeV2->getImage() . ", Description: " . $armeV2->getDescription() . "<br><br>";
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
?>