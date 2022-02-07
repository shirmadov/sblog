@extends('layouts.app')

@section('title', 'Personal Area')


@section('content')


{{--    <div class="avatar__menu">--}}
{{--        Text--}}
{{--    </div>--}}
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
                        <span class="blog__title">Self-Care is Not the Solution for Burnout</span>
                       <span class="blog__start__text">We need to address the systemic and cultural dimensions of burnout</span>
                       <span class="blog__theme">Football</span>
                   </div>
               </div>
               <div class="blog__like__date">
{{--                   <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="far"--}}
{{--                        data-icon="heart" class="blog__like svg-inline--fa fa-heart fa-w-16" role="img" viewBox="0 0 512 512">--}}
{{--                       <path fill=""--}}
{{--                             d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z"/>--}}
{{--                   </svg>--}}
                   <svg class="blog__like" xmlns="http://www.w3.org/2000/svg" width="108" height="88" viewBox="0 0 108 88" fill="red">
                       <path d="M98.0001 9.99455C68.0001 -9.5109 54.0003 22.4999 54.0003 22.4999C54.0003 22.4999 35.5006 -10.5112 9.00028 8.4944C-17.5 27.5 54.0001 84.5 54.0001 84.5C54.0001 84.5 128 29.5 98.0001 9.99455Z" stroke="" stroke-width="5"/>
                   </svg>
                   <span class="blog__amount__like">25,125</span>
                   <span class="blog__date">25 Jan, 2022</span>
               </div>
           </div>

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
                       <span class="blog__title">Self-Care is Not the Solution for Burnout</span>
                       <span class="blog__start__text">We need to address the systemic and cultural dimensions of burnout</span>
                       <span class="blog__theme">Programming</span>
                   </div>
               </div>
               <div class="blog__like__date">
                   <svg class="blog__like" xmlns="http://www.w3.org/2000/svg" width="108" height="88" viewBox="0 0 108 88" fill="none">
                       <path d="M98.0001 9.99455C68.0001 -9.5109 54.0003 22.4999 54.0003 22.4999C54.0003 22.4999 35.5006 -10.5112 9.00028 8.4944C-17.5 27.5 54.0001 84.5 54.0001 84.5C54.0001 84.5 128 29.5 98.0001 9.99455Z" stroke="black" stroke-width="5"/>
                   </svg>
                   <span class="blog__amount__like">25,125</span>
                   <span class="blog__date">25 Jan, 2022</span>
               </div>
           </div>

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
                       <span class="blog__title">Self-Care is Not the Solution for Burnout</span>
                       <span class="blog__start__text">We need to address the systemic and cultural dimensions of burnout</span>
                       <span class="blog__theme">Football</span>
                   </div>
               </div>
               <div class="blog__like__date">
                   <svg class="blog__like" xmlns="http://www.w3.org/2000/svg" width="108" height="88" viewBox="0 0 108 88" fill="none">
                       <path d="M98.0001 9.99455C68.0001 -9.5109 54.0003 22.4999 54.0003 22.4999C54.0003 22.4999 35.5006 -10.5112 9.00028 8.4944C-17.5 27.5 54.0001 84.5 54.0001 84.5C54.0001 84.5 128 29.5 98.0001 9.99455Z" stroke="black" stroke-width="5"/>
                   </svg>
                   <span class="blog__amount__like">25,125</span>
                   <span class="blog__date">25 Jan, 2022</span>
               </div>
           </div>

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
                       <span class="blog__title">Self-Care is Not the Solution for Burnout</span>
                       <span class="blog__start__text">We need to address the systemic and cultural dimensions of burnout</span>
                       <span class="blog__theme">Football</span>
                   </div>
               </div>
               <div class="blog__like__date">
                   <svg class="blog__like" xmlns="http://www.w3.org/2000/svg" width="108" height="88" viewBox="0 0 108 88" fill="none">
                       <path d="M98.0001 9.99455C68.0001 -9.5109 54.0003 22.4999 54.0003 22.4999C54.0003 22.4999 35.5006 -10.5112 9.00028 8.4944C-17.5 27.5 54.0001 84.5 54.0001 84.5C54.0001 84.5 128 29.5 98.0001 9.99455Z" stroke="black" stroke-width="5"/>
                   </svg>
                   <span class="blog__amount__like">25,125</span>
                   <span class="blog__date">25 Jan, 2022</span>
               </div>
           </div>

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
                       <span class="blog__title">Self-Care is Not the Solution for Burnout</span>
                       <span class="blog__start__text">We need to address the systemic and cultural dimensions of burnout</span>
                       <span class="blog__theme">Football</span>
                   </div>
               </div>
               <div class="blog__like__date">
                   <svg class="blog__like" xmlns="http://www.w3.org/2000/svg" width="108" height="88" viewBox="0 0 108 88" fill="none">
                       <path d="M98.0001 9.99455C68.0001 -9.5109 54.0003 22.4999 54.0003 22.4999C54.0003 22.4999 35.5006 -10.5112 9.00028 8.4944C-17.5 27.5 54.0001 84.5 54.0001 84.5C54.0001 84.5 128 29.5 98.0001 9.99455Z" stroke="black" stroke-width="5"/>
                   </svg>
                   <span class="blog__amount__like">25,125</span>
                   <span class="blog__date">25 Jan, 2022</span>
               </div>
           </div>

       </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/user/profile.js')}}"></script>
    <script>
        function menuToggle() {
            const toggleMenu = document.querySelector(".menu");
            toggleMenu.classList.toggle("active");
        }
    </script>
@endsection
