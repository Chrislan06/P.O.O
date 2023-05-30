<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?= $this->renderSection('css') ?>
    <title><?= $titulo ?? '' ?></title>
  </head>

  <body>
    <header>
      <a href="<?= base_url('/') ?>">
        <img src="<?= base_url('assets/images/hotel-solid (1).svg') ?>" alt="Logo" />
      </a>
      <nav>
        <ul>
          <li><?= session()->get('usuario')->nome ?></li>
          <li>check-in</li>
          <li>check-out</li>
          <li>Logout</li>
          <li><img src="" alt="" /></li>
        </ul>
      </nav>
    </header>

    <?= $this->renderSection('content') ?>

<?= $this->renderSection('js') ?>
</body>