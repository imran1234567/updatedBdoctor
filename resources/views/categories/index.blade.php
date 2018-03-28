@extends('layouts.master')

@section('title')

    @endsection

@section('meta')
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
    @endsection

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="text-purple text-bold">Categories</h1>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr class="text-purple">
                                <th>#</th>
                                <th>Name</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <th>{{ $category->id }}</th>
                                    <th>{{ $category->name }}</th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3 pad-top-30">
                    <div class="well">
                        {!! Form::open(['route'=>'categories.store', 'method' => 'POST']) !!}
                            <h4 class="text-purple text-bold">Add New Category</h4>
                            {{ Form::label('name', 'Name:') }}
                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                        <br>
                            {{ Form::submit('Create New Category', ['class' => 'btn btn-default btn-block ']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endsection

@section('scripts')

    @endsection