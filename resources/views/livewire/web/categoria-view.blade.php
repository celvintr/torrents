@extends('livewire.web.layouts.app')
@section('content')
    <div class="TpRwCont TpRCol">
        <main>

            {{ $category->name }}

 <section>

    <div class="Top">
        <h2 class="Title">  {{ $category->name }} </h2>




    </div>

    <ul class="MovieList Rows AX A06 B04 C03 E20 NoLmtxt">
        @foreach ( $category->movies as $movie )


    <li class="TPostMv">
    <article class="TPost C">
    <a href="{{'descargar'.'-'. $movie->slug . '-por-torrent' }}">
    <div class="Image">
    <figure class="Objf TpMvPlay fa-play">
     <img src="{{ asset('storage/peliculas/' . $movie->imagens) }}" loading="lazy" alt="{{ $movie->title }}">

</figure>
    </div>
    <h2 class="Title">{{ $movie->title }}</h2>
    </a>
    <div class="TPMvCn anmt">
    <div class="Title"> {{ $movie->title }}</div>
    <p class="Info">
    <span class="Vote fa-star"> 8.1 </span><span class="Time fa-clock far"> 1h 50m </span><span class="Date fa-calendar-alt far"> 2018 </span> </p>
    <div class="Description">
    <p> Everyone deserves a great love story. But for seventeen-year old Simon Spier it’s a little more complicated: he’s yet to tell his family or friends... </p><p class="Director"><span>Director</span> <a aria-label="Diane Durant" href="https://toroplay.torothemes.com/director/diane-durant/">Diane Durant</a>, <a aria-label="Greg Berlanti" href="https://toroplay.torothemes.com/director/greg-berlanti/">Greg Berlanti</a>, <a aria-label="Katye Kalivoda" href="https://toroplay.torothemes.com/director/katye-kalivoda/">Katye Kalivoda</a>, <a aria-label="Kevin Breen" href="https://toroplay.torothemes.com/director/kevin-breen/">Kevin Breen</a>, <a aria-label="Meaghan F. McLaughlin" href="https://toroplay.torothemes.com/director/meaghan-f-mclaughlin/">Meaghan F. McLaughlin</a>, <a aria-label="Richard Graves" href="https://toroplay.torothemes.com/director/richard-graves/">Richard Graves</a>, <a aria-label="Ryan J. Pezdirc" href="https://toroplay.torothemes.com/director/ryan-j-pezdirc/">Ryan J. Pezdirc</a> </p><p class="Genre"><span>Genres</span> <a aria-label="Comedy" href="https://toroplay.torothemes.com/category/comedy/">Comedy</a>, <a aria-label="Drama" href="https://toroplay.torothemes.com/category/drama/">Drama</a>, <a aria-label="Romance" href="https://toroplay.torothemes.com/category/romance/">Romance</a> </p><p class="Actors"><span>Casts</span> <a aria-label="Abigail Houck" href="https://toroplay.torothemes.com/cast/abigail-houck/">Abigail Houck</a>, <a aria-label="Alex Sgambati" href="https://toroplay.torothemes.com/cast/alex-sgambati/">Alex Sgambati</a>, <a aria-label="Alexandra Shipp" href="https://toroplay.torothemes.com/cast/alexandra-shipp/">Alexandra Shipp</a>, <a aria-label="Baz Ma" href="https://toroplay.torothemes.com/cast/baz-ma/">Baz Ma</a>, <a aria-label="Briana Estevez" href="https://toroplay.torothemes.com/cast/briana-estevez/">Briana Estevez</a>, <a aria-label="Bryson Pitts" href="https://toroplay.torothemes.com/cast/bryson-pitts/">Bryson Pitts</a>, <a aria-label="Campbell Godfrey" href="https://toroplay.torothemes.com/cast/campbell-godfrey/">Campbell Godfrey</a>, <a aria-label="Carsen Rowe" href="https://toroplay.torothemes.com/cast/carsen-rowe/">Carsen Rowe</a>, <a aria-label="Cassady McClincy" href="https://toroplay.torothemes.com/cast/cassady-mcclincy/">Cassady McClincy</a>, <a aria-label="Chantell D. Christopher" href="https://toroplay.torothemes.com/cast/chantell-d-christopher/">Chantell D. Christopher</a>, <a aria-label="Christian Ojore Mayfield" href="https://toroplay.torothemes.com/cast/christian-ojore-mayfield/">Christian Ojore Mayfield</a>, <a aria-label="Christopher L. Plunkett" href="https://toroplay.torothemes.com/cast/christopher-l-plunkett/">Christopher L. Plunkett</a>, <a aria-label="Clark Moore" href="https://toroplay.torothemes.com/cast/clark-moore/">Clark Moore</a>, <a aria-label="Collin McHugh" href="https://toroplay.torothemes.com/cast/collin-mchugh/">Collin McHugh</a>, <a aria-label="Danni Heverin" href="https://toroplay.torothemes.com/cast/danni-heverin/">Danni Heverin</a>, <a aria-label="David Copeland Brown Jr." href="https://toroplay.torothemes.com/cast/david-copeland-brown-jr/">David Copeland Brown Jr.</a>, <a aria-label="Drew Starkey" href="https://toroplay.torothemes.com/cast/drew-starkey/">Drew Starkey</a>, <a aria-label="Dylan Cheek" href="https://toroplay.torothemes.com/cast/dylan-cheek/">Dylan Cheek</a>, <a aria-label="Emily Jordan" href="https://toroplay.torothemes.com/cast/emily-jordan/">Emily Jordan</a>, <a aria-label="Haroon Khan" href="https://toroplay.torothemes.com/cast/haroon-khan/">Haroon Khan</a>, <a aria-label="Jaidi Ventura" href="https://toroplay.torothemes.com/cast/jaidi-ventura/">Jaidi Ventura</a>, <a aria-label="James Sterling" href="https://toroplay.torothemes.com/cast/james-sterling/">James Sterling</a>, <a aria-label="Jamila Thompson" href="https://toroplay.torothemes.com/cast/jamila-thompson/">Jamila Thompson</a>, <a aria-label="Jennifer Garner" href="https://toroplay.torothemes.com/cast/jennifer-garner/">Jennifer Garner</a>, <a aria-label="Jessi Peralta" href="https://toroplay.torothemes.com/cast/jessi-peralta/">Jessi Peralta</a>, <a aria-label="Jodi Houck" href="https://toroplay.torothemes.com/cast/jodi-houck/">Jodi Houck</a>, <a aria-label="Joey Pollari" href="https://toroplay.torothemes.com/cast/joey-pollari/">Joey Pollari</a>, <a aria-label="Jönah-Blainé Bowling" href="https://toroplay.torothemes.com/cast/jonah-blaine-bowling/">Jönah-Blainé Bowling</a>, <a aria-label="Jonathan Fritschi" href="https://toroplay.torothemes.com/cast/jonathan-fritschi/">Jonathan Fritschi</a>, <a aria-label="Jorge Lendeborg Jr." href="https://toroplay.torothemes.com/cast/jorge-lendeborg-jr/">Jorge Lendeborg Jr.</a>, <a aria-label="Josh Duhamel" href="https://toroplay.torothemes.com/cast/josh-duhamel/">Josh Duhamel</a>, <a aria-label="Josh Royston" href="https://toroplay.torothemes.com/cast/josh-royston/">Josh Royston</a>, <a aria-label="Joshua Mikel" href="https://toroplay.torothemes.com/cast/joshua-mikel/">Joshua Mikel</a>, <a aria-label="Katherine Langford" href="https://toroplay.torothemes.com/cast/katherine-langford/">Katherine Langford</a>, <a aria-label="Keiynan Lonsdale" href="https://toroplay.torothemes.com/cast/keiynan-lonsdale/">Keiynan Lonsdale</a>, <a aria-label="Logan Miller" href="https://toroplay.torothemes.com/cast/logan-miller/">Logan Miller</a>, <a aria-label="Mackenzie Lintz" href="https://toroplay.torothemes.com/cast/mackenzie-lintz/">Mackenzie Lintz</a>, <a aria-label="Mandy Fason" href="https://toroplay.torothemes.com/cast/mandy-fason/">Mandy Fason</a>, <a aria-label="Matthew Laraway" href="https://toroplay.torothemes.com/cast/matthew-laraway/">Matthew Laraway</a>, <a aria-label="Miles Heizer" href="https://toroplay.torothemes.com/cast/miles-heizer/">Miles Heizer</a>, <a aria-label="Nancy De Mayo" href="https://toroplay.torothemes.com/cast/nancy-de-mayo/">Nancy De Mayo</a>, <a aria-label="Natalia Tureta" href="https://toroplay.torothemes.com/cast/natalia-tureta/">Natalia Tureta</a>, <a aria-label="Natasha Rothwell" href="https://toroplay.torothemes.com/cast/natasha-rothwell/">Natasha Rothwell</a>, <a aria-label="Nicholas Stargel" href="https://toroplay.torothemes.com/cast/nicholas-stargel/">Nicholas Stargel</a>, <a aria-label="Nick Robinson" href="https://toroplay.torothemes.com/cast/nick-robinson/">Nick Robinson</a>, <a aria-label="Nye Reynolds" href="https://toroplay.torothemes.com/cast/nye-reynolds/">Nye Reynolds</a>, <a aria-label="Patrick Donohue" href="https://toroplay.torothemes.com/cast/patrick-donohue/">Patrick Donohue</a>, <a aria-label="Philip Covin" href="https://toroplay.torothemes.com/cast/philip-covin/">Philip Covin</a>, <a aria-label="Robbie Rogers" href="https://toroplay.torothemes.com/cast/robbie-rogers/">Robbie Rogers</a>, <a aria-label="Samantha Bulka" href="https://toroplay.torothemes.com/cast/samantha-bulka/">Samantha Bulka</a>, <a aria-label="Sean O&#39;Donnell" href="https://toroplay.torothemes.com/cast/sean-odonnell/">Sean O'Donnell</a>, <a aria-label="Skye Mowbray" href="https://toroplay.torothemes.com/cast/skye-mowbray/">Skye Mowbray</a>, <a aria-label="Talitha Bateman" href="https://toroplay.torothemes.com/cast/talitha-bateman/">Talitha Bateman</a>, <a aria-label="Terayle Hill" href="https://toroplay.torothemes.com/cast/terayle-hill/">Terayle Hill</a>, <a aria-label="Tony Hale" href="https://toroplay.torothemes.com/cast/tony-hale/">Tony Hale</a>, <a aria-label="Tyler Chase" href="https://toroplay.torothemes.com/cast/tyler-chase/">Tyler Chase</a>, <a aria-label="Tyson Love" href="https://toroplay.torothemes.com/cast/tyson-love/">Tyson Love</a> </p> </div>
    </div>
    </article>
    </li>
    @endforeach

    </ul>

</section>

        </main>
        <aside>
            @livewire('widgetestrenos')


        </aside>
    </div>
@endsection
