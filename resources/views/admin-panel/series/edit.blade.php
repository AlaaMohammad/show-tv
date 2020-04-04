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
                <div class=" card-header"><h4 class=" card-title">Edit Series</h4></div>
                <div class=" card-body">
                    <form action="{{route('series.update',$series->id)}}" method="POST"
                          class="form-horizontal ng-untouched ng-pristine ng-valid"
                          novalidate="">
                        @method('PUT')
                        @csrf
                        <div class=" row"><label class=" col-sm-2 col-form-label"> Series Title </label>
                            <div class=" col-sm-10">
                                <div class=" form-group"><input class=" form-control" type="text" name="title"
                                                                value="{{$series->title}}"></div>
                            </div>
                        </div>
                        <div class=" row"><label class=" col-sm-2 col-form-label"> Series Description </label>
                            <div class=" col-sm-10">
                                <div class=" form-group">
                                    <textarea class="form-control" name="description" id="" rows="10">{{$series->description}}</textarea></div>
                            </div>
                        </div>
                        <div class=" row"><label class=" col-sm-2 col-form-label">Airing Time From</label>
                            <div class=" col-sm-10">
                                <div class=" form-group">
                                    <select name="airing-time-from" class="form-control" id="airing-time-form">
                                        <option value="saturday" {{ $series->airing_time_from == 'saturday' ? 'selected' : '' }}>Saturday</option>
                                        <option value="sunday" {{ $series->airing_time_from == 'sunday' ? 'selected' : '' }}>Sunday</option>
                                        <option value="monday" {{ $series->airing_time_from == 'monday' ? 'selected' : '' }}>Monday</option>
                                        <option value="tuesday" {{ $series->airing_time_from == 'tuesday' ? 'selected' : '' }}>Tuesday</option>
                                        <option value="wednesday" {{ $series->airing_time_from == 'wednesday' ? 'selected' : '' }}>Wednesday</option>
                                        <option value="thursday" {{ $series->airing_time_from == 'thursday' ? 'selected' : '' }}>Thursday</option>
                                        <option value="saturday" {{ $series->airing_time_from == 'friday' ? 'selected' : '' }}>Friday</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class=" row"><label class=" col-sm-2 col-form-label">Airing Time To</label>
                            <div class=" col-sm-10">
                                <div class=" form-group">
                                    <select name="airing-time-to" class="form-control" id="airing-time-to">
                                        <option value="saturday" {{ $series->airing_time_to == 'saturday' ? 'selected' : '' }}>Saturday</option>
                                        <option value="sunday" {{ $series->airing_time_to == 'sunday' ? 'selected' : '' }}>Sunday</option>
                                        <option value="monday" {{ $series->airing_time_to == 'monday' ? 'selected' : '' }}>Monday</option>
                                        <option value="tuesday" {{ $series->airing_time_to == 'tuesday' ? 'selected' : '' }}>Tuesday</option>
                                        <option value="wednesday" {{ $series->airing_time_to == 'wednesday' ? 'selected' : '' }}>Wednesday</option>
                                        <option value="thursday" {{ $series->airing_time_to == 'thursday' ? 'selected' : '' }}>Thursday</option>
                                        <option value="saturday" {{ $series->airing_time_to == 'friday' ? 'selected' : '' }}>Friday</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=" row"><label class=" col-sm-2 col-form-label">Airing Time Hour</label>
                            <div class=" col-sm-10">
                                <div class=" form-group">
                                    <input type="time" name="airing-time-hour" id="airing-time-hour" class="form-control" value="{{date('H:i', strtotime($series->airing_time_hour))}}">
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
