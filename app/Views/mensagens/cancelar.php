<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600;700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title ?? 'Menu' ?></title>
  <link rel="stylesheet" href="<?= asset('mensagem.css', 'css') ?>" />
</head>

<body>
  <div class="page">
    <form action="<?= url_to('cancelar.confirmar.cliente', (int)$cliente->id) ?>" method="get">
      <div class="headline">
        <h1>Cancelar Reserva</h1>
        <p>Você tem Certeza que cancelar esta reserva?<br /></p>
      </div>
      <button>Confirmar</button>
    </form>
  </div>
</body>

</html>