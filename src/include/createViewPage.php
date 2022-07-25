<?php
function createViewPage($products)
{
    $product_id = $_GET["product_id"];
    foreach ($products as $index => $productArray) {
        $index = $index + 1;
        if ($index == $product_id) {
            echo "
                <div class='change-view-buttons'>
                    <button onclick='document.getElementById('product-img').src=\"" . $productArray['image'] . "\"'>
                        <img src=\"" . $productArray['image'] . "\" class='view-img'>
                    </button>
                    <button onclick='document.getElementById('product-img').src=\"" . $productArray['image'] . "\"'>
                        <img src=\"" . $productArray['alt-view-image'] . "\" class='view-img'>
                    </button>
                </div>
                    <img id='product-img' src=\"" . $productArray['image'] . "\" class='product-img'>
                    <div class='product-order-form'>
                    <form class='order-form'>
                        <p class='detail'><span class='label'>NAME:</span>" . $productArray['name'] . "</p>
                        <p class='detail'><span class='label'>BRAND:</span>" . $productArray['brand'] . "</p>
                        <p class='detail'><span class='label'>PRICE:</span>R " . $productArray['price'] . ".00</p>
                        <label for='sizes' class='label'>SIZE:</label>
                        <select id='sizes' name='sizelist' class='select'>
                            <option value='xs' title='Extra Small'>XS</option>
                            <option value='s' title='Small'>S</option>
                            <option value='m' title='Medium'>M</option>
                            <option value='l' title='Large'>L</option>
                            <option value='xl' title='Extra Large'>XL</option>
                            <option value='xxl' title='2x Extra Large'>XXL</option>
                            <option value='xxxl' title='3x Extra Large'>XXXL</option>
                        </select>
                        <input type='submit' class='product-btn' title='Checkout' value='CHECKOUT'>
                    </form>
                    <button type='submit' class='product-btn' title='Add to cart'>ADD TO CART</button>
                </div>
            ";
        }
    }
}
