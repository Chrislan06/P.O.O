<?= $this->extend('layout/master_1') ?>

<?= $this->section('css') ?>

<link rel="stylesheet" href="<?= base_url('assets/css/exQuarto.css') ?>">

<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <?= anchor('login/logout', 'logout') ?>
    <br>
    <?= anchor('cliente/', 'Cadastro de Cliente') ?>
    <br>
    <?php if (session()->has('admin')) : ?>
        <?= anchor('admin/cadastro', 'Cadastrar Usuário') ?>
        <br>
    <?php endif; ?>
    <?= anchor('/quarto','Quartos') ?>
    <br>
    <?= anchor('/login/informacoes','Informações de Login') ?>
    <br>
    <?= anchor('/cliente/informacoes','Informações do Cliente') ?>
    <br>
    <?= anchor('/cliente/editar/1','editar cliente') ?>
    <br>
<?= $this->endSection() ?>