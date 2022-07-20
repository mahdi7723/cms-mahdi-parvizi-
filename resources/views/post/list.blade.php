@extends('layouts.main', [
	'title_tag' => 'لیست مقالات'
])

@section('content')
<div style="background-color: white " class="col-11 mx-auto br-10 pb-4 mb-5">

   @foreach($posts as $key => $post)
       @if ($key==0)
            <post class="col-10 mx-auto">
                    <a href="{{url('/post/show/'.$post['id'])}}">

                        <div class="row pt-3 pb-3">
                            <div class="col-5">
                                <div class="top-post">
                                    <p>
                                        <small class="opacity-50">{{$post->category->title}}</small>
                                        <span class="font-weight-bold"> &nbsp;&nbsp;.</span>
                                        <small class="pr-3 opacity-75">{{ date($post->created_at)}}</small>
                                    </p>
                                </div>
                                <div class="middle-post">
                                    <h3>{{ $post->title }}</h3>
                                </div>
                                <div class="disc-post">
                                    <p>{!! $post->body !!}</p>
                                </div>
                                <div class="end-post">
                                    <div class="row  pl-2">
                                        <img style="width: 12%" src="{{asset('image/avatar/'. $post->user->avatar )}}" class="rounded-circle size-avatar float-start">
                                        <p class="pt-2 pl-3 ">{{$post->user->first_name . " " . $post->user->last_name}}</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-7">
                                <img style="height: 270px" width="100%" class="rounded" src="{{asset('image/post/'.$post->image)}}">
                            </div>
                        </div>

                    </a>
            </post>
        @else
            <post class="col-6">
                <a href="{{url('/post/show/'.$post['id'])}}">
                    <div class=" pt-5 pb-3">
                        <div class="">
                            <img style="height: 270px" width="100%" class="rounded" src="{{asset('image/post/'.$post->image)}}">
                        </div>
                        <div class="">
                            <div class="top-post">
                                <p class="pt-3">
                                    <span class="opacity-75">{{$post->category->title}}</span>
                                    <span class="font-weight-bold"> &nbsp;&nbsp;.</span>
                                    <span class="pr-3 opacity-50 ">{{date($post->created_at) }}</span>
                                </p>
                            </div>
                            <div class="middle-post">
                                <h4>{{ $post->title }}</h4>
                            </div>
                            <div class="disc-post">
                                <p>{!! $post->description !!}</p>
                            </div>

                        </div>
                    </div>
                </a>
            </post>
       @endif
   @endforeach
   <div class="col-11 mx-auto pagination-posts pt-4">{{ $posts->links() }}</div>
</div>
@endsection
