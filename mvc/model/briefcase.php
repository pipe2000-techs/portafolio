 <?php

    error_reporting(0);
    
    class briefcase{

        //conexion a la base de datos con PDO
        private function conx(){

            require 'config.php';
            require 'conexion.php';
            return $pdo;

        }

        //se consultan los proyectos
        public function projects(){

            $consult = $this->conx() -> prepare("select * from projet ORDER BY id DESC");
            $consult -> execute();
            $consult = $consult -> fetchall(PDO::FETCH_ASSOC);
            return $consult;

        }
        
        //se consultan las proyectecnologiastos
        public function technology(){

            $consult = $this->conx() -> prepare("select * from technology");
            $consult -> execute();
            $consult = $consult -> fetchall(PDO::FETCH_ASSOC);
            return $consult;

        }

        //se consultan las proyectecnologiastos
        public function profile(){

            $consult = $this->conx() -> prepare("select DesProfile from profile_description where idProfile = 1");
            $consult -> execute();
            $consult = $consult -> fetchall(PDO::FETCH_ASSOC);
            return $consult[0]['DesProfile'];

        }

        //se llaman todas las fotos del proyecto seleccionado
        public function progetGallery($idPro){

            $consult = $this->conx() -> prepare("select idimg, img from projet_images join images on projet_images.idImages = images.idimg where idProjet = ".$idPro);
            $consult -> execute();
            $consult = $consult -> fetchall(PDO::FETCH_ASSOC);
            return $consult;

        }

    }

?>



    
 
    