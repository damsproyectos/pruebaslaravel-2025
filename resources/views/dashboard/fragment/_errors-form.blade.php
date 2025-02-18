{{----Muestra los errores del Formulario------}}
@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div>
            {{ $e }}
        </div>
    @endforeach
@endif
