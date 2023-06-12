<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600;700&display=swap" rel="stylesheet" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>erro</title>
  <link rel="stylesheet" href="<?= asset('mensagem.css', 'css') ?>" />
</head>

<body>
  <div class="page">
    <form action="<?= base_url(session()->get('redirecionar')) ?>">
      <div class="headline">
        <h1><?= session()->get('titulo') ?></h1>
        <?php foreach (session()->get('errors') as $erro) : ?>
        <p><?= $erro ?><br /></p>
        <?php endforeach; ?>
      </div>
      <button>Retornar</button>
    </form>
  </div>
</body>

</html>