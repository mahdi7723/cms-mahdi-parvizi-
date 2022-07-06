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
                            <p>{{ $user->last_name }} . {{ $user->created_at }}</p>
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                             <div class="contaner">
                                <p class="float-end">{{ $user->last_name }}</p>
                                <img src="{{ $user->avatar }}" class="rounded-circle w-25 float-end"/>

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
