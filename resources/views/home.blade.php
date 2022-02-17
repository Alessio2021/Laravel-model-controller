@extends('layout.base')

@section('content')
<div class="container d-flex flex-wrap">
    @foreach ($films as $film)
        <div class="card w-100">
            <h1>{{ $film->title }}</h1>
            <h3>{{ $film->original_title }}</h3>
            <h4>{{ $film->nationality }}</h4>
            <h4>{{ $film->date }}</h4>
            <h4>{{ $film->vote }}</h4>
        </div>
    @endforeach

</div>
@endsection