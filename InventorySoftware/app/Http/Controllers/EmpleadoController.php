<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
//elimina la foto del storage antes de subirla a la BD
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Controlador de la clase Empleado
|--------------------------------------------------------------------------
| En esta archivo se controlan las funciones tanto del sistema como el envio a BD
|
*/

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //trae la informacion de la BD y la muestra paginada en la tabla
        $datos['empleados']=Empleado::paginate(5);
        //retorna a empleado/index
        return view('empleado.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //cuando se haya guardado la informacion, retornara al formulario create
        return view('empleado.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // arreglos de requerimiento de ingreso de datos en el formulario de crear y editar
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Edad'=>'required|integer|max:100',
            'Direccion'=>'required|string|max:100',
            'Telefono'=>'required|string|max:100',
            'Email'=>'required|string|max:100',
        ];
        //mensaje que muestra los campos donde se requiere ingresar datos
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Direccion.required'=>'La direccion es requerida',
            'Edad.required'=>'La edad es requerida'
        ];

        $this->validate($request, $campos, $mensaje);

        //almacena la informacion ingresada por el formulario a la BD
        //exceptuando el token (identificador del laravel a la BD)
        //$datosEmpleado = request()->all();
        $datosEmpleado = request()->except('_token');
        //llama al objeto Empleado e inserta la informacion a la tabla Empleados
        Empleado::insert($datosEmpleado);
        //envia los datos a json y este a la BD
        //return response()->json($datosEmpleado);

        //redirecciona a la vista empleado con un mensaje
        return redirect('empleado')->with('mensaje','Empleado agregado con éxito');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //busca el id en la tabla empleados para editarlo
        $empleado=Empleado::findOrFail($id);
        //retorna a la vista edicion cuando se guarden y envien los datos editados a la BD
        return view('empleado.edit', compact('empleado'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // arreglos de requerimiento de ingreso de datos en el formulario de crear y editar
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Edad'=>'required|integer|max:100',
            'Direccion'=>'required|string|max:100',
            'Telefono'=>'required|string|max:100',
            'Email'=>'required|string|max:100',
        ];
        //mensaje que muestra los campos donde se requiere ingresar datos
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Direccion.required'=>'La direccion es requerida',
            'Edad.required'=>'La edad es requerida'
        ];

        $this->validate($request, $campos, $mensaje);


        //actualiza la informacion en la BD
        //excptua el token y el metodo
        $datosEmpleado = request()->except(['_token','_method']);
        //busca el id, si coincide edita la informacion
        Empleado::where('id','=',$id)->update($datosEmpleado);
        //busca el id en la tabla empleados para editarlo
        $empleado=Empleado::findOrFail($id);
        //retorna a la vista edicion cuando se guarden y envien los datos editados a la BD
        //return view('empleado.edit', compact('empleado'));
        return redirect('empleado')->with('mensaje','Empleado Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //llama al objeto Empleado, busca el id en la tabla empleados y aplica DELETE 
        Empleado::destroy($id);
        //redirecciona a la vista empleado con un mensaje, tras efectuarse la funcion
        return redirect('empleado')->with('mensaje','Empleado Borrado');

    }
}
