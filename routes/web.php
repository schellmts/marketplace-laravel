<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    return view('welcome');
});

//chamar as rotas pela pasta web

foreach (File::allFiles(__DIR__ . '/web') as $route_file) {
    require $route_file->getPathname();
}

require __DIR__ . '/auth.php';
