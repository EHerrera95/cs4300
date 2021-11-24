<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app->get("/", function(){
    require dirname(__DIR__) . '/views/index.php';
});

$app->get("/contact", function(){
    return __DIR__ . '/views/contact.php';
});

$app->get("/testimonials", function(){
    return __DIR__ . '/views/testimonials.php';
});

?>