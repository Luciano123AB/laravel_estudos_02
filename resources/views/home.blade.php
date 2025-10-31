@extends('layouts/main_layout')

@section('content')
    {{-- empty --}}
    @empty($value)
        <p>NÃO EXISTE!</p>
    @else
        <p>EXISTE!</p>
    @endempty

    {{-- isset --}}
    @isset($value)
        <p>EXISTE A VARIÁVEL!</p>
    @else
        <p>NÃO EXISTE A VARIÁVEL!</p>
    @endisset

    {{-- unless --}}
    @unless($value != 100)
        <p>OK!!!!!</p>
    @endunless
@endsection