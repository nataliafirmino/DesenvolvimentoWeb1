<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelMarques/modelo/vo/QuartoVO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelMarques/modelo/dao/QuartoDAO.php';

if (isset ($_POST["numeroQuarto"])){
$objQuarto = new QuartoVO();
$objQuarto ->setNumeroQuarto($_POST['numeroQuarto']);
$objQuarto ->setTipo($_POST['tipo']);
$objQuarto ->setCapacidade($_POST['capacidade']);
$objQuarto ->setPrecoDiaria($_POST['precoDiaria']);
$objQuarto ->setDescricao($_POST['descricao']);
$objQuarto ->setStatusQuarto($_POST['statusQuarto']);

if(isset($_POST['id'])){
    $objQuarto->setId($_POST['id']);
    QuartoDAO::getInstance()->update($objQuarto);
}
else{
   QuartoDAO::getInstance()->insert($objQuarto);
}

echo "<script> 
    alert ('Salvo com sucesso!');
    window.location.href='../quartoListar.php';
    </script>";
}
else if(isset($_GET["idRemover"])){
    QuartoDAO::getInstance()->delete($_GET["idRemover"]);
    echo "<script> 
        alert ('Deletado com sucesso!');
        window.location.href='../quartoListar.php';
        </script>";
}
?>