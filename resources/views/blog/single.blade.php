@extends('layouts.master')

@section('title')
{{ $post->title }}
    @endsection

@section('meta')
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
    @endsection

@section('content')
    <div class="container -fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="blog-title">{{ $post->title }}</h3>
                <div class="row">
                    <div class="col-md-12 box">
                        <img src="{{ asset('images/'.$post->image) }}" alt="" class="img-responsive B_2" style="width: 100%; height: 60%">
                    </div>
                    <div class="col-md-12">
                        <h4><i class="fa fa-calendar" aria-hidden="true"></i> Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h4>
                    </div>
                </div>
                <hr>
                <p>{!! $post->body !!}</p>
                <hr>
                <p>Posted In: {{ $post->category->name }}</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="col-md-6">
                        <h3><i class="fa fa-commenting" aria-hidden="true"></i>
                            {{ $post->comments()->count() }} Comments:</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="social-share pull-right">
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
                </div>
                <hr>
                @foreach($post->comments as $comment)
                    <div class="media">
                        <div class="media-left">
                                <img class="media-object" src="{{ "https://www.gravatar.com/avatar/" .  md5(strtolower(trim($comment->email))) . "?s=50&d=mm" }}"  class="auth-img">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading text-bold">{{ $comment->name }}</h4>
                            <p class="creat-comment">{{ date('F j , Y - g:iA', strtotime($comment->created_at)) }}</p>
                            <p class="comment-text">{{ $comment->comment }}</p>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div id="comment-form" class="col-md-8 col-md-offset-2">
                {{ Form::open(['route' => ['comments.store', $post->id, 'method'=> 'POST'] ] ) }}

                <div class="row">
                    <div class="col-md-6">
                        {{ Form::label('name', 'Name:') }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('email', 'Email:') }}
                        {{ Form::text('email', null,['class'=>'form-control']) }}
                    </div>
                    <div class="col-md-12">
                        {{ Form::label('comment', 'Comment:') }}
                        {{ Form::textarea('comment', null, ['class' => 'form-control']) }}

                        <p class="text-center">{{ Form::submit('Add Comment', ['class' => 'btn btn-default', 'style'=>'margin-top:15px']) }}</p>
                    </div>
                </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>
    @endsection

@section('scripts')

    @endsection
