@extends('layouts.user.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @foreach($random_series as $series)
                    <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$series->title}}</h5>
                            <p class="card-text">{{$series->discription}}</p>
                        </div>
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection
