<?php

require_once(__DIR__ . '../../Model/Conexao.php');

    class UsuariosDao {

        public static function insert($user) {
            
            $nome = $user->getNome();
            $email = $user->getEmail();
            $datanasc = $user->getDataNascUsuario();

            $conn = Conexao::conectar();

            $stmt = $conn->prepare("INSERT INTO usuarios (nomeUsuario, emailUsuario, dataNascUsuario) 
                            VALUES (:nome, :email, :datanasc)");
            
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':datanasc', $datanasc);

            $result = $stmt->execute();

            if ($result) {
                return true; // Inserção bem-sucedida
            } else {
                return false; // Erro na inserção
            }
        }
    }

?>