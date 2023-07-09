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


$routes->get('credit', 'Home::creditView');

$routes->get('account-login', 							'Home::accountLoginView');
$routes->get('account-login-administrative', 			'Home::accountLoginAdministrativeView');

$routes->group('login', function($routes) {
	$routes->post('/', 									'LoginController::login');
	$routes->post('administrativo', 					'LoginController::loginAdministrative');
});

$routes->group('logout', function($routes) {
	$routes->post('/', 									'LoginController::logout');
	$routes->get('administrativo', 					    'LoginController::logout');
});


$routes->group('administrativo', ['filter' => 'signIn'], function($routes){
	$routes->get('/', 									'Administrativo::dashboard');  // Dashboard com todas as opções administrativas
	$routes->get('abrir-conta',				 			'Administrativo::openAccount');	// Renderiza a view de abertura de conta
	$routes->post('abrirConta', 						'Administrativo::startAccount');	// Realiza a abertura de conta
	$routes->get('ativ-reativ-conta', 					'Administrativo::ativarReativarContaView'); // View de ativar ou reativar uma conta
	$routes->post('ativar-reativar-conta', 				'Administrativo::ativarReativarConta'); // Ativar ou reativar uma conta
	$routes->get('avaliar-credito', 					'Administrativo::creditRating'); // Avaliação de crédito
	$routes->get('pagar-conta', 						'Administrativo::payBillView'); // Pagamento de contas
	$routes->get('renegociacao', 						'Administrativo::renegociation'); // Renegociação de dívidas
	$routes->get('financiamento', 						'Administrativo::financing'); // Financiamentos
	$routes->get('get-cities-by-uf', 					'Administrativo::get_cities_by_uf'); // Busca todas as cidades pelo estado (uf)

});

// Rotas do cliente
$routes->group('client',		['filter' => 'signIn'],	function ($routes){
	$routes->get('/', 									'LoginController::index'); //Tela inicial do cliente

	$routes->get('home', 								'Client::home'); //Tela inicial do cliente

	// extrato
	$routes->group('extract', 							function ($routes){
		$routes->get('/', 								'Client::extract'); //Tela de extrato bancário
		$routes->get('moviment/(:num)', 				'Client::moviment/$1'); //Tela de extrato bancário
	});

	// transferências
	$routes->group('transfer', 							function($routes){
		$routes->get('/', 								'Client\Transfer::home'); //Tela de transferência
	});

	// pagamentos
	$routes->group('pay', 								function($routes){
		$routes->get("/", 								'Client\Pay::home'); //Tela de pagamento")
		$routes->get("details/(:any)", 		     	    'Client\Pay::details_bill/$1'); //card de detalhes")
		$routes->post("pay-bill/(:any)", 		     	'Client\Pay::pay_bill/$1'); //realiza o pagamento de uma conta")
	});
	
	//investimentos
	$routes->group('investments', 						function($routes){
		$routes->get('/', 								'Client\Investment::home'); //Tela de investimentos")	
	});

	//emprestimos
	$routes->group('loans', 							function($routes){
		$routes->get('/', 								'Client\Loan::home'); //Tela de emprestimos")	
	});

	//cartão
	$routes->group('card', 								function($routes){
		$routes->get('/', 						        'Client\Card::home'); //Tela de cartão")	
		$routes->get('invoices', 						'Client\Card::invoices'); //Tela de fatura")	
		$routes->get('limit', 							'Client\Card::limit'); //Tela de limit")	
		$routes->get('cancel', 							'Client\Card::cancel'); //Tela de cancelar cartão")	
		$routes->get('graphic', 					    'Client\Card::graphic'); //Tela de gráficos do cartão")	
		$routes->get('get_invoice_month', 				'Client\Card::getInvoiceMonth'); //Tela de fatura")	
		$routes->post('pay_invoice/(:num)', 		    'Client\Card::payInvoice/$1'); //Tela de fatura")	
	});

	$routes->group('renegociation', function($routes){
		$routes->get('/', 								'Client\Renegociation::home'); //Tela de renegociação")
	});
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
