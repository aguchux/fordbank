<?php
define('DOT', '.');
require_once(DOT . "/bootstrap.php");

$Route = new Apps\Route;

$Route->add('/', function () {
	$Template = new Apps\Template(auth_url);
	$Template->render("home");
}, 'GET');


include_once "./_public/admin.php";


$Route->run('/');
