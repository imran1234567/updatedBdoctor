@extends('layouts.master')

@section('title')
    Our Philosophy | Strategic Management Consultants | Business Doctors
@endsection

@section('meta')
    <meta name="Description" content="Business Doctors is a strategic consulting firm that offers customised research and knowledge based solutions for businesses. Read our philosophy here. "/>
    <meta name="Keywords" content="strategic management consultants, strategic consulting firm, strategic consultants"/>
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
                    <img src="images/philosophy.jpg" alt="" class="img-responsive">
                </div>
                <div class="section-gap pad-l-0 pad-r-0 ">
                    <div class="col-md-12">
                        <h1 class="text-center text-game text-bold heading">PHILOSOPHY</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="text-content">
                            <p>After studying multiple entrepreneur driven companies, we have created the unique model of
                                Business Doctors. A dispassionate Doctor, who could work with an entrepreneur to diagnose
                                areas of intervention and put the company on the right growth path
                            </p>
                            <p>All companies go through a typical business cycle that is a result of various internal and external,
                                macro and micro factors that impact the business and its related ecosystem.
                            </p>
                            <p><strong>Companies that do not meet market performance lack certain factors that are essential
                                    for growth. These may be:</strong>
                            </p>
                            <ul>
                                <li>The Appropriate Team</li>
                                <li>Balance Sheet Strength</li>
                                <li>Revenue Model</li>
                                <li>Product Innovation</li>
                                <li>Product Diversification</li>
                                <li>Pricing Strategy</li>
                                <li>Technology</li>
                            </ul>
                            <p>While most business consultancy firms simply put together a company’s business strategy,
                                we walk the talk and help companies implement every facet of the suggested strategic plan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection