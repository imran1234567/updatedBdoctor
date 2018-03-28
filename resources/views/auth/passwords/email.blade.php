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

                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif
                        {!! Form::open(['url' => 'password/email' , 'method' => 'POST']) !!}

                            {{ Form::label('email', 'Email:') }}
                            {{ Form::email('email', null, ['class'=> "form-control"]) }}

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
