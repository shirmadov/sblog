@extends('layouts.app')

@section('title', 'Personal Area')


@section('content')
<div class="discover__main">
    <div class="container">
        <span class="discover__title">Discover more of what matters to you</span>

        <div class="discover__block">
            <span class="discover">Self</span>
            <span class="discover">Programming</span>
            <span class="discover">Relationships</span>
            <span class="discover">Data Science</span>
            <span class="discover">Politics</span>
            <span class="discover">Javascript</span>
            <span class="discover">Machine Learning</span>
            <span class="discover">Economy</span>
            <span class="discover">Ecology</span>
            <span class="discover">Love Story</span>
            <span class="discover">Sports</span>
            <span class="discover">Football</span>
            <span class="discover">Productivity</span>
            <span class="discover">Life</span>
            <span class="discover">Sports</span>
            <span class="discover">Real Madrid</span>
            <span class="discover">Turkmenistan</span>
            <span class="discover">Koneurgench</span>
            <span class="discover">University</span>
        </div>
    </div>

</div>

    <div class="recommend__main">
    <div class="container">
        <span class="recommend__title">Recommended for you</span>
    </div>
        <hr>
       <div class="container">
           <div class="blog__card">
               <div class="blog__author">
                   <img class="blog__avatar" src="{{asset('img/profile/ronaldo.jpg')}}" alt="">
                   <span class="blog__author__name">Cristiano Ronaldo</span>
                   <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas"
                        data-icon="ellipsis-v" class="kebab__menu svg-inline--fa fa-ellipsis-v fa-w-6" role="img"
                        viewBox="0 0 192 512">
                       <path fill=""
                             d="M96 184c39.8 0 72 32.2 72 72s-32.2 72-72 72-72-32.2-72-72 32.2-72 72-72zM24 80c0 39.8 32.2 72 72 72s72-32.2 72-72S135.8 8 96 8 24 40.2 24 80zm0 352c0 39.8 32.2 72 72 72s72-32.2 72-72-32.2-72-72-72-72 32.2-72 72z"/>
                   </svg>
               </div>
               <div class="blog__section">
                   <img class="blog__img" src="{{asset('img/first.png')}}" alt="">
                   <div class="blog__info">

                   </div>
               </div>
           </div>
       </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/user/profile.js')}}"></script>

@endsection
