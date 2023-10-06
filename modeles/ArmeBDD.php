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



function ajouteArme($objetArme){
    
}

?>
