@extends('layouts.main', [
	'title_tag' => 'لیست مقالات'
])

@section('content')
<div class="row col-11 mx-auto">
    @foreach($posts as $key=> $post)
            @if($key==0)
                <post class="col-12">
                    <a href="{{url('/post/show/'.$post['id'])}}">
                        <div class="row pt-5 pb-3">
                            <div class="col-5">
                                <div class="top-post">
                                    <p >
                                        <span class="opacity-75">{{$post->category->title}}</span>
                                        <span class="font-weight-bold"> &nbsp;&nbsp;.</span>
                                        <span class="pr-3 opacity-50 ">{{convertToPersianNumber(jalali_date($post->created_at)) }}</span>
                                    </p>
                                </div>
                                <div class="middle-post">
                                    <h1 class="font-bold">{{ $post->title }}</h1>
                                </div>
                                <div class="disc-post">
                                    <h6 class="lead">{!! $post->body !!}</h6>
                                </div>
                                <div class="end-post">
                                    <div class=" float-left">
                                        <p class=" float-right">{{$post->user->first_name." ". $post->user->last_name}}</p>
                                        <img  src="{{asset('image/avatar/'.($post->user->avatar ?? 'guest.jpeg'))}}" class="rounded-circle w-25">
                                    </div>
                                </div>
                            </div>
                            <div class="col-7">
                                <img style="height: 320px" width="100%" class="rounded" src="{{asset('image/post/'.$post->image)}}">
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
                                    <span class="pr-3 opacity-50 ">{{convertToPersianNumber(jalali_date($post->created_at))}}</span>
                                </p>
                            </div>
                            <div class="middle-post">
                                <h1 class=" font-bold">{{$post->title}}</h1>
                            </div>
                            <div class="disc-post">
                                <p class="lead">{!! $post->body !!}</p>
                            </div>

                        </div>
                    </div>
                </a>
            </post>
            @endif
    @endforeach
</div>
<div class="col-11 mx-auto pagination-posts pt-4">{{ $posts->links() }}</div>
@endsection

