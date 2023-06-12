<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\UsuarioEntity;
use App\Models\UsuarioModel;
use Exception;
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
        Retorna tela de informações de Login para o Usuário
    */
    public function informacoes()
    {
        if (!session()->has('usuario')) {
            return redirect()->to('/');
        }

        return view('informacoesLogin/informacoesLogin', ['titulo' => 'Informações']);
    }

    public function salvar()
    {
        if (!session()->has('usuario')) {
            return redirect()->to('/');
        }

        $params = $this->request->getPost();

        if (!isset($params['id'])) {
            return redirect()->to('/');
        }

        try {
            $usuario = new UsuarioEntity($params);
            if ($usuario->usuarioValido()) {
                throw new InvalidArgumentException();
            }

            $data = [
                'nome' => $usuario->nome,
                'email' => $usuario->email,
                'senha' => $usuario->hashSenha(),
            ];

            $resultado = $this->usuarioModel->update($usuario->id, $data);

            if (!$resultado) {
                foreach ($this->usuarioModel->errors() as $error) {
                    $usuario->messages[] = $error;
                }
                throw new InvalidArgumentException();
            }

            return redirect()->to('/');
        } catch (\InvalidArgumentException) {
            return redirect()->to('/usuario/editar/' . $usuario['id'])->with('errors', $usuario->messages);
        }
    }

    public function novaSenha()
    {
        return view('autenticacao/esqueci_senha');
    }

    public function autenticarEmail()
    {
        $emailEnviado = $this->request->getPost('email');
        $usuario = $this->usuarioModel->where('email', $emailEnviado)->find();
        // dd($usuario);
        if (empty($usuario)) {
            return redirect()->to('login/novasenha');
        }
        $usuario = $usuario[0];
        session()->set('mudarsenha' . $usuario->id, ['id' => $usuario->id]);

        return view('autenticacao/email_autenticado', ['id' => (int)$usuario->id]);
    }

    public function mudarSenha($id)
    {
        if (!session()->has('mudarsenha' . $id)) {
            return redirect()->to('/');
        }

        return view('autenticacao/mudar_senha', ['id' => session()->get('mudarsenha' . $id)['id']]);
    }

    public function senhaNova()
    {

        $params  = $this->request->getPost();
        $id = $params['id'];
        // dd($params, $id);
        try {
            $usuario = new UsuarioEntity($params);

            if ($usuario->usuarioValido()) {
                throw new InvalidArgumentException();
            }

            $data = [
                'senha' => $usuario->hashSenha(),
            ];

            $resultado = $this->usuarioModel->update($id, $data);
            dd($resultado);
            if (!$resultado) {
                $usuario->messages['error'] = 'Erro ao mudar a senha';
                throw new Exception();
            }
            session()->destroy();
            return redirect()->to('sucesso')->with('sucesso', ['titulo' => 'Senha Alterada com sucesso', 'mensagem' => 'Clique no link abaixo para voltar']);
        } catch (\Exception) {
            return redirect()->back()->with('errors', $usuario->messages);
        }
    }
}
