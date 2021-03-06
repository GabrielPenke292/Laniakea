<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 							'Home::index');
$routes->post('/cadastrar-pessoa', 			'Home::cadastrarPessoa');
$routes->get('/get-cidades-by-uf', 			'Home::getCidadesByUF');
$routes->get('/get-last-register', 			'Home::lastRegister');

$routes->get('/login', 						'Home::loginPage');
$routes->get('/check', 						'Home::checkLogin');
$routes->get('/logout', 					'Home::logout');

$routes->group("login", function($routes){
	$routes->get('forgot-password', 		'LoginController::forgotPasswordView');
	$routes->post('forgot-password', 		'LoginController::forgotPassword');
});


$routes->get('/cadastro-usuario', 			'Home::cadastroUsuarioPage');
$routes->post('/register-user', 			'Home::registerUser');

$routes->get("/listagem",					"Home::listaFuncionarios");
$routes->post("/editar-funcionario",		"Home::editarFuncionario");

// CONSULTAS
$routes->group("consultas",					function($routes){
	$routes->get("name-by-identity",		"Consultas::name_by_identity");
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
