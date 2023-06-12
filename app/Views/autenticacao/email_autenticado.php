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
  <link rel="stylesheet" href="<?= asset('autenticado.css', 'css') ?>" />
</head>

<body>
  <div class="page">
    <form action="<?= url_to('mudarSenha', $id) ?>">
      <div class="headline">
        <h1>Email autenticado com sucesso</h1>
        <p>Clique aqui em baixo para mudar a senha <br /></p>
        <p>Confira a senha e tente o login novamente.</p>
      </div>
      <button>Mudar senha</button>
    </form>
  </div>
</body>

</html>