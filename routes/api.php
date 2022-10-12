<?php

use Illuminate\Support\Facades\Route;

Route::post('/login', 'LoginController@authenticate'); //Genera el token de seguridad

Route::get('empleado/index', 'EmpleadoController@index');
