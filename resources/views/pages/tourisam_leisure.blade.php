@extends('layouts.master')

@section('title')
    Case studies | Tourism & Leisure | Business Doctors
@endsection

@section('meta')
    <meta name="Description" content="Sector Expertise: Travel, Tourism, Leisure, Consumer Brands, and Technology. We generate recruitment and team building which is vital for tourism sector. We try to achieve cost efficiency by targeting minutest details and improve operation management."/>
    <meta name="Keywords" content="Business Consultants Hospitality, Business Consultants Tourism, Business Consultants Travel"/>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <ol class="breadcrumb customize-breadcrumps">
                <li><a href="{!! url('/') !!}">Home</a></li>
                <li class="active"> Tourism-&-Leisure</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="section-gap pad-l-0 pad-r-0">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center text-game text-bold heading">TOURISM & LEISURE</h1>
                </div>
            </div>
            <div class="trans-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="images/voler.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-10 trans-text">
                            <h5>Sector<span> - Travel & Transport Sector</span></h5>
                            <p>
                                A corporate employee transportation & management company approached BD with a desire to diversify and expand to the consumer space. The promoter wished to diversify to
                                self-drive car rental and wanted BD to be its strategic consultant in this journey.
                            </p>
                            <input id="read-more-toggle-1" class="read-more-toggle" type="checkbox">
                            <div class="read-more-content">
                                <h5>Business Doctors Impact</h5>
                                <ul>
                                    <li>
                                        <p>
                                            Realigned team across two locations to ensure a cohesive working environment.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Created an efficient franchising structure for more growth opportunities.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Reorganized the capital structure to remove inefficiencies and resolve issues
                                            pertaining to exit of the existing equity investors and to rationalize debt levels.
                                        </p>
                                    </li>
                                </ul>
                                <h5>Achievement</h5>
                                <ul>
                                    <li>
                                        <p>
                                            Improved operations management and margins within 6 months with our team’s unparalleled expertise.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Aligned investor interests and helped create value in business.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <label class="read-more-toggle-label" for="read-more-toggle-1">Read </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="trans-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="images/skywaltz.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-10 trans-text">
                            <h5>Sector<span>  - Travel and Tourism</span></h5>
                            <p>
                                LLack of Employee management and inefficient utilization of funds/capital were causing major issues in the overall operations of the firm,
                                further leading to lack of exit opportunities and investor conflicts in the organization.
                            </p>
                            <input id="read-more-toggle-2" class="read-more-toggle" type="checkbox">
                            <div class="read-more-content">
                                <h5>Business Doctors Impact</h5>
                                <ul>
                                    <li>
                                        <p>
                                            Realigned team across two locations to ensure a cohesive working environment.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Created an efficient franchising structure for more growth opportunities.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Reorganized the capital structure to remove inefficiencies and resolve issues
                                            pertaining to exit of the existing equity investors and to rationalize debt levels.
                                        </p>
                                    </li>
                                </ul>
                                <h5>Achievement</h5>
                                <ul>
                                    <li>
                                        <p>
                                            Improved operations management and margins within 6 months with our team’s unparalleled expertise.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Aligned investor interests and helped create value in business.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <label class="read-more-toggle-label" for="read-more-toggle-2">Read </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection