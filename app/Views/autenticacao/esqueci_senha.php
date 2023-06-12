<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600;700&display=swap" rel="stylesheet" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="<?= asset('esqueci.css', 'css') ?>" />
</head>

<body>
  <div class="page">
    <form action="<?= url_to('autenticarEmail') ?>" method="post">
      <div class="headline">
        <h1>Recupere a sua senha</h1>
        <p>Insira seu email para recuperar a senha</p>
      </div>
      <div class="input-wrapper">
        <label for="email" class="emailLabel">Email</label>
        <input type="email" name="email" id="email" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+$" required />
        <div class="error" id="email-required-error">
          O email é obrigatório
        </div>
        <div class="error" id="email-valid-error">Digite um email válido</div>
      </div>
      <button type="submit" id="button">Verificar Email</button>
    </form>
  </div>

  <script src="<?= asset('esqueci.js', 'js') ?>"></script>
</body>

</html>