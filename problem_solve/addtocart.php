<?php
if(session_status()==PHP_SESSION_NONE)session_start();

# store a vailable product.....

$products =[
['product_id' => 1 , 'product_name' => 'shoes' , 'product_price' => 300],
['product_id' => 2 , 'product_name' => 'skirt' , 'product_price' => 500],
['product_id' => 3 , 'product_name' => 'pants' , 'product_price' => 600],

];

# display products ......


foreach( $products as $product ) {
    echo"<pre> " ;
echo "product id : " .  $product['product_id']."<br>" . "product_name  : " .$product['product_name'] ."<br>". "product price : " . $product['product_price'] ;
    echo "</pre>";

echo '<form action="" method="POST">
 
<input type="hidden" name="product_id" value="'. $product['product_id'] .'">
<input type="hidden" name="product_name" value="'. $product['product_name'] .'">
<input type="hidden" name="product_price" value="'. $product['product_price'] .'">
<button type="submit" name"add_to_cart" >add to cart</button>
</form>
' ;
echo"<br>";

}

# add product to cart

if(isset($_POST['add_to_cart'])){
    $product_id =$_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'] ;

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] =[];
    }

    # add product to cart

    $_SESSION['cart'][] = ['product_id' => $product_id , 'product_name' => $product_name , 'product_price'=> $product_price ];
    echo "product addeto cart" . $product_name . "<br>" ;
}


?>