<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelMarques/modelo/vo/UsuarioVO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelMarques/modelo/dao/UsuarioDAO.php';

if (isset($_POST['email']) && isset($_POST['senha']) ){
    //buscar no banco o usuário com essa senha
    $restoSQL = 'where email = :email and senha = :senha';
    
    $listaParametros=array(':email', ':senha');
    $listaValores=array($_POST['email'], $_POST['senha']);
    
    $lista = UsuarioDAO::getInstance()->listWhere($restoSQL, $listaParametros, $listaValores);
    
    if(sizeof($lista)>0){
        session_start();
        $_SESSION['idUsuarioLogado']=$lista[0]->getId();
        header('location: ../usuarioAddEdit.php');
    }
    else{
        header('location: ../login.php?erro=1');
    }
}



