<?php

namespace App\Http\Controllers;

use App\Models\Tbidentificacion;
use Illuminate\Http\Request;

/**
 * Class TbidentificacionController
 * @package App\Http\Controllers
 */
class TbidentificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbidentificacions = Tbidentificacion::paginate();

        return view('tbidentificacion.index', compact('tbidentificacions'))
            ->with('i', (request()->input('page', 1) - 1) * $tbidentificacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbidentificacion = new Tbidentificacion();
        return view('tbidentificacion.create', compact('tbidentificacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tbidentificacion::$rules);

        $tbidentificacion = Tbidentificacion::create($request->all());

        return redirect()->route('tbidentificacions.index')
            ->with('success', 'Tbidentificacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbidentificacion = Tbidentificacion::find($id);

        return view('tbidentificacion.show', compact('tbidentificacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbidentificacion = Tbidentificacion::find($id);

        return view('tbidentificacion.edit', compact('tbidentificacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tbidentificacion $tbidentificacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbidentificacion $tbidentificacion)
    {
        request()->validate(Tbidentificacion::$rules);

        $tbidentificacion->update($request->all());

        return redirect()->route('tbidentificacions.index')
            ->with('success', 'Tbidentificacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbidentificacion = Tbidentificacion::find($id)->delete();

        return redirect()->route('tbidentificacions.index')
            ->with('success', 'Tbidentificacion deleted successfully');
    }
}
