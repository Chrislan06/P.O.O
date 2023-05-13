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
    <link rel="stylesheet" href="assets/css/editarReserva.css" />
  </head>
  <body>
    <div class="page">
      <form action="/reservaEditada/editado.html">
        <div class="headline">
          <h1>Editar Reserva</h1>
        </div>

        <div class="input-wrapper">
          <label for="nome">Nome do titular</label>
          <input type="text" name="nome" id="nome" required />
          <div class="error" id="empty-name">Esse campo é obrigatório</div>
        </div>

        <div class="input-wrapper">
          <label for="rg">RG</label>
          <input type="text" name="rg" id="rg" required />
          <div class="error" id="empty-rg">Esse campo é obrigatório</div>
          <div class="error">Digite um RG válido</div>
        </div>

        <div class="input-wrapper">
          <label for="cpf">CPF</label>
          <input type="text" name="cpf" id="cpf" required />
          <div class="error" id="empty-cpf">Esse campo é obrigatório</div>
          <div class="error">Digite um CPF válido</div>
        </div>

        <div class="input-wrapper">
          <label for="data">Data de Nascimento</label>
          <input type="date" name="data" id="data" required />
          <div class="error" id="empty-date">Esse campo é obrigatório</div>
        </div>

        <button type="submit" id="finalizar">finalizar</button>
      </form>
    </div>

    <script src="assets/js/editarReserva.js"></script>
  </body>
</html>
