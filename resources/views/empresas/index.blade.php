@extends('layout.app')

@section('title', ' | Empresas Index')

@section('content')

    <!-- Content Header (Page header) -->

    <div class="container mb-4">
        <nav class="navbar navbar-light my-4">
            <div class="container-fluid">
                <h3 class="text-primary w-25"><b>EMPRESAS</b></h3>


                <form class="d-flex" action="{{ route('empresas.index') }}" method="GET">
                    <!-- BOTÓN ENGADIR NOVO -->
                    <div class="mr-4">
                        <a href="{{ route('empresas.create') }}" class="btn btn-white mb-3" alt="Engadir nova empresa">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                                class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg></a>
                    </div>
                    <!-- BUSCADOR E BOTÓN BUSCAR -->
                    <div class="input-group mb-3 mx-2 w-6" alt="Búsqueda de empresas">
                        <input name="busqueda" class="form-control" type="text" placeholder="Búsqueda" aria-label="Search"
                            value={{ $busqueda }}>
                        <input type="submit" id="enviar" name="enviar" value="Buscar"
                            class="btn btn-primary text-white rounded-0">
                    </div>
                </form>
            </div>
        </nav>

        <!-- TÁBOA -->
        <div id="tabla" class="row table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="table-primary">
                        <th>Nome</th>
                        <th>Localidade</th>
                        {{-- <th>Actividade</th> --}}
                        <th>Teléfono</th>
                        {{-- <th>Fax</th> --}}
                        <th>Data de alta</th>
                        <th>Contacto</th>
                        <th>Orientador</th>
                        <th>Accións</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($empresas) <= 0)
                        <tr>
                            <td colspan="10">No hay resultados</td>
                        </tr>
                    @else
                        {{-- BUCLE NECESARIO PARA LA VISTA DE LOS DATOS DE LAS TABLAS --}}
                        @foreach ($empresas as $empresa)
                            <tr>
                                {{-- <td>{{ $empresa->id }}</td> --}}
                                <td>{{ $empresa->nome }}</td>
                                <td>{{ $empresa->localidade }}</td>
                                {{-- <td>{{ $empresa->actividade }}</td> --}}
                                <td>{{ $empresa->telefono }}</td>
                                {{-- <td>{{ $empresa->fax }}</td> --}}
                                <td>{{ $empresa->data_incorporacion }}</td>
                                <td>{{ $empresa->persoa_contacto }}</td>
                                <td>{{ $empresa->orientador }}</td>
                                <!-- Iconos tabla -->
                                <td class="d-flex">
                                    <a href="{{ route('empresas.show', $empresa->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-eye " viewBox="0 0 16 16">
                                            <path
                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                            <path
                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                        </svg></a>
                                    <a href="{{ route('empresas.edit', $empresa->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" alt="Modificar rexistro" width="16"
                                            height="16" fill="currentColor" class="bi bi-pencil mx-2" viewBox="0 0 16 16">
                                            <path
                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                        </svg></a>

                                    @if ($errors->any())
                                        <p class="error-message">{{ $errors->first('mensaje') }}</p>
                                    @endif
                                    <form action="{{ route('empresas.destroy', $empresa->id) }}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        {{-- <input type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar empresa')"> --}}
                                        <button class="delete border-0 btn-link"
                                            onclick="return EliminarRegistro('Eliminar empresa')">
                                            <svg xmlns="http://www.w3.org/2000/svg" alt="Eliminar rexistro" width="16"
                                                height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                <path fill-rule="evenodd"
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                            </svg>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    @endif


                </tbody>
            </table>
        </div>

        {{-- PARA PASAR A LA SIGUIENTE O ANTERIOR PÁGINA --}}
        <div class="pagination">
            {{ $empresas->links() }}
        </div>

    </div>

    <script>
        function EliminarRegistro(value) {
            action = confirm(value) ? true : event.preventDefault()
        }
    </script>
    <!-- Content Footer (Page footer) -->

@stop
