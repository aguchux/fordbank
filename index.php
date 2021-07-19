<?php
define('DOT', '.');
require_once(DOT . "/bootstrap.php");

$Route = new Apps\Route;

$Route->add('/', function () {
	$Template = new Apps\Template("/ibanking/auth/login/");
	$Template->render("home");
}, 'GET');

$Route->add('/ibanking/', function () {
	$Template = new Apps\Template("/ibanking/auth/login/");
	$Template->addheader("layouts.dashboard.header");
	$Template->addfooter("layouts.dashboard.footer");
	$Template->redirect("ibanking.dashboard");
}, 'GET');

$Route->add('/ibanking/auth/register', function () {
	$Template = new Apps\Template;
	$Template->addheader("layouts.dashboard.header");
	$Template->addfooter("layouts.dashboard.footer");
	$Template->render("ibanking.register");
}, 'GET');


$Route->add('/ibanking/auth/login', function () {
	$Template = new Apps\Template;
	$Template->addheader("layouts.dashboard.header");
	$Template->addfooter("layouts.dashboard.footer");
	$Template->render("ibanking.login");
}, 'GET');

$Route->add('/ibanking/auth/reset', function () {
	$Template = new Apps\Template;
	$Template->addheader("layouts.dashboard.header");
	$Template->addfooter("layouts.dashboard.footer");
	$Template->render("ibanking.reset");
}, 'GET');


include_once "./_public/admin.php";


$Route->run('/');
