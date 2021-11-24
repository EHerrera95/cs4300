<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app->get("/", function(){
    require __DIR__ . '/views/index.php';
});

$app->get("/contact", function(){
    require __DIR__ . '/views/contact.php';
});

$app->get("/testimonials", function(){
    require __DIR__ . '/views/testimonials.php';
});

?>