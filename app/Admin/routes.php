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
    $router->resource('/profile_about', 'Portfolio\ProfileAboutController');
    $router->resource('/education_info', 'Portfolio\EducationInfoController');
    $router->resource('/experience_info', 'Portfolio\ExperienceInfoController');
    $router->resource('/skill_info', 'Portfolio\SkillInfoController');


});
