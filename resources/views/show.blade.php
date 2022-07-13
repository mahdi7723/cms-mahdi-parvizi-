@extends('layouts.main', [
	'title_tag' => 'مقاله'
])

@section('content')
<div style="background-color: white " class="col-11 mx-auto br-10 pb-4 mb-5">

    <div class="card mb-3">
        <img src="{{asset('image/post/'.$post->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p>
            <small class="opacity-50">{{$post->category->title}}</small>
            <small class="pr-3 opacity-75">{{ $post->created_at}}</small>
        </p>
        <button value="{{ $post->tags}}"></button>
        <p class="card-text">{{ $post->body }}</p>
        <div class="avatar d-flex justify-content-start">
            <img style="width: 3%" src="{{asset('image/avatar/'. $post->user->avatar )}}" class="rounded-circle size-avatar ">
            <p class="pt-2 pl-3 ">{{$post->user->first_name . " " . $post->user->last_name}}</p>

        </div>
        <a href="{{ route('posts') }}" type="submit" class="btn btn-primary mt-2">back</a>
    </div>
</div>
@endsection
