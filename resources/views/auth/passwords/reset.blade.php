@extends('layouts.master')


@section('title')

@endsection

@section('meta')

@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 pad-top-30">
                <div class="panel panel-default">
                    <div class="panel-heading">Reset Password</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => 'password/email' , 'method' => 'POST']) !!}

                        {{ Form::hidden('token', $token) }}

                        {{ Form::label('email', 'Email:') }}
                        {{ Form::email('email', $email, ['class'=> "form-control"]) }}

                        {{ Form::label('password', 'New Password:') }}
                        {{ Form::password('password', ['class' => 'form-control']) }}

                        {{ Form::label('password_confirmation', 'Confirm New Password:') }}
                        {{ Form::password('password_confirmation',['class' => 'form-control']) }}

                        {{ Form::submit('Reset Password', ['class' => 'btn btn-default']) }}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection
