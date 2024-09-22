<?php
    class Pedidos {
        public $id, $total, $status, $idUsuario;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this-> id = $id;
        }

        public function getTotal(){
            return $this->total;
        }
        public function setTotal($total){
            $this-> total = $total;
        }

        public function getStatus(){
            return $this->status;
        }
        public function setStatus($status){
            $this-> status = $status;
        }

        public function getIdUsuario(){
            return $this->idUsuario;
        }
        public function setIdUsuario($idUsuario){
            $this-> idUsuario = $idUsuario;
        }
    }
?>