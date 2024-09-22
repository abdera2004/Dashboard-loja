<?php
    class Usuarios {
        public $id, $nome, $email, $datanasc;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this-> id = $id;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this-> nome = $nome;
        }

        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this-> email = $email;
        }

        public function getDataNascUsuario(){
            return $this->datanasc;
        }
        public function setDataNascUsuario($datanasc){
            $this-> datanasc = $datanasc;
        }
    }
?>