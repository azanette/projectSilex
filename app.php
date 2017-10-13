<?php

$app = new Silex\Application();

/* Debug */
$app['debug'] = false;

/* Criando os serviços com o Pimple */
$app['url_site'] = 'http://www.meusite.com';


$app->run();