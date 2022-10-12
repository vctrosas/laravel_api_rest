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
Output: [{"id":2,"full_name":"Salvatore Wuckert","job_position":"Industrial-Organizational Psychologist","age":16}]
```
