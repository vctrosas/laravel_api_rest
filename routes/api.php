<?php

use Illuminate\Support\Facades\Route;

Route::post('/login', 'LoginController@authenticate'); //Genera el token de seguridad

Route::get('empleado/', 'EmpleadoController@index'); // Return all fields order by birthday desc

Route::get('empleado/{id}', 'EmpleadoController@show'); //Return employe fields (Fullname, Job Position, Age) orderbyDesc birthday

Route::get('empleado/{id}', 'EmpleadoController@show'); //Return employe fields (Fullname, Job Position, Age) orderbyDesc birthday
