<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Lista de Quartos</title>
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
                                <i class="fas fa-table me-1"></i>
                                Lista de Quartos
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Número</th>
                                            <th>Tipo</th>
                                            <th>Capacidade</th>
                                            <th>Preço Diária (R$)</th>
                                            <th>Descrição</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Número</th>
                                            <th>Tipo</th>
                                            <th>Capacidade</th>
                                            <th>Preço Diária (R$)</th>
                                            <th>Descrição</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        require_once $_SERVER['DOCUMENT_ROOT'] .
                                                '/HotelMarques/modelo/dao/QuartoDAO.php';
                                        $lista = QuartoDAO::getInstance()->listAll();
                                        foreach ($lista as $obj){
                                            echo "<tr>
                                            <td>".$obj->getId()."</td>
                                            <td>".$obj->getNumeroQuarto()."</td>
                                            <td>".$obj->getTipo()."</td>
                                            <td>".$obj->getCapacidade()."</td>
                                            <td>".$obj->getPrecoDiaria()."</td>
                                            <td>".$obj->getStatusQuarto()."</td>
                                            <td>".$obj->getDescricao()."</td>
                                            
                                            
                                            
                                            <td>
                                                <a href='./quartoAddEdit.php?id=".$obj->getId()."' class='btn btn-outline-warning'><i class='fas fa-pen'></i> Editar</a>
                                                <a href='./controle/quartoControle.php?idRemover=".$obj->getId()."' class='btn btn-outline-danger'><i class='fas fa-trash'></i> Apagar</a>
                                            </td>
                                        </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
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
