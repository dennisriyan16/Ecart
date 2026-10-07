<?php
use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home\HomeController::index');
$routes->get('home/shop', 'Shop\ShopController::index');
$routes->get('home/categories', 'Categories\CategoriesController::index');
$routes->get('home/about', 'About\AboutController::index');
$routes->get('home/contact', 'Contact\ContactController::index');
