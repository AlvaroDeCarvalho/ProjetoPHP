<?php
//session
session_start();
//conexão
require_once "db_connect.php";

if(isset($_POST['btn-deletar'])){
    $id = mysqli_escape_string($connect,$_POST['id']);
    
    $sql = "DELETE FROM  info WHERE id = '$id'";
    
    if(mysqli_query($connect,$sql)){
        $_SESSION['mensagem'] = "Deletado com sucesso ";
        header("location: ../index.php ");

    

    }else{
        $_SESSION['mensagem'] = "erro ao Deletar";
        header('locatio: ../index.php');
    }
}

?>