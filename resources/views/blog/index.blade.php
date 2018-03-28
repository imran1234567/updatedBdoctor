@extends('layouts.master')


@section('title')
    Views, Opinions, Analysis and Trends in Business and Economy | Business Doctors
    @endsection

@section('meta')
    <meta name="Description" content="We offer you various Blogs on latest informations and tips on Business trends."/>
    <meta name="Keywords" content=""/>
    @endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="text-center">Business Doctor Blogs</h1>
                <hr>
            </div>
            @foreach($posts as $post)
                <div class="col-md-8 col-md-offset-2">
                    <div class="media pad-top-15">
                        <div class="media-left media-liter">
                            <a href="#">
                                <img class="" src="{{ asset('images/'.$post->image) }}" alt="...">
                            </a>
                        </div>
                        <div class="media-body pad-25 pad-t-0">
                            <h4 class="media-heading">{{ $post->title  }}</h4>
                            <h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>
                            <p>{{ substr(strip_tags($post->body), 0, 255) }}{{ strlen($post->body) > 250 ? '...' : '    ' }}</p>
                            <a href="{{ url('blog/'.$post->slug)}}" class="btn btn-primary btn-read-more">Read More</a>
                        </div>
                    </div>
                    <hr>
                </div>
            @endforeach

            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        {!! $posts->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('scripts')

    @endsection