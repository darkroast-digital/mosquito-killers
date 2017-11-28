<?php

/*
|--------------------------------------------------------------------------
| #WEB
|--------------------------------------------------------------------------
*/



use App\Controllers\HomeController;
use App\Controllers\SiteController;



// #HOME
// =========================================================================

$app->get('/', HomeController::class . ':index')->setName("home");
$app->get('/bugs-disease', SiteController::class . ':bugsDisease')->setName("bugs-disease");
$app->get('/connect', SiteController::class . ':connect')->setName("connect");
$app->get('/faq', SiteController::class . ':faq')->setName("faq");
$app->get('/franchise-opprtunities', SiteController::class . ':franchiseOpprtunities')->setName("franchise-opprtunities");
$app->get('/services', SiteController::class . ':services')->setName("services");

$app->get('/residential-mosquito-control-treatment', SiteController::class . ':residential')->setName("residential");
$app->get('/all-natural-mosquito-control', SiteController::class . ':natural')->setName("natural");
$app->get('/outdoor-event-spray', SiteController::class . ':outdoor')->setName("outdoor");
$app->get('/commerciall-mosquito-control', SiteController::class . ':commercial')->setName("commercial");


$app->post('/', HomeController::class . ':post');