<?= $this->extend('layout/master_1') ?>
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
<?= $this->endSection() ?>