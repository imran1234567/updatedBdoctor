@extends('layouts.master')

@section('title')
    Home -Business Doctor
@endsection

@section('meta')
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <ol class="breadcrumb customize-breadcrumps">
                <li><a href="{!! url('/') !!}">Home</a></li>
                <li class="active">Business Health Checkup</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 bhealth-text">
                <h3>BUSINESS HEALTH CHECK</h3>
                <p>Get your business assessed in no time. We provide a quick assessment of challenges and opportunities in your company during a detailed review conducted in a 90-minute session.
                    That could help you assess next steps for value protection and creation.</p>
                <p>Simply provide us the following initial details, and we will revert in two days.</p>
            </div>
        </div>
        <div class="form-portion">
            <div class="row">
                <div class="col-md-10">
                    <form class="form-horizontal" action="/action_page.php">
                        <div class="form-group">
                            <label class="control-label col-sm-4 align-left" for="Cname">Company Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="Cname" placeholder="" name="Cname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4 align-left" for="Bvo">Business of the Company</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="BCo" placeholder="" name="Bco">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ROA" class="control-label col-sm-4 align-left">Registered Office Address</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="ROA"  placeholder="" name="ROA">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label col-sm-4 align-left">Email</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="email"  placeholder="" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pno" class="control-label col-sm-4 align-left">Phone Number</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="pno"  placeholder="" name="pno">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="namep" class="control-label col-sm-4 align-left">Name of the Promoter/Entrepreneurs</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="namep"  placeholder="" name="namep">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="named" class="control-label col-sm-4 align-left">Name of 2 or more directors
                            </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="named"  placeholder="" name="named">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="turnover" class="control-label col-sm-4 align-left">Turnover (Last Fiscal)
                            </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="turnover"  placeholder="" name="turnover">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="KIF" class="control-label col-sm-4 align-left">Key issues faced (Not more than 100 words)
                            </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="KIF"  placeholder="" name="KIF">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="timem" class="control-label col-sm-4 align-left">Preferred time for meeting Business Doctors
                            </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="timem"  placeholder="" name="timem">
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-2">
                            <p class="text-center "><button type="submit" class="btn btn-default">Submit</button></p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection