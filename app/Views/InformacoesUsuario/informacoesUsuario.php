<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Document</title>
  </head>

  <body>
    <header>
      <img src="/app/Views/assets/hotel-solid (1).svg" alt="Logo" />
      <nav>
        <ul>
          <li>Perfil(nome)</li>
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
          <span contenteditable="false">exemplodeemail@gmail.com</span>
          <img src="/app/Views/assets/editar.png" alt="alterar email" />

          <button style="display: none">Salvar</button>
          <button style="display: none">Cancelar</button>
        </div>
      </div>

      <div class="dados">
        <p>Nome</p>
        <div>
          <span> Nome Sobrenome </span>
          <img src="/app/Views/assets/editar.png" alt="alterar nome" />
          <button style="display: none">Salvar</button>
          <button style="display: none">Cancelar</button>
        </div>
      </div>

      <div class="dados">
        <p>Senha</p>
        <div>
          <span>12345678910</span>
          <img src="/app/Views/assets/editar.png" alt="alterar senha" />
          <button style="display: none">Salvar</button>
          <button style="display: none">Cancelar</button>
        </div>
      </div>
    </main>
  </body>

  <script src="script.js"></script>
</html>
