@extends('layout.app')

@section('title', ' | Persoas Index')

@section('content')

    <!-- Content Header (Page header) -->

    <div class="container mb-4">
        <nav class="navbar navbar-light my-4">
            <div class="container-fluid">
                <h3 class="text-primary w-25"><b>PERSOAS</b></h3>

                <form class="d-flex" action="{{ route('persoas.index') }}" method="GET">
                    <!-- BOTÓN DE NOVA PERSOA - ruta de laravel-->
                    <div class="mr-4">
                        <a href="{{ route('persoas.create') }}" class="btn btn-white mb-3" alt="Engadir nova persoa">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                                class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                <path fill-rule="evenodd"
                                    d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z">
                                </path>
                            </svg>
                        </a>
                    </div>

                    <!--BUSCADOR E BOTÓN DE BUSCAR -->
                    <div class="input-group mb-3 mx-2 w-6" alt="Búsqueda de personas">
                        <input name="busqueda" class="form-control" type="text" placeholder="Búsqueda"
                            aria-label="Search" value={{ $busqueda }}>
                        <input type="submit" id="enviar" name="enviar" value="Buscar"
                            class="btn btn-primary text-white rounded-0">
                    </div>
                </form>
            </div>
        </nav>

        <!-- TABLA CONTIDOS -->

        <div id="tabla" class="row table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="table-primary">
                        <th class="text-nowrap">Nome</th>
                        <th class="text-nowrap">1º Apelido</th>
                        <th class="text-nowrap">2º Apelido</th>
                        <th class="text-nowrap">DNI/NIF</th>
                        <th class="text-nowrap">Nacemento</th>
                        <th class="text-nowrap">Sexo</th>
                        <th class="text-nowrap">CP</th>
                        <th class="text-nowrap">Teléfono</th>
                        <th class="text-nowrap">Correo</th>
                        <th class="text-nowrap">Accións</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($persoas) <= 0)
                        <tr>
                            <td colspan="10">No hay resultados</td>
                        </tr>
                    @else
                        {{-- BUCLE NECESARIO PARA LA VISTA DE LOS DATOS DE LAS TABLAS --}}
                        @foreach ($persoas as $persoa)
                            <tr>
                                {{-- <td>{{ $persoa->id }}</td> --}}
                                <td>{{ $persoa->nome }}</td>
                                <td>{{ $persoa->primeiro_apelido }}</td>
                                <td>{{ $persoa->segundo_apelido }}</td>
                                <td>{{ $persoa->nif }}</td>
                                <td>{{ $persoa->data_nacemento }}</td>
                                <td>{{ $persoa->sexo }}</td>
                                <td>{{ $persoa->codigo_postal }}</td>
                                <td>{{ $persoa->telefono }}</td>
                                <td>{{ $persoa->email }}</td>
                                <!-- Iconos tabla -->
                                <td class="d-flex">
                                    <a href="{{ route('persoas.show', $persoa->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-eye " viewBox="0 0 16 16">
                                            <path
                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                            <path
                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                        </svg></a>
                                    <a href="{{ route('persoas.edit', $persoa->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" alt="Modificar rexistro" width="16"
                                            height="16" fill="currentColor" class="bi bi-pencil mx-2"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                        </svg></a>

                                    @if ($errors->any())
                                        <p class="error-message">{{ $errors->first('mensaje') }}</p>
                                    @endif
                                    <form action="{{ route('persoas.destroy', $persoa->id) }}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}

                                         <button class="delete border-0 btn-link bg-transparent"
                                            onclick="return EliminarRegistro('Eliminar Persoa')">
                                            <svg xmlns="http://www.w3.org/2000/svg" alt="Eliminar rexistro" width="16"
                                                height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
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
            {{ $persoas->links() }}
        </div>
        {{-- {{$persoas->onEachSide(2)->links()}} --}}

    </div>

    <script>
        function EliminarRegistro(value) {
            action = confirm(value) ? true : event.preventDefault()
        }
    </script>
    <!-- Content Footer (Page footer) -->

@stop
