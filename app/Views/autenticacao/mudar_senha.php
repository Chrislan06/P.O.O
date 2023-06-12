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
    <title>Senha</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/registro.css') ?>" />
  </head>
  <body>
    <div id="page" class="flex">
      <img src="<?= base_url('assets/images/loginImage.jpg') ?>" alt="Imagem colorida" />
      <div>
        <main>
          <div class="headline">
            <h1>Mude sua senha</h1>
            <p>Coloque a nova senha abaixo</p>
          </div>
          <form action="<?= url_to('confirmarSenha') ?>" method="post">
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="input-wrapper">
              <label for="senha"> Senha </label>
              <input
                type="password"
                id="senha"
                name="senha"
                required
                placeholder="Digite sua senha"
              />
              <div class="error" id="password-required-error">
                Senha é obrigatória
              </div>

              <img
                onclick="tooglePassword()"
                class="eye"
                id="eye"
                src="<?= base_url('assets/images/eyes/eye-off.svg') ?>"
                alt=""
              />
              <img
                onclick="tooglePassword()"
                class="eye hide"
                id="eye-hide"
                src="<?= base_url('assets/images/eyes/eye.svg') ?>"
                alt=""
              />
            </div>

            <div class="input-wrapper">
              <label for="senhaAgain"> Senha </label>
              <input
                type="password"
                id="senhaAgain"
                required
                placeholder="Digite sua senha novamente"
              />
              <div class="error" id="passwordAgain-required-error">
                As duas senhas estão diferentes. Insira a mesma senha
              </div>

              <img
                onclick="tooglePasswordTwo()"
                class="eyeTwo"
                id="eyeTwo"
                src="<?= base_url('assets/images/eyes/eye-off.svg') ?>"
                alt=""
              />
              <img
                onclick="tooglePasswordTwo()"
                class="eyeTwo hide"
                id="eyeTwo-hide"
                src="<?= base_url('assets/images/eyes/eye.svg') ?>"
                alt=""
              />
            </div>

            <button type="submit" id="cadastrobtn">Confirmar</button>
            <!-- Redirecionando para A main -->
            <?= anchor('/','Voltar') ?>
            <!--  -->
          </form>
          <!-- Apresentando mensagens de erro -->
          <?php if(session()->has('errors')): ?>
            <ul>
              <?php foreach(session()->getFlashdata('errors') as $error): ?>
                <li><?= $error ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </main>
      </div>
    </div>

    <script src="<?= base_url('assets/js/registro.js') ?>"></script>
  </body>
</html>
