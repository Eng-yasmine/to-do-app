<?php


$page = isset($_GET['page']) ? $_GET['page'] : "home";

$pages = [
    'home'            => "../public/index-2.php",
    'checkout'        => "../view/cart/checkout.php",
    'product-details' => "../view/product-details.php",
    'about'           => "../view/about.php",
    'contact'         => "../view/auth/contact.php",
    'privacy-policy'  => "../view/privacy-policy.php",
    'faq'             => "../view/faq.php",
    'login'           => "../view/auth/login.php",
    'register'        => "../view/auth/register.php",
    'forget-password' => "../view/auth/forget-password.php",
    '404'             => "../view/error/404.php",
    'cart'            => "../view/cart/cart.php",
    'tracking'        => "../view/tracking.php",
    'blog'            => "../view/blog/blog.php",
    'blog-details'    => "../view/blog/blog-details.php",
    'my-account'      => "../view/auth/my-account.php"
];


include isset($pages[$page]) ? $pages[$page] : $pages['404'];