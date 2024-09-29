<?php
require_once '../Model/Usuarios.php';
require_once '../Dao/UsuariosDao.php';
require_once '../Model/Mensagem.php';

$user = new Usuarios();
$msg = new Mensagem();

//var_dump($_POST);
switch ($_POST["acao"]) {
    case 'DELETE':
     try {
          $usuatiosDao = UsuariosDao::delete($_POST['id']);
          header("Location: index.php");
      } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMensagem(), "\n";
      }
      break;
      case 'SALVAR':
        $user->setNome($_POST['nomeUsuario']); 
        $user->setEmail($_POST['emailUsuario']);  
        $user->setDataNascUsuario($_POST['dataNascUsuario']);
        try {
            $usuariosDao = UsuariosDao::insert($user);

            // Adiciona uma mensagem para debug
            $msg->setMensagem("Usuário inserido com sucesso no banco de dados.", "bg-success");

            header("Location: index.php");
        } catch (Exception $e) {
            // Se houver um erro na inserção, você pode lidar com isso aqui

            // Adiciona uma mensagem para debug
            $msg->setMensagem("Erro ao inserir usuário no banco de dados: " . $e->getMessage(), "bg-danger");

            header("Location: index.php");
        } 
        break;
        case 'ATUALIZAR':
              //pode validar as informações
              $user->setNome($_POST['nomeUsuario']);
              $user->setEmail($_POST['emailUsuario']);  
              $user->setDataNascUsuario($_POST['dataNascUsuario']);
              try {
                $usuariosDao = UsuariosDao::update($_POST["idUsuario"], $user);
                $msg->setMensagem("Usuário atualizado com sucesso.", "bg-success");
                header("Location: index.php");
              } catch (Exception $e) {
               echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      
              } 
          break;
      
        case 'SELECTID':
      
          try {
              $usuariosDao = UsuariosDao::selectById($_POST['id']);
              // Configura as opções do contexto da solicitação
              include('register.php');
          } catch (Exception $e) {
              echo 'Exceção capturada: ',  $e->getMessage(), "\n";
          } 
      
        
          break;
        }
?>
