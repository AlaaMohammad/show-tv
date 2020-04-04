@extends('layouts.admin.app')
@section('content')
    <div class=" row">
        <div class=" col-md-12 mb-5">
            <div class=" card">
                <div class=" card-header"><h4 class=" card-title"><span>Series</span>
                    <a class="d-flex align-items-center text-muted" href="{{route('series.create')}}" aria-label="Add a new series">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                    </a>
                    </h4>
                </div>
                <div class=" card-body table-full-width">
                    <div class="table-striped table-responsive">
                        <table class=" table table-striped" id="series-table">
                            <thead class=" text-primary">
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Hour</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($series as $item)
                                <tr>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->airing_time_from}}</td>
                                    <td>{{$item->airing_time_to}}</td>
                                    <td>{{$item->airing_time_hour}}</td>
                                    <td>
                                        <a class="btn-sm btn-primary" href="{{route('series.edit',$item->id)}}">Edit</a>
                                        <form method="POST" action="{{route('series.destroy',$item->id)}}">
                                            @csrf
                                            @method('DELETE ')
                                            <input class="btn-sm btn-danger" type="submit" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
