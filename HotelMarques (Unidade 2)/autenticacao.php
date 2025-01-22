<?php
session_start();
if (!isset($_SESSION['idUsuarioLogado'])){
    header('location: login.php');
}
?>
