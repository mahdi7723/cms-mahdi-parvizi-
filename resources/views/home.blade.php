@extends('layouts.main')

@section('content')

        @foreach ($posts as $post)
            <div class="container" dir="rtl">
                <div class="row">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="..." class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <p>{{ $post->tags }} . {{ $post->created_at }}</p>
                            <div class="card-body">
                              <h5 class="card-title">{{ post->title }}</h5>
                              <p class="card-text">{{ $post->body }}</p>
                             <div class="contaner">
                                <p class="float-end">{{ $post->author }}</p>
                                <img src="#" class="rounded-circle w-25 float-end"/>

                             </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        @endforeach
            {{ $users->links() }}

@endsection
