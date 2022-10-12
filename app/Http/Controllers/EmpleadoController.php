<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        $empleados = Empleado::orderByDesc('birthday')->paginate(5);
        return $empleados;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'full_name' => 'required|string',
            'birthday' => 'required|date',
            'job_position' => 'required|string',
            'age' => 'required|integer|max:100',
        ]);

        Empleado::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleados = Empleado::select('id', 'full_name', 'job_position', 'age')
            ->where('id', '=', $id)
            ->get();
        return $empleados;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //$id = (int) $request('id');
        $id = (int) $request->get('id');
        $empleado = Empleado::find($id);

        $data = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'birthday' => 'required|date',
            'job_position' => 'required|string',
            'full_name' => 'required|string',
        ]);

        $empleado->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = (int) $request->get('id');
        $empleado = Empleado::find($id);
        $empleado->delete();
    }
}
