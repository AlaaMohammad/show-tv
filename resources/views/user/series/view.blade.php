@extends('layouts.user.app')
@section('content')
    <div class="container-fluid">
        <div class="row container-shadow">
            <div class="col-md-12 parallax-window" data-parallax="scroll"
                 data-image-src="https://shahidstatic1.akamaized.net/mediaObject/2020/disney/Odai/Thumb_Lost_S1Clean/original/Thumb_Lost_S1Clean.jpg?height=810&width=1440&croppingPoint=&version=1&type=mozjpeg"
                 data-natural-width="1400" position-y="5000px" style="height: 800px">

                <div class="series-info-wrapper pt-5">

                    <img class="logo-title"
                         src="https://shahidstatic2.akamaized.net/mediaObject/2020/Anas/Lost_Logo0/original/Lost_Logo0.png?height=&width=1000&croppingPoint=mc&version=1&type=png"
                         alt="logo-Title">
                    <p><small>Drama,Adventure</small></p>
                    <a href="#" class="btn btn-secondary btn-light mb-5">Follow Series +</a>
                    <p>{{$series->description}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>Episodes</h4>
                <!-- Grid column -->
                @foreach($series->episode as $episode)
                    <div class="col-lg-4 col-md-12 mb-4">
                        <!--Modal: Name-->
                        <div class="modal fade" id="modal1" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <!--Content-->
                                <div class="modal-content">
                                    <!--Body-->
                                    <div class="modal-body mb-0 p-0">

                                        <div
                                            class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                            <iframe class="embed-responsive-item"
                                                    src="https://www.youtube.com/embed/A3PDXmYoF5U?enablejsapi=1&amp;origin=https%3A%2F%2Fmdbootstrap.com"
                                                    allowfullscreen=""
                                                    data-gtm-yt-inspected-2340190_699="true"
                                                    id="518411306"
                                                    data-gtm-yt-inspected-2340190_908="true"></iframe>
                                        </div>

                                    </div>
                                    <!--Footer-->
                                    <div class="modal-footer justify-content-center">
                                        <button type="button"
                                                class="btn btn-outline-primary btn-rounded btn-md ml-4 waves-effect waves-light"
                                                data-dismiss="modal">Close
                                        </button>

                                    </div>

                                </div>
                                <!--/.Content-->

                            </div>
                        </div>
                        <!--Modal: Name-->

                        <a><img class="img-fluid z-depth-1"
                                src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg"
                                alt="video" data-toggle="modal" data-target="#modal1"></a>

                    </div>
            @endforeach
            <!-- Grid column -->
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script !src="">
        $('.parallax-window').parallax({imageSrc: '/path/to/image.jpg'});
    </script>
@endsection
