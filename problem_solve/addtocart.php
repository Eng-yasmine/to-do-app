<?php
if(session_status()==PHP_SESSION_NONE)session_start();
/*
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

echo '<form action="displaycart.php" method="POST">
 
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
    echo "product adde to cart" . $product_name . "<br>" ;

    header('location:displaycart.php');
}
*/


$products = [
['id' => 1 , 'name' => 'product1' , 'price' => 1400 , 'quantity' => 1] ,
['id' => 2 ,'name' => 'product2' , 'price' => 950 , 'quantity' => 2] ,
['id' => 3 ,'name' => 'product3' , 'price' => 200 , 'quantity' => 1] ,



]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border='1'>
<tr>
<th>product id</th>
<th>product name</th>
<th>product price</th>
<th>product quantity</th>

</tr>
<?php foreach($products as $id => $product)   ?>
<tr>
<td><?=$product['id'] ;?></td>
<td><?= $product['name'] ; ?></td>
<td><?= $product['price'] ; ?></td>
<td><?= $product['quantity'] ; ?></td>
<td><a href='?add_to_cart=$id'>add to cart</a></td>
</tr>
</table>
</body>

</html>

<?php

if(isset($_GET['add_to_cart'])){

         $product_id =$_GET['add_to_cart'] ;

         if(isset($products[$product_id])){

            # search in array about product id 

            if(!isset($_SESSION['cart'])){
                $_SESSION['cart'] = [] ;
            }
            $_SESSION['cart'][] =$products[$product_id] ;
            echo "product  " . $products[$product_id]['name'] ."". "to cart";
         }

}









?>


