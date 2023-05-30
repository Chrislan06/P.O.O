<?= $this->extend('layout/master_2') ?>

<?= $this->section('css') ?>

<link rel="stylesheet" href="<?= asset('informacoesLogin.css','css') ?>">

<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <main>
      <h1>Veja e edite as suas informações abaixo</h1>

      <div class="dados">
        <p>Email</p>
        <div>
          <span contenteditable="false"><?= session()->get('usuario')->email?></span>
          <img src="<?= base_url('assets/editar.png') ?>" alt="alterar email" />

          <button style="display: none">Salvar</button>
          <button style="display: none">Cancelar</button>
        </div>
      </div>

      <div class="dados">
        <p>Nome</p>
        <div>
          <span> <?= session()->get('usuario')->nome ?></span>
          <img src="<?= base_url('assets/editar.png') ?>" alt="alterar nome" />
          <button style="display: none">Salvar</button>
          <button style="display: none">Cancelar</button>
        </div>
      </div>

      <div class="dados">
        <p>Mude sua Senha</p>
        <div>
          <span></span>
          <img src="<?= base_url('assets/editar.png') ?>" alt="alterar senha" />
          <button style="display: none">Salvar</button>
          <button style="display: none">Cancelar</button>
        </div>
      </div>
    </main>
<?= $this->endSection() ?>

<?= $this->section('js')?>
  <script src="<?= base_url('assets/js/informacoesLogin.js') ?>"></script>
<?= $this->endSection() ?>
