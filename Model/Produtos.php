<?php
    class Produtos {
        public $id, $nome, $desc, $preco, $estoque, $idCategoria;

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

        public function getDesc(){
            return $this->desc;
        }
        public function setDesc($desc){
            $this-> desc = $desc;
        }

        public function getPreco(){
            return $this->preco;
        }
        public function setPreco($preco){
            $this-> preco = $preco;
        }

        public function getEstoque(){
            return $this->estoque;
        }
        public function setEstoque($estoque){
            $this-> estoque = $estoque;
        }

        public function getIdCategoria(){
            return $this->idCategoria;
        }
        public function setIdCategoria($idCategoria){
            $this-> idCategoria = $idCategoria;
        }

    }
?>