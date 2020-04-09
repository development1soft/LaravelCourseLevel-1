@extends('theme.master')

@section('page-title')
    All Posts
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                @if(session('success'))
                    <div class="alert alert-success mt-5">
                        <h1>{{session('success')}}</h1>
                    </div>
                @endif

                @foreach($posts as $post)
                    <div class="card mt-5">
                        <h5 class="card-header">
                            {{$post->title}}
                            <span class="float-right">{{$post->updated_at->diffForHumans()}}</span>
                        </h5>
                        <div class="card-body">
                            <p class="card-text">
                                {{\Illuminate\Support\Str::words($post->description,20)}}
                            </p>
                            <a href="{{Route('posts.destroy',$post->id)}}" class="btn btn-danger">Delete This Post</a>
                            <a href="{{Route('posts.edit',$post->id)}}" class="btn btn-warning text-white">Edit This Post</a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
