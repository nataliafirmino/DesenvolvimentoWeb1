<?php
include 'autenticacao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelMarques/modelo/vo/QuartoVO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelMarques/modelo/dao/QuartoDAO.php';
$obj = NULL;
if(isset($_GET['id'])){
    $obj = QuartoDAO::getInstance()->getById($_GET['id']);
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
        <title>Adicionar Quarto</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include "cabecalho.php"?>
        <div id="layoutSidenav">
            <?php include "menu.php" ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Quartos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Quartos</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fa-regular fa-square-plus"></i>
                                Adicionar Quarto
                            </div>
                            <div class="card-body">
                                <form method="POST" action="controle/quartoControle.php">
                                    <?php
                                        if($obj!=NULL){
                                            echo "<input type='hidden' name='id' value='".$obj->getId()."'/>";
                                        
                                        }
                                    ?>
                                <form>
                                    <div class="row">
                                        <div class="col-4">
                                            Número quarto:
                                            <input type="text" maxlength="5" class="form-control my-2" name="numeroQuarto" value="<?php echo $obj==NULL?"":$obj->getNumeroQuarto() ?>"/>
                                        </div>
                                        <div class="col-4">
                                            Tipo:
                                            <select class="form-control my-2" name="tipo" >
                                                <option <?php echo $obj!=NULL && $obj->getTipo()=="Simples"?""
                                                        . "selected='selected'":""; ?> value="Simples">Simples</option>
                                                <option <?php echo $obj!=NULL && $obj->getTipo()=="Suíte"?""
                                                        . "selected='selected'":""; ?> value="Suíte">Suíte</option>
                                                <option <?php echo $obj!=NULL && $obj->getTipo()=="Luxo"?""
                                                        . "selected='selected'":""; ?> value="Luxo">Luxo</option>
                                                <option <?php echo $obj!=NULL && $obj->getTipo()=="Presidencial"?""
                                                        . "selected='selected'":""; ?> value="Presidencial">Presidencial</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            Capacidade:
                                            <select class="form-control my-2" name="capacidade">
                                                <option <?php echo $obj!=NULL && $obj->getCapacidade()=="1 Pessoa"?""
                                                        . "selected='selected'":""; ?> value="1 Pessoa">1 pessoa</option>
                                                <option <?php echo $obj!=NULL && $obj->getCapacidade()=="2 Pessoas"?""
                                                        . "selected='selected'":""; ?> value="2 Pessoas">2 Pessoas</option>
                                                <option <?php echo $obj!=NULL && $obj->getCapacidade()=="3 Pessoas"?""
                                                        . "selected='selected'":""; ?> value="3 Pessoas">3 pessoas</option>
                                                <option <?php echo $obj!=NULL && $obj->getCapacidade()=="4 Pessoas"?""
                                                        . "selected='selected'":""; ?> value="4 Pessoas">4 pessoas</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            Preço diária R$:
                                            <input type="text" class="form-control my-2" name="precoDiaria" value="<?php echo $obj==NULL?"":$obj->getPrecoDiaria() ?>"/>  
                                        </div>
                                        <div class="col-4">
                                            Status:
                                            <select class="form-control my-2" name="statusQuarto">
                                                <option <?php echo $obj!=NULL && $obj->getStatusQuarto()=="Disponível"?""
                                                        . "selected='selected'":""; ?> value="Disponível">Disponível</option>
                                                <option <?php echo $obj!=NULL && $obj->getStatusQuarto()=="Indisponível"?""
                                                        . "selected='selected'":""; ?> value="Indisponível">Indisponível</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            Descrição:
                                            <input type="text" class="form-control my-2" name="descricao" value="<?php echo $obj==NULL?"":$obj->getDescricao() ?>"/>  
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
