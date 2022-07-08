<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary d-flex p-1">
        <div class="container-fluid02">
            <!-- MENÚ HAMBURGUESA -->
            {{-- con laravel parece que funciona al bajar pero después no sube, seguramente necesite
                de una librería de js porque a la de bootstrap debe faltarle algo --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-uppercase" id="navbarTogglerDemo02">
                <!-- ICONA PERSOA -->
                <a class="navbar-brand" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg></a>
                {{-- ESTOS ENLACES SE CAMBIARÁN POR URLS A LAS VIEWS DE RESOURCES --}}
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ route('index') }}"
                            class="nav-link {{ request()->is('index') ? 'active btn btn-outline-light' : '' }}"
                            aria-current="true">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" aria-current="true">Axenda</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('persoas.index') }}"
                            class="nav-link {{ request()->is('persoas*') ? 'active btn btn-outline-light' : '' }}"
                            aria-current="true">Persoas</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('empresas.index') }}"
                            class="nav-link {{ request()->is('empresas*') ? 'active btn btn-outline-light' : '' }}"
                            aria-current="true">Empresas</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" aria-current="true">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" aria-current="true">Consultas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">Saír</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none hidden">
                            @csrf
                            {{-- {{ csrf_field() }} --}}
                        </form>
                    </li>
                </ul>

                {{-- Botón modo oscuro --}}

                <button class="switch" id="switch">
                    <span><i class="material-icons luna ">brightness_2</i>
                        </i></span>
                    <span><i class="material-icons sol">brightness_5</i>
                        </i></i></span>
                </button>



                {{-- CAMPO DE BÚSQUEDA - COMPROBAR FUNCIONALIDAD --}}
                <form action="#" method="POST">
                    <div class="input-group">
                        <input class="form-control border rounded-start" type="text" placeholder="..."
                            id="example-search-input" alt="Barra de búsqueda">
                        <span class="input-group-append">
                            <button class="btn btn-secondary rounded-0 rounded-end buscador" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                        </span>
                    </div>
                </form>
                {{-- lo más probable es que no funcione, hay que crear una función específica
                en el HomeController pero no sé con qué parámetros --}}

            </div>
        </div>
    </nav>
</header>
