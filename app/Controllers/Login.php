<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\UsuarioEntity;
use App\Models\UsuarioModel;
use InvalidArgumentException;

class Login extends BaseController
{
    private $usuarioModel;


    /*
        Criando os models necessários 
    */
    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }
    
    /*
        Redirecionando para a página de login se não estiver logado 
    */
    public function index()
    {
        if (!session()->has('usuario')) {
            return view('autenticacao/login');
        }

        return redirect()->to('/');
    }

    /*
        Verificando o pedido de login do usuario
    */
    public function logar()
    {
        // Verifica se foi mandando no metodo POST
        if (!$this->request->is('post')) {
            return redirect()->to('/');
        }


        // valida os campos enviados
        try {
            $usuario = new UsuarioEntity($this->request->getPost());

            if (!$usuario->usuarioValido()) {
                throw new InvalidArgumentException();
            }

            $usuarioBanco = $this->usuarioModel->where('email', $usuario->email)->select('id,nome,email,senha')->first();
            $verificarSenha = password_verify($usuario->senha, $usuarioBanco?->senha ?? '');
            // Verificar senha e existência do usuario no banco
            if (!isset($usuarioBanco) || $verificarSenha === false) {
                $usuario->messages[] = 'Email e/ou senha Incorreto(s)';
                throw new InvalidArgumentException();
            }
            unset($usuarioBanco->senha);
            session()->set('usuario', $usuarioBanco);
            return redirect()->to('/');
        } catch (\InvalidArgumentException) {
            // Redirecionar com mensagens de erro
            return redirect()->to('login')->withInput()->with('errors', $usuario->messages);
        }
    }

    /*
        Deslogar do sistema SHO
    */
    public function logout()
    {
        session()->destroy();

        return redirect()->to('/');
    }

    /*

    */  
    public function informacoes()
    {
        if(!session()->has('usuario')){
            return redirect()->to('/');
        }
        
        return view('informacoesLogin/informacoesLogin', ['titulo' => 'Informações']);
    }
}
