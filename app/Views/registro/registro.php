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
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/registro.css" />
  </head>
  <body>
    <div id="page" class="flex">
      <img src="assets/images/loginImage.jpg" alt="Imagem colorida" />
      <div>
        <main>
          <div class="headline">
            <h1>Cadastre-se Agora</h1>
            <p>Realize o cadastro para utilizar o SHO.</p>
          </div>
          <form action="/registro/registrado/registrado.html">
            <div class="input-wrapper">
              <label for="name">Nome</label>
              <input
                id="name"
                type="name"
                name="name"
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
                src="assets/images/eye-off.svg"
                alt=""
              />
              <img
                onclick="tooglePassword()"
                class="eye hide"
                id="eye-hide"
                src="assets/images/eye.svg"
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
                src="assets/images/eye-off.svg"
                alt=""
              />
              <img
                onclick="tooglePasswordTwo()"
                class="eyeTwo hide"
                id="eyeTwo-hide"
                src="assets/images/eye.svg"
                alt=""
              />
            </div>

            <button type="submit" id="cadastrobtn">Cadastrar</button>

            <div class="login-account">
              Já tem uma conta? Faça o
              <a href="/login/index.html">Login</a>
            </div>
          </form>
        </main>
      </div>
    </div>

    <script src="assets/js /registro.js"></script>
  </body>
</html>
