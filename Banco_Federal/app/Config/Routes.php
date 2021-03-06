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

$routes->get('/administrativo', 						'Administrativo::dashboard'); // Dashboard com todas as opções administrativas
$routes->get('/administrativo/abrir-conta', 			'Administrativo::openAccount');	// Renderiza a view de abertura de conta
$routes->post('/administrativo/abrirConta', 			'Administrativo::startAccount');	// Realiza a abertura de conta
$routes->get('/administrativo/ativ-reativ-conta', 		'Administrativo::ativarReativarContaView'); // View de ativar ou reativar uma conta
$routes->post('/administrativo/ativar-reativar-conta', 	'Administrativo::ativarReativarConta'); // Ativar ou reativar uma conta
$routes->get('/administrativo/avaliar-credito', 		'Administrativo::creditRating'); // Avaliação de crédito
$routes->get('/administrativo/pagar-conta', 			'Administrativo::payBillView'); // Pagamento de contas
$routes->get('/administrativo/renegociacao', 			'Administrativo::renegociation'); // Renegociação de dívidas
$routes->get('/administrativo/financiamento', 			'Administrativo::financing'); // Financiamentos
$routes->get('/administrativo/get-cities-by-uf', 		'Administrativo::get_cities_by_uf'); // Busca todas as cidades pelo estado (uf)


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
