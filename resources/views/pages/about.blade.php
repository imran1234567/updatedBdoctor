@extends('layouts.master')

@section('title')
    Business Consultancy Services | Venture Funding | Business Doctors
@endsection

@section('meta')
    <meta name="Description" content="We at Business Doctors are your partners in Growth"/>
    <meta name="Keywords" content="business consultancy services , venture funding"/>
    @endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <ol class="breadcrumb customize-breadcrumps">
                <li><a href="{!! url('/') !!}">Home</a></li>
                <li class="active">About Us</li>
            </ol>
        </div>
    </div>
    <div class="container trans-content">
        <h2 class="text-purple">About Business Doctor</h2>
        <h5 class="ab-text">Business Doctors is a team of professionals with varied backgrounds, but common goals. The team brings extensive understanding of various sectors, businesses, domestic and international models, operations,
            team building, capital management and raise to list a few.</h5>
        <h5 class="ab-text">Our objective is to partner with entrepreneurs and other stakeholders, to put businesses on a growth trajectory whilst prioritising areas of intervention in the companies across various
            levels of a business lifecycle.</h5>
        <h5 class="ab-text">We don’t guarantee miracles but ensure gradual value creation for the stakeholders.</h5>
        <h2 class="text-purple">Our Goals:</h2>
        <ul>
            <li class="ab-text">Performance Improvement</li>
            <li class="ab-text">Deliver better growth parameters</li>
            <li class="ab-text">Better organization and corporate structure</li>
            <li class="ab-text">Bring operational efficiency</li>
            <li class="ab-text">Instill appropriate corporate governance</li>
            <li class="ab-text">Bring Self sustenance</li>
        </ul>
    </div>
    @endsection

@section('scripts')

    @endsection