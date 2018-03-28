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
               <div class="col-md-10">
                   <h1 class="text-purple text-bold">All  Posts</h1>
               </div>
               <div class="col-md-2 pad-top-15">
                   <a href="{{ route('posts.create') }}" class="btn btn-block btn-default btn-lg">Create a Post</a>
               </div>
               <div class="col-md-12">
                   <hr>
               </div>
           </div>
           {{--End of row--}}
           <div class="row">
               <div class="col-md-12">
                   <div class="table-responsive">
                       <table class="table table-striped">
                           <thead>
                           <tr class="text-purple">
                               <th>#</th>
                               <th>Title</th>
                               <th>Body</th>
                               <th>Created At</th>
                               <th></th>
                           </tr>
                           </thead>
                           <tbody>
                           @foreach($posts as $post)
                               <tr>
                                   <td>{{ $post->id }}</td>
                                   <td>{{ substr($post->title, 0 , 50)}}</td>
                                   <td>{{ substr(strip_tags($post->body), 0 , 50)}} {{strlen($post->body) > 50 ? "..." : ""}}</td>
                                   <td>{{ date( 'M j, Y', strtotime($post->created_at)) }}</td>
                                   <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
                               </tr>
                           @endforeach
                           </tbody>
                       </table>
                   </div>

                   <div class="text-center">
                       {!! $posts->links(); !!}
                   </div>
               </div>
           </div>
       </div>
@endsection