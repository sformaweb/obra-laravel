<?php

namespace App\Http\Controllers;

use App\Models\Ofertafs;
use Illuminate\Http\Request;

class OfertafsController extends Controller
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
        $ofertats = Ofertafs::where('nome', 'like', '' . $busqueda . '%')
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
    return view('ofertafs.create');
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
        $ofertaf = new Ofertafs($request->all());
        $ofertaf->save();
        return redirect()->action([OfertafsController::class, 'index']);
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ofertafs  $ofertafs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ofertaf = Ofertafs::findOrFail($id);
        return view('ofertafs.show', ['ofertafs' => $ofertaf]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ofertafs  $ofertafs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
$ofertaf = Ofertafs::findOrFail($id);
        return view('ofertafs.edit', ['ofertafs' => $ofertaf]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Ofertafs $ofertafs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ofertaf $ofertaf)
    {
        //
        $ofertaf = ofertafs::findOrFail($id);
        $ofertaf->nome = $request->nome;
        $ofertaf->datadende = $request->datadende;
        $ofertaf->dataata = $request->dataata;
        $ofertaf->lugar = $request->lugar;
        $ofertaf->tipo = $request->tipo;
        $ofertaf->numhoras = $request->numhoras;
        $ofertaf->numprazas = $request->numprazas;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ofertafs  $ofertafs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // borrar oferta
        $ofertaf = Ofertafs::findOrFail($id);
        $ofertaf->delete();
        return redirect()->action([OfertafsController::class, 'index']);
    }
}
