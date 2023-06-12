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
    <title><?= isset($cliente) ? 'Editar' : 'Reserva'?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/estiloReservar.css') ?>" />
  </head>
  <body>
    <div class="page">
      <form action="<?= isset($cliente) ? url_to('editar.cliente.confirmar',$cliente->id) : url_to('realizar.reserva.cliente') ?>" method="post">
        <div class="headline">
          <h1>Realizar <?= isset($cliente) ? 'Edição' : 'Reserva'?></h1>
        </div>
        <?php if(isset($reserva)): ?>
          <input type="hidden" name="idReserva" value="<?= $reserva->id ?>">
        <?php elseif (isset($cliente)) : ?>
          <input type="hidden" name="idCliente" value="<?= $cliente->id ?>">
        <?php endif; ?>

        <div class="input-wrapper">
          <label for="nome">Nome do titular</label>
          <input type="text" name="nome" id="nome" required value="<?= $cliente?->nome ?? '' ?>" />
          <div class="error" id="empty-name">Esse campo é obrigatório</div>
        </div>

        <div class="input-wrapper">
          <label for="rg">RG</label>
          <input type="text" name="rg" id="rg" required value="<?= $cliente?->rg ?? '' ?>" />
          <div class="error" id="empty-rg">Esse campo é obrigatório</div>
          <div class="error">Digite um RG válido</div>
        </div>

        <div class="input-wrapper">
          <label for="cpf">CPF</label>
          <input type="text" name="cpf" id="cpf" required value="<?= $cliente?->cpf ?? '' ?>" />
          <div class="error" id="empty-cpf">Esse campo é obrigatório</div>
          <div class="error">Digite um CPF válido</div>
        </div>

        <div class="input-wrapper">
          <label for="data">Data de Nascimento</label>
          <input type="date" name="dataNascimento" id="data" required value="<?= $cliente?->getDataNascimento('Y-m-d') ?? '' ?>" />
          <div class="error" id="empty-date">Esse campo é obrigatório</div>
        </div>

        <button type="submit" id="finalizar">Finalizar</button>
      </form>
    </div>

    <script src="<?=base_url('assets/js/reserva.js') ?>"></script>
  </body>
</html>
