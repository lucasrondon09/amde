<?php 
$session = \Config\Services::session();
$validate = \Config\Services::validation();
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>E-mail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Admin/home')?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('Admin/Email')?>">E-mail</a></li>
              <li class="breadcrumb-item active">Configurar Servidor</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card">
              <h3 class="card-title mt-3">
                <a href="<?= base_url('Admin/Email')?>" class="text-decoration-none text-dark">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </a>
                Configurar Servidor de E-mail
              </h3>
              <!-- form start -->
              <?php

              if(!empty($session->getFlashdata())){
                $alert = $session->getFlashdata();
                
                if(key($alert) == 'success'){
                  
                  $classAlert = 'success';
                  $message    = $session->getFlashdata('success');
                }else{

                  $classAlert = 'danger';
                  $message    = $session->getFlashdata('error');
                }
              }

              if(isset($alert)):
              
              ?>    
                <div class="row mt-4 px-3">
                  <div class="col-12">
                    <div class="alert alert-<?= $classAlert;?> alert-dismissible fade show" role="alert">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                      </svg>
                      <?= $message;?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                </div>                    
              <?php endif;?>
              <div class="row">
                <div class="col-12">
                  <span class="text-danger"><?= $validate->listErrors(); ?></span>
                </div>
              </div>
              <?= form_open(base_url('Admin/Email/configurar-servidor')) ?>
              <?= csrf_field() ?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nome">Descrição</label>
                        <input type="text" class="form-control" name="descricao" value="<?= $fields->id?>" hidden="hidden">
                        <input type="text" class="form-control" name="descricao" value="<?= $fields->descricao?>">
                    </div>
                    <div class="form-group">
                        <label for="nome">Protocolo</label>
                        <input type="text" class="form-control" name="protocolo" value="<?= $fields->protocolo?>">
                    </div>
                    <div class="form-group">
                        <label for="nome">SMTP Host</label>
                        <input type="text" class="form-control" name="smtp_host" value="<?= $fields->smtp_host?>">
                    </div>
                    <div class="form-group">
                        <label for="nome">SMTP Porta</label>
                        <input type="text" class="form-control" name="smtp_porta" value="<?= $fields->smtp_porta?>">
                    </div>
                    <div class="form-group">
                        <label for="nome">SMTP Usuário</label>
                        <input type="text" class="form-control" name="smtp_usuario" value="<?= $fields->smtp_usuario?>">
                    </div>
                    <div class="form-group">
                        <label for="nome">SMTP Senha</label>
                        <input type="text" class="form-control" name="smtp_senha" value="<?= $fields->smtp_senha?>">
                    </div>
                    <div class="form-group">
                        <label for="nome">SMTP Criptografia</label>
                        <input type="text" class="form-control" name="smtp_criptografia" value="<?= $fields->smtp_criptografia?>">
                    </div>
                    <div class="form-group">
                        <label for="nome">Tipo de E-mail</label>
                        <input type="text" class="form-control" name="tipo_email" value="<?= $fields->tipo_email?>">
                    </div>
                    <div class="form-group">
                        <label for="nome">Remetente</label>
                        <input type="text" class="form-control" name="remetente" value="<?= $fields->remetente?>">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="submit">Salvar</button>
                </div>
                <?= form_close() ?>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

