@extends('layout.app')

@section('title', ' | Ofertas Formación Index')

@section('content')

    <!-- Content Header (Page header) -->

    <div class="container-fluid px-md-5 my-4">
        <h4 class="mb-4 text-primary text-center"><b>NOVA OFERTA DE EMPREGO</b></h4>

        <div class="container">
            <form class="row g-3 mt-4" method="POST" action="{{ route('ofertats.store') }}" autocomplete="off">
                <div class="d-flex flex-wrap">

                    <div class="col-md-4 my-2">
                        <label for="nome" class="control-label">NOME:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome"
                                   required>
                        </div>
                    </div>

                    <div class="col-md-4 my-2">
                        <label for="datadende" class="control-label">DATA DENDE:</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" id="datadende" name="datadende"
                                   placeholder="Data dende..." required>
                        </div>
                    </div>

                    <div class="col-md-4 my-2">
                        <label for="dataata" class="control-label">DATA ATA:</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" id="dataata" name="dataata"
                                   placeholder="Data ata..." required>
                        </div>
                    </div>

                    <div class="col-md-4 my-2">
                        <label for="lugar" class="control-label">LUGAR:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="lugar" name="lugar"
                                   placeholder="Lugar" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="tipo" class="control-label">TIPO:</label>
                        <div class="col-md-10">
                            <input class="form-control" id="tipo" name="tipo"
                                   placeholder="Tipo" required>
                        </div>
                    </div>

                    <div class="col-md-4 my-2">
                        <label for="numhoras" class="control-label">HORAS:</label>
                        <div class="col-md-10">
                            <input class="form-control" id="numhoras" name="numhoras" placeholder="Número de horas"
                                   maxlength="9">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="numprazas" class="control-label">PRAZAS:</label>
                        <div class="col-md-10">
                            <input class="form-control" id="numprazas" name="numprazas"
                                   placeholder="Prazas..." required>
                        </div>
                    </div>


                </div>


                <div class="col-md-4">
                    <div class="my-4">
                        <a href="{{ url('/ofertats/index') }}" class="btn btn-default">VOLVER</a>
                        <button type="submit" class="btn btn-primary">GARDAR</button>
                    </div>
                </div>
            </form>
        </div>


    </div>

















    <!-- Content Footer (Page footer) -->

@stop
