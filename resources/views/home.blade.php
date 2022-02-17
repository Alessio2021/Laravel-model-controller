@extends('layout.base')

@section('content')
<div class="container-fluid d-flex text-light flex-wrap justify-content-center">
    @foreach ($films as $film)
        <div class="card w-25 bg-secondary m-2 p-4 shadow-lg">
            <h1>Title: {{ $film->title }}</h1>
            <h3>Original Title: {{ $film->original_title }}</h3>
            <h4>Country: {{ $film->nationality }}</h4>
            <h4>Date: {{ $film->date }}</h4>
            <h4>Vote: {{ $film->vote }}<span class="text-warning">&star;</span></h4>
        </div>
    @endforeach

</div>
@endsection