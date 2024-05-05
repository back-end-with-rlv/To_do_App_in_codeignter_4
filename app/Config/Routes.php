<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('test','Test::index');

$routes->get('todo', 'ToDoApp\To_do_list::index');

// To To App
$routes->get('task','ToDoApp\To_do_list::index');
$routes->get('task/create','ToDoApp\To_do_list::create');
$routes->post('task/store', 'ToDoApp\To_do_list::store');
$routes->get('task/edit/(:num)','ToDoApp\To_do_list::edit/$1');
$routes->post('task/update/(:num)','ToDoApp\To_do_list::update/$1');
$routes->get('task/delete/(:num)','ToDoApp\To_do_list::delete/$1');
$routes->get('check-db-connection', 'ToDoApp\To_do_list::checkDbConnection');

