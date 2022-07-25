<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUNKER® / Tops</title>
    <link rel="shortcut icon" href="/store-test/src/images/bunker-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="/store-test/src/css/style.css">
    <script src="/store-test/src/js/script.js" defer></script>
    <script src="https://kit.fontawesome.com/e4ad388285.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <?php include("/MAMP/htdocs/store-test/src/include/header.inc.php"); ?>

        <main id="main" class="main">
            <h1>Tops</h1>
            <div class="cards">
                <div class="card">
                    <form action="/store-test/src/pages/product-page.php">
                        <button class="card-img" type="submit"><img src="/store-test/src/images/t-shirt.png" alt="Avatar" style="width:100%"></button>
                    </form>
                    <div class="card-info">
                        <h4>Float Tee</h4>
                        <p>R 700.00</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img"><img src="/store-test/src/images/camo-jacket.png" alt="Avatar" style="width:100%"></div>
                    <div class="card-info">
                        <h4>Camo Field Jacket</h4>
                        <p>R 22000.00</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img"><img src="/store-test/src/images/cotton-dyed-jacket.png" alt="Avatar" style="width:100%"></div>
                    <div class="card-info">
                        <h4>Cotton Dyed Jacket</h4>
                        <p>R 10600.00</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img"><img src="/store-test/src/images/hoodie.png" alt="Avatar" style="width:100%"></div>
                    <div class="card-info">
                        <h4>Peace Of Mind Hoodie</h4>
                        <p>R 1500.00</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img"><img src="/store-test/src/images/chambray-shirt.png" alt="Avatar" style="width:100%"></div>
                    <div class="card-info">
                        <h4>Chambray Shirt</h4>
                        <p>R 5670.00</p>
                    </div>
                </div>
            </div>
        </main>

        <?php include("/MAMP/htdocs/store-test/src/include/footer.inc.php"); ?>
    </div>
</body>

</html>