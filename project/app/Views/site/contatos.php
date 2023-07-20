<!-- app/Views/site/masterpage.php -->
<?= $this->extend('site/masterpage') ?>

<!-- START CONTENT -->
<?= $this->section('content') ?>
<!-- Start Bradcaump area -->
<div class="ml-bradcaump-area bg-3 ptb-100 smpb-50 xspt-60" data-black-overlay="5">
    <div class="container">
        <div class="bradcaump-wrap text-center">
            <h2 class="bradcaump-title">Contatos</h2>
            <nav class="bradcaump-inner">
                <a class="breadcrumb-item" href="<?= base_url('/')?>">Página Inicial</a>
                <span class="brd-separetor">/</span>
                <span class="breadcrumb-item active">Contatos</span>
            </nav>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->

<div class="ml-contact-page-wrap ptb-100 smptb-60 xsptb-40 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="ml-contact-form-inner bg-4" data-black-overlay="7">
                    <?= form_open(base_url('Contatos')) ?>
                        <div class="input-box">
                            <input type="text" name="nome" placeholder="Seu nome*">
                            <input type="email" name="email" placeholder="Seu e-mail*">
                        </div>
                        <div class="input-sub">
                            <input type="text" name="assunto" placeholder="Assunto*">
                        </div>
                        <div class="input-message">
                            <textarea name="mensagem" placeholder="Escreva sua mensagem......."></textarea>
                        </div>
                        <div class="send-btn">
                            <button type="submit" class="ml-btn btn-light btn-large btn-large-5">Enviar Mensagem</button>
                        </div>
                    <?= form_close() ?>
                </div>
                <p class="form-messege"></p>
            </div>
            <div class="col-sm-6">
                <div class="ml-contact-location">
                    <div class="ml-contact-location-wrap  mb-50">
                        <div class="single-contact-address">
                            <div class="address-icon">
                                <i class="zmdi zmdi-pin"></i>
                            </div>
                            <div class="address-details">
                                <p>R. Acre, 161 - Cpa II <br>  Cuiabá - MT, 78055-518</p>
                            </div>
                        </div>
                        <div class="single-contact-address">
                            <div class="address-icon">
                                <i class="zmdi zmdi-phone"></i>
                            </div>
                            <div class="address-details">
                                <p><a href="javascript:;">(65) 2127-3198</a></p>
                                <p><span class="fw-bold">Horário de Atendimento:</span> <span class="text-danger">07:30 às 11:30 de Segunda a Sexta-feira</span></p>
                            </div>
                        </div>
                        <div class="single-contact-address">
                            <div class="address-icon">
                                <i class="zmdi zmdi-email"></i>
                            </div>
                            <div class="address-details">
                                <p><a href="mailto:atendimento@amde.com.br">atendimento@amde.com.br</a></p>
                                <p><a href="mailto:faleconosco@amde.com.br">faleconosco@amde.com.br</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- Start of Google Map Area -->
                    <div class="map-contacts">
                        <div id="googleMap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d7686.975231312306!2d-56.051795!3d-15.565575!3m2!1i1024!2i768!4f13.1!2m1!1s419%2C%20R.%20Acre%2C%20259%20-%20Cpa%20II%2C%20Cuiab%C3%A1%20-%20MT%2C%2078055-518%2C%20Brasil!5e0!3m2!1spt-BR!2sus!4v1689787182642!5m2!1spt-BR!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <!-- End of Google Map Area -->
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<!-- END CONTENT -->

