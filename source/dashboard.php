
<!doctype html>
<html lang="en">

    <head>
    
    <meta charset="utf-8" />
    <title>Destak | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/fav.png">

    <!-- jquery.vectormap css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

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
                                    <h4 class="mb-0">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Destak</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->




                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body border-bottom">

                                        <div class="user-chat-border">
                                            <div class="row">
                                                <div class="col-md-5 col-9">
                                                    <h5 class="font-size-15 mb-1">Sistema</h5>
                                                    <p class="text-muted mb-0"><i class="mdi mdi-circle text-success align-middle mr-1"></i> On</p>
                                                </div>
                                                <div class="col-md-7 col-3">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chat-widget">
                                            <div class="chat-conversation" data-simplebar style="max-height: 292px;">
                                                <ul class="list-unstyled mb-0 pr-3">
                                                    <li>
                                                        <div class="conversation-list">
                                                            <div class="chat-avatar">
                                                                <img src="https://thumbs.dreamstime.com/b/mensagem-de-advert%C3%AAncia-sobre-um-erro-no-sistema-operacional-vetor-119823631.jpg" alt="">
                                                            </div>
                                                            <div class="ctext-wrap">
                                                                <div class="conversation-name">Mensagem do Sistema</div>
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0">
                                                                        Versão inicial do sistema entregue ao consumidor
                                                                    </p>
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0">
                                                                        Itens para futuras atualizações:<br>
                                                                        *Salvar PDF na nuvem<br>
                                                                        *Sistema de login<br>
                                                                        *Gerar graficos de preços e orçamentos.

                                                                    </p>
                                                                </div>
                                                                <p class="chat-time mb-0"><i class="mdi mdi-clock-outline align-middle mr-1"></i> Hora X</p>
                                                            </div>
                                                            
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                <!-- end row -->
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title mb-4">Funções atuais do sistema</h4>

                                        <div data-simplebar style="max-height: 330px;">
                                            <ul class="list-unstyled activity-wid">
                                                <li class="activity-list">
                                                    <div class="activity-icon avatar-xs">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                            <i class="ri-edit-2-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            
                                                        </div>
                                                        
                                                        <div>
                                                            <p class="text-muted mb-0">Adicionado “Cadastrar, listar e apagar material”</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="activity-list">
                                                    <div class="activity-icon avatar-xs">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                            <i class="ri-user-2-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            
                                                        </div>
                                                        
                                                        <div>
                                                            <p class="text-muted mb-0">Adicionado “Cadastrar orçamentos com N materiais”</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="activity-list">
                                                    <div class="activity-icon avatar-xs">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                            <i class="ri-bar-chart-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            
                                                        </div>
                                                        
                                                        <div>
                                                            <p class="text-muted mb-0">Funcionalidade de “Baixar o CONTRATO de orçamento final do cliente”</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="activity-list">
                                                    <div class="activity-icon avatar-xs">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                            <i class="ri-mail-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <div>
                                                           
                                                        </div>
                                                        
                                                        <div>
                                                            <p class="text-muted mb-0">Funcionalidade “Opções detalhistas gerais de temas para o site, otimizações para dispositivos moveis, resoluções de bugs e otimização de scrips”</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

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
                                                <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                                            </div>
                                            <div class="custom-control custom-switch mb-3">
                                                <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked="">
                                                <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                                            </div>

                                            <div class="mb-2">
                                                <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                                            </div>
                                            <div class="custom-control custom-switch mb-3">
                                                <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsstyle="assets/css/bootstrap-dark.min.css" data-appstyle="assets/css/app-dark.min.css">
                                                <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                                            </div>

                                            <div class="mb-2">
                                                <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                                            </div>
                                            <div class="custom-control custom-switch mb-5">
                                                <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appstyle="assets/css/app-rtl.min.css">
                                                <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                                            </div>


                                        </div>

                                    </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 849px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 497px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div> <!-- end slimscroll-menu-->
            </div>
        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- jquery.vectormap map -->
        <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
