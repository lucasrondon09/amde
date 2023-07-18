
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/Admin/home">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5>Bem vindo, <?= session()->userName;?>!</h5>
              <p></p> 
              <a href="<?= base_url();?>" class="btn btn-info btn-sm text-decoration-none text-white" target="_blank">Acessar site</a>
            </div>

            <div class="invoice p-3">
              <div class="row">
                <div class="col-md-12"><h6 class="font-weight-bold text-secondary">Acesso Rápido <i class="fas fa-arrow-circle-right"></i></h6></div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>Usuários</h3>

                      <p>Visualizar registros</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="<?= base_url('Admin/Usuarios')?>" class="small-box-footer">Acessar <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>Notícias</h3>

                      <p>Visualizar registros</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-document-text"></i>
                    </div>
                    <a href="<?= base_url('Admin/Noticias')?>" class="small-box-footer">Acessar <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>Galeria</h3>

                      <p>Visualizar registros</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-images"></i>
                    </div>
                    <a href="<?= base_url('Admin/Galerias')?>" class="small-box-footer">Acessar <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>Serviços</h3>

                      <p>Visualizar registros</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-briefcase"></i>
                    </div>
                    <a href="<?= base_url('Admin/Servicos')?>" class="small-box-footer">Acessar <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
              </div>
            </div>
            

            <!-- Main content -->
            <div class="invoice p-3 my-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> <?= $_ENV['ADMIN_TITULO']?>
                    <small class="float-right">Data: <?= date('d/m/Y')?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-6 invoice-col">
                  <address>
                    <strong><?= $_ENV['CLIENTE_TITULO'];?></strong><br>
                    <?= $_ENV['CLIENTE_ENDERECO'];?><br>
                    Telefone: <?= $_ENV['CLIENTE_TELEFONE']?><br>
                    <a href="<?= base_url();?>" target="_blank"><?= base_url();?></a><br>
                    Ambiente: <?= $_ENV['CI_ENVIRONMENT']?>
                  </address>
                </div>
                <div class="col-sm-6 invoice-col">
                  <address>
                    <strong>ARQUITETURA</strong><br>
                    PHP: <?= $_ENV['SITE_VERSAO_PHP'];?><br>
                    MySQL: <?= $_ENV['SITE_VERSAO_MYSQL'];?><br>
                    Codeigniter: <?= $_ENV['SITE_VERSAO_CODEIGNITER'];?><br>
                    Bootstrap: <?= $_ENV['SITE_VERSAO_BOOTSTRAP'];?><br>
                    Última atualização: <?= $_ENV['SITE_DATA_ATUALIZACAO']?><br>
                  </address>
                </div>
              </div>
              <!-- /.row -->

            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->