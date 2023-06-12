<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\QuartoModel;
use App\Models\UsuarioModel;

class Test extends BaseController
{
    public function test()
    {
        // $emailEnviado = $this->request->getPost('email');
        // $usuario = $this->usuarioModel->where('email', $emailEnviado)->find();
        // // dd($usuario);
        // if (empty($usuario)) {
        //     return redirect()->to('login/novasenha');
        // }
        // $usuario = $usuario[0];
        // $email = \Config\Services::email();

        // $config = [
        //     'protocol' => 'smtp',
        //     'SMTPHost' => 'sandbox.smtp.mailtrap.io',
        //     'SMTPUser' => '72924be3960d13',
        //     'SMTPPass' => '6cb0940e824d47',
        //     'SMTPPort' => 2525,
        //     // 'wordWrap' => true,
        //     // 'mailType' => 'html'
        // ];
        // $email->initialize($config);
        // dd($email);

        // $email->setFrom($emailEnviado, $usuario->nome);
        // $email->setTo('chrislan06@gmail.com');
        // $email->setSubject('Atualizar senha');
        // $email->setMessage('Clique no link para atualizar sua senha: <a href ="' . base_url('login/mudarsenha/') . $usuario->id . '">' . base_url('login/mudarsenha/') . $usuario->id . '</a>');
        // // dd($email);

        // $enviado = $email->send();
        // // dd($enviado);
        // var_dump($email->printDebugger());
        // die();
        // if (!$enviado) {
        // }

        // session()->set('mudarsenha' . $usuario->id, ['id' => $usuario->id]);

        // return view('autenticacao/email_autenticado');
    }


    private function inserirUsuario()
    {
        $usuarioModel = new UsuarioModel();
        $result = $usuarioModel->insert([
            'nome' => 'Chrislan',
            'email' => 'chrislan@gmail.com',
            'senha' => password_hash('12345678', PASSWORD_ARGON2ID)
        ]);

        if ($result) {
            echo 'Inserido';
        }
    }

    private function inserirAdmin()
    {
        $adminModel = new AdminModel();
        $result = $adminModel->insert([
            'nome' => 'Chris Machado',
            'email' => 'chrislan06@gmail.com',
            'senha' => password_hash('87654321', PASSWORD_ARGON2ID)
        ]);

        if ($result) {
            echo 'Inserido';
        }
    }

    private function gmailTeste()
    {
        $email = 'Chri@gmail.com';
        if (empty($email)) {
            echo 'Preencha o campo de Email';
            die();
        }
        // var_dump(preg_match('/^([a-zA-Z]{3,})*(.)+@+([a-zA-z]{3,})+\.+com*(\.*[a-z]{1,3})$/',$email));
        if (!preg_match('/^([a-zA-Z]{3,})+.*@+([a-zA-z]{3,})(\.[a-z]{1,3})+$/', $email)) {
            echo 'email Inválido';
        } else {
            echo 'email válido';
        }
    }

    private function mostrarQuartos()
    {
        $quartoModel = new QuartoModel();

        $quartos = $quartoModel->findAll();

        $quartosFamilia = [];
        foreach ($quartos as $quarto) {
            $quarto->setTipoQuarto();
        }

        foreach ($quartos as $quarto) {
            if (str_contains($quarto->tipoQuarto->tipo, 'SUÍTE')) {
                $quartosFamilia[] = $quarto;
            }
        }


        dd($quartosFamilia);
    }
}
