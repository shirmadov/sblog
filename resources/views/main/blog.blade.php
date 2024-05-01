@extends('layouts.app')

@section('title', 'Personal Area')


@section('content')

    <section class="blog__section">
        <div class="container">
            <div class="blog__main">
                <h1 class="blog__title">{{$story->name}}</h1>
                <img class="blog__img" src="{{asset('img/second.jpg')}}" alt="">
                <p class="blog__text">
                       {{$story->text}}
                </p>
            </div>

        </div>
    </section>


@endsection

