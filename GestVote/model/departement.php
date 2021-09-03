<?php
require_once 'db.php';

    class Departement{
        public $id_dep=null;
        public $nom_dep;
        public $id_region;
       
        public function __construct($id_dep=null,$nom_dep,$id_region){
            $this->$id_dep=$id_dep;
            $this->nom_dep=$nom_dep;
            $this->id_region=$id_region;
        }
        public function addDepartement(){
            $ob_connexion=new Connexion();
            // l appel de la methode de connexion getdb()
            $db=$ob_connexion->getDB();
            $ret=false;
            if (!is_null($db))
             {
                $sql="INSERT INTO departement(id_dep,nom_dep,id_region)values(:id_dep,:nom_dep,:id_region)";
                $element=$db->prepare($sql);
                $element->execute(array(
                  ':id_dep' => $this->id_dep,
                  ':nom_dep' => $this->nom_dep,
                  ':id_region' => $this->id_region
                   ));
                $ret=true;
        }else{
          echo "erreur de connexion a la basse";
        }
        return $ret;
        }

        function saveDepartement() :bool
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