<?php
include_once('./models/BDD.php');
include_once('./controllers/CategoriesController.php');
include_once('./controllers/UserController.php');

$categories = new CategoriesController;
$menu = $categories->getCategories();

include_once('./views/header.php');
include_once('./controllers/route.php');
include_once('./views/footer.php');
