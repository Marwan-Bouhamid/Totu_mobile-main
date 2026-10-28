<?php
    require_once "User.php";
    class Auteur extends User {
        private $biographie;

        public function __construct($id = null, $nom = "", $prenom = "", $email = "", $password = "", $photo_profil = "", $biographie = "") {
            parent::__construct($id, $nom, $prenom, $email, $password, $photo_profil);
            $this->biographie = $biographie;
        }

        public function getRoleName(): string {
            return "Auteur publié";
        }
    }
?>