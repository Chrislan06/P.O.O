<?= $this->extend('layout/master_principal') ?>

<?= $this->section('css') ?>

<link rel="stylesheet" href="<?= asset('exQuarto.css','css') ?>"/>

<?= $this->endSection() ?>

  <?= $this->section('content') ?>

    <main class="conteudo" id="1">
      <section class="Imagem-quarto">
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <?php for($i = 1; $i <= 3; $i++) :?>
            <div class="carousel-item <?= $i === 1 ? 'active': '' ?>">
              <img src="<?= asset($foto->link."$i.jpg",'quartos') ?>" class="d-block w-100" alt="Hotel <?= $i ?>">
            </div>
            <?php endfor ?>
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
      </section>

      <div class="content">

        <div class="left-content">


          <div class="calendar">
          <form action="<?= url_to('reserva.agendar') ?>" method="post">
              <input type="hidden" name="idReserva" value="<?= $reserva->id ?>">
              <h2>Digite a data de início e fim de estadia</h2>
              
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Início</span>
                <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="dataInicio" value="<?=$reserva->retornarData(new DateTime($reserva->dataInicio)) ?>">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Fim</span>
                <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="dataFim" value="<?= $reserva->retornarData(new DateTime($reserva->dataFim)) ?>">
              </div>
              
              <button class="btn btn-danger" type="submit">Salvar</button>
            </form>
          </div>

            <div class="infos">
            <?php foreach($quarto->retornarItens() as $item) : ?>
            <p><?= $item ?></p>
            <?php endforeach; ?>
            </div>

        </div>

        <div class="right-content">
          <div class="texto">
            <h2>Descrição do quarto:</h2>
            <?php foreach($quarto->retornarDescricao() as $descricao) : ?>
            <?php if(strlen($descricao) > 1) : ?>
            <p><?= $descricao ?></p>
            <?php endif; ?>
            <?php endforeach; ?>
          </div>

          <div class="buttons">
            <?php if($reserva->verificarReserva() && $reserva->reserva == 'Disponível') : ?>
            <a href="<?= url_to('reservar.cliente',(int)$reserva->id) ?>" class="btn btn-primary btn-lg" id="reservar">Reservar Quarto</a>
            <?php elseif($reserva->verificarReserva() && $reserva->reserva == 'Reservado') : ?>
            <a href="<?= url_to('cancelar.cliente',(int)$reserva->idCliente) ?>" class="btn btn-primary btn-lg" id="cancelar">Cancelar Reserva</a>
            <a href="<?= url_to('informacoes.cliente',$reserva->idCliente) ?>" class="btn btn-primary btn-lg" id="info">Informações de Reserva</a>
            <?php endif; ?>
          </div>

        </div>

      </div>
    </main>
<?= $this->endSection() ?>

<?= $this->section('js') ?>


<?= $this->endSection() ?>