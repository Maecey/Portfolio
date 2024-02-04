<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PortfolioController::index');
$routes->get('index', 'PortfolioController::index');
