@extends('layouts.master')

@section('title')

    @endsection

@section('meta')

    @endsection

@section('content')
<div class="container">
    <h1 class="text-purple text-center">Site Map</h1>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <h4 class="fa-007 text-center"><i class="fa fa-home" aria-hidden="true"></i> Static</h4>
            <hr>
            <ul class="sitemap-a text-center">
                <li><a href="{!! url('/') !!}">Home</a></li>
                <li><a href="{{ route('businesses.create') }}">Businesses Health Check</a></li>
                <li><a href="{!! url('Blog-Home') !!}">Blog</a></li>
                <li><a href="{!! url('Contact') !!}">Contact Us</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h4 class="fa-007 text-center"><i class="fa fa-bullhorn" aria-hidden="true"></i> About</h4>
            <hr>
            <ul class="sitemap-a text-center">
                <li><a href="{!! url('Overview'); !!}">Overview</a></li>
                <li><a href="{!! url('Philosophy'); !!}">Philosophy</a></li>
                <li><a href="{!! url('Team'); !!}">Team</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h4 class="fa-007 text-center"><i class="fa fa-area-chart" aria-hidden="true"></i> How We Work</h4>
            <hr>
            <ul class="sitemap-a text-center">
                <li><a href="{!! url('What-We-Do'); !!}">What We Do</a></li>
                <li><a href="{!! url('Who-We-Work-With'); !!}">Who We Work With</a></li>
                <li><a href="{!! url('BD-Approch'); !!}">BD Approch</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h4 class="fa-007 text-center"><i class="fa fa-briefcase" aria-hidden="true"></i> Case Studies</h4>
            <hr>
            <ul class="sitemap-a text-center">
                <li><a href="{!!url('Transport&Logistics'); !!}">Auto Transport & Logistics</a></li>
                <li><a href="{!! url('Fashion'); !!}">Fashion</a></li>
                <li><a href="{!! url('Agri&Food'); !!}">Agri & Food Processing</a></li>
                <li><a href="{!! url('Tourisam&Leisure'); !!}">Tourisam & Laisure</a></li>
                <li><a href="{!! url('Media&Entertainment') !!}">Media & Entertainment</a></li>
                <li><a href="{!! url('Others') !!}">Others</a></li>
            </ul>
        </div>
    </div>
</div>
    @endsection

@section('scripts')

    @endsection