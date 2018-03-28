@extends('layouts.master')

@section('title')
    Business Development Consultant|Turnaround Consulting | Business Doctors
@endsection

@section('meta')
    <meta name="Description" content="Reconstruct your business with Business Doctors as your Turnaround Partners. We help you deal with all the internal and external
    exigencies involved with building/ re-building businesses."/>
    <meta name="Keywords" content="business development consultant, turnaround consulting   "/>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <ol class="breadcrumb customize-breadcrumps">
                <li><a href="{!! url('/') !!}">Home</a></li>
                <li class="active">Philosophy</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="images/bdapproach.jpg" alt="" class="img-responsive">
            </div>
            <div class="section-gap pad-r-0 pad-l-0">
                <div class="col-md-12">
                    <h1 class="text-center text-game text-bold heading">BD APPROACH</h1>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 list-hub">
                            <h5>Extensive Research</h5>
                            <p>Comprehensive study of the Business, Market, Peers, Opportunities & Challenges.</p>
                        </div>
                        <div class="col-md-6 list-hub">
                            <h5>Deep Rooted Network</h5>
                            <p>Leveraging on our Business, Financial & Advisory relations across the country.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 list-hub">
                            <h5>Entrepreneurial Attitude</h5>
                            <p>Stepping in the shoes of the entrepreneur to get a holistic view of the business.</p>
                        </div>
                        <div class="col-md-6 list-hub">
                            <h5>Structuring & Fundraising</h5>
                            <p>Extensive experience of structuring fundraise / IPOs in India and abroad.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 list-hub">
                            <h5>Grounded Business Understanding</h5>
                            <p>Rich experience in working with businesses across various stages & sectors.</p>
                        </div>
                        <div class="col-md-6 list-hub">
                            <h5>Setting Systems and Processes</h5>
                            <p>To set practice for regular monitoring of key matrices and taking informed decisions.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 list-hub">
                            <h5>Continuous Monitoring</h5>
                            <p>Execution and implementation of plans in a timely manner.</p>
                        </div>
                        <div class="col-md-6 list-hub">
                            <h5>Aligned Interests</h5>
                            <p>Our unique model aligns our interest with that of all stakeholders.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection