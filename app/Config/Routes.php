<?php

namespace Config;

$routes = Services::routes();


if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);


// Teachers
$routes->get('/teacher', 'Teacher::index');
$routes->get('/teacher/delete/[:num]', 'Teacher::delete(num)');
$routes->post('/teacher/add', 'Teacher::add');
$routes->post('/teacher/edit/[:num]', 'Teacher::edit(num)');

// Parents
$routes->get('/parents', 'Parents::index');
$routes->get('/parents/delete/[:num]', 'Parents::delete(num)');
$routes->get('/parents/add', 'Parents::add');
$routes->post('/parents/add', 'Parents::add');
$routes->post('/parents/edit/[:num]', 'Parents::edit(num)');

// Students
$routes->get('/student', 'Student::index');
$routes->get('/student/delete/[:num]', 'Student::delete(num)');
$routes->get('/student/add', 'Student::add');
$routes->post('/student/add', 'Student::add');
$routes->post('/student/edit/[:num]', 'Student::edit(num)');


// Properties
$routes->get('/property', 'Property::index');
$routes->get('/property/delete/[:num]', 'Property::delete(num)');
$routes->get('/property/add', 'Property::add');
$routes->post('/property/add', 'Property::add');
$routes->post('/property/edit/[:num]', 'Property::edit(num)');

// Events
$routes->get('/event', 'Event::index');
$routes->get('/event/delete/[:num]', 'Event::delete(num)');
$routes->get('/event/add', 'Event::add');
$routes->post('/event/add', 'Event::add');
$routes->post('/event/edit/[:num]', 'Event::edit(num)');

// Subjects
$routes->get('/subjects', 'Subjects::index');
$routes->get('/subjects/delete/[:num]', 'Subjects::delete(num)');
$routes->get('/subjects/add', 'Subjects::add');
$routes->post('/subjects/add', 'Subjects::add');
$routes->post('/subjects/edit/[:num]', 'Subjects::edit(num)');

// Classes
$routes->get('/classes', 'Classes::index');
$routes->get('/classes/delete/[:num]', 'Classes::delete(num)');
$routes->get('/classes/add', 'Classes::add');
$routes->post('/classes/add', 'Classes::add');
$routes->post('/classes/edit/[:num]', 'Classes::edit(num)');


// Exams
$routes->get('/exam', 'Exam::index');
$routes->get('/exam/delete/[:num]', 'Exam::delete(num)');
$routes->get('/exam/add', 'Exam::add');
$routes->post('/exam/add', 'Exam::add');
$routes->post('/exam/edit/[:num]', 'Exam::edit(num)');


if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
