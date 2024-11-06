<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

Route
::controller(AuthController::class)
->group(function ($auth) {
    $auth->post('signup', 'signup');
    $auth->post('login' , 'login' );
    $auth->post('logout', 'logout')->middleware('auth:api');
});
