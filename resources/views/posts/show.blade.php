@extends('layouts.master')

@section('title')
{{ $post->title }}
@endsection

@section('meta')
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
@endsection

@section('stylesheet')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>{{ $post->title }}</h3>
                <div class="row">
                    <div class="col-md-12 box">
                        <img src="{{ asset('images/'.$post->image) }}" alt="" class="img-responsive">
                    </div>
                </div>
                <hr>
                <p class="lead">{!! $post->body  !!}</p>

                <hr>

                <div class="backend-comments">
                    <h3>Comments <small>{{ $post->comments()->count() }}</small></h3>

                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Comment</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($post->comments as $comment)
                        <tr>
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->email }}</td>
                            <td>{{ $comment->comment }}</td>
                            <td>
                                <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-xs btn-default"><i class="fa fa-pencil-square" aria-hidden="true"></i>
                                </a>
                                <a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-xs btn-default"><i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4 pad-top-15">
                <div class="well">
                    <dl class="dl-horizontal">
                        <label>Url Slug:</label>
                        <a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a>
                    </dl>

                    <dl class="dl-horizontal">
                        <label>Category:</label>
                        <p>{{ $post->category->name }}</p>
                    </dl>
                    <dl class="dl-horizontal">
                        <label>Created At:</label>
                        <p>{{ date( 'M j, Y H:ia',  strtotime($post->created_at))  }}</p>
                    </dl>
                    <dl class="dl-horizontal">
                        <label>Last Updated:</label>
                        <p>{{ date( 'M j, Y H:ia', strtotime($post->updated_at)) }}</p>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-default btn-block')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection