<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <?= $this->renderSection('css') ?>
    <title><?= $title ?? 'Menu' ?></title>
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
                  <a class="nav-link active" aria-current="page" href="#" style="color: #ffffff;">Perfil</a>
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

    <?= $this->renderSection('content') ?>

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
    <?= $this->renderSection('js') ?>
</body>
</footer>