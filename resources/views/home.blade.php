@extends('layouts/main_layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="{{ route("submit") }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Username:</label>
                        <input type="text" name="username" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Executar PHP dentro de uma view. --}}
    @php

        $valor01 = 100;
        $valor02 = "<span class='text-warning'>" . $valor01 . "</span>";
        $nome = "Luciano Eduardo";

    @endphp

    <h3>{{ $valor01 }}</h3>

    <h3>{!! $valor02 !!}</h3>

    <h3>{{ $valor01 * 1000 }}</h3>

    <h3>$nome tem <span class="text-info">{{ strlen($nome) }}</span> caracteres.</h3>
@endsection