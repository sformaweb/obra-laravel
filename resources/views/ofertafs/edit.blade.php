@extends('layout.app')

@section('title', ' | Ofertas Formación Index')

@section('content')

    <!-- Content Header (Page header) -->

    <div class="container-fluid px-md-5 my-4">
        <h4 class="mb-4 text-primary text-center"><b>MODIFICAR DATOS DA OFERTA</b></h4>
        

        <!-- ---------------------------APARTADOS------------------------------------------- -->


<div class="container">
                    {{-- METODO DISTINTO QUE EL DE CREAR - SOLO CUBRE LOS DATOS DE MOMENTO --}}
                    <form class="row g-3 mt-4" method="POST" action="{{ route('ofertafs.update', $ofertafs->id) }}" autocomplete="off">
                        <div class="d-flex flex-wrap">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="col-md-4 my-2">
                                <label for="nome" class="control-label">NOME:</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="nombre" name="nome" placeholder="Nome"
                                        value="{{ $ofertafs->nome }}" required>
                                </div>
                            </div>

                            <div class="col-md-4 my-2">
                                <label for="lugar" class="control-label">LUGAR:</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="lugar" name="lugar"
                                        placeholder="Lugar..." value="{{ $ofertafs->lugar }}" required>
                                </div>
                            </div>

                            <div class="col-md-4 my-2">
                                <label for="poboacion" class="control-label">POBOACIÓN:</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="tipo" name="tipo"
                                        placeholder="Tipo" value="{{ $ofertafs->tipo }}" required>
                                </div>
                            </div>

                            <div class="col-md-4 my-2">
                                <label for="numhoras" class="control-label">HORAS:</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="numhoras" name="numhoras"
                                        placeholder="Horas" value="{{ $ofertafs->numhoras }}" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="numprazas" class="control-label">PRAZAS:</label>
                                <div class="col-md-10">
                                    <input type="numprazas" class="form-control" id="numprazas" name="numprazas"
                                        placeholder="Prazas" maxlength="9" value="{{ $ofertafs->numprazas }}" required>
                                </div>
                            </div>





                        </div>
                        <hr>

                        </div>

                        <div class="form-group ">
                            <label for="exampleFormControlTextarea1">NOTAS E CONSIDERACIÓNS:</label>
                            <textarea class="form-control" id="notas" name="notas" rows="4"></textarea>
                        </div>

                        <div class="col-md-4">
                            <div class="my-4">
                                <a href="{{ url('/ofertafs/index') }}" class="btn btn-default">VOLVER</a>
                                <button type="submit" class="btn btn-primary">GARDAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



            



        </div>


    </div>



    <!-- Content Footer (Page footer) -->

@stop
