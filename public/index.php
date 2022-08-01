<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Selective\BasePath\BasePathMiddleware;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../src/Models/db.php';

$app = AppFactory::create();

$app->addRoutingMiddleware();
$app->add(new BasePathMiddleware($app));
$app->addErrorMiddleware(true, true, true);
$app->addBodyParsingMiddleware();

// path to products
require __DIR__ . '/../src/routes/routes.php'; 

// path to user
require __DIR__ . '/../src/routes/get-user.php'; 

// path to cart
require __DIR__ . '/../src/routes/get-cart.php'; 

$app->run();
