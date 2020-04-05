@extends('layouts.user.app')
@section('content')
    <div class="container-fluid">
        <h3> Latest Episodes</h3>
        @foreach($latest_episodes->chunk(4) as $episodes)
            <div class="row mb-5">
                @foreach($episodes as $episode)
                    <div class="col-md-3">
                        <!-- card -->
                        <div class="card">
                            <video class="card-img-top" playsinline autoplay muted loop>
                                <source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4">
                            </video>
                            <!-- card body-->
                            <div class="card-body">
                                <h5 class="card-title">{{$episode->title}}</h5>
                                <p class="card-text">{{$episode->id}}</p>
                                @if(auth()->user()->is_liked($episode->id))
                                    <a href="/user/episode/{{$episode->id}}/dislike" class="btn btn-primary">Dislike</a>
                                @else
                                    <a href="/user/episode/{{$episode->id}}/like" class="btn btn-primary">Like</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
