<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url('assets/css/informacoesLogin.css') ?>" />
    <title>Document</title>
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

    <main>
      <h1>Veja e edite as suas informações abaixo</h1>

      <div class="dados">
        <p>Email</p>
        <div>
          <span contenteditable="false"><?= session()->get('usuario')->email?></span>
          <img src="<?= base_url('assets/editar.png') ?>" alt="alterar email" />

          <button style="display: none">Salvar</button>
          <button style="display: none">Cancelar</button>
        </div>
      </div>

      <div class="dados">
        <p>Nome</p>
        <div>
          <span> <?= session()->get('usuario')->nome ?></span>
          <img src="<?= base_url('assets/editar.png') ?>" alt="alterar nome" />
          <button style="display: none">Salvar</button>
          <button style="display: none">Cancelar</button>
        </div>
      </div>

      <div class="dados">
        <p>Mude sua Senha</p>
        <div>
          <span></span>
          <img src="<?= base_url('assets/editar.png') ?>" alt="alterar senha" />
          <button style="display: none">Salvar</button>
          <button style="display: none">Cancelar</button>
        </div>
      </div>
    </main>
  </body>

  <script src="<?= base_url('assets/js/informacoesLogin.js') ?>"></script>
</html>
