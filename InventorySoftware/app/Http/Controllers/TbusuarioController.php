<?php

namespace App\Http\Controllers;

use App\Models\Tbusuario;
use Illuminate\Http\Request;

/**
 * Class TbusuarioController
 * @package App\Http\Controllers
 */
class TbusuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbusuarios = Tbusuario::paginate();

        return view('tbusuario.index', compact('tbusuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $tbusuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbusuario = new Tbusuario();
        return view('tbusuarios.create', compact('tbusuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tbusuario::$rules);

        $tbusuario = Tbusuario::create($request->all());

        return redirect()->route('tbusuarios.index')
            ->with('success', 'Tbusuario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbusuario = Tbusuario::find($id);

        return view('tbusuarios.show', compact('tbusuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbusuario = Tbusuario::find($id);

        return view('tbusuarios.edit', compact('tbusuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tbusuario $tbusuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbusuario $tbusuario)
    {
        request()->validate(Tbusuario::$rules);

        $tbusuario->update($request->all());

        return redirect()->route('tbusuarios.index')
            ->with('success', 'Tbusuario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbusuario = Tbusuario::find($id)->delete();

        return redirect()->route('tbusuarios.index')
            ->with('success', 'Tbusuario deleted successfully');
    }
}
