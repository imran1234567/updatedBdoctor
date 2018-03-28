@extends('layouts.master')

@section('title')
    Home -Business Doctor
@endsection

@section('meta')
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
@endsection

@section('stylesheet')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <ol class="breadcrumb customize-breadcrumps">
                <li><a href="#">Home</a></li>
                <li class="active">Business Health Checkup</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="section-gap pad-r-0 pad-l-0">
            <div class="row">
                <div class="col-md-12 bhealth-text">
                    <h3 class="text-game text-bold heading">BUSINESS HEALTH CHECK</h3>
                    <p>Get your business assessed in no time. We provide a quick assessment of challenges and opportunities in your company during a detailed review conducted in a 90-minute session.
                        That could help you assess next steps for value protection and creation.</p>
                    <p>Simply provide us the following initial details, and we will revert in two days.</p>
                </div>
            </div>

            {{--form start--}}
            <div class="form-portion ">
            <div class="row">
            <div class="col-md-8 col-md-offset-2">
            {!! Form::open(array('route'=>'businesses.store', 'data-parsley-validate' =>'', 'class' => 'form-horizontal' )) !!}
            <div class="col-md-6 pad-top-5">
            {{ Form::label('c_name', 'Business Name') }} <span style="color: red">*</span>
            {{ Form::text('c_name', null, array('class'=>'form-control', 'required'=>'','data-parsely-required-message' => 'Please Enter Your Business Name')) }}
            </div>
            <div class="col-md-6 pad-top-5">
            {{ Form::label('b_of_company', 'Nature Of Businesses') }} <span style="color: red">*</span>
            {{ Form::text('b_of_company', null, array('class'=>'form-control', 'required'=>'','maxlength' => '255','data-parsley-required-message'=> "Please Enter Your Business")) }}
            </div>
                <div class="col-md-12">
                    <br>
                    {{ Form::label('name_entrepreneur', 'Name of the Promoter/ Entrepreneurs') }} <span style="color: red">*</span>
                    {{ Form::text('name_entrepreneur', null, array('class'=>'form-control','required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter Entrepreneour or Promoter Name")) }}
                </div>
                <div class="col-md-4">
                    <br>
                    {{ Form::label('pemail', 'Email-Id:') }}<span style="color: red">*</span>
                    {{ Form::email('pemail', null, ['class'=>'form-control']) }}
                </div>
                <div class="col-md-4">
                    <br>
                    {{ Form::label('pphone', 'Phone No:') }}<span style="color: red">*</span>
                    {{ Form::text('pphone', null, array('class'=>'form-control', 'required'=>'','maxlength' => '10','data-parsley-type' => "number")) }}
                </div>
                <div class="col-md-4">
                    <br>
                    {{ Form::label('pdesignation', 'Designation:') }}<span style="color: red">*</span>
                    {{ Form::text('pdesignation', null, array('class'=>'form-control','required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter Name of The Directors")) }}
                </div>
                <div class="col-md-12">
                    <br>
                    {{ Form::label('name_director', 'Other Key Members') }}<span style="color: red">*</span>
                    {{ Form::text('name_director', null, array('class'=>'form-control','required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter Name of The Directors")) }}
                </div>
                <div class="col-md-4">
                    <br>
                    {{ Form::label('kemail', 'Member Email-Id:') }}<span style="color: red">*</span>
                    {{ Form::email('kemail', null, ['class'=>'form-control']) }}
                </div>
                <div class="col-md-4">
                    <br>
                    {{ Form::label('kphone', 'Member  Phone No:') }}<span style="color: red">*</span>
                    {{ Form::text('kphone', null, array('class'=>'form-control', 'required'=>'','maxlength' => '10','data-parsley-type' => "number")) }}
                </div>
                <div class="col-md-4">
                    <br>
                    {{ Form::label('kdesignation', 'Member Designation:') }}<span style="color: red">*</span>
                    {{ Form::text('kdesignation', null, array('class'=>'form-control','required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter Name of The Directors")) }}
                </div>


            <div class="col-md-12 pad-top-5">
            {{ Form::label('r_o_address', 'Company Address:') }}<span style="color: red">*</span>
            </div>

                <div class="col-md-4">
                    {{ Form::text('line1', null, array('class'=>'form-control', 'required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter State", 'placeholder'=>'Line1')) }}
                </div>
                <div class="col-md-4">
                    {{ Form::text('line2', null, array('class'=>'form-control', 'required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter City", 'placeholder' => 'Line2')) }}
                </div>
                <div class="col-md-4">
                    {{ Form::text('line3', null, array('class'=>'form-control', 'required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter Office Locality", 'placeholder' => 'Line3')) }}
                </div>
            <div class="col-md-4 pad-top-5">
            {{ Form::text('c_state', null, array('class'=>'form-control', 'required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter State", 'placeholder'=>'State')) }}
            </div>
            <div class="col-md-4 pad-top-5">
            {{ Form::text('c_city', null, array('class'=>'form-control', 'required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter City", 'placeholder' => 'City')) }}
            </div>
            <div class="col-md-4 pad-top-5">
            {{ Form::text('c_locality', null, array('class'=>'form-control', 'required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter Office Locality", 'placeholder' => 'Locality')) }}
            </div>

            <div class="col-md-12">
            <br>
            {{ Form::label('key_issue', 'Key issues faced (Not more than 100 words):') }}<span style="color: red">*</span>
            {{ Form::textarea('key_issue', null, array('class'=>'form-control', 'placeholder'=>'','required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Can i Know What Issues You Faced ?")) }}
            </div>

            <div class="col-md-6">
            <br>
            {{ Form::label('turnover', 'Turnover (Last Fiscal):') }}<span style="color: red">*</span>
            {{ Form::text('turnover', null, array('class'=>'form-control','placeholder'=>'', 'required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter Turnover Details")) }}
            </div>

            <div class="col-md-6">
            <br>
            {{ Form::label('meeting', 'Preferred time for meeting Business Doctors:') }}<span style="color: red">*</span>
            {{ Form::text('meeting', null, array('class'=>'form-control', 'placeholder'=>'','required'=>'','maxlength' => '255',  'data-parsley-required-message'=> "Arranged a Meeting Shedule With Us")) }}
            </div>


            <div class="col-md-12 text-center">
            <br>
            {{ Form::submit('Submit', array('class'=>'btn btn-primary btn-read-more', 'style'=>'margin-top:15px; margin-bottom:15px;')) }}
            </div>


            {!! Form::close() !!}
            </div>
            </div>
            </div>
            {{--end from--}}

        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection

