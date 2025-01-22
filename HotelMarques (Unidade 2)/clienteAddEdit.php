<?php
include 'autenticacao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelMarques/modelo/vo/ClienteVO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelMarques/modelo/dao/ClienteDAO.php';
$obj = NULL;
if(isset($_GET['id'])){
    $obj = ClienteDAO::getInstance()->getById($_GET['id']);
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
        <title>Adicionar Cliente</title>
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
                        <h1 class="mt-4">Cliente</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Cliente</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fa-regular fa-square-plus"></i>
                                Adicionar Cliente
                            </div>
                            <div class="card-body">
                                <form method="POST" action="controle/clienteControle.php">
                                    <?php
                                        if($obj!=NULL){
                                            echo "<input type='hidden' name='id' value='".$obj->getId()."'/>";
                                        }
                                    ?>
                                    <div class="row">
                                        <div class="col-6">
                                            Nome:
                                            <input type="text" class="form-control my-2" name="nome" value="<?php echo $obj==NULL?"":$obj->getNome() ?>"/>
                                        </div>
                                        <div class="col-3">
                                            CPF:
                                            <input type="text" maxlength="14" class="form-control my-2" name="cpf" value="<?php echo $obj==NULL?"":$obj->getCpf() ?>"/>
                                        </div>
                                        <div class="col-3">
                                            Telefone:
                                            <input type="text" class="form-control my-2" name="telefone" name="telefone" value="<?php echo $obj==NULL?"":$obj->getTelefone() ?>"/>
                                        </div>
                                        <div class="col-6">
                                            E-mail:
                                            <input type="email" class="form-control my-2" name="email" value="<?php echo $obj==NULL?"":$obj->getEmail() ?>"/>
                                        </div>
                                        <div class="col-4">
                                            Logradouro:
                                            <input type="text" class="form-control my-2" name="logradouro" value="<?php echo $obj==NULL?"":$obj->getLogradouro() ?>"/>
                                        </div>
                                        <div class="col-2">
                                            Número:
                                            <input type="text" class="form-control my-2" name="numero" value="<?php echo $obj==NULL?"":$obj->getNumero() ?>"/>
                                        </div>
                                        <div class="col-3">
                                            Bairro:
                                            <input type="text" class="form-control my-2" name="bairro" value="<?php echo $obj==NULL?"":$obj->getBairro() ?>"/>
                                        </div>
                                        <div class="col-3">
                                            Cidade:
                                            <input type="text" class="form-control my-2" name="cidade" value="<?php echo $obj==NULL?"":$obj->getCidade() ?>"/>
                                        </div>
                                        <div class="col-3">
                                            Estado:
                                            <input type="text" class="form-control my-2" name="estado" value="<?php echo $obj==NULL?"":$obj->getEstado() ?>"/>
                                        </div>
                                        <div class="col-3">
                                            CEP:
                                            <input type="text" class="form-control my-2" name="cep" value="<?php echo $obj==NULL?"":$obj->getCep() ?>"/>
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
