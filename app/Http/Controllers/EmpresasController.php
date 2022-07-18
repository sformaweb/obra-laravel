<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda = trim($request->get('busqueda'));

        // $empresas = empresas::paginate(10);
        $empresas = Empresas::where('nome', 'like', '' . $busqueda . '%')
            ->orWhere('telefono', 'like', '' . $busqueda . '%')
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('empresas.index', ['empresas' => $empresas, 'busqueda' => $busqueda]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresa = new Empresas($request->all());
        $empresa->save();
        return redirect()->action([EmpresasController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa = Empresas::findOrFail($id);
        return view('empresas.show', ['empresas' => $empresa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresas::findOrFail($id);
        return view('empresas.edit', ['empresas' => $empresa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empresa = empresas::findOrFail($id);
        $empresa->nome = $request->nome;
        $empresa->localidade = $request->localidade;
        $empresa->poboacion = $request->poboacion;
        $empresa->actividade = $request->actividade;
        $empresa->telefono = $request->telefono;
        $empresa->fax = $request->fax;
        $empresa->data_incorporacion = $request->data_incorporacion;
        $empresa->persoa_contacto = $request->persoa_contacto;
        $empresa->orientador = $request->orientador;
        $empresa->ofertas_contratacion = $request->ofertas_contratacion;
        $empresa->ofertas_formacion = $request->ofertas_formacion;
        $empresa->notas = $request->notas;
        $empresa->save();
        return redirect()->action([EmpresasController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = Empresas::findOrFail($id);
        $empresa->delete();
        return redirect()->action([EmpresasController::class, 'index']);
    }
}
