<?= $this->extend('layout/master_quarto') ?>

<?= $this->section('css') ?>

<link rel="stylesheet" href="<?= asset('exQuarto.css',) ?>"/>

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
            <div class="carousel-item active">
              <img src="<?= base_url('/assets/quartos/solteiro/LHeart/solteiroLH1.jpg') ?>" class="d-block w-100" alt="Hotel 1">
            </div>
            <div class="carousel-item">
              <img src="<?= base_url('/assets/quartos/solteiro/LHeart/solteiroLH2.jpg') ?>" class="d-block w-100" alt="Hotel 2">
            </div>
            <div class="carousel-item">
              <img src="<?= base_url('/assets/quartos/solteiro/LHeart/solteiroLH3.jpg') ?>" class="d-block w-100" alt="Hotel 3">
            </div>
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
              <p>Banheiro privativo</p>
              <p>Vista da cidade</p>
              <p>Wi-Fi gratuito</p>
              <p>Recepção 24 horas</p>
              <p>Ar-condicionado</p>
              <p>12m² tamanho</p>
            </div>

        </div>

        <div class="right-content">
          <div class="texto">
            <h2>Descrição do quarto:</h2>
            <p>
              Quarto familiar espaçoso e luxuoso, projetado para acomodar confortavelmente famílias maiores ou grupos de amigos.
            </p>
    
            <p>
              Camas king-size e camas de solteiro, com colchões de alta qualidade e lençóis macios, garantindo uma experiência de sono tranquila e rejuvenescedora para todos os membros da família
            </p>
    
            <p>
              Sala de estar separada com sofás confortáveis, poltronas aconchegantes e uma área de entretenimento com TV de tela plana, perfeita para momentos de convivência e relaxamento em família.
            </p>
    
            <p>
              Espaço amplo de armazenamento, como armários espaçosos e cômodas, para que a família possa organizar suas roupas e pertences pessoais de maneira conveniente.
            </p>
          </div>

          <div class="buttons">
            <a href="/app/Views/reservar/reservar.html" class="button" id="reservar">Reservar Quarto</a>
            <a href="/app/Views/cancelarReserva/cancelar.html" class="button" id="cancelar">Cancelar Reserva</a>
            <a href="/app/Views/informaçõesCliente/informacoesCliente.html" class="button" id="info">Informações de Reserva</a>
          </div>

        </div>

      </div>
    </main>
<?= $this->endSection() ?>

<?= $this->section('js') ?>


<?= $this->endSection() ?>