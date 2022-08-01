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

require __DIR__ . '/../src/routes/routes.php'; 


// $app->post('/product-data/add', function (Request $request, Response $response, array $args) {
//     $data = $request->getParsedBody();
//     // $product_id = $data["product_id"];
//     $type = $data["type"];
//     $name = $data["name"];
//     $brand = $data["brand"];
//     $price = $data["price"];
//     $image = $data["image"];
//     $alt_view_image = $data["alt_view_image"];
//     $released = $data["released"];
//     $featured = $data["featured"];


//     $sql = "INSERT INTO `products` (`type`, `name`, `brand`, `price`, `image`, `alt_view_image`, `released`, `featured`) VALUES (:type, :name, :brand, :price, :image, :alt_view_image, :released, :featured)";

//     try {
//         $db = new Db();
//         $conn = $db->connect();

//         $stmt = $conn->prepare($sql);
//         $stmt->bindParam(':type', $type);
//         $stmt->bindParam(':name', $name);
//         $stmt->bindParam(':brand', $brand);
//         $stmt->bindParam(':price', $price);
//         $stmt->bindParam(':image', $image);
//         $stmt->bindParam(':alt_view_image', $alt_view_image);
//         $stmt->bindParam(':released', $released);
//         $stmt->bindParam(':featured', $featured);

//         $result = $stmt->execute();

//         $db = null;
//         $response->getBody()->write(json_encode($result));
//         return $response
//             ->withHeader('content-type', 'application/json')
//             ->withStatus(200);
//     } catch (PDOException $e) {
//         $error = array(
//             "message" => $e->getMessage()
//         );

//         $response->getBody()->write(json_encode($error));
//         return $response
//             ->withHeader('content-type', 'application/json')
//             ->withStatus(500);
//     }
// });

$app->run();
