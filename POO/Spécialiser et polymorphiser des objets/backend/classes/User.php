<?php
    class User {
        protected $id;
        protected $nom;
        protected $prenom;
        protected $email;
        protected $password;
        protected $photo_profil;

        public function __construct($id = null, $nom = "", $prenom = "", $email = "", $password = "", $photo_profil = "") {
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->password = $password;
            $this->photo_profil = $photo_profil;
        }

        public function getRoleName(): string {
            return "Visiteur anonyme";
        }
    }
?>