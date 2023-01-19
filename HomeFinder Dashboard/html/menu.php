<?php  session_start();?>


<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>HomeFinder</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image" href="../assets/img/icon-homefinder.png"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <!-- <link rel="stylesheet" href="../assets/css/demo.css" /> -->

    <!-- Vendors CSS -->
    <!-- <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" /> -->

    <!-- <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" /> -->

    <link rel="stylesheet" href="../assets/css/prettycheckbox.css" />

    <link rel="stylesheet" href="../assets/css/select2.css" />
    <link rel="stylesheet" href="../assets/css/datatables.css" />
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>

  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Menu -->
        <?php


if(isset($_SESSION['nomeUser'])){ ?>
        
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
           <a href="../../../fase1/index.php"> <img src="../assets/img/logo-HomeFinder-mini.png" alt=""></a>

            <a href="#" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1 mt-3" id="nav">
            <!-- homepage -->
            <li class="menu-item">
              <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-alt 2"></i>
                <div data-i18n="Analytics">Escritório</div>
              </a>
            </li>

            <!-- Imoveis -->
            <li class="menu-item">
              <a href="imoveis.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-building-house"></i>
                <div data-i18n="Layouts">Imóveis</div>
              </a>
            </li>


            <li class="menu-item">
              <a href="inquilinos.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user"></i>
                <div data-i18n="Account Settings">Inquilinos</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="arrendamentos.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-key"></i>
                <div data-i18n="Authentications">Arrendamentos</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="reservas.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-hotel"></i>
                <div data-i18n="Authentications">Reservas</div>
              </a>
            </li>

            <!-- <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-hotel"></i>
                <div data-i18n="Misc">Reservas</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="criar_reserva.php" class="menu-link">
                    <div data-i18n="Error">Criar Reserva</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cons_reservas.php" class="menu-link">
                    <div data-i18n="Under Maintenance">Consultar Reservas</div>
                  </a>
                </li>
              </ul>
            </li> -->

            <li class="menu-item">
              <a href="inventario.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                <div data-i18n="Basic">Inventários</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="financas.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-euro"></i>
                <div data-i18n="User interface">Finanças</div>
              </a>
              <!-- <ul class="menu-sub">
                <li class="menu-item">
                  <a href="ui-accordion.html" class="menu-link">
                    <div data-i18n="Accordion">Consultar Balanço</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-alerts.html" class="menu-link">
                    <div data-i18n="Alerts">Adicionar Despesa</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-badges.html" class="menu-link">
                    <div data-i18n="Badges">Adicionar Pagamento</div>
                  </a>
                </li>
              </ul> -->
            </li>

            <li class="menu-item">
              <a href="intervencoes.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-wrench"></i>
                <div data-i18n="Extended UI">Intervenções</div>
              </a>
              <!-- <ul class="menu-sub">
                <li class="menu-item">
                  <a href="intervencoes.php" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Intervenções Pendentes</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="intervencoes_aceites.php" class="menu-link">
                    <div data-i18n="Text Divider">Intervenções Marcadas</div>
                  </a>
                </li>
              </ul> -->
            </li>

            <li class="menu-item">
              <a href="documentos.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Boxicons">Documentos</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="estatisticas.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-bar-chart"></i>
                <div data-i18n="Boxicons">Estatísticas</div>
              </a>
            </li>

            <!-- Ferramentas -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Ferramentas</span></li>
            <!-- calendario -->
            <li class="menu-item">
              <a href="calendario.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="Form Elements">Calendário</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="contactos.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-contact"></i>
                <div data-i18n="Form Layouts">Contactos</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="docs_modelo.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">Documentos Modelo</div>
              </a>
            </li>

            <!-- <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">Documentos Modelo</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="form-layouts-vertical.html" class="menu-link">
                    <div data-i18n="Vertical Form">d1</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-layouts-horizontal.html" class="menu-link">
                    <div data-i18n="Horizontal Form">Horizontal Form</div>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- help -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Ajuda</span></li>
            
            <li class="menu-item">
              <a href="../../../fase1/contactos.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-help-circle"></i>
                <div data-i18n="Form Layouts">Suporte</div>
              </a>
            </li>
          </ul>
        </aside>
        
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

          <!-- Navbar -->
          <nav
            class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>



            <!-- PESQUISA -->
            <div class="navbar-nav align-items-end">
              <div class="nav-item navbar-search mb-0">
                <div class="input-group rounded">
                  <input type="search" class="form-control rounded" placeholder="Pesquise aqui" aria-label="Search" aria-describedby="search-addon" />
                  <span class="input-group-text border-0" id="search-addon">
                    <i class="bx bx-search-alt-2"></i>
                  </span>
                </div>
              </div>
            </div>
            <!-- PESQUISA -->

            <!-- BOTAO ADD -->
            <div class="btn-group ms-3">
              <button type="button" class="btn btn-success btn-icon rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bx bx-plus-medical"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="reg_imovel.php"> <i class="menu-icon tf-icons bx bx-building-house"></i>Adicionar Imóvel </a></li>
                <li><a class="dropdown-item" href="reg_inqui.php"><i class="menu-icon tf-icons bx bxs-user"></i>Adicionar Inquilino</a></li>
                <li><a class="dropdown-item" href="reg_arrendamento.php"><i class="menu-icon tf-icons bx bxs-key"></i>Adicionar Arrendamento</a></li>
                <li><a class="dropdown-item" href="reg_reserva.php"><i class="menu-icon tf-icons bx bxs-hotel"></i>Adicionar Reserva</a></li>
                <li><a class="dropdown-item" href="reg_inventario.php"><i class="menu-icon tf-icons bx bx-list-ul"></i>Adicionar Inventário</a></li>
                <li><a class="dropdown-item" href="reg_movimento.php"><i class="menu-icon tf-icons bx bx-plus-circle"></i>Adicionar Receita</a></li>
                <li><a class="dropdown-item" href="reg_movimento.php"><i class="menu-icon tf-icons bx bx-minus-circle"></i>Adicionar Despesa</a></li>
                <li><a class="dropdown-item" href="reg_intervencao.php"><i class="menu-icon tf-icons bx bxs-wrench"></i>Adicionar Intervenção</a></li>
                <li><a class="dropdown-item" href="reg_doc.php"><i class="menu-icon tf-icons bx bx-file"></i>Adicionar Documento</a></li>
                <li><a class="dropdown-item" href="reg_evento.php"><i class="menu-icon tf-icons bx bx-calendar"></i>Adicionar Evento</a></li>
                <li><a class="dropdown-item" href="reg_contato.php"><i class="menu-icon tf-icons bx bxs-contact"></i>Adicionar Contacto</a></li>
            
              </ul>
            </div>
            <!-- BOTAO ADD -->

            <!-- BOTAO CALENDARIO -->
            <a href="calendario.php">
            <button type="button" class="btn btn-success rounded-pill btn-icon tf-icons bx bx-calendar btn-primary ms-3">
            </button>
          </a>
            <!-- /BOTAO CALENDARIO -->



            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <ul class="navbar-nav flex-row align-items-center ms-auto">
          

                <!-- Notification -->
                <!-- <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <i class="bx bx-bell bx-sm"></i>
                    <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end py-0">
                    <li class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h5 class="text-body mb-0 me-auto">Notification</h5>
                        <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
                      </div>
                    </li>
                    <li class="dropdown-notifications-list scrollable-container ps">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../assets/img/avatars/1.png" alt="" class="w-px-40 h-auto rounded-circle">
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                              <p class="mb-0">Won the monthly best seller gold badge</p>
                              <small class="text-muted">1h ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Charles Franklin</h6>
                              <p class="mb-0">Accepted your connection</p>
                              <small class="text-muted">12hr ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../assets/img/avatars/2.png" alt="" class="w-px-40 h-auto rounded-circle">
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">New Message ✉️</h6>
                              <p class="mb-0">You have new message from Natalie</p>
                              <small class="text-muted">1h ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-cart"></i></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                              <p class="mb-0">ACME Inc. made new order $1,154</p>
                              <small class="text-muted">1 day ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../assets/img/avatars/9.png" alt="" class="w-px-40 h-auto rounded-circle">
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Application has been approved 🚀 </h6>
                              <p class="mb-0">Your ABC project application has been approved.</p>
                              <small class="text-muted">2 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-pie-chart-alt"></i></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Monthly report is generated</h6>
                              <p class="mb-0">July monthly financial report is generated </p>
                              <small class="text-muted">3 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../assets/img/avatars/5.png" alt="" class="w-px-40 h-auto rounded-circle">
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Send connection request</h6>
                              <p class="mb-0">Peter sent you connection request</p>
                              <small class="text-muted">4 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../assets/img/avatars/6.png" alt="" class="w-px-40 h-auto rounded-circle">
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">New message from Jane</h6>
                              <p class="mb-0">Your have new message from Jane</p>
                              <small class="text-muted">5 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-error"></i></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">CPU is running high</h6>
                              <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                              <small class="text-muted">5 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
                    <li class="dropdown-menu-footer border-top">
                      <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                        View all notifications
                      </a>
                    </li>
                  </ul>
                </li> -->
                <!-- / Notification
                
falta o if do php

                <-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="avatar avatar-online">
                      <img id="fotoperfil2" alt="" class="w-px-40 h-100 rounded-circle">
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img id="fotoperfil3" alt="" class="w-px-40 h-auto rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span id="nomeUser2" class="fw-semibold d-block"></span>
                            <small id="tipoUser1" class="text-muted"></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../../../fase1/perfil.php">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">O meu perfil</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Definições</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../../../fase1/pagamentos.php">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Pagamentos</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../../../fase1/contactos.php">
                        <i class="bx bx-support me-2"></i>
                        <span class="align-middle">Contatos</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../../../fase1/sobre.php">
                        <i class="bx bxs-info-circle me-2"></i>
                        <span class="align-middle">Sobre</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../../../fase1/precos.php">
                        <i class="bx bx-dollar me-2"></i>
                        <span class="align-middle">Subscrição</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <button class="dropdown-item" onclick="logout()">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </button>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
                
      
              </ul>
            </div>
            
            <?php

} ?>
          </nav>
