<?= $this->extend('layout/master_principal') ?>
<?= $this->section('css') ?>

<link rel="stylesheet" href="<?= asset('pgInicial.css','css') ?>">

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<main class="conteudo" id="1">
  <section class="conteudo-principal">
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide d-none d-sm-block">
        <div class="carousel-indicators">
          <?php for ($i = 0; $i < intdiv(count($reservas) + 1, 3); $i++) : ?>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?=  $i ?>" <?= $i === 0 ? 'class="active"  aria-current="true"' : ''?> aria-label="Slide <?= ($i+1) ?>"></button>
          <?php endfor; ?>
        </div>
        <div class="carousel-inner">
          <?php foreach ($reservas as $reserva) : ?>
            <?php if (($reserva->id - 1) % 3 === 0) : ?>
              <div class="carousel-item <?= $reserva->id == 1 ? 'active' : '' ?>">
                <div class="cards-wrapper">
                <?php endif; ?>
                <div class="card">
                  <div class="image-wrapper">
                    <img src="/public/assets/quartos/suíte/LondonClingon/suiteLC1.jpg" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?= $reserva->quarto->tipo ?></h5>
                    <p class="card-text"><?= $reserva->quarto->descricao ?></p>
                    <div class="buttons">

                      <a href="<?= url_to('visualizar.quarto',(int)$reserva->quarto->id) ?>" class="btn btn-primary"><strong>Visualizar quarto</strong></a>
                      <?php if(str_contains(mb_convert_case($reserva->quarto->tipo,MB_CASE_LOWER),'suíte')) : ?>
                      <p class="tamanho"><strong>Estilo: Suíte</strong></p>
                      <?php elseif(str_contains(mb_convert_case($reserva->quarto->tipo,MB_CASE_LOWER),'casal')) : ?>
                        <p class="tamanho"><strong>Estilo: Casal</strong></p>
                      <?php elseif(str_contains(mb_convert_case($reserva->quarto->tipo,MB_CASE_LOWER),'solteiro')): ?>
                        <p class="tamanho"><strong>Estilo: Solteiro</strong></p>
                      <?php elseif(str_contains(mb_convert_case($reserva->quarto->tipo,MB_CASE_LOWER),'família')): ?>
                        <p class="tamanho"><strong>Estilo: Família</strong></p>
                      <?php endif; ?>
                      <div class="card-footer">
                        <p class="dispo"><strong><?= $reserva->reserva ?></strong></p>
                      </div>

                    </div>
                  </div>
                </div>
                <?php if($reserva->id % 3 == 0 || count($reservas) == $reserva->id) : ?>
                </div>
              </div>
              <?php endif;?>
            <?php endforeach; ?>


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div id="carouselExampleIndicatorsSmallScreen" class="carousel slide d-sm-none">
        <div class="carousel-indicators">
          <?php for ($i = 0; $i < intdiv(count($reservas) + 1, 3); $i++) : ?>
            <button type="button" data-bs-target="#carouselExampleIndicatorsSmallScreen" data-bs-slide-to="<?= $i ?>" class="active" aria-current="true" aria-label="Slide <?= $i ?>"></button>
          <?php endfor; ?>
        </div>

      </div>
    </div>
  </section>

  <section class="Descricao">
    <br>
    <p></p>
    <p></p>
  </section>

  <section class="text">

  </section>
  <?= $this->endSection() ?>