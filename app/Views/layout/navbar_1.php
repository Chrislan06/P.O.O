<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/exQuarto.css') ?>"/>
    <title></title>
</head>
<navbar id="navbar">
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
                  <a class="nav-link active" aria-current="page" href="#">Perfi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Check-in</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Check-out</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                  <a class="nav-link active" aria-current="page" href="#">Logout</a>
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