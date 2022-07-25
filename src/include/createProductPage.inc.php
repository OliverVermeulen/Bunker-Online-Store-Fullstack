<!-- Accommodation Creation Module -->
<?php
function createProductPage($products)
{
    foreach ($products as $index => $productArray) {
        $index = $index + 1;
        echo "
            <div class='card'>
            <form action='view'>
                <input type='hidden' value=" . $productArray['id'] . " name='product_id'>
                <button class='card-img' type='submit'><img src=\"" . $productArray['image'] . "\" alt=\"" . $productArray['name'] . "\" title=\"" . $productArray['name'] . "\" style='width:100%'></button>
            </form>
            <div class='card-info'>
                <h4>" . $productArray['name'] . "</h4>
                <p>R " . $productArray['price'] . ".00</p>
            </div>
        </div>
            ";
    }
}
