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
    <link rel="stylesheet" href="informacoesEstilo.css" />
  </head>
  <body>
    <navbar id="navbar">
      <div class="navbar-container">
        <img src="/app/Views/assets/hotel-solid (1).svg" alt="" />
        <ul class="navbar-items">
          <a href="" class="navbar-item">Perfil</a>
          <a href="" class="navbar-item">Pesquisar Reservas</a>
          <a href="" class="navbar-item">Check-in</a>
          <a href="" class="navbar-item">Check-out</a>
          <a href="" class="navbar-item">Logout</a>
        </ul>
      </div>
    </navbar>

    <div class="page">
      <h1 class="info-cliente">Veja as informações do cliente</h1>

      <div class="nome">
        <p class="apresentation">Nome do titular</p>
        <p class="information">Luis da Silva</p>
      </div>

      <div class="rg">
        <p class="apresentation">RG do titular</p>
        <p class="information">000000000000</p>
      </div>

      <div class="cpf">
        <p class="apresentation">CPF do Titular</p>
        <p class="information">00000000000</p>
      </div>

      <div class="nascimento-data">
        <p class="apresentation">Data de Nascimento</p>
        <p class="information">00/00/0000</p>
      </div>

      <a
        href="/app/Views/editarReserva/editarReserva.html"
        class="editar-reserva"
        >Editar reserva</a
      >
    </div>
  </body>
</html>
