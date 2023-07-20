<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');

//Site
//-------------------------------------------------------------------------
$routes->get('/', 'Site\Home::index');
$routes->get('/Contatos', 'Site\Contatos::contatos');
$routes->post('/Contatos', 'Site\Contatos::sendMail');

$routes->get('/Home', 'Site\Home::home');
$routes->post('/Home/newsletter', 'Site\Home::newsletter');
$routes->get('/Sobre', 'Site\QuemSomos::sobre');
$routes->add('/Corpo-Clinico', 'Site\CorpoClinico::index');
$routes->get('/Corpo-Clinico/(:num)', 'Site\CorpoClinico::details/$1');
$routes->add('/Servicos', 'Site\Servicos::index');
$routes->get('/Servicos/(:any)', 'Site\Servicos::servicos/$1');
$routes->add('/Blog', 'Site\Blog::index');
$routes->get('/Blog/(:num)', 'Site\Blog::materia/$1');
$routes->get('/Blog/materia/(:num)', 'Site\Blog::materia/$1');
$routes->get('/Contatos', 'Site\Contatos::contatos');
$routes->post('/Contatos', 'Site\Contatos::sendMail');
$routes->get('/Agendamento-Consulta', 'Site\Contatos::agendamentoConsulta');
$routes->get('/Agendamento-Exames', 'Site\Contatos::agendamentoExame');
$routes->get('/Obrigado', 'Site\Home::obrigado');
$routes->get('/Email', 'Site\Home::email');

