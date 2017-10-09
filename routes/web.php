<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

use App\Project;
use App\Student;

$router->get('/example', function () {
    $project = Project::find(1);
    $firstStudent = Student::find('580610612');
    $secondStudent = Student::find('580610613');
    $result = $project->students()->saveMany([$firstStudent, $secondStudent]);
    return $result;
});
