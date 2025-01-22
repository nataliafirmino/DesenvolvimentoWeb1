<?php
include 'autenticacao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelMarques/modelo/vo/ReservaVO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelMarques/modelo/dao/ReservaDAO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelMarques/modelo/dao/ClienteDAO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelMarques/modelo/dao/QuartoDAO.php';
$obj = NULL;
if(isset($_GET['id'])){
    $obj = ReservaDAO::getInstance()->getById($_GET['id']);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Adicionar Reserva</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include "cabecalho.php"?>
        <div id="layoutSidenav" class="d-inline">
            <?php include "menu.php" ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Reserva</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Reserva</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fa-regular fa-square-plus"></i>
                                Adicionar Reserva
                            </div>
                            <div class="card-body">
                                <form method="POST" action="controle/reservaControle.php">
                                    
                                    <?php
                                        if($obj!=NULL){
                                            echo "<input type='hidden' name='id' value='".$obj->getId()."'/>";
                                        
                                        }
                                    ?>
                                    
                                    <div class="row">
                                        <div class="col-3">
                                            Data Checkin:
                                            <input type="date" class="form-control my-2" name="dataCheckin" value="<?php echo $obj==NULL?"":$obj->getDataCheckin() ?>"/>
                                        </div>
                                        <div class="col-3">
                                            Data Checkout:
                                            <input type="date" class="form-control my-2" name="dataCheckout" value="<?php echo $obj==NULL?"":$obj->getDataCheckout() ?>"/>
                                        </div>
                                        <div class="col-3">
                                            Valor R$:
                                            <input type="text" maxlength="14" class="form-control my-2"
                                                   name="valor" value="<?php echo $obj==NULL?"":$obj->getValor() ?>"/>
                                        </div>                  
                                        <div class="col-3">
                                            Forma de Pagamento:
                                            <select class="form-control my-2" name="formaPagamento">
                                                <option <?php echo $obj!=NULL && $obj->getFormaPagamento()=="Pix"?""
                                                        . "selected='selected'":""; ?> value="Pix">Pix</option>
                                                <option <?php echo $obj!=NULL && $obj->getFormaPagamento()=="Transferência"?""
                                                        . "selected='selected'":""; ?> value="Transferência">Transferência</option>
                                                <option <?php echo $obj!=NULL && $obj->getFormaPagamento()=="Crédito"?""
                                                        . "selected='selected'":""; ?> value="Crédito">Crédito</option>
                                                <option <?php echo $obj!=NULL && $obj->getFormaPagamento()=="Débito"?""
                                                        . "selected='selected'":""; ?> value="Débito">Débito</option>
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            Status da Reserva:
                                            <select class="form-control my-2" name="statusReserva">
                                                <option <?php echo $obj!=NULL && $obj->getStatusReserva()=="Confirmada"?""
                                                        . "selected='selected'":""; ?> value="Confirmada">Confirmada</option>
                                                <option <?php echo $obj!=NULL && $obj->getStatusReserva()=="Pendente"?""
                                                        . "selected='selected'":""; ?> value="Pendente">Pendente</option>
                                                <option <?php echo $obj!=NULL && $obj->getStatusReserva()=="Cancelada"?""
                                                        . "selected='selected'":""; ?> value="Cancelada">Cancelada</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            Cliente:
                                            <select class="form-control my-2" name="idCliente">
                                                <?php
                                                $lista = ClienteDAO::getInstance()->listAll();
                                                foreach ($lista as $cliente){
                                                    echo "<option value='".$cliente->getId()."'>".$cliente->getNome()."</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            Quarto:
                                            <select class="form-control my-2" name="idQuarto">
                                                <?php
                                                $lista = QuartoDAO::getInstance()->listAll();
                                                foreach ($lista as $quarto){
                                                    echo "<option value='".$quarto->getId()."'>".$quarto->getNumeroQuarto()." (".$quarto->getTipo().")</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        
                                        
                                            
                                        </div>
                                        <div class="row mt-4 ">
                                            <div class="col-2">
                                            <input type="submit" value="Salvar" class="btn btn-outline-success"/>
                                            </div>
                                            <div class="col-2">
                                                <input type="reset" value="Limpar" class="btn btn-outline-secondary"/>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
