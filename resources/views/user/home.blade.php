@extends('layouts.user.app')
@section('content')
    <div class="container-fluid">
        <h3> Latest Episodes</h3>
        @foreach($latest_episodes->chunk(4) as $episodes)
        <div class="row mb-5">
            @foreach($episodes as $episode)
                <div class="col-md-3">
                    <!-- Card -->
                    <div class="card" >
                        <video class="card-img-top" playsinline autoplay muted loop>
                            <source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4">
                        </video>
                        <div class="card-body">
                            <h5 class="card-title">{{$episode->title}}</h5>
                            <p class="card-text">{{$episode->description}}</p>
                            <a href="#" class="btn btn-primary">like</a>
                        </div>
                    </div>
                    {{--
                                        <div class="card">
                                            <!-- Card image -->
                                            <div class="view overlay">
                                                <video class="img-fluid" playsinline autoplay muted loop>
                                                    <source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4">
                                                </video>
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>

                                            <!-- Social buttons -->
                                            <div class="card-share">

                                                <div class="social-reveal">

                                                    <!-- Facebook -->
                                                    <a type="button" class="btn-floating btn-fb mt-0 mx-1"><i class="fab fa-facebook-f"></i></a>
                                                    <!-- Twitter -->
                                                    <a type="button" class="btn-floating btn-tw mt-0 mx-1"><i
                                                            class="fab fa-twitter"></i></a>
                                                    <!-- Google -->
                                                    <a type="button" class="btn-floating btn-gplus mt-0 mx-1"><i
                                                            class="fab fa-google-plus-g"></i></a>

                                                </div>

                                                <!-- Button action -->
                                                <a class="btn-floating btn-action share-toggle indigo ml-auto mr-4 float-right"><i
                                                        class="fas fa-share-alt"></i></a>

                                            </div>

                                            <!-- Card content -->
                                            <div class="card-body">

                                                <!-- Title -->
                                                <h4 class="card-title">Card title</h4>
                                                <hr>
                                                <!-- Text -->
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                                    of the card's
                                                    content.</p>
                                                <button class="btn btn-indigo btn-rounded btn-md">Read more</button>

                                            </div>
                                        </div>
                    --}}
                </div>
            @endforeach
        </div>
            @endforeach
    </div>
@endsection
