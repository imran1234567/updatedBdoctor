@extends('layouts.master')

@section('title')
    Business Doctors | Other Case Studies
@endsection

@section('meta')
    <meta name="Description" content="Sector Expertise: Packaging, Labelling, Gaming, Healthcare, Construction. In other fields like gaming or packaging, we make expansion plans and build desired corporate and financial structure to enhance company's growth."/>
    <meta name="Keywords" content="Business Consultants Packaging, Business Consultants Construction, Business Consultants Gaming"/>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <ol class="breadcrumb customize-breadcrumps">
                <li><a href="{!! url('/') !!}">Home</a></li>
                <li class="active">Others</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="section-gap pad-l-0 pad-r-0">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center text-game text-bold heading">OTHERS</h1>
                </div>
            </div>
            <div class="trans-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="images/ajanta.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-10 trans-text">
                            <h5>Sector<span>  - Packaging and labels printing.</span></h5>
                            <p>
                                Issues with company structure, domestic and international corporate and financial planning, efficiency and synergies, team building and overall leading to expansion
                            </p>
                            <input id="read-more-toggle-4" class="read-more-toggle" type="checkbox">
                            <div class="read-more-content">
                                <h5>Business Doctors Impact</h5>
                                <ul>
                                    <li>
                                        <p>
                                            We worked along with the promoters across their family holdings, existing teams to put together an expansion plan.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Execution required to put together an augmented team for better operational efficiencies leading to better margins.
                                        </p>
                                    </li>
                                </ul>
                                <h5>Achievement</h5>
                                <ul>
                                    <li>
                                        <p>
                                            Expansion plan was revisited to comply with the desired corporate and financial structure.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <label class="read-more-toggle-label" for="read-more-toggle-4">Read </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection