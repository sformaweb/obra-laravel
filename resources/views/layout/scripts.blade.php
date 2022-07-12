{{-- bootstrap --}}
<script src={{ asset('js/app.js')}}></script>
<script src={{ asset('js/bootstrap.js')}}></script>
{{-- <script src={{ asset('js/bootstrap.min.js')}}></script> --}}
<script src={{ asset('js/boton-oscuro.js')}}></script>
<script src={{ asset('js/cambio-letra.js')}}></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}

{{-- cualquier otra hoja de scripts se referencia aquí --}}





{{-- para especificar en página --}}
@yield('scripts')
