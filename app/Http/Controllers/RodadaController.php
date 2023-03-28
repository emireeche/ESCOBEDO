<?php

namespace App\Http\Controllers;

use App\Models\Rodada;
use Illuminate\Http\Request;

/**
 * Class RodadaController
 * @package App\Http\Controllers
 */
class RodadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rodadas = Rodada::paginate();

        return view('rodada.index', compact('rodadas'))
            ->with('i', (request()->input('page', 1) - 1) * $rodadas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rodada = new Rodada();
        return view('rodada.create', compact('rodada'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Rodada::$rules);

        $rodada = Rodada::create($request->all());

        return redirect()->route('rodada.index')
            ->with('success', 'Rodada created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rodada = Rodada::find($id);

        return view('rodada.show', compact('rodada'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rodada = Rodada::find($id);

        return view('rodada.edit', compact('rodada'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Rodada $rodada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rodada $rodada)
    {
        request()->validate(Rodada::$rules);

        $rodada->update($request->all());

        return redirect()->route('rodada.index')
            ->with('success', 'Rodada updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $rodada = Rodada::find($id)->delete();

        return redirect()->route('rodada.index')
            ->with('success', 'Rodada deleted successfully');
    }
}
