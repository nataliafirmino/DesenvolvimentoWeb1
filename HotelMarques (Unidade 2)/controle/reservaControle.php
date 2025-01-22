<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelMarques/modelo/vo/ReservaVO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelMarques/modelo/dao/ReservaDAO.php';

if (isset ($_POST["valor"])){
$objReserva = new ReservaVO();
$objReserva ->setDataCheckin($_POST['dataCheckin']);
$objReserva ->setDataCheckout($_POST['dataCheckout']);
$objReserva ->setValor($_POST['valor']);
$objReserva ->setFormaPagamento($_POST['formaPagamento']);
$objReserva ->setStatusReserva($_POST['statusReserva']);
$objReserva ->setIdCliente($_POST['idCliente']);
$objReserva ->setIdQuarto($_POST['idQuarto']);

if(isset($_POST['id'])){
    $objReserva->setId($_POST['id']);
    ReservaDAO::getInstance()->update($objReserva);
}
else{
   ReservaDAO::getInstance()->insert($objReserva);
}

echo "<script> 
    alert ('Salvo com sucesso!');
    window.location.href='../reservaListar.php';
    </script>";
}
else if(isset($_GET["idRemover"])){
    ReservaDAO::getInstance()->delete($_GET["idRemover"]);
    echo "<script> 
        alert ('Deletado com sucesso!');
        window.location.href='../reservaListar.php';
        </script>";
}
?>