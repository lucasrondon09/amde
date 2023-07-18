<?php

helper('config');

$redesSociais       = redesSociais();
$googleAnalytics    = googleAnalytics();
$metaTags           = metaTags();

define('INSTAGRAM', $redesSociais->instagram);
define('FACEBOOK', $redesSociais->facebook);
define('YOUTUBE', $redesSociais->youtube);
define('WHATSAPP', $redesSociais->whatsapp);
define('GOOGLE_ANALYTICS', $googleAnalytics->script);
define('META_DESCRIPTION', $metaTags->descricao);
define('META_KEYWORDS', $metaTags->palavras_chave);


?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= META_DESCRIPTION?>">
    <meta name="keywords" content="<?= META_KEYWORDS?>">
    <meta name="author" content="Lucas Rondon">
    <title>VMI Soluções Web</title>
    <link rel="stylesheet" href="<?= base_url('assets/site/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/site/fontawesome-free-6.2.1-web/css/all.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/site/css/fancybox.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/site/css/custom.css')?>" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <!--SCRIPT GOOGLE ANALYTICS-->
    <?= GOOGLE_ANALYTICS?>
    <!--SCRIPT GOOGLE ANALYTICS-->
  </head>
  <body>
    <header>
    <div class="menu-top">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 text-white">
                    <span class="small font-weight-light">
                        <span class="pr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                            (65) 98451-8769
                        </span>
                        <span class="mr-2">|
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                            comercial@vmisolucoesweb.com.br
                        </span>
                    </span>
                </div>  
                <div class="col-md-6">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link text-light opacity-50 px-2" aria-current="page" href="<?= base_url('Admin');?>"><small>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                                    </svg>
                                    Acesso Administrativo</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('Home')?>"><img src="<?= base_url('assets/site/img/logo.png')?>" alt="Axons Neurologia" width="200"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" aria-current="page" href="<?= base_url('Home');?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" aria-current="page" href="<?= base_url('Sobre');?>">Quem Somos</a>
                    </li>
                    <li class="nav-item dropdown text-uppercase">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Serviços
                        </a>
                        <ul class="dropdown-menu shadow">
                            <?php foreach ($servicos as $servicoItem):?>
                                <li>
                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <img src="<?= $servicoItem->capa;?>" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9">
                                            <h6 class="text-primary fw-bold"><?= $servicoItem->titulo;?></h6>
                                            <p class="text-secondary"><?= $servicoItem->subtitulo;?></p>
                                            <a href="<?= base_url('Servicos/'.$servicoItem->slug);?>" class="btn btn-primary btn-sm rounded-pill px-4">Saiba mais</a>
                                        </div>
                                    </div>
                                </li>
                                <hr>
                            <?php endforeach;?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Atendimento
                        </a>
                        <ul class="dropdown-menu shadow">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <img src="<?= base_url('assets/site/img/contatos.png')?>" class="img-fluid">
                                </div>
                                <div class="col-md-6 text-center">
                                    <h6 class="mb-3 text-primary fw-bold text-uppercase">Contatos</h6>
                                        <ul class="list-unstyled">
                                            <li class="text-secondary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                                </svg>
                                                (65)98451-8769
                                            </li>
                                            <li class="text-secondary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                                </svg>
                                                comercial@vmisolucoesweb.com.br
                                            </li>

                                        </ul>

                                    <a href="<?= base_url('Contatos');?>" class="btn btn-primary btn-sm rounded-pill w-100 mt-3 text-uppercase">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                        </svg>
                                        Entre em contato
                                    </a>
                                    <hr>
                                    <p class="text-danger small mt-4">Atendimento de seg. a sex. das 08:00 às 18:00</p>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>
                
                
                <div class="d-flex ">
                    <a href="<?= base_url('Agendamento-Consulta');?>" class="btn btn-sm btn-menu btn-outline-primary py-2 px-4 text-uppercase rounded-pill d-flex  align-items-center" type="submit">
                        <i class="fa-2x fa-solid fa-circle-user"></i>
                        <div class="mx-2 my-0 py-0">Acessar Painel do Cliente</div>
                    </a>
                </div>
            </div>
        </div>
    </nav>    
    
    </header>