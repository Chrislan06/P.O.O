<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="backend.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap"
      rel="stylesheet"
    />
    <title>Cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h2>Cadastrar Cliente</h2>
      </div>

      <form id="form" class="form">
        <div class="form-control">
          <label for="username">Nome de Usuário</label>
          <input
            type="text"
            id="username"
            placeholder="Digite seu nome de usuário..."
          />
          <i class="fas fa-exclamation-circle"></i>
          <i clas="fas fa-check-circle"></i>
          <small>Mensagem de Erro</small>
        </div>

        <div class="form-control">
          <label for="email">Email</label>
          <input type="text" id="email" placeholder="Digite seu Email..." />
          <i class="fas fa-exclamation-circle"></i>
          <i clas="fas fa-check-circle"></i>
          <small>Mensagem de Erro</small>
        </div>

        <div class="form-control">
          <label for="password">Senha</label>
          <input type="text" id="password" placeholder="Digite sua senha..." />
          <i class="fas fa-exclamation-circle"></i>
          <i clas="fas fa-check-circle"></i>
          <small>Mensagem de Erro</small>
        </div>

        <div class="form-control">
          <label for="password-confirmation">Confirmação de Senha</label>
          <input
            type="text"
            id="password-confirmation"
            placeholder="Digite sua senha novamente..."
          />
          <i class="fas fa-exclamation-circle"></i>
          <i clas="fas fa-check-circle"></i>
          <small>Mensagem de Erro</small>
        </div>

        <button type="submit">Enviar</button>
      </form>
    </div>
    <script
      src="https://kit.fontawesome.com/f9e19193d6.js"
      crossorigin="anonymous"
    ></script>

    <script src="./script.js"></script>
  </body>
</html>
