@extends('layouts.user.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>Series Results</h2>
                @isset($series)
                    <ul>
                        @foreach($series as $item)
                            <li>{{$item->title}}</li>
                        @endforeach
                        @endisset
                        <li> No Result Found</li>
                    </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>Episodes Results</h2>
                @isset($episodes)
                    <ul>
                        @foreach($episodes as $episode)
                            <li>{{$episode->title}}</li>
                        @endforeach
                        @endisset
                        <li> No Result Found</li>
                    </ul>
            </div>
        </div>
    </div>
@endsection
