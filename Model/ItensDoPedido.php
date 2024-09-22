<?php
    class ItensDoPedido {
        public $id, $quantidade, $preco, $idPedido, $idProduto;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this-> id = $id;
        }

        public function getQuantidade(){
            return $this->quantidade;
        }
        public function setQuantidade($quantidade){
            $this-> quantidade = $quantidade;
        }

        public function getPreco(){
            return $this->preco;
        }
        public function setPreco($preco){
            $this-> preco = $preco;
        }

        public function getIdPedido(){
            return $this->idPedido;
        }
        public function setIdPedido($idPedido){
            $this-> idPedido = $idPedido;
        }

        public function getIdProduto(){
            return $this->idProduto;
        }
        public function setIdProduto($idProduto){
            $this-> idProduto = $idProduto;
        }
    }
?>