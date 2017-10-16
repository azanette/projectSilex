<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

/* Debug */
$app['debug'] = false;

/* Criando os serviços com o Pimple */
$app['url_site'] = 'http://www.meusite.com';
$app['view.config'] = [
	'path_templates' => __DIR__ . '/../templates'
];
$app['view.renderer'] = function() use($app){
	$pathTemplates = $app['view.config']['path_templates'];
	return new ViewRenderer($pathTemplates);
};

/* Enviado conteúdo para url.php */
$site->get('/url', function (Request $request) use ($app) {
    return $app['view.renderer']->render('url');
});

$app->run();
