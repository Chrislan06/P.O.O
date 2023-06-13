<?= $this->extend('layout/master_principal') ?>

<?= $this->section('css') ?>

<link rel="stylesheet" href="<?= base_url('assets/css/informacoesEstilo.css') ?>" />

<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="page">
      <h1 class="info-cliente">Veja as informações do cliente</h1>

      <div class="nome">
        <p class="apresentation">Nome do titular</p>
        <p class="information"><?= $cliente->nome ?></p>
      </div>

      <div class="rg">
        <p class="apresentation">RG do titular</p>
        <p class="information"><?= $cliente->rg ?></p>
      </div>

      <div class="cpf">
        <p class="apresentation">CPF do Titular</p>
        <p class="information"><?= $cliente->cpf ?></p>
      </div>

      <div class="nascimento-data">
        <p class="apresentation">Data de Nascimento</p>
        <p class="information"><?= $cliente->getDataNascimento('d/m/Y') ?></p>
      </div>

      <a
        href="<?= url_to('editar.cliente', $cliente->id)?>"
        class="editar-reserva"
        >Editar reserva</a
      >
    </div>
<?= $this->endSection() ?>

