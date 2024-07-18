@extends('layouts.app')

@section('main-content')
<h1>MOVIES</h1>
    <section class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap">
                @foreach ($movies as $movie)
                    <article class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Titolo: {{ $movie->title }}</h5>
                            <p class="card-text">Origine: {{ $movie->nationality }}</p>
                            <p class="card-text">Data: {{ $movie->date }}</p>
                            <p class="card-text">Voto: {{ $movie->vote }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
