<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('/profile-about', 'Portfolio\ProfileAboutController');
    $router->resource('/education-info', 'Portfolio\EducationInfoController');
    $router->resource('/experience-info', 'Portfolio\ExperienceInfoController');
    $router->resource('/skill-info', 'Portfolio\SkillInfoController');
    $router->resource('/project-info', 'Portfolio\ProjectInfoController');
    $router->resource('/project-category', 'Portfolio\ProjectCategoryController');


});
