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
$routes->get('/', 'Home::index');
$routes->get("get-all-people", 		"SLCP/Cadastro::get_all_people");	// busca todas as pessoas cadastras no sistema
$routes->get("get-specific-people", "SLCP/Cadastro::get_specific_people"); // busca uma pessoa específica

// Banco federal
$routes->group('federal-bank', function($routes){
	//Account
	$routes->post('open-account', 			"BFL\AccountController::open_account"); // Abre uma conta para um usuário
	$routes->post('ativ-reativ-account', 	"BFL\AccountController::activate_reactivate_account"); // Ativa ou reativa uma conta para um usuário
	$routes->post('deposit-cash', 			"BFL\AccountController::cashDeposit"); // depositar saldo em uma conta
	
	//Payments
	$routes->post('pay-billet',	 			"BFL\PaymentsController::pay_billet"); // Rota para pagamento de boleto
	$routes->post('generate-billet', 		"BFL\PaymentsController::generateBillet"); // Gerar boleto

	$routes->group('login', function($routes){
		$routes->post('administrative', 	"BFL\LoginController::loginAdministrative"); // login administrativo')
		$routes->post('client', 			"BFL\LoginController::loginClient"); // login administrativo')
	});

});

// Estados
$routes->group('states', function($routes){
	$routes->get('get-all-states',			"States\StateController::get_all_states"); // retorna todos os estados
});

// Cidades
$routes->group('cities', function($routes){
	$routes->get('get-cities-by-uf', 				"City/CityController::get_cities_by_uf"); // retorna todas as cidades
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
