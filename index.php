<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUNKER®</title>
    <link rel="shortcut icon" href="/Bunker-Online-Store-Fullstack/src/images/bunker-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="/Bunker-Online-Store-Fullstack/src/css/style.css">
    <script src="/Bunker-Online-Store-Fullstack/src/js/script.js" defer></script>
    <script src="https://kit.fontawesome.com/e4ad388285.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <?php
        // Footer
        include("/MAMP/htdocs/Bunker-Online-Store-Fullstack/src/include/header.inc.php");
        include("/MAMP/htdocs/Bunker-Online-Store-Fullstack/src/include/modal.inc.php");

        // Switch Router
        $request = $_SERVER['REQUEST_URI'];
        $basepath = "Bunker-Online-Store-Fullstack/";
        $request = str_replace($basepath, "", $request);
        $request = strtok($request, '?');
        switch ($request) {
            case '/':
                require __DIR__ . '/src/pages/product-page.php';
                break;
            case '':
                require __DIR__ . '/src/pages/product-page.php';
                break;
            case '/home':
                require __DIR__ . '/src/pages/product-page.php';
                break;
            case '/view':
                require __DIR__ . '/src/pages/view-page.php';
                break;
            default:
                http_response_code(404);
                echo "page not found";
                break;
        };

        // Footer
        include("/MAMP/htdocs/Bunker-Online-Store-Fullstack/src/include/footer.inc.php"); ?>
    </div>
</body>

</html>