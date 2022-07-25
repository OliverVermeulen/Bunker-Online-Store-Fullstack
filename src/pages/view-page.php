<!-- Accommodations Body Module -->
<?php
require "/MAMP/htdocs/Bunker-Online-Store-Fullstack/src/include/createViewPage.php";
$_SESSION['products'] = [];
$fileContents = file_get_contents("/MAMP/htdocs/Bunker-Online-Store-Fullstack/src/json/products.json");
$fileContents = json_decode($fileContents, true);
?>
<main id="main">
    <div class="product">
        <?php createViewPage($fileContents); ?>
    </div>
</main>