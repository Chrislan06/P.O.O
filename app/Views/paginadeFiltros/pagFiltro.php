<?= $this->extend('layout/master_principal') ?>

<?= $this->section('css') ?>
    <link rel="stylesheet" href="<?= asset('pagFiltro.css','css') ?>" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<main>
      <h1>Os resultados aparecerão abaixo</h1>
      <div class="filtro">
        <h2>Filtrar por:</h2>
        <div class="buttons">
          <button class="button">Reservados</button>
          <button class="button">Disponíveis</button>
          <button class="button">Indisponíveis</button>
          <button class="button">Suíte</button>
          <button class="button">Casal</button>
          <button class="button">Solteiro</button>
          <button class="button">Família</button>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach($reservas as $reserva) : ?>
        <div class="quarto" id="quartoTeste">

          <div class="col">
            <div class="card h-100">
              <img
                src="/public/assets/quartos/suíte/LondonClingon/suiteLC1.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title"><?= $reserva->quarto->tipo ?></h5>
                <p class="card-text">
                  <?= $reserva->quarto->retornarDescricao()[0] ?>
                </p>
                <a href="<?= url_to('visualizar.quarto',(int)$reserva->idQuarto) ?>" class="btn btn-primary">Vizualizar quarto</a>
                <?php if(str_contains(mb_convert_case($reserva->quarto->tipo,MB_CASE_LOWER),'suíte')) : ?>
                <p class="tamanho"><strong>Tam: Suíte</strong></p>
                <?php elseif(str_contains(mb_convert_case($reserva->quarto->tipo,MB_CASE_LOWER),'família')) : ?>
                <p class="tamanho"><strong>Tam: Família</strong></p>
                <?php elseif(str_contains(mb_convert_case($reserva->quarto->tipo,MB_CASE_LOWER),'solteiro')) : ?>
                <p class="tamanho"><strong>Tam: Solteiro</strong></p>
                <?php elseif(str_contains(mb_convert_case($reserva->quarto->tipo,MB_CASE_LOWER),'casal')) : ?>
                <p class="tamanho"><strong>Tam: Casal</strong></p>
                <?php endif; ?>
                <div class="card-footer">
                  <p class="dispo"><?= $reserva->reserva ?></p>
                </div>
              </div>
            </div>
          </div>

        </div>
<?php endforeach; ?>
        
        
        
      </div>
      
    </main>
 <?= $this->endSection() ?>

 <?= $this->section('js') ?>
  <script src="<?= asset('pagFiltro.js','js')?>"></script>
  <?= $this->endSection() ?>
