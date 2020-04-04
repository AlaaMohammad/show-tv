@extends('layouts.admin.app')
@section('content')
    @if($errors->any())
        {!! implode('', $errors->all('<div class="row">
        <div class="col-md-12">
        <div class="alert alert-danger">:message</div>
        </div>
    </div>
        ')) !!}
    @endif
    <div class=" row">
        <div class=" col-md-12">
            <div class=" card">
                <div class=" card-header"><h4 class=" card-title">Edit Episode</h4></div>
                <div class=" card-body">
                    <form action="{{route('episodes.update',$episode->id)}}" method="POST"
                          class="form-horizontal ng-untouched ng-pristine ng-valid"
                          novalidate="">
                        @method('PUT')
                        @csrf
                        <div class=" row"><label class=" col-sm-2 col-form-label"> Series Title </label>
                            <div class=" col-sm-10">
                                <div class=" form-group"><input class=" form-control" type="text" name="title"
                                                                value="{{$episode->title}}"></div>
                            </div>
                        </div>
                        <div class=" row"><label class=" col-sm-2 col-form-label"> Series Description </label>
                            <div class=" col-sm-10">
                                <div class=" form-group">
                                    <textarea class="form-control" name="description" id="" rows="10">{{$episode->description}}</textarea></div>
                            </div>
                        </div>
                        <div class=" row"><label class=" col-sm-2 col-form-label">Airing Time From</label>
                            <div class=" col-sm-10">
                                <div class=" form-group">
                                    <select class="form-control" name="airing-time-from" id="airing-time-form">
                                        <option value="saturday" {{ $episode->airing_time_day == 'saturday' ? 'selected' : '' }}>Saturday</option>
                                        <option value="sunday" {{ $episode->airing_time_day == 'sunday' ? 'selected' : '' }}>Sunday</option>
                                        <option value="monday" {{ $episode->airing_time_day == 'monday' ? 'selected' : '' }}>Monday</option>
                                        <option value="tuesday" {{ $episode->airing_time_day == 'tuesday' ? 'selected' : '' }}>Tuesday</option>
                                        <option value="wednesday" {{ $episode->airing_time_day == 'wednesday' ? 'selected' : '' }}>Wednesday</option>
                                        <option value="thursday" {{ $episode->airing_time_day == 'thursday' ? 'selected' : '' }}>Thursday</option>
                                        <option value="saturday" {{ $episode->airing_time_day == 'friday' ? 'selected' : '' }}>Friday</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class=" row"><label class=" col-sm-2 col-form-label">Airing Time Hour</label>
                            <div class=" col-sm-10">
                                <div class=" form-group">
                                    <input type="time" name="airing-time-hour" class="form-control" id="airing-time-hour" value="{{date('H:i', strtotime($episode->airing_time_hour))}}">
                                </div>
                            </div>
                        </div>
                        <div class=" row">
                            <div class=" col-sm-10">
                                <div class=" form-group">
                                    <input type="submit" value="Edit" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
