<?= $this->extend('layout/master_3') ?>

<?= $this->section('css') ?>

<link rel="stylesheet" href="<?= base_url('assets/css/informacoesEstilo.css') ?>" />

<?= $this->endSection() ?>

<?= $this->section('content') ?>
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
<?= $this->endSection() ?>

