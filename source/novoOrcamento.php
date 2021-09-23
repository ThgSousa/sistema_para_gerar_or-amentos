    <?php
    /*
    if (empty($_GET['id'])) {
        header('Location: '.$url);
    }

    if (isset($_POST['save'])) {
        if (empty($_POST['qty'])) {
            header('Location: '.$url);
        }
        $qtd_insert = sizeof($_POST['qty']);

        for($i = 0; $i <$qtd_insert; $i++) {
            $qty = $_POST['qty'][$i];
            $nomeCliente = $_POST['nomeCliente'][$i];
            $idmat = $_POST['idmat'][$i];

            $insert = $bdd->prepare("INSERT estimativa (qty,nomeCliente,pkMaterial) VALUES (?,?,?)");
            $insert->execute(array($qty,$nomeCliente,$idmat));

            header('Location: '.$url);
        }
    }
    */
      ?>
    <!doctype html>
    <html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Mobile | Orçamento</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/fav.png">

        <!-- jquery.vectormap css -->
        <link href="<?= $url ?>assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="<?= $url ?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="<?= $url ?>assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- twitter-bootstrap-wizard css -->
        <link rel="stylesheet" href="assets/libs/twitter-bootstrap-wizard/prettify.css">

        <!-- select2 css -->
        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- dropzone css -->
        <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="assets/libs/toastr/build/toastr.min.css">
    </head>

    <body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include("extends/header.php"); ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">


        <!--  Modal Opções -->
        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Orçamento novo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <div id="addproduct-nav-pills-wizard" class="twitter-bs-wizard">
                                            <ul class="twitter-bs-wizard-nav">
                                                <li class="nav-item">
                                                    <a href="#basic-info" class="nav-link" data-toggle="tab">
                                                        <span class="step-number">01</span>
                                                        <span class="step-title">Informações do cliente</span>
                                                    </a>
                                                </li>
                                                
                                                <li class="nav-item">
                                                    <a href="#metadata" class="nav-link" data-toggle="tab">
                                                        <span class="step-number">02</span>
                                                        <span class="step-title">Materiais</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#desc-info" class="nav-link" data-toggle="tab">
                                                        <span class="step-number">03</span>
                                                        <span class="step-title">Descrição</span>
                                                    </a>
                                                </li> 
                                            </ul>
                                            <div class="tab-content twitter-bs-wizard-tab-content">
                                                <div class="tab-pane" id="basic-info">
                                                    <h4 class="card-title">Informações do cliente</h4>
                                                    <p class="card-title-desc">Deixe esse passo em branco caso deseje imprimir do documento! </p>

                                                    <form>
                                                        <div class="form-group">
                                                            <label for="productname">Nome do comprador</label>
                                                            <input id="name" onchange="alterName()" type="text" class="form-control">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                
                                                                <div class="form-group">
                                                                    <label for="manufacturername">CPF do comprador</label>
                                                                    <input id="cpf" onchange="alterCPF()" name="manufacturername" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                
                                                                <div class="form-group">
                                                                    <label for="manufacturerbrand">Rua do comprador</label>
                                                                    <input id="rua" onchange="alterRua()" name="manufacturerbrand" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label for="price">Numero da casa</label>
                                                                    <input id="numero" onchange="alterNumero()" name="price" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="price">Bairro</label>
                                                                    <input id="bairro" onchange="alterBairro()" name="price" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </form>
                    
                                                </div>
                                                <div class="tab-pane" id="metadata">
                                                    <h4 class="card-title"></h4>
                                                    <p class="card-title-desc">Materiais que vamos usar</p>

                                                    <div class="row">
                                                        <div class="row no-gutters">
                                                            <?php
                                                                $stmt=$bdd->prepare("SELECT * FROM material ORDER BY id DESC");
                                                                $stmt->execute();
                                                                while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                                            ?>
                                                            <div class="col-xl-4 col-sm-6">
                                                                <div class="product-box">
                                                                    <div class="product-img">
                                                                        <img height="450" width="450" src="<?php if(empty($row['img'])){
                                                                        echo"https://www.inovegas.com.br/site/wp-content/uploads/2017/08/sem-foto.jpg";
                                                                      }else{ echo $row['img'];} ?>" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                    
                                                                    <div class="text-center">
                                                                        <h5 class="font-size-15"><a href="#" class="text-dark"><?= $row['nome']?></a></h5>

                                                                        <h5 class="mt-3 mb-0">R$ <?= $row['preco']?></h5>
                                                                        <a href="#" data-name="<?= $row['nome']?>" data-price="<?= $row['preco']?>" class="add-to-cart btn btn-primary" onClick="showSuccess()" >Add</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                            </div>
                                                        </div>

                                                    <table class="show-cart table">

                                                    </table>



                                                    Valor Total: R$ <b><span class="total-cart"></span></b>


                                                </div>
                                                <div class="tab-pane" id="desc-info">
                                                    <div class="form-group">
                                                        <label for="productdesc">Descrição do contrato</label>
                                                        Valor dos materiais = <span class="total-cart"></span>
                                                        <textarea class="form-control" id="productdesc" rows="5" onchange="alterDesc()">
