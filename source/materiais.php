<?php
    if (isset($_POST['save'])) {
        $insert = $bdd->prepare("INSERT material (nome,preco,img) VALUES (?,?,?)");
        $insert->execute(array($_POST['nome'],$_POST['preco'],$_POST['img']));
    }
    if (isset($_POST['dell'])) {
            $delete = $bdd->prepare("DELETE FROM material WHERE id = ?");
            $delete->execute(array($_POST['id']));
    }
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Destak | Orçamento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/fav.png">

    <!-- jquery.vectormap css -->
    <link href="<?= $url ?>assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="<?= $url ?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?= $url ?>assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?= $url ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= $url ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= $url ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="<?= $url ?>assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     

</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include("extends/header.php"); ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Orçamento</h4>

                            <div class="page-title-left">
                                <div class="col">
                                  <!--<button type="button" class="btn btn-success" data-toggle="modal" data-target="#novo">Novo</button> -->
                                  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#novo">Novo</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!--  Modal content for the above example -->
                <div class="modal fade bs-example-modal-lg" id="novo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Novo Material</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="validationCustom01">Nome</label>
                                        <input type="text" name="nome" class="form-control" id="validationCustom01" placeholder="ex:MDF" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="validationCustom01">Preço</label>
                                        <input type="text" name="preco" class="form-control" id="validationCustom01" placeholder="Preço do material" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="validationCustom01">Foto (Opcional)</label>
                                        <input type="text" name="img" class="form-control" id="validationCustom01" placeholder="First name" value="https://www.inovegas.com.br/site/wp-content/uploads/2017/08/sem-foto.jpg">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Fechar</button>
                                    <button type="submit" name="save" class="btn btn-primary waves-effect waves-light">Salvar</button>
                                </div>
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Tabela de materiais</h4>
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Img</th>
                                                <th>Nome</th>
                                                <th>Preço</th>
                                                <th>Ações</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php
                                                $stmt=$bdd->prepare("SELECT * FROM material ORDER BY id DESC");
                                                $stmt->execute();
                                                while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                            ?>
                                            <tr>
                                                <td><img height="22" width="22" src="<?php if(empty($row['img'])){
                                                                        echo"https://www.inovegas.com.br/site/wp-content/uploads/2017/08/sem-foto.jpg";
                                                                      }else{ echo $row['img'];} ?>"></td>
                                                <td><?= $row['nome'] ?></td>
                                                <td><?= $row['preco'] ?></td>
                                                <td><form method="post"><input type="hidden" name="id" value="<?= $row['id'] ?>"><button type="submit" class="btn btn-danger" name="dell">Apagar</button></form></td>
                                            </tr>

                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Destak.
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->
    <div class="right-bar">
        <div data-simplebar="init" class="h-100"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -15px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
                                <div class="rightbar-title px-3 py-4">
                                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                                        <i class="mdi mdi-close noti-icon"></i>
                                    </a>
                                    <h5 class="m-0">Settings</h5>
                                </div>

                                <!-- Settings -->
                                <hr class="mt-0">
                                <h6 class="text-center mb-0">Choose Layouts</h6>

                                <div class="p-4">
                                    <div class="mb-2">
                                        <img src="<?= $url ?>assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                                    </div>
                                    <div class="custom-control custom-switch mb-3">
                                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked="">
                                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                                    </div>

                                    <div class="mb-2">
                                        <img src="<?= $url ?>assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                                    </div>
                                    <div class="custom-control custom-switch mb-3">
                                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsstyle="<?= $url ?>assets/css/bootstrap-dark.min.css" data-appstyle="<?= $url ?>assets/css/app-dark.min.css">
                                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                                    </div>

                                    <div class="mb-2">
                                        <img src="<?= $url ?>assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                                    </div>
                                    <div class="custom-control custom-switch mb-5">
                                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appstyle="<?= $url ?>assets/css/app-rtl.min.css">
                                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                                    </div>


                                </div>

                            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 849px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 497px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div> <!-- end slimscroll-menu-->
    </div>
</div>
<!-- END layout-wrapper -->

<!-- JAVASCRIPT -->
<script src="<?= $url ?>assets/libs/jquery/jquery.min.js"></script>
<script src="<?= $url ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= $url ?>assets/libs/metismenu/metisMenu.min.js"></script>
<script src="<?= $url ?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?= $url ?>assets/libs/node-waves/waves.min.js"></script>

<!-- Bootrstrap touchspin -->
<script src="<?= $url ?>assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>

<script src="<?= $url ?>assets/js/pages/ecommerce-cart.init.js"></script>

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?= $url ?>assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= $url ?>assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= $url ?>assets/libs/jszip/jszip.min.js"></script>
<script src="<?= $url ?>assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= $url ?>assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="<?= $url ?>assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= $url ?>assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= $url ?>assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<script src="<?= $url ?>assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?= $url ?>assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
<!-- Responsive examples -->
<script src="<?= $url ?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= $url ?>assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="<?= $url ?>assets/js/pages/datatables.init.js"></script>

<script src="<?= $url ?>assets/js/cart.js"></script>
<script src="<?= $url ?>assets/js/app.js"></script>

</body>
</html>

