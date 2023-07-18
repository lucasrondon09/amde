
<main>
    <section id="sobre">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-12">
                    <h1 class="text-primary"><span class="ps-2 fw-bold"><?= $pagina->titulo?></span></h1>
                    <h5><?= $pagina->subtitulo?></h5>
                    <?= $pagina->texto?>
                </div>
            </div>
            <!--
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Infraestrutura</h3>
                </div>
            </div>
            <div class="row pb-5">
                <?php foreach($imagens as $imagemItem):?>
                    <div class="col-md-4">
                        <a href="<?= $imagemItem->imagem?>" data-fancybox="gallery">
                            <div class="mb-3 pics animation all 3">
                                <img src="<?= $imagemItem->imagem?>" alt="" class="img-fluid w-100">
                            </div>	
                        </a>	
                    </div>
                <?php endforeach;?>
            </div>
            -->
        </div>
    </section>
</main>
