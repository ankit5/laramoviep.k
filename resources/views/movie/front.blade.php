@extends('movie.html')
@section('content')

<h2 style="padding-top: 10px; background: none repeat scroll 0% 0% rgb(173, 23, 0); vertical-align: middle; padding-bottom: 10px; padding-left: 10px; width: 654px;" class="maintitle">Featured Movies</h2>
@foreach ($featured as $movie)
    <x-movie-list :movie="$movie" />
@endforeach

<h2 style="padding-top: 10px; background: none repeat scroll 0% 0% rgb(173, 23, 0); vertical-align: middle; padding-bottom: 10px; padding-left: 10px; width: 654px;" class="maintitle">Latest Movies</h2>
@foreach ($latest as $movie)
    <x-movie-list :movie="$movie" />
@endforeach

@include('movie.templates.paggination')

<div class="homepagetext">
<h2>Watch Online Download Movies Purpose / Idea </h2>
Watch Online Download Movies in HD Print Quality Free Download,Watch Full Movies Online Bollywood Movies Download Latest Hollywood Movies in DVD Print Quality Free.
Watch Online Download Movies is my hobby and i daily watch 1 or 2 movies online and specially the indian movies on their release day i'm always watch on different websites in cam print but i always use google search to find the movies,then i decide that i make a platform for users where they can see HD/DVD Print Quality movies and i listed all latest movies.
I also capture the different categories of movies like if you want to see Hollywood movies, or you want to see punjabi movies or you are interested in Bollywood movies then i have all these type of categories in my website.
I also focus on categories of movies based on actress and actors , like a person want to see all movies of Amir khan from My website there he select category <a href="/category/indian-movies/amir-khan-movies-list/" title="Amir Khan Movies List">Amir Khan Movis list</a> then All movies of amir khan Will be displayed.
so we provide the list of movies from all actress and actors so you can find any movie and watch in High Print quality.
So i try my best to understand the needs of users who want to watch a movie,but still if you have any suggestion for me or you want to give me any advice you are always welcome.make comment on video i will surely reply you.
i provide online Full movies to watch and Free Download so always stay connected with our website to enjoy the latest movies and if you dont have time to watch just make that movie on download and when will you free then you will watch that movie in best print.
</div>

@endsection