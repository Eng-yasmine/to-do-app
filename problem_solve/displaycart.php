<?php
if(session_status()==PHP_SESSION_NONE)session_start();




$count = count($_SESSION['cart']) ;
 global $total ;
if(isset($_SESSION['cart']) && $count > 0){
$total = 0 ;
echo ' product of cart : <br> ' ;
foreach($_SESSION['cart'] as $index => $item){
    
    echo "product name : " . $item['product_name'] ."<br>" . "product price : " . $item['product_price'] ;
    echo'<form action="" method="POST" >
    <input type="hidden"  name="remove_index"  value" '. $index . '" >
    <button type="submit"  name="remove_from_cart" >delete</button>
    </form>';
    $total += $item['product_price'] ;
    echo "<br>";

}

# the total price of the cart 

echo "total price of the cart : " . $total  . "<br>" ;

}else{

    echo "cart is empty" ;
}


# delet product from cart ....

if(isset($_POST['remove_from_cart'])){
    $remove_index = $_POST['remove_index'] ;

# remove the product from the cart

    unset($_SESSION['cart']['remove_index']) ;

    $_SESSION['cart'] = array_values($_SESSION['cart']) ;
}














?>