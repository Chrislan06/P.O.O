<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Rota Principal
$routes->get('/', 'Home::index', ['filter' => 'autenticacao']);

// Rota de Login no Admin
$routes->get('/admin', 'Admin::index');
$routes->post('admin/logar', 'Admin::logar');

// Rota de Login
$routes->get('/login', 'Login::index');
$routes->post('/login/logar', 'Login::logar');
$routes->get('login/logout', 'Login::logout', ['as' => 'logout']);
$routes->get('login/informacoes', 'Login::informacoes', ['filter' => 'autenticacao']);
$routes->get('login/novasenha', 'Login::novaSenha', ['as' => 'novaSenha']);
$routes->post('login/autenticarEmail', 'Login::autenticarEmail', ['as' => 'autenticarEmail']);
$routes->get('login/mudarsenha/(:num)', 'Login::mudarSenha/$1', ['as' => 'mudarSenha']);
$routes->post('login/confirmarsenha', 'Login::confirmarSenhaNova', ['as' => 'confirmarSenha']);

// Proibir Acesso a pagina principal e de filtro se não estiver logado
$routes->group('/home', ['filter' => 'autenticacao'], function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('index', 'Home::index');
    $routes->get('filtros', 'Home::filtros', ['as' => 'filtros']);
});

// Proibir Acesso as funções de usuário se não estiver logado
$routes->group('cliente', ['filter' => 'autenticacao'], function ($routes) {
    $routes->get('(:num)', 'Cliente::index/$1', ['as' => 'reservar.cliente']);
    $routes->post('cadastrar', 'Cliente::cadastrar', ['as' => 'realizar.reserva.cliente']);
    $routes->get('informacoes/(:num)', 'Cliente::informacoes/$1', ['as' => 'informacoes.cliente']);
    $routes->get('editar/(:num)', 'Cliente::editar/$1', ['as' => 'editar.cliente']);
    $routes->post('editar/(:num)', 'Cliente::salvar/$1', ['as' => 'editar.cliente.confirmar']);
    $routes->get('cancelar/(:num)', 'Cliente::cancelar/$1', ['as' => 'cancelar.cliente']);
    $routes->get('cancelar/confirmar/(:num)', 'Cliente::delete/$1', ['as' => 'cancelar.confirmar.cliente']);
});

// Proibir Acesso as funções de admin se não tiver permissões de Admin
$routes->group('admin', ['filter' => 'autenticacaoadmin'], function ($routes) {
    $routes->get('cadastro', 'Admin::cadastro', ['as' => 'registrar.usuario']);
    $routes->post('cadastrar', 'Admin::cadastrar');
});

// Rotas para Quartos
$routes->group('quarto', ['filter' => 'autenticacao'], function ($routes) {
    $routes->get('visualizar/(:num)', 'Quarto::visualizar/$1', ['as' => 'visualizar.quarto']);
});

// Rotas para Testes
$routes->get('/teste', 'Test::test');

// Rota para Mensagens
$routes->get('/sucesso', 'Sucesso::index');
$routes->get('/erro', 'Erro::index');

// Rota para Reservas
$routes->group('reserva',['filter' => 'autenticacao'],function ($routes){
    $routes->post('agendar','Reserva::agendar',['as' =>'reserva.agendar']);
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
