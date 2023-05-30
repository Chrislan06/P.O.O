<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="exQuarto.css"/>
    <script src="script.js"></script>
    <title>POO Hotel</title>
  </head>
  <body>
    <header>
      <div class="container-fluid"></div>
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#" style="color: #ffffff;">Perfi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: #ffffff;">Check-in</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: #ffffff;">Check-out</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #ffffff;">
                    Reservas
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Quartos Reservados</a></li>
                    <li><a class="dropdown-item" href="#">Quartos não reservados</a></li>
                    <li><a class="dropdown-item" href="editarReserva.html">Editar Reservas</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Outro</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#" style="color: #ffffff;">Logout</a>
                </li>
              </ul>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Escreva aqui..." aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Pesquisar</button>
          </form>
        </div>
      </div>
      </nav>
    </header>


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
              <img src="/public/assets/quartos/solteiro/LHeart/solteiroLH1.jpg" class="d-block w-100" alt="Hotel 1">
            </div>
            <div class="carousel-item">
              <img src="/public/assets/quartos/solteiro/LHeart/solteiroLH2.jpg" class="d-block w-100" alt="Hotel 2">
            </div>
            <div class="carousel-item">
              <img src="/public/assets/quartos/solteiro/LHeart/solteiroLH3.jpg" class="d-block w-100" alt="Hotel 3">
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

    <footer class="fimdapag">
      <div class="footer-content">
        <p>Acompanhe-nos em nossas redes sociais</p>
        <div class="social-medias">

          <div class="social-media">
            <p>Instagram</p>
            <a href=""><i class="fa-brands fa-instagram fa-2xl" style="color: #ffffff;"></i></a>
          </div>
            
          <div class="social-media">
            <p>Twitter</p>
            <a href=""><i class="fa-brands fa-twitter fa-2xl" style="color: #ffffff;"></i></a>
          </div>
  
          <div class="social-media">
            <p>Facebook</p>
            <a href=""><i class="fa-brands fa-facebook fa-2xl" style="color: #ffffff;"></i></a>
          </div>
            
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a9f38024b9.js" crossorigin="anonymous"></script>
  </body>
</html>
