<!-- Accommodations Body Module -->
<?php
require "/MAMP/htdocs/store-test/src/include/createProductPage.inc.php";
$_SESSION['products'] = [];
$fileContents = file_get_contents("/MAMP/htdocs/store-test/src/json/products.json");
$fileContents = json_decode($fileContents, true);
?>
<main id="main" class="main">
    <div class="cards">
        <?php createProductPage($fileContents); ?>
    </div>
</main>