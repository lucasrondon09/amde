
<main>
    <div class="bg-white my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <h6 class="mb-0 text-primary "><a href="<?= base_url('Servicos')?>" class="text-primary text-decoration-none fw-bolder">SERVIÇOS</a></h6>
                    <h1 class="text-secondary fw-bold"><?= $fields->titulo?></h1>
                    <h5 class="text-secondary fw-bold"><?= $fields->subtitulo?></h5>
                </div>
                <div class="col-md-12">
                    <div class="card w-100 bg-light shadow border-0 h-100 p-5" >
                        <div class="card-body">
                            <?= $fields->texto?>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</main>
