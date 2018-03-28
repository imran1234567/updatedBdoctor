@extends('layouts.master')

@section('title')

    @endsection

@section('meta')
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
    @endsection

@section('content')
    <div class="container pad-top-30">
        <div class="col-md-12">
            <div class="jumbotron text-xs-center">
                <h1 class="display-3">Thank You For Choosing Us!</h1>
                <hr>
                <p>
                    Having trouble? <a href="">Contact us</a>
                </p>
                <p class="lead">
                    <a class="btn btn-primary btn-sm" href={!! url('/'); !!} role="button">Continue to homepage</a>
                </p>
            </div>
        </div>
    </div>
    @endsection

@section('scripts')

    @endsection