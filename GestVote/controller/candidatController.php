<?php
   require_once "../model/candidat.php";
   if(isset($_POST['btn_valider_candidat'])){
    $nom_candidat=$_POST['nom_candidat'];
    $nom_partie=$_POST['nom_partie'];
    $ob_candidat=new Candidat();
    if($ob_candidat->addCandidat($nom_candidat,$nom_partie)){
        echo "merci ca pas";
    }else{
        echo "nom ca ne passe pas";
    }
        
    
      
   }
?>