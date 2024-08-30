@extends('movie.html')
@section('content')
<h2 class="maintitle" style="margin-top: 22px;">{{ $meta['title'] }}</h2>
<p>Total Result: {{ @$pager['total_results'] }}</p>
@foreach ($latest as $movie)
    <x-movie-list :movie="$movie" />
@endforeach

@include('movie.templates.paggination')


@endsection