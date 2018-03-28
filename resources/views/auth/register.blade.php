@extends('layouts.master')

@section('title')

@endsection

@section('meta')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 pad-top-30">
                <h1 class="text-center">Register</h1>
            </div>
            <div class="col-md-6 col-md-offset-3">

                {!! Form::open() !!}

                {{Form::label('name', 'Name:')}}
                {{ Form::text('name', null, ['class'=>'form-control']) }}

                {{Form::label('email', 'Email:')}}
                {{ Form::email('email', null, ['class'=>'form-control']) }}

                {{Form::label('password', 'Password:')}}
                {{ Form::password('password', ['class'=>'form-control']) }}

                {{ Form::label('password_confirmation', 'Confirm Password:') }}
                {{ Form::password('password_confirmation',['class'=>'form-control']) }}

                {{ Form::checkbox('remember') }} {{ Form::label('remember', "Remember Me") }}
                <br>

                <p class="text-center">{{ Form::submit('Register', ['class'=>'btn btn-default btn-block  pad-top-30']) }}</p>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection