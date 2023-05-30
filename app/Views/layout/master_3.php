<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?= $this->renderSection('css') ?>
    <title>Document</title>
</head>
<body>
    <navbar id="navbar">
        <div class="navbar-container">
        <img src="<?= base_url('assets/images/hotel-solid (1).svg') ?>" alt="" />
        <ul class="navbar-items">
          <a href="" class="navbar-item">Perfil</a>
          <a href="" class="navbar-item">Pesquisar Reservas</a>
          <a href="" class="navbar-item">Check-in</a>
          <a href="" class="navbar-item">Check-out</a>
          <a href="" class="navbar-item">Logout</a>
        </ul>
      </div>
    </navbar>

    <?= $this->renderSection('content') ?>
    <?= $this->renderSection('js') ?>

    </body>
</html>
