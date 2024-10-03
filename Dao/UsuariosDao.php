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

        public static function selectAll()
        {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM usuarios";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    
        public static function selectById($id)
        {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM usuarios WHERE idUsuario = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id,  PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public static function delete($id)
        {
            $conexao = Conexao::conectar();
            $query = "DELETE FROM usuarios WHERE idUsuario = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':id', $id);
            return  $stmt->execute();
        }

        public static function update($id, $user)
        {
            $conexao = Conexao::conectar();
    
            $query = "UPDATE usuarios SET 
                    nomeUsuario = :nome, 
                    emailUsuario = :email, 
                    dataNascUsuario = :senha
                    WHERE idUsuario = :id";
    
            $stmt = $conexao->prepare($query);
    
            // Atribuir os valores a variáveis antes de chamar bindParam
            $nome = $user->getNome();
            $email = $user->getEmail();
            $datanasc = $user->getDataNascUsuario();
    
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':datanasc', $datanasc);
    
            return $stmt->execute();
        }

        public static function getTotalClientes()
        {
            $conexao = Conexao::conectar();
            $query = "SELECT COUNT(*) as totalUsuários FROM usuarios";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
            return $result['totalUsuários'];
        }
    }

?>