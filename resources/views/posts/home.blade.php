@extends('layouts.master')

@section('title')
    Home -Business Doctor
@endsection

@section('meta')
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
@endsection

@section('content')
    {{--<section class="bg-hero angled-div">--}}
        {{--<div class="con-text">--}}
            {{--<h1 class="pad-top-0 pad-left-5 pad-top-5">BUSINESS DOCTOR | BLOG</h1>--}}
            {{--<h4 class="text-white-a pad-left-5"><a href="">Trending Topics</a> | <a href="">New Feeds</a> | <a href="">Most Fluential Blogs</a></h4>--}}
        {{--</div>--}}
    {{--</section>--}}
    <section class="bg-dark ">
        <div class="container">
            <div class="row">
                <h3>Recent Blogs</h3><a href="{!! url('blog-main'); !!}">Show All Blogs</a>
                <hr>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-sm-6 col-md-4">
                            {{--<div class="thumbnail">--}}
                            <img src="{{ asset('images/'.$post->image) }}" alt="..." class="img-responsive">
                            <div class="caption">
                                <h4>{{ $post->title }}</h4>
                                <p>{{ substr(strip_tags($post->body), 0, 200) }}{{ strlen($post->body) > 200 ? "..." : "" }}</p>
                                <a href="{{ url('blog/'.$post->slug)}}" class="btn btn-primary btn-read-more" role="button">Read more</a>
                                <div class="social-m row">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"
                                       target="_blank">
                                        <img src="{{ asset('images/facebook.png') }}" alt="">
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"
                                       target="_blank">
                                        <img src="{{ asset('images/twitter.png') }}" alt="">
                                    </a>
                                    <a href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}"
                                       target="_blank">
                                        <img src="{{ asset('images/google-plus.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            {{--</div>--}}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container">
            <h3>Recent Blogs</h3><a href="{!! url('blog-main'); !!}">Show All Blogs</a>
            <hr>
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-sm-6 col-md-4">
                        {{--<div class="thumbnail">--}}
                            <img src="{{ asset('images/'.$post->image) }}" alt="..." class="img-responsive">
                            <div class="caption">
                                <h4>{{ $post->title }}</h4>
                                <p>{{ substr(strip_tags($post->body), 0, 200) }}{{ strlen($post->body) > 200 ? "..." : "" }}</p>
                                <a href="{{ url('blog/'.$post->slug)}}" class="btn btn-primary btn-read-more" role="button">Read more</a>
                                <div class="social-m row">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"
                                       target="_blank">
                                        <img src="{{ asset('images/facebook.png') }}" alt="">
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"
                                       target="_blank">
                                        <img src="{{ asset('images/twitter.png') }}" alt="">
                                    </a>
                                    <a href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}"
                                       target="_blank">
                                        <img src="{{ asset('images/google-plus.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        {{--</div>--}}
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection