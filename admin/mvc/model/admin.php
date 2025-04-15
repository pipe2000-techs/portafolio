 <?php

    error_reporting(0);
    
    class admin{

        //conexion a la base de datos con PDO
        private function conx(){

            require 'config.php';
            require 'conexion.php';
            return $pdo;

        }

        //se balida si el uaurio y la contraseña coinciden con la BD
        public function login($user, $password){

            $consult = $this->conx() -> prepare("select user, name, email, image from login where user = ? and password = ?");
            $consult -> execute(array($user,$password));
            $consult = $consult -> fetchall(PDO::FETCH_ASSOC);
            return $consult;

        }


        //se consultan los proyectos
        public function viewProjects(){

            $consult = $this->conx() -> prepare("select * from projet ORDER BY id DESC");
            $consult -> execute();
            $consult = $consult -> fetchall(PDO::FETCH_ASSOC);
            return $consult;

        }

        public function insertProject($name,$description,$github,$link,$image,$tmpimage,$imagesGallery){

            $date=new DateTime();
            $nameimage=($image!='')?$date->getTimestamp()."_".$image:"";

            if($tmpimage!=""){
                move_uploaded_file($tmpimage,"../images/".$nameimage);
            }

            $idPro = rand('11111111','99999999');

            $consult = $this->conx() -> prepare("INSERT INTO `projet` ( id ,`name`, `description`, `github`, `link`, `image`) VALUES (?,?,?,?,?,?)");
            $consult -> execute(array($idPro,$name,$description,$github,$link,$nameimage));

            if ($consult) {

                foreach ($imagesGallery['name'] as $key => $val) {

                    $idimg = rand('11111111','99999999');
                    $consult2 = $this->conx() -> prepare("INSERT INTO `images` (`idimg`, `img`) VALUES (?, ?)");
                    $consult2 -> execute(array($idimg,$idimg."_".$val));

                    //se gurdan las imagenes en el cervidor
                    move_uploaded_file($imagesGallery['tmp_name'][$key],"../images/gallery/".$idimg."_".$val);


                    if ($consult2) {

                        $consult3 = $this->conx() -> prepare("INSERT INTO `projet_images` (`id`, `idProjet`, `idImages`) VALUES (NULL, ?, ?)");
                        $consult3 -> execute(array($idPro,$idimg));
                        
                    }

                }

                
            }

            return $consult;
            

        }

        public function updateProject($id,$name,$description,$github,$link,$image,$tmpimage,$imageold,$imagesGallery){

            $date=new DateTime();
            $nameimage=($image!='')?$date->getTimestamp()."_".$image:"";

            if($tmpimage!=""){
                unlink("../images/".$imageold);
                move_uploaded_file($tmpimage,"../images/".$nameimage);
                $consult = $this->conx() -> prepare("update projet set name=?, description=?, github=?, link=?, image=? where id=? ");
                $consult -> execute(array($name,$description,$github,$link,$nameimage,$id));
                
            }else{
                $consult = $this->conx() -> prepare("update projet set name=?, description=?, github=?, link=? where id=? ");
                $consult -> execute(array($name,$description,$github,$link,$id));
                
            }


                foreach ($imagesGallery['name'] as $key => $val) {

                    if($imagesGallery['tmp_name'][$key]!=""){

                        $idimg = rand('11111111','99999999');
                        $consult2 = $this->conx() -> prepare("INSERT INTO `images` (`idimg`, `img`) VALUES (?, ?)");
                        $consult2 -> execute(array($idimg,$idimg."_".$val));

                        //se gurdan las imagenes en el cervidor
                        move_uploaded_file($imagesGallery['tmp_name'][$key],"../images/gallery/".$idimg."_".$val);


                        if ($consult2) {

                            $consult3 = $this->conx() -> prepare("INSERT INTO `projet_images` (`id`, `idProjet`, `idImages`) VALUES (NULL, ?, ?)");
                            $consult3 -> execute(array($id,$idimg));

                            
                        }

                    }

                }

            
            return $consult;

        }

        //SE CONTROLA LAS TECNOLOGIAS
        
        //se consultan las proyectecnologiastos
        public function technology(){

            $consult = $this->conx() -> prepare("select * from technology ORDER BY id DESC");
            $consult -> execute();
            $consult = $consult -> fetchall(PDO::FETCH_ASSOC);
            return $consult;

        }

        public function insertTechnology($name,$percent,$image,$tmpimage){

            $date=new DateTime();
            $nameimage=($image!='')?$date->getTimestamp()."_".$image:"";

            if($tmpimage!=""){
                move_uploaded_file($tmpimage,"../images/".$nameimage);
            }

            $consult = $this->conx() -> prepare("INSERT INTO `technology` ( `name`, `percent`, `icon`) VALUES (?,?,?)");
            $consult -> execute(array($name,$percent,$nameimage));
            
            return $consult;
            

        }

        public function updateTechnology($id,$name,$percent,$image,$tmpimage,$imageold){

            $date=new DateTime();
            $nameimage=($image!='')?$date->getTimestamp()."_".$image:"";

            if($tmpimage!=""){
                unlink("../images/".$imageold);
                move_uploaded_file($tmpimage,"../images/".$nameimage);
                $consult = $this->conx() -> prepare("update technology set name=?, percent=?, icon=? where id=? ");
                $consult -> execute(array($name,$percent,$nameimage,$id));
                
            }else{
            
                $consult = $this->conx() -> prepare("update technology set name=?, percent=? where id=? ");
                $consult -> execute(array($name,$percent,$id));
                
            }
            
            return $consult;

        }

        public function exit(){
            unset($_SESSION['admin']);
        }


        //SE CONTROLA EL PERFIL

        public function UpdateProfile($profile_description){

            $consult = $this->conx() -> prepare("update profile_description set DesProfile = ? where idProfile = 1");
            $consult -> execute(array($profile_description));

            return $consult;

        }

        public function CallProfile(){

            $consult = $this->conx() -> prepare("select DesProfile from profile_description where idProfile = 1");
            $consult -> execute();
            $consult = $consult -> fetchall(PDO::FETCH_ASSOC);

            return $consult[0]['DesProfile'];

        }

        //se carga la nueva hoja de vida
        public function newCurriculum($url_temp){

            //elimina la hoja de vida antigua
            unlink('../docs/Andres gonzalez.pdf');

            if(move_uploaded_file($url_temp, '../docs/Andres gonzalez.pdf')){
                return true;
            }else{
                return false;
            }

        }

        public function callGallery($idProjet){

            $consult = $this->conx() -> prepare("select idimg, img from projet_images join images on projet_images.idImages = images.idimg where idProjet = ".$idProjet);
            $consult -> execute();
            $consult = $consult -> fetchall(PDO::FETCH_ASSOC);

            return $consult;

        }

        public function deleteImg($idimg,$img){

            $consult = $this->conx() -> prepare("DELETE FROM projet_images WHERE `idImages` = ".$idimg);
            $consult -> execute();

            if($consult){

                $consult2 = $this->conx() -> prepare("DELETE FROM images WHERE `idimg` = ".$idimg);
                $consult2 -> execute();

                if ($consult2) {

                    unlink("../images/gallery/".$img);

                }

            }

            return $consult2;

        }


    }

?>



    
 
    