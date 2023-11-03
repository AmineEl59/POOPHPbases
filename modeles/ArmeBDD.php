<?php
include '../libs/pdo.php';


function donneArmeByIdV1($id) {
    
    $pdo = PDO2::getInstance();
    
    $requete = $pdo->prepare("...");
    $bv1 = $requete->bindValue(...);
    $executionok = $requete->execute();
    $lArme = $requete->fetch();
    if (is_array($lArme)){
         return $lArme;
    }
    else {
             
          throw new Exception("aucune arme pour cet identifiant");
                    
    }
    
    
}


function ajouteArme($arme) {
    $pdo = PDO2::getInstance();

    $sql = "INSERT INTO arme (id,nom, nom_image, `description`) VALUES (:id,:nom, :nom_image, :description)";

    $requete = $pdo->prepare($sql);

    $requete->bindValue(':id', $arme->getId());
    $requete->bindValue(':nom', $arme->getNom());
    $requete->bindValue(':nom_image', $arme->getImage());
    $requete->bindValue(':description', $arme->getDescription());

    $executionok = $requete->execute();

    return $executionok;
}



function getArmesV1() {
    $pdo = PDO2::getInstance();
    $sql = "SELECT * FROM arme";
    $result = $pdo->query($sql);
    
    $armes = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $armes[] = $row;
    }
    
    return $armes;
}


function getArmesV2() {
    $pdo = PDO2::getInstance();
    $sql = "SELECT * FROM arme";
    $result = $pdo->query($sql);
    
    $armes = new ArrayObject();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $arme = new Arme($row['id'], $row['nom'], $row['nom_image'], $row['description']);
        $armes->append($arme);
    }
    
    return $arme;
}

function getArmeByIdV1($id) {
    $pdo = PDO2::getInstance();
    $sql = "SELECT * FROM arme WHERE id = :id";
    $requete = $pdo->prepare($sql);
    $requete->bindValue(':id', $id);
    $executionok = $requete->execute();
    
    $arme = $requete->fetch(PDO::FETCH_ASSOC);
    
    if ($arme === false) {
        throw new Exception("Aucune arme correspondant à l'ID n'a été trouvée.");
    }
    
    return $arme;
}

function getArmeByIdV2($id) {
    $pdo = PDO2::getInstance();
    $sql = "SELECT * FROM arme WHERE id = :id"; 
    $requete = $pdo->prepare($sql);
    $requete->bindValue(':id', $id);
    $executionok = $requete->execute();
    
    $arme = $requete->fetch(PDO::FETCH_ASSOC);
    
    if ($arme === false) {
        throw new Exception("Aucune arme correspondant à l'ID n'a été trouvée.");
    }

    return new Arme($arme['id'], $arme['nom'], $arme['nom_image'], $arme['description']);
}


?>
