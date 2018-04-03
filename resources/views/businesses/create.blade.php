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
            <div class="form-portion  ">
            <div class="row">
            <div class="col-md-10 col-md-offset-1">
            {!! Form::open(array('route'=>'businesses.store', 'data-parsley-validate' =>'', 'class' => 'form-inline' )) !!}
            <div class="col-md-12 pad-top-5">
                <div class="col-md-3 col-xs-12">
            {{ Form::label('c_name', 'Business Name :') }}
                </div>
                <div class="col-md-9 col-xs-12">
            {{ Form::text('c_name', null, array('class'=>'form-control in-width', 'required'=>'','data-parsely-required-message' => 'Please Enter Your Business Name')) }}
                </div>
                </div>
            <div class="col-md-12 pad-top-5">
                <div class="col-md-3 col-xs-12">
            {{ Form::label('b_of_company', 'Nature Of Businesses :') }}
                </div>
                <div class="col-md-9 col-xs-12">
            {{ Form::text('b_of_company', null, array('class'=>'form-control in-width', 'required'=>'','maxlength' => '255','data-parsley-required-message'=> "Please Enter Your Business")) }}

                </div>
            </div>
                <div class="col-md-12 pad-top-5">
                    <div class="col-md-3 col-xs-12">
                        {{ Form::label('name_entrepreneur', 'Name of the Promoter/ Entrepreneurs :') }}
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <div class="promoter-group">
                            {{ Form::text('name_entrepreneur', null, array('class'=>'form-control in-width','placeholder'=>'Name','required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter Entrepreneour or Promoter Name")) }}
                            <div class="row pad-top-5">
                                <div class="col-md-4 col-xs-12">
                                    {{--{{ Form::label('pemail', 'Email-Id :') }}--}}
                                    {{ Form::email('pemail', null, ['class'=>'form-control in-width','placeholder'=>'Email']) }}
                                </div>

                                <div class="col-md-4 col-xs-12">
                                    {{--{{ Form::label('pphone', 'Phone No :') }}--}}
                                    {{ Form::text('pphone', null, array('class'=>'form-control in-width','placeholder'=>'Phone No.', 'required'=>'','maxlength' => '10','data-parsley-type' => "number")) }}
                                </div>

                                <div class="col-md-4 col-xs-12">
                                    {{--{{ Form::label('pdesignation', 'Designation :') }}--}}
                                    {{ Form::text('pdesignation', null, array('class'=>'form-control in-width','placeholder'=>'Designation','required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter Name of The Directors")) }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="col-md-12 pad-top-5">
                    <div class="col-md-3 col-xs-12">
                    {{ Form::label('name_director', 'Other Key Members :') }}
                    </div>
                    <div class="col-md-9 col-xs-12">
                    {{ Form::text('name_director', null, array('class'=>'form-control in-width','required'=>'','placeholder'=>'Name','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter Name of The Directors")) }}
                    <div class="row pad-top-5">
                        <div class="col-md-4 col-xs-12">
                            {{--{{ Form::label('kemail', ' :') }}--}}
                            {{ Form::email('kemail', null, ['class'=>'form-control in-width','placeholder'=>'Email-Id']) }}
                        </div>
                        <div class="col-md-4 col-xs-12">
                            {{--{{ Form::label('kphone', 'Member  Phone No :') }}--}}
                            {{ Form::text('kphone', null, array('class'=>'form-control in-width','placeholder'=>'Phone No', 'required'=>'','maxlength' => '10','data-parsley-type' => "number")) }}
                        </div>
                        <div class="col-md-4 col-xs-12">
                            {{--{{ Form::label('kdesignation', 'Member Designation :') }}--}}
                            {{ Form::text('kdesignation', null, array('class'=>'form-control in-width','placeholder'=>'Designation','required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter Name of The Directors")) }}
                        </div>
                    </div>
                    </div>
                </div>



            <div class="col-md-12 pad-top-5">
                <div class="col-md-3 col-xs-12">
            {{ Form::label('r_o_address', 'Company Address :') }}
                </div>
                <div class="col-md-9 col-xs-12">
                    <div class="row">
                        <div class="col-md-12">
                            {{ Form::textarea('line1', null, array('class'=>'form-control in-width text-area', 'required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter State", 'placeholder'=>'Company Address')) }}
                        </div>
                        <div class="col-md-4 col-xs-12 pad-top-5">
                            {{ Form::select('country', ['' => 'Select'] +$countries,'',array('class'=>'form-control in-width','id'=>'country'))}}
                        
                        </div>
                        <div class="col-md-4 col-xs-12 pad-top-5">
                             <select name="state" id="state" class="form-control in-width">
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-12 pad-top-5">
                            <select name="city" id="city" class="form-control in-width">
                            </select>
                        </div>
                    </div>
                </div>
            </div>


                {{--<div class="col-md-4">--}}
                    {{--{{ Form::text('line2', null, array('class'=>'form-control', 'required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter City", 'placeholder' => 'Line2')) }}--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--{{ Form::text('line3', null, array('class'=>'form-control', 'required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter Office Locality", 'placeholder' => 'Line3')) }}--}}
                {{--</div>--}}


            <div class="col-md-12 pad-top-5">
                <div class="col-md-3 col-xs-12">
                     {{ Form::label('key_issue', 'Key issues faced (Not more than 100 words) :') }}
                </div>
                <div class="col-md-9 col-xs-12">
                    {{ Form::textarea('key_issue', null, array('class'=>'form-control in-width text-area', 'placeholder'=>'Key issues faced (Not more then 100 words)','required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Can i Know What Issues You Faced ?")) }}
                </div>

            </div>

            <div class="col-md-12 pad-top-5">
                <div class="col-md-3 col-xs-12">
                    {{ Form::label('turnover', 'Turnover (Last Fiscal) :') }}
                </div>

                <div class="col-md-9 col-xs-12">
                    {{ Form::text('turnover', null, array('class'=>'form-control in-width','placeholder'=>'', 'required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Please Enter Turnover Details")) }}
                </div>
            </div>

            <div class="col-md-12 pad-top-5">
                <div class="col-md-3 col-xs-12">
            {{ Form::label('meeting', 'Preferred time for meeting Business Doctors :') }}
                </div>
                <div class="col-md-9 col-xs-12">
            {{ Form::text('meeting', null, array('class'=>'form-control in-width', 'placeholder'=>'','required'=>'','maxlength' => '255',  'data-parsley-required-message'=> "Arranged a Meeting Shedule With Us")) }}
                </div>
            </div>


            <div class="col-md-12  pad-top-5">
                <div class="col-md-6 col-xs-12 text-left">
                <div class="g-recaptcha" data-sitekey="6LcePAATAAAAAGPRWgx90814DTjgt5sXnNbV5WaW"></div>
                </div>
                <div class="col-md-6 col-xs-12 text-right">
            {{ Form::submit('Submit', array('class'=>'btn btn-primary btn-read-more submit-from', 'style'=>'')) }}

                </div>
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
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript">
    $('#country').change(function(){
    var countryID = $(this).val();    
    if(countryID){
        $.ajax({
           type:"GET",
           url:"{{url('api/get-state-list')}}?country_id="+countryID,
           success:function(res){               
            if(res){
                $("#state").empty();
                $("#state").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#state").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#state").empty();
            }
           }
        });
    }else{
        $("#state").empty();
        $("#city").empty();
    }      
   });
    $('#state').on('change',function(){
    var stateID = $(this).val();    
    if(stateID){
        $.ajax({
           type:"GET",
           url:"{{url('api/get-city-list')}}?state_id="+stateID,
           success:function(res){               
            if(res){
                $("#city").empty();
                $.each(res,function(key,value){
                    $("#city").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#city").empty();
            }
           }
        });
    }else{
        $("#city").empty();
    }
        
   });
</script>
@endsection
