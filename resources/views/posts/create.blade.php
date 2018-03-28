@extends('layouts.master')

@section('title')
Business Doctor Blog | Create
@endsection

@section('meta')
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
@endsection

@section('stylesheet')
    {!! Html::style('css/parsley.css') !!}
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

    <script>
        tinymce.init({
            selector:'textarea',
            plugins:'link',
            menubar:false
        });
    </script>
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Create a New Post</h1>
                <hr>
                {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true)) !!}

                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, array('class'=>'form-control', 'required'=>'','maxlength' => '255', 'data-parsley-required-message'=> "Post title was required")) }}

                {{ Form::label('slug', 'Slug:') }}
                {{Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255', 'data-parsley-required-message'=> "Post slug was required")) }}

                {{ Form::label('category_id', 'Category:') }}
                <select name="category_id" id="" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>


                {{ Form::label('featured_img', 'Upload a Featured Image') }}
                {{ Form::file('featured_img') }}

                {{ Form::label('body', 'Body:') }}
                {{ Form::textarea('body', null, array('class'=>'form-control', 'required'=>'', 'data-parsley-required-message'=> "Post body was required")) }}

                <div class="text-center">
                    {{ Form::submit('Create a Post', array('class'=>'btn btn-default', 'style'=>'margin-top:15px; margin-bottom:15px;')) }}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection