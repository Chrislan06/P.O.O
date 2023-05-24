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
        <img src="<?= base_url('assets/hotel-solid (1).svg') ?>" alt="Logo" />
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
<?= $this->renderSection('js') ?>
</body>