<!DOCTYPE html>
<html lang="en">
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
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css') ?>" />
  </head>
  <body>
    <div id="page" class="flex">
      <div>
        <main>
          <div class="headline">
            <h1>Acesse a plataforma</h1>
            <p>Faça login ou registre-se para utilizar o site.</p>
          </div>
          <form action="login/logar" method="post">
            <div class="input-wrapper">
              <label for="email">E-mail</label>
              <input
                value="<?= old('email') ?>"
                id="email"
                type="email"
                name="email"
                pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+$"
                required
                placeholder="Digite seu e-mail"
              />
              <div class="error" id="email-required-error">Email incorreto</div>
            </div>

            <div class="input-wrapper">
              <div class="label-wrapper">
                <label for="senha"> Senha </label>
                <a href="esquec/imagesisenha/esqueci.html"
                  >Esqueceu a senha?</a
                >
              </div>

              <input
                type="password"
                id="senha"
                name="senha"
                required
                placeholder="Digite sua senha"
              />
              <div class="error" id="password-required-error">
                Senha incorreta. Tente novamente
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

            <button type="submit" id="Entrarbtn">Entrar</button>

            <div class="create-account">
              Realize o registro caso ainda não esteja logado no sistema
              <a href="regist/imagesro/registro.html">Registrar-se</a>
            </div>
          </form>
          <!-- Testando Mensagens de Erro -->
          <?php if(session()->has('errors')) : ?>
            <ul>
              <?php foreach (session()->get('errors') as $erro): ?>
              <li><?= $erro ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <!--  -->
        </main>
      </div>
      <img src="<?= base_url('assets/images/loginImage.jpg') ?>" alt="Imagem colorida" />
    </div>

    <script src="<?= base_url('assets/js/login.js') ?>"></script>
  </body>
</html>
