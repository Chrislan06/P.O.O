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
    <title>Cadastro</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/registro.css') ?>" />
  </head>
  <body>
    <div id="page" class="flex">
      <img src="<?= base_url('assets/images/loginImage.jpg') ?>" alt="Imagem colorida" />
      <div>
        <main>
          <div class="headline">
            <h1>Cadastre um cliente AGORA!</h1>
            <p>Realize o cadastro para utilizar o SHO.</p>
          </div>
          <form action="cadastrar" method="post">
            <div class="input-wrapper">
              <label for="name">Nome</label>
              <input
                id="name"
                type="name"
                name="nome"
                value="<?= old('nome') ?>"
                required
                placeholder="Digite seu nome"
              />
              <div class="error" id="name-required-error">
                O nome é obrigatório
              </div>
            </div>

            <div class="input-wrapper">
              <label for="email">E-mail</label>
              <input
                id="email"
                type="email"
                name="email"
                value="<?= old('email') ?>"
                required
                pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+$"
                placeholder="Digite seu e-mail"
              />
              <div class="error" id="email-required-error">
                O e-mail é obrigatório
              </div>
              <div class="error">Digite um Email válido</div>
            </div>

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
                src="<?= base_url('assets/images/eye-off.svg') ?>"
                alt=""
              />
              <img
                onclick="tooglePassword()"
                class="eye hide"
                id="eye-hide"
                src="<?= base_url('assets/images/eye.svg') ?>"
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
                src="<?= base_url('assets/images/eye-off.svg') ?>"
                alt=""
              />
              <img
                onclick="tooglePasswordTwo()"
                class="eyeTwo hide"
                id="eyeTwo-hide"
                src="<?= base_url('assets/images/eye.svg') ?>"
                alt=""
              />
            </div>

            <button type="submit" id="cadastrobtn">Cadastrar</button>
          </form>
          <!-- Apresentando mensagens de erro -->
          <?php if(session()->has('errors')): ?>
            <ul>
              <?php foreach(session()->getFlashdata('errors') as $error): ?>
                <li><?= $error ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          
          <!-- Apresentando mensagem de sucesso ao inserir  -->
          <p><?= session()->getFlashdata('success') ?? '' ?></p>
          <!--  -->
        </main>
      </div>
    </div>

    <script src="<?= base_url('assets/js/registro.js') ?>"></script>
  </body>
</html>