//Admin - Start Site
//-------------------------------------------------------------------------
$routes->add('/Admin/home', 'Admin\Home::index');
$routes->get('/Admin/sobre', 'Admin\Home::sobre');
$routes->add('/Admin', 'Admin\Auth::index');
//-------------------------------------------------------------------------
$routes->add('/Admin/Usuarios', 'Admin\Usuarios::index');
$routes->add('/Admin/Usuarios/cadastrar', 'Admin\Usuarios::create');
$routes->add('/Admin/Usuarios/editar/(:num)', 'Admin\Usuarios::edit/$1');
$routes->add('/Admin/Usuarios/excluir/(:num)', 'Admin\Usuarios::delete/$1');
//-------------------------------------------------------------------------
$routes->add('/Admin/Leads', 'Admin\Leads::index');
$routes->add('/Admin/Leads/cadastrar', 'Admin\Leads::create');
$routes->add('/Admin/Leads/editar/(:num)', 'Admin\Leads::edit/$1');
$routes->add('/Admin/Leads/excluir/(:num)', 'Admin\Leads::delete/$1');
//-------------------------------------------------------------------------
$routes->add('/Admin/Autenticacao/login', 'Admin\Auth::index');
$routes->post('/Admin/Autenticacao/login', 'Admin\Auth::login');
$routes->add('/Admin/Autenticacao/logout', 'Admin\Auth::logout');
//-------------------------------------------------------------------------
$routes->add('/Admin/Categorias', 'Admin\Categorias::index');
$routes->add('/Admin/Categorias/cadastrar', 'Admin\Categorias::create');
$routes->add('/Admin/Categorias/editar/(:num)', 'Admin\Categorias::edit/$1');
$routes->add('/Admin/Categorias/excluir/(:num)', 'Admin\Categorias::delete/$1');
//-------------------------------------------------------------------------
$routes->add('/Admin/Noticias', 'Admin\Noticias::index');
$routes->add('/Admin/Noticias/cadastrar', 'Admin\Noticias::create');
$routes->add('/Admin/Noticias/editar/(:num)', 'Admin\Noticias::edit/$1');
$routes->add('/Admin/Noticias/excluir/(:num)', 'Admin\Noticias::delete/$1');
$routes->add('/Admin/Noticias/galeria/(:num)', 'Admin\Noticias::galery/$1');
$routes->post('/Admin/Noticias/uploadImagens/(:num)', 'Admin\Noticias::uploadImages/$1');
$routes->get('/Admin/Noticias/deleteImage/(:num)/(:num)', 'Admin\Noticias::deleteImage/$1/$2');
//-------------------------------------------------------------------------
$routes->post('/UploadImage/upload', 'Admin\UploadImage::upload');
//-------------------------------------------------------------------------
$routes->add('/Admin/Servicos', 'Admin\Servicos::index');
$routes->add('/Admin/Servicos/cadastrar', 'Admin\Servicos::create');
$routes->add('/Admin/Servicos/editar/(:num)', 'Admin\Servicos::edit/$1');
$routes->add('/Admin/Servicos/excluir/(:num)', 'Admin\Servicos::delete/$1');
$routes->post('/Admin/Servicos/upload', 'Admin\Servicos::upload');
//-------------------------------------------------------------------------
$routes->add('/Admin/Categorias-galeria', 'Admin\CategoriasGaleria::index');
$routes->add('/Admin/Categorias-galeria/cadastrar', 'Admin\CategoriasGaleria::create');
$routes->add('/Admin/Categorias-galeria/editar/(:num)', 'Admin\CategoriasGaleria::edit/$1');
$routes->add('/Admin/Categorias-galeria/excluir/(:num)', 'Admin\CategoriasGaleria::delete/$1');
//-------------------------------------------------------------------------
$routes->add('/Admin/Galerias', 'Admin\Galeria::index');
$routes->add('/Admin/Galerias/cadastrar', 'Admin\Galeria::create');
$routes->add('/Admin/Galerias/editar/(:num)', 'Admin\Galeria::edit/$1');
$routes->add('/Admin/Galerias/excluir/(:num)', 'Admin\Galeria::delete/$1');
$routes->add('/Admin/Galerias/imagens/(:num)', 'Admin\Galeria::images/$1');
$routes->post('/Admin/Galerias/upload', 'Admin\Galeria::upload');
$routes->post('/Admin/Galerias/uploadImagens/(:num)', 'Admin\Galeria::uploadImages/$1');
$routes->get('/Admin/Galerias/deleteImage/(:num)/(:num)', 'Admin\Galeria::deleteImage/$1/$2');
//-------------------------------------------------------------------------
$routes->add('/Admin/Banners', 'Admin\Banners::index');
$routes->add('/Admin/Banners/cadastrar', 'Admin\Banners::create');
$routes->post('/Admin/Banners/upload', 'Admin\Banners::upload');
$routes->add('/Admin/Banners/editar/(:num)', 'Admin\Banners::edit/$1');
$routes->add('/Admin/Banners/excluir/(:num)', 'Admin\Banners::delete/$1');
//-------------------------------------------------------------------------
$routes->add('/Admin/GoogleAnalytics', 'Admin\Configuracoes::googleAnalytics');
$routes->add('/Admin/MetaTags', 'Admin\Configuracoes::metaTags');
$routes->add('/Admin/RedesSociais', 'Admin\Configuracoes::redesSociais');
$routes->add('/Admin/Email', 'Admin\Configuracoes::email');
$routes->add('/Admin/Email/cadastrar', 'Admin\Configuracoes::emailCreate');
$routes->add('/Admin/Email/configurar-servidor', 'Admin\Configuracoes::emailServer');
$routes->add('/Admin/Email/editar/(:num)', 'Admin\Configuracoes::emailEdit/$1');
$routes->add('/Admin/Email/excluir/(:num)', 'Admin\Configuracoes::emailDelete/$1');
//-------------------------------------------------------------------------
$routes->add('/Admin/PaginasCategorias', 'Admin\PaginasCategorias::index');
$routes->add('/Admin/PaginasCategorias/cadastrar', 'Admin\PaginasCategorias::create');
$routes->add('/Admin/PaginasCategorias/editar/(:num)', 'Admin\PaginasCategorias::edit/$1');
$routes->add('/Admin/PaginasCategorias/excluir/(:num)', 'Admin\PaginasCategorias::delete/$1');
//-------------------------------------------------------------------------
$routes->add('/Admin/Paginas', 'Admin\Paginas::index');
$routes->add('/Admin/Paginas/cadastrar', 'Admin\Paginas::create');
$routes->add('/Admin/Paginas/editar/(:num)', 'Admin\Paginas::edit/$1');
$routes->add('/Admin/Paginas/excluir/(:num)', 'Admin\Paginas::delete/$1');

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
