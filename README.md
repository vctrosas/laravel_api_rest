## Genera el token de seguridad

```
Route::post('/login', 'LoginController@authenticate');
```

## Return all fields order by birthday desc

```
Route::get('empleado', 'EmpleadoController@index');
```

## Return employe fields (Fullname, Job Position, Age) orderbyDesc birthday

```
Route::get('empleado/{id}', 'EmpleadoController@show');
```
