@extends('theme.master')

@section('page-title')
    Edit Post
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success">
                        <h1>{{session('success')}}</h1>
                    </div>
                @endif
                <form action="{{Route('posts.update',$post->id)}}" method="post">

                    {{csrf_field()}}

                    <div class="form-group">

                        <label for="post_title">Post Title:</label>

                        <input type="text" class="form-control" value="{{$post->title}}" name="title" id="post_title" placeholder="Enter Your Post Title">
                    </div>
                    <div class="form-group">

                        <label for="post_description">Post Description</label>

                        <textarea class="form-control" id="post_description" placeholder="Post Description ..." name="description" rows="3">{{$post->description}}</textarea>

                    </div>

                    <input type="submit" class="btn btn-success" name="submit" value="Update">
                </form>
            </div>
        </div>
    </div>
@endsection
