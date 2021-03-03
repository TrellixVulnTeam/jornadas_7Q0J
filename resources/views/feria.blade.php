@extends('layout')

@section('opciones')
    <x-layout.nav>
        @isset($msj)
            {{$msj}}
        @endisset
    </x-layout.nav>
@endsection

@section('contenido')
    <div class="grid grid-cols-12 grid-rows-6 gap-2 h-65v bg-yellow-200 p-2">
        @for($n=0; $n<72; $n++)
            <div class="bg-yellow-500 p-1">{{$n}}</div>
        @endfor
    </div>
@endsection