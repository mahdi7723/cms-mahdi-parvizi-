@extends('layouts.main', [
	'title_tag' => 'مقاله'
])

@section('content')
    <div class="container">
        <div class="col-12">
            <img style="height: 450px" width="100%" class="rounded" src="{{asset('image/post/'.$post->image)}}">
        </div>

        <div class="col-12">
            <div class="title-post  pt-4">
                <h4 class="text-right">{{$post->title}}</h4>
            </div>

            <p>
                <a href="{{url('category/'.$post->category->id.'/posts')}}">
                    <span class="opacity-75">{{$post->category->title}}</span>
                </a>
                <span class="font-weight-bold"> &nbsp;&nbsp;.</span>
                <span class="pr-3 opacity-50">تاریخ انتشار : {{convertToPersianNumber(jalali_date_format2($post->created_at))}}</span>
            </p>
            <p class="tags-post col-12 row">
                @foreach ($post->tags as $tag)
                <a href="{{url('tag/'.$tag->id.'/posts')}}">
                    <span class="alert" role="alert">
                        {{$tag->lable}}
                    </span>
                </a>
                @endforeach
            </p>


            <div class="disc-post">
                <p>{!! $post->body !!}</p>
            </div>
            <div class="author-post col-12">
                <div class="row pl-2">
                   <a href="{{url('author/'.$post->author->id.'/posts')}}">
                        <img style="width: 4%" src="{{asset('image/avatar/'.($post->user->avatar ?? 'guest.jpeg'))}}" class="rounded-circle size-avatar">
                        <p class="pt-2 mr-3">
                            {{$post->user->first_name." ". $post->user->last_name}}
                            <span class="d-block fs-12 opacity-7">{{convertToPersianNumber($post->author->posts()->count()) }} نوشته </span>
                        </p>
                    </a>
                </div>
            </div>
            <div class="comment pt-4">
                <h4>نظرات شما :</h4>
                <div class="col-12 mt-2 p-0">
                    @if($errors->any())
                        <div class="alert alert-danger col-12">

                            @foreach($errors->all() as $key => $error)
                                {{ $error }}<br/>
                            @endforeach
                        </div>
                    @endif

                </div>
                <form action="{{route('comment.store', $post->id)}}" method="POST">
                    @csrf
                    @guest
                        <div class="form-group col-4 pr-0 ">
                          <input type="text" class="form-control text-right" name="name" placeholder="نام شما" value="{{ old('name') }}">
                        </div>
                    @endguest
                    <div class="form-group mt-2">
                      <textarea class="form-control resize-none" rows="3" name="message" placeholder="متن پیام شما ...">{{ old('message') }}</textarea>
                    </div>
                    <div class="d-flex justify-content-end submit-comment mt-2">
                        <button type="submit" class="btn btn-primary text-left">ارسال پیام</button>
                    </div>
                </form>
                <div class="comments-post">

                    @foreach ($post->comments as $comment)
                        <p class="fs-12 opacity-7 pt-5">
                            <span>{{$comment->author_name}}</span>
                            <span>در تاریخ {{convertToPersianNumber(jalali_date_format2($comment->created_at))}} نوشت:</span>
                        </p>
                        <p>{{$comment->message}}</p>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
