<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?= anchor('login/logout', 'logout') ?>
    <br>
    <?= anchor('cliente/', 'Cadastro de Cliente') ?>
    <br>
    <?php if (session()->has('admin')) : ?>
        <?= anchor('admin/cadastro', 'Cadastrar Usuário') ?>
        <br>
    <?php endif; ?>
</body>

</html>