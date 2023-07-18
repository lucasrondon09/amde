<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sobre</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Admin/home');?>">Home</a></li>
              <li class="breadcrumb-item active">Sobre</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card text-center border-0 shadow">
              <div class="card-body">

                <img src="<?= $_ENV['ADMIN_LOGO']?>" class="img-circle elevation-2" alt="Start Site Logo">
                <h5 class="mt-2"><?= $_ENV['ADMIN_TITULO']?></h5>
                <hr>
                <ul class="list-unstyled">
                  <li><strong>ARQUITETURA</strong></li>
                  <li>Versão: <?= $_ENV['ADMIN_VERSAO']?></li>
                  <li>PHP: <?= $_ENV['ADMIN_VERSAO_PHP']?></li>
                  <li>MySQL: <?= $_ENV['ADMIN_VERSAO_MYSQL']?></li>
                  <li>Codeigniter: <?= $_ENV['ADMIN_VERSAO_CODEIGNITER']?></li>
                  <li>Bootstrap: <?= $_ENV['ADMIN_VERSAO_BOOTSTRAP']?></li>
                  <br>
                  <li>Desenvolvido em: <?= $_ENV['ADMIN_DATA_DESENVOLVIMENTO']?></li>
                  <li>Última Atualização: <?= $_ENV['ADMIN_DATA_ATUALIZACAO']?></li>
                  <br>
                  <li>Desenvolvido por: <a href="<?= $_ENV['DESENVOLVEDOR_TITULO']?>" target="_blank"><?= $_ENV['DESENVOLVEDOR_SITE']?></a></li>
                  <li><strong><?= $_ENV['ADMIN_TITULO']?> &copy; <?= date('Y')?> .</strong>Todos os direitos reservados.</li>
                  <hr>
                  <li>Desenvolvido a partir do projeto AdminLTE</li>
                  <li>Arquitetura front-end de código aberto licenciado sob a <strong>Licença MIT</strong></li>
                  <li>Direitos Autorais &copy; <a href="https://adminlte.io/" target="_blank">AdminLTE.io</a></li>
                </ul>
              </div>  
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->