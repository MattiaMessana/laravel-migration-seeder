@extends('layout.app')

@section('content')
    <div class="container mt-4">

        <h1>Treni</h1>

        <div class="container mt-3">

            @include('partials.table-trains')

        </div>
    </div>
@endsection
