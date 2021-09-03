<?php
require_once 'db.php';

    class Candidat{
        public $id_region=null;
        public $nom_region;
        public function __construct($id_region,$nom_region){
            $this->id_region=$id_region;
            $this->nom_region=$nom_region;
        }
        public function addRegion(){
            $ob_connexion=new Connexion();
            // l appel de la methode de connexion getdb()
            $db=$ob_connexion->getDB();
            $ret=false;
            if (!is_null($db))
             {
                $sql="INSERT INTO region(id_region,nom_region)values(:id_region,:nom_region)";
                $element=$db->prepare($sql);
                $element->execute(array(
                  ':id_region' => $this->id_region,
                  ':nom_region' => $this->nom_region
                   ));
                $ret=true;
        }else{
          echo "erreur de connexion a la basse";
        }
        return $ret;
        }

        function saveRegion() :bool
        {
          // instancier la class de connexion a la base de donnee
          $ob_connexion=new Connexion();
          // l appel de la methode de connexion getdb()
          $db=$ob_connexion->getDB();
          $ret=false;
          if (!is_null($db))
           {
              $sql="INSERT INTO region(id_region,nom_region)values(:id_region,:nom_region)";
              $element=$db->prepare($sql);
              $element->execute(array(
                ':id_region' => $this->id_region,
                ':nom_region' => $this->nom_region
                 ));
              $ret=true;
      }else{
        echo "erreur de connexion a la basse";
      }
      return $ret;
    }
    
    }

?>