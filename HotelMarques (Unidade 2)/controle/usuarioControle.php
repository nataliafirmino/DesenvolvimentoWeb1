<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelMarques/modelo/vo/UsuarioVO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelMarques/modelo/dao/UsuarioDAO.php';

if (isset ($_POST["cpf"])){
$objUsuario = new UsuarioVO();
$objUsuario ->setCpf($_POST['cpf']);
$objUsuario ->setEmail($_POST['email']);
$objUsuario ->setNome($_POST['nome']);
$objUsuario ->setSenha($_POST['senha']);
$objUsuario ->setCargo($_POST['cargo']);
$objUsuario ->setStatusUsuario($_POST['statusUsuario']);

if(isset($_POST['id'])){
    $objUsuario->setId($_POST['id']);
    UsuarioDAO::getInstance()->update($objUsuario);
}
else{
    UsuarioDAO::getInstance()->insert($objUsuario);
}

echo "<script> 
    alert ('Salvo com sucesso!');
    window.location.href='../usuarioListar.php';
    </script>";
}
else if(isset($_GET["idRemover"])){
    UsuarioDAO::getInstance()->delete($_GET["idRemover"]);
    echo "<script> 
        alert ('Deletado com sucesso!');
        window.location.href='../usuarioListar.php';
        </script>";
}

?>


