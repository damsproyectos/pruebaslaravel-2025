{{-- <div class="w-full border shadow-md rounded-md p-3 bg-red-600"> --}}
{{-- <div {{ $attributes->merge(['class' => 'w-full border shadow-md rounded-md p-3']) }}> <!---merge es un método para mezclar atributos; llave = data-id y el valor es test ----> --}}
<div {{ $attributes->class(['class' => 'w-full border shadow-md rounded-md p-3', 'bg-blue' => $bg]) }}> <!---merge es un método para mezclar atributos; llave = data-id y el valor es test ---->
    {{ $slot }}

    {{ $attributes }}
</div>
