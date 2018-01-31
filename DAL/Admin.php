<?php
    class Admin {
        private $id;
        private $nom;
        private $prenom;
        private $mail;
        private $mdp;
        
        public function __construct($id,$nom,$prenom,$mail,$mdp) {
            $this->id=$id;
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->mail=$mail;
            $this->mdp=$mdp;
        }

        public function getId() {
            return $this->id;
        }

        public function getNom(){
            return $this->nom;
        }

        public function getPrenom() {
            return $this->prenom;
        }

        public function getMail() {
            return $this->mail;
        }

        public function getMdp() {
            return $this->mdp;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setNom($nom) {
            $this->nom = $nom;
        }

        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }

        public function setMail($mail) {
            $this->mail = $mail;
        }

        public function setMdp($mdp) {
            $this->mdp = $mdp;
        }
    }