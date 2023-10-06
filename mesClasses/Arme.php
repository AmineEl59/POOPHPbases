<?php

class Arme{
        private $id;
        private $nom;
        private $image;
        private $description;

        public function __construct($id,$nom, $image, $description){
            $num_args= func_num_args(); 
            switch($num_args){
                case '0':
                    break;
                case '3':
                    $this->nom = func_get_arg(0);
                    $this->image = func_get_arg(1);
                    $this->description = func_get_arg(2);
                case '4':
                    $this->id = func_get_arg(0);
                    $this->nom = func_get_arg(1);
                    $this->image = func_get_arg(2);
                    $this->description = func_get_arg(3);
                    break;
            }     
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id=$id;
        }

        public function getNom(){
            return $this->nom;
        }

        public function setNom($nom){
            $this->nom=$nom;
        }

        public function getImage(){
            return $this->image;
        }

        public function setImage($image){
            return $this->description;
        }
        public function getDescription(){
            return $this->description;
        }
        public function setDescription($description){
            $this->description =$description;
        }

        public function toString(){
            return "Id de l'arme :". $this->id ."<br>".
                   "Nom de l'arme :". $this->nom ."<br>" .
                   "Nom de l'image :". $this->image ."<br>" .
                   "Description de l'arme :". $this->description ."<br>";
        }
    }
?>
