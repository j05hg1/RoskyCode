<?php

namespace App\Http\Controllers;

use App\Models\Tbtipousuario;
use Illuminate\Http\Request;

/**
 * Class TbtipousuarioController
 * @package App\Http\Controllers
 */
class TbtipousuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbtipousuarios = Tbtipousuario::paginate();

        return view('tbtipousuario.index', compact('tbtipousuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $tbtipousuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbtipousuario = new Tbtipousuario();
        return view('tbtipousuario.create', compact('tbtipousuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tbtipousuario::$rules);

        $tbtipousuario = Tbtipousuario::create($request->all());

        return redirect()->route('tbtipousuarios.index')
            ->with('success', 'Tbtipousuario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbtipousuario = Tbtipousuario::find($id);

        return view('tbtipousuario.show', compact('tbtipousuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbtipousuario = Tbtipousuario::find($id);

        return view('tbtipousuario.edit', compact('tbtipousuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tbtipousuario $tbtipousuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbtipousuario $tbtipousuario)
    {
        request()->validate(Tbtipousuario::$rules);

        $tbtipousuario->update($request->all());

        return redirect()->route('tbtipousuarios.index')
            ->with('success', 'Tbtipousuario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tbtipousuario = Tbtipousuario::find($id)->delete();

        return redirect()->route('tbtipousuarios.index')
            ->with('success', 'Tbtipousuario deleted successfully');
    }
}
