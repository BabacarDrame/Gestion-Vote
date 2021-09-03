<?php
require_once "../model/electeur.php";
if (isset($_POST['inscription'])) {
    $nom_electeur=$_POST['nom_electeur'];
    $prenom_electeur=$_POST['prenom_electeur'];
    $cni=$_POST['cni'];
    $num_electeur=$_POST['num_electeur'];
    $sexe=$_POST['sexe'];
    $date_nais=$_POST['date_nais'];
    $lieu_nais=$_POST['lieu_nais'];
    $adress=$_POST['adress'];
    $commune=$_POST['commune'];
    $bureau_vote=$_POST['bureau_vote'];
    $login=$_POST['login'];
    $mdp=$_POST['mdp'];
    // creation d'objet d'electeur
    $obj_electeur=new Electeur(null,$nom_electeur,$prenom_electeur,$cni,$num_electeur,$sexe,$date_nais,$lieu_nais,$adress,$commune,$bureau_vote,$login,$mdp);
    // appel de la methode saveElecteur pour enregistrer l'electeur dans la base de donnee
    if ($obj_electeur->saveElecteur()) {
      header("location:../?page=connexion");
    }else {
      header("location:../?page=inscription");
    }
  
  }
  // verifie connexion d'un electeur
  if (isset($_POST['btn_connexion'])) {
      $login= $_POST['login'];
      $mdp = $_POST['mdp'];
     if (Electeur::verifieElecteur($login,$mdp)) {
          session_start();
          if($_SESSION["CURRENT_electeur"]['type']=="admin"){
            header("location:../?page=Admin_connect");
          }else{
            header("location:../?page=Electeur_connect");
          }
       
     }else {
      header("location:../?page=inscription");
     }
}
?>