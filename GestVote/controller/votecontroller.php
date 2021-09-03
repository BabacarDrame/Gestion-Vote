<?php
session_start();
require_once "../model/vote.php";
require_once "../model/electeur.php";
require_once "../model/candidat.php";
if(isset($_POST['btn_vote'])){
     $id_candidat=$_POST['choix_vote'];
     $id_electeur= $_SESSION["CURRENT_electeur"]['id_electeur'];
     $liste= Candidat::getNomCandidat($id_candidat);
     $nom_candidat=$liste[0]['nom_candidat'];
     if($_SESSION["CURRENT_electeur"]['status_vote']==false){
         $ob=new Vote(null, $id_candidat,$id_electeur,$nom_candidat);
         if($ob->addVote()){
             Electeur::changerStatus($_SESSION["CURRENT_electeur"]['id_electeur']);
             echo "merci vote reussi vous avez voté pour :".$nom_candidat;
         }
     }else{
        echo "tu  as deja voté ";
     }

}


?>