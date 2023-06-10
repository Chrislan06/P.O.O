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
    <title><?= $title ?? 'Menu' ?></title>
    <link rel="stylesheet" href="<?= asset('mensagem.css','css') ?>" />
  </head>
  <body>
    <div class="page">
      <form action="">
        <div class="headline">
          <h1><?= session()->get('sucesso')['titulo'] ?></h1>
          <p><?= session()->get('sucesso')['mensagem'] ?><br/></p>
        </div>
        <a href="/"><button>Página Inicial</button></a>
      </form>
    </div>
  </body>
</html>