O preço do da mão de obra e outros custos é de R$ ???? a ser pago com uma entrada de R$ XXXXX no ato da assinatura do contrato, mais uma parcela no valor de R$ XXXXX que será pago no prazo de até 30 dias a partir do momento da
assinatura deste contrato.
                                                        </textarea>
                                                    <div class="text-center mt-4">
                                                        <button type="submit" class="btn btn-primary mr-2 waves-effect waves-light" data-dismiss="modal" aria-label="Close">Fechar</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="previous"><a href="#">Anterior</a></li>
                                                <li class="next"><a href="#">Proximo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!--  Modal Itens -->
        <div class="modal fade bs-example-modal-lg" id="cart" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Novo Orçamento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post">
                        <div class="modal-body">
                            <table class="show-cart table">
      
                            </table>
                            <div>Preço: R$ <span class="total-cart"></span></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Fechar</button>
                            <button type="submit" name="save" class="btn btn-primary waves-effect waves-light">Salvar</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Orçamento</h4>

                                <div class="page-title-left">
                                    <div class="col">
                                      <button type="button" class="btn btn-success" onclick="window.print()">Salvar (PDF)</button>

                                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">Itens (<span class="total-count"></span>)</button>

                                      <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-xl">Opções</button>

                                      <button class="clear-cart btn btn-danger">Limpar</button>


                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div align="text-center">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div>
                                                    <h5>MOBILE MOVÉIS PLANEJADOS</h5>
                                                </div>

                                            </div>
                                        </div>
                                        <h6>
                                        CNPJ: XXXXXXX<br>
                                        END. RUA IRES VIANA, Nº 201<br>
                                        LOT. ADAUTO FROTA - PROX AO
                                        AEROPORTO<br>
                                        TEL. CONTATO: 9979-0199</h6><br>

                                        <h6>CONTRATO DE COMPRA E VENDA E TERMO DE GARANTIA</h6>


                                        Contrato de compra e venda que fazem entre si o vendedor Francisco Jucá de Sousa,<br>
                                        CNPJ: XXXXXX, residente na Rua Iris Viana, nº 201 ­ Lot. Adauto Frota,
                                        Rio Branco AC <br>e o comprador <span id="compName">_______________________________________________________</span>,
                                        CPF: <span id="compCPF">___________________________________</span>,<br>
                                        residente na Rua <span id="compRua">_______________________________________________</span>,nº <span id="compNum">____________</span>,<br>
                                        Bairro <span id="compBairro">______________________________________________________</span>, Rio Branco ­ AC.<br><br>

                                        Tem justo acordo a compra e venda de produtos mediante as seguintes condições e
                                        informações descritas a seguir.<br><br>
                                        <div id="desc">
                                            O preço do da mão de obra e outros custos é de R$ ????? a ser pago com uma entrada de ????? no ato da assinatura do contrato, mais uma parcela no valor de R$ ???? que será pago no prazo de até 30 dias a partir do momento da
                                            assinatura deste contrato.
                                        </div><br><br>

                                        O vendedor Francisco Jucá de Sousa se compromete com a entrega e instalação dos
                                        móveis a seguir discriminados:<br><br>

                                        <table class="show-carte table">

                                        </table>



                                        Valor dos materiais: R$ <b><span class="total-cart"></span></b><br><br>
                                        OBS. Cores, modelos e designs são os mesmos que foram acertados na primeira visita feita pelo vendedor.<br><br>

                                        O vendedor assegura assistência para os móveis planejados, observando-se os termos
                                        deste contrato, do Código Civil Brasileiro e da lei 8.078 (Código de Defesa do Consumidor) em
                                        seu art. 26, pelos prazos adiante estabelecidos, os quais têm seu início contando a partir da
                                        entrega e montagem final dos produtos.<br><br>

                                        Após a quitação do total do preço ajustado, o vendedor emitirá para o comprador uma
                                        nota de quitação dos produtos adquiridos, tornando o comprador legítimo proprietário dos
                                        móveis.<br><br>

                                        <h6>DATA e ALTERAÇÃO DE PROJETO</h6>

                                        O vendedor se compromete a entregar o produto até 35 dias úteis após a assinatura do
                                        contrato, sendo respeitados os acordos feitos no ato da compra.<br><br>

                                        Toda e qualquer mudança no projeto dos móveis só pode ser feita com anuência do
                                        vendedor e do comprador. O comprador fica ciente de que qualquer alteração, por ele solicitada,
                                        pode implicar no valor e prazo de entrega.<br><br>

                                        <h6>Pagamento</h6>

                                        Todo e qualquer pagamento será feito, exclusivamente, ao vendedor ou depósito em
                                        conta corrente da empresa. Nenhum pagamento poderá ser suspenso após a contratação do
                                        serviço.<br><br>

                                        <h6>Entrega</h6>

                                        A mercadoria será entregue no prazo estabelecido em contrato. Quando ocorrerem
                                        avarias no transporte da montagem, o vendedor tomará as providências necessárias para
                                        reposição das peças e dos produtos no menor prazo possível.<br><br>

                                        <h6>Instalação</h6>

                                        A instalação será acordada com antecedência entre as partes. O comprador deverá
                                        acompanhar ou designar pessoa de sua confiança para tal tarefa, se responsabilizando por
                                        identificação da parte hidráulica, elétrica, gás etc.<br><br>

                                        <h6>Assistência técnica e garantia</h6>

                                        O prazo de assistência técnica será por 01 (um) ano, que incluem regulagem de
                                        dobradiças e corrediças, troca de material com erro de fábrica, descolagem de fita borda causada
                                        por uso natural. Se for identificado pelo técnico o mau uso do móvel a empresa não se
                                        responsabiliza por futuros reparos.<br><br>

                                        Uma vez efetivado o contrato, não será permitido desistência por parte do comprador e
                                        do vendedor.<br><br>

                                        Firma-se o presente contrato.<br><br>


                                        Rio Branco ­ Acre, ___________________________ de <script>document.write(new Date().getFullYear())</script>.<br><br><br>

                                        VENDEDOR<br>
                                        _____________________________________________<br>

                                        COMPRADOR<br>
                                        _____________________________________________<br><br><br>

                                        Testemunha 1<br>
                                        _________________________________ CPF:<br>

                                        Testemunha 2<br>
                                        _________________________________ CPF:

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
                            <script>document.write(new Date().getFullYear())</script> © Mobile.
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

    <!-- twitter-bootstrap-wizard js -->
    <script src="<?= $url ?>assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

    <script src="<?= $url ?>assets/libs/twitter-bootstrap-wizard/prettify.js"></script>

    <!-- select 2 plugin -->
    <script src="<?= $url ?>assets/libs/select2/js/select2.min.js"></script>

    <!-- dropzone plugin -->
    <script src="<?= $url ?>assets/libs/dropzone/min/dropzone.min.js"></script>

    <!-- init js -->
    <script src="<?= $url ?>assets/js/pages/ecommerce-add-product.init.js"></script>

    <script src="<?= $url ?>assets/js/app.js"></script>
    <script src="<?= $url ?>assets/js/cart.js"></script>
    <!-- toastr plugin -->
    <script src="<?= $url ?>assets/libs/toastr/build/toastr.min.js"></script>

    <!-- toastr init -->
    <script src="<?= $url ?>assets/js/pages/toastr.init.js"></script>
        <script type="text/javascript">
        $('.bs-example-modal-xl').modal('show');
        function alterDesc() {
            var temp = document.getElementById('productdesc').value;
            document.getElementById('desc').innerHTML = temp;
        }
        function alterName() {
            var temp = document.getElementById('name').value;
            document.getElementById('compName').innerHTML = temp;
        }
        function alterCPF() {
            var temp = document.getElementById('cpf').value;
            document.getElementById('compCPF').innerHTML = temp;
        }
        function alterRua() {
            var temp = document.getElementById('rua').value;
            document.getElementById('compRua').innerHTML = temp;
        }
        function alterBairro() {
            var temp = document.getElementById('bairro').value;
            document.getElementById('compBairro').innerHTML = temp;
        }
        function alterNumero() {
            var temp = document.getElementById('numero').value;
            document.getElementById('compNum').innerHTML = temp;
        }
        function showSuccess() {
            Command: toastr["info"]("Adicionado com sucesso!", "Mensagem do sistema")

            toastr.options = {
              "closeButton": true,
              "debug": false,
              "newestOnTop": false,
              "progressBar": true,
              "positionClass": "toast-top-right",
              "preventDuplicates": false,
              "onclick": null,
              "showDuration": 300,
              "hideDuration": 100,
              "timeOut": 5000,
              "extendedTimeOut": 1000,
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            }
        }                
    </script>
    </body>
    </html>

