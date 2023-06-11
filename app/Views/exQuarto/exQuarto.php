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

            <iframe
        src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23D81B60&ctz=America%2FFortaleza&showTabs=0&showCalendars=0&showTz=0&showPrint=0&showDate=1&showNav=1&src=NjQ2ZTQwNzY1Yjc2ZTE1Y2YwZDdlYjBjMTU1ZTQ3Yzc4YjRjZWEwNjRmZGJiMGY4MjNlNjk1YTY5OTk3NGY4YUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%233F51B5"
        style="border-width: 0"
        
        frameborder="0"
        scrolling="no"
      ></iframe>
      <a
      href="https://calendar.google.com/calendar/u/0?cid=NjQ2ZTQwNzY1Yjc2ZTE1Y2YwZDdlYjBjMTU1ZTQ3Yzc4YjRjZWEwNjRmZGJiMGY4MjNlNjk1YTY5OTk3NGY4YUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t" target="_blank"
      >Editar agenda</a>
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
            <a href="<?= url_to('reservar.cliente',(int)$reserva->id) ?>" class="button" id="reservar">Reservar Quarto</a>
            <?php elseif($reserva->verificarReserva() && $reserva->reserva == 'Reservado') : ?>
            <a href="<?= url_to('cancelar.cliente',(int)$reserva->idCliente) ?>" class="button" id="cancelar">Cancelar Reserva</a>
            <a href="<?= url_to('informacoes.cliente',$reserva->idCliente) ?>" class="button" id="info">Informações de Reserva</a>
            <?php endif; ?>
          </div>

        </div>

      </div>
    </main>
<?= $this->endSection() ?>

<?= $this->section('js') ?>


<?= $this->endSection() ?>