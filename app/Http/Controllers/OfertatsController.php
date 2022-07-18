<?php

namespace App\Http\Controllers;

use App\Models\Ofertats;
use Illuminate\Http\Request;

class OfertatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda = trim($request->get('busqueda'));

        // 
        $ofertats = Ofertats::where('nome', 'like', '' . $busqueda . '%')
            ->orWhere('datadende', 'like', '' . $busqueda . '%')
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('ofertats.index', ['ofertats' => $ofertats, 'busqueda' => $busqueda]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // crear
        return view('ofertats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
 $ofertat = new Ofertats($request->all());
        $ofertat->save();
        return redirect()->action([OfertatsController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ofertats  $ofertats
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ofertat = Ofertats::findOrFail($id);
        return view('ofertats.show', ['ofertats' => $ofertat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ofertats  $ofertats
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
$ofertat = Ofertats::findOrFail($id);
        return view('ofertats.edit', ['ofertats' => $ofertat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Ofertats $ofertats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ofertat $ofertat)
    {
        //
        $ofertat = ofertats::findOrFail($id);
        $ofertat->nome = $request->nome;
        $ofertat->datadende = $request->datadende;
        $ofertat->dataata = $request->dataata;
        $ofertat->lugar = $request->lugar;
        $ofertat->tipo = $request->tipo;
        $ofertat->numhoras = $request->numhoras;
        $ofertat->numprazas = $request->numprazas;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ofertats  $ofertats
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Ofertat $ofertat)
public function destroy($id)
    {
        // borrar oferta
        $ofertat = Ofertats::findOrFail($id);
        $ofertat->delete();
        return redirect()->action([OfertatsController::class, 'index']);
    }
}
