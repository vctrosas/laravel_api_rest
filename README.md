## Genera el token de seguridad

```
Route::post('/login', 'LoginController@authenticate');
```

## Return all fields order by birthday desc

```
Route::get('empleado', 'EmpleadoController@index');
Output: all records
```

## Returns employe fields (Fullname, Job Position, Age) orderbyDesc birthday

```
Route::get('empleado/{id}', 'EmpleadoController@show');

```

## Insert a new employe

```
Route::put('empleado/store', 'EmpleadoController@store');
```

## Update a employe

```
Route::put('empleado/update', 'EmpleadoController@update');
Example Postman
http://laravelapi.test/api/empleado/update?id=8&first_name=Elisabethss&last_name=Runolfsson&full_name=Elisabeth Runolfsson&job_position=Structural Metal Fabricator&birthday=1994-11-27
```

## Delete a employe

```
Route::delete('empleado/destroy', 'EmpleadoController@destroy');
Example Postman
http://laravelapi.test/api/empleado/destroy?id=8
```
