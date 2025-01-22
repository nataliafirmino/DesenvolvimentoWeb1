<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelMarques/modelo/vo/ClienteVO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelMarques/modelo/dao/ClienteDAO.php';

if (isset ($_POST["cpf"])){
$objCliente = new ClienteVO();
$objCliente ->setNome($_POST['nome']);
$objCliente ->setCpf($_POST['cpf']);
$objCliente ->setTelefone($_POST['telefone']);
$objCliente ->setEmail($_POST['email']);
$objCliente ->setLogradouro($_POST['logradouro']);
$objCliente ->setNumero($_POST['numero']);
$objCliente ->setBairro($_POST['bairro']);
$objCliente ->setCidade($_POST['cidade']);
$objCliente ->setEstado($_POST['estado']);
$objCliente ->setCep($_POST['cep']);

if(isset($_POST['id'])){
    $objCliente->setId($_POST['id']);
    ClienteDAO::getInstance()->update($objCliente);
}
else{
   ClienteDAO::getInstance()->insert($objCliente);
}

echo "<script> 
    alert ('Salvo com sucesso!');
    window.location.href='../clienteListar.php';
    </script>";
}
else if(isset($_GET["idRemover"])){
    ClienteDAO::getInstance()->delete($_GET["idRemover"]);
    echo "<script> 
        alert ('Deletado com sucesso!');
        window.location.href='../clienteListar.php';
        </script>";
}
?>