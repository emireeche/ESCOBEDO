<?php

namespace App\Http\Controllers;

use App\Models\Tipousuario;
use Illuminate\Http\Request;

/**
 * Class TipousuarioController
 * @package App\Http\Controllers
 */
class TipousuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipousuarios = Tipousuario::paginate();

        return view('tipousuario.index', compact('tipousuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $tipousuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipousuario = new Tipousuario();
        return view('tipousuario.create', compact('tipousuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipousuario::$rules);

        $tipousuario = Tipousuario::create($request->all());

        return redirect()->route('tipousuario.index')
            ->with('success', 'Tipousuario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipousuario = Tipousuario::find($id);

        return view('tipousuario.show', compact('tipousuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipousuario = Tipousuario::find($id);

        return view('tipousuario.edit', compact('tipousuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipousuario $tipousuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipousuario $tipousuario)
    {
        request()->validate(Tipousuario::$rules);

        $tipousuario->update($request->all());

        return redirect()->route('tipousuario.index')
            ->with('success', 'Tipousuario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipousuario = Tipousuario::find($id)->delete();

        return redirect()->route('tipousuario.index')
            ->with('success', 'Tipousuario deleted successfully');
    }
}
