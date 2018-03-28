@extends('layouts.master')

@section('title')
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            {!! Form::model($post, ['route' => ['posts.update', $post->id] , 'method' => 'PUT', 'files'=> true ]) !!}
            <div class="col-md-8">
                {{ Form::label('title', 'Title:', ['class' => 'pad-top-15']) }}
                {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

                {{Form::label('slug', 'Slug:')}}
                {{Form::text('slug', null, ["class" => 'form-control input-lg']) }}
                
                {{ Form::label('category_id', 'Category:') }}
                {{ Form::select('category_id', $category , null, ['class' => 'form-control'] ) }}

                {{ Form::label('featured_image', 'Update Featured Image:') }}
                {{ Form::file('featured_image') }}

                {{ Form::label('body', 'Body:', ['class' => 'pad-top-15']) }}
                {{ Form::textarea('body', null, ['class'=>'form-control']) }}
            </div>
            <div class="col-md-4 pad-top-15">
                <div class="well">
                    <dl class="dl-horizontal">
                        <dt>Created At:</dt>
                        <dd>{{ date( 'M j, Y H:ia',  strtotime($post->created_at))  }}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Last Updated:</dt>
                        <dd>{{ date( 'M j, Y H:ia', strtotime($post->updated_at)) }}</dd>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-default btn-block')) !!}
                        </div>
                        <div class="col-sm-6">
                            {{Form::submit('Save Changes', ['class'=>'btn btn-default btn-block']) }}
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('scripts')

@endsection