<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Models\Marca;
use App\Models\Rodada;
use App\Models\Medida;
use App\Models\Llanta;
use Illuminate\Http\Request;

/**
 * Class LlantaController
 * @package App\Http\Controllers
 */
class LlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $llantas = Llanta::paginate();

        return view('llanta.index', compact('llantas'))
            ->with('i', (request()->input('page', 1) - 1) * $llantas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $llanta = new Llanta();
        $vehiculo= Vehiculo::pluck('descripcion','id');
        $marca= Marca::pluck('descripcion','id');
        $rodada= Rodada::pluck('descripcion','id');
        $medida=Medida::pluck('descripcion','id');
        return view('llanta.create', compact('llanta','vehiculo','marca','rodada','medida'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Llanta::$rules);

        $llanta = Llanta::create($request->all());

        return redirect()->route('llanta.index')
            ->with('success', 'Llanta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $llanta = Llanta::find($id);

        return view('llanta.show', compact('llanta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function llantaweb(){
        $llanta = LLanta::all();
      return view('welcome', compact('llanta'));
    }


    public function edit($id)
    {
        $llanta = Llanta::find($id);
        $vehiculo= Vehiculo::pluck('descripcion','id');
        $marca= Marca::pluck('descripcion','id');
        $rodada= Rodada::pluck('descripcion','id');
        $medida=Medida::pluck('descripcion','id');
        return view('llanta.edit', compact('llanta','vehiculo','marca','rodada','medida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Llanta $llanta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Llanta $llanta)
    {
        request()->validate(Llanta::$rules);

        $llanta->update($request->all());

        return redirect()->route('llanta.index')
            ->with('success', 'Llanta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $llanta = Llanta::find($id)->delete();

        return redirect()->route('llanta.index')
            ->with('success', 'Llanta deleted successfully');
    }
}
