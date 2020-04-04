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
                <div class=" card-header"><h4 class=" card-title">Create a New Series</h4></div>
                <div class=" card-body">
                    <form action="{{route('series.store')}}" method="POST"
                          class="form-horizontal ng-untouched ng-pristine ng-valid"
                          novalidate="">
                        @csrf
                        <div class=" row"><label class=" col-sm-2 col-form-label"> Series Title </label>
                            <div class=" col-sm-10">
                                <div class=" form-group"><input class=" form-control" type="text" name="title"></div>
                            </div>
                        </div>
                        <div class=" row"><label class=" col-sm-2 col-form-label"> Series Description </label>
                            <div class=" col-sm-10">
                                <div class=" form-group">
                                    <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea></div>
                            </div>
                        </div>
                        <div class=" row"><label class=" col-sm-2 col-form-label">Airing Time From</label>
                            <div class=" col-sm-10">
                                <div class=" form-group">
                                    <select class="form-control" name="airing-time-from" id="airing-time-form">
                                        <option value="saturday">Saturday</option>
                                        <option value="sunday">Sunday</option>
                                        <option value="monday">Monday</option>
                                        <option value="tuesday">Tuesday</option>
                                        <option value="wednesday">Wednesday</option>
                                        <option value="thursday">Thursday</option>
                                        <option value="saturday">Friday</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class=" row"><label class=" col-sm-2 col-form-label">Airing Time To</label>
                            <div class=" col-sm-10">
                                <div class=" form-group">
                                    <select class="form-control" name="airing-time-to" id="airing-time-to">
                                        <option value="saturday">Saturday</option>
                                        <option value="sunday">Sunday</option>
                                        <option value="monday">Monday</option>
                                        <option value="tuesday">Tuesday</option>
                                        <option value="wednesday">Wednesday</option>
                                        <option value="thursday">Thursday</option>
                                        <option value="saturday">Friday</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=" row"><label class=" col-sm-2 col-form-label">Airing Time Hour</label>
                            <div class=" col-sm-10">
                                <div class=" form-group">
                                    <input type="time" name="airing-time-hour" class="form-control" id="airing-time-hour">
                                </div>
                            </div>
                        </div>
                        <div class=" row">
                            <div class=" col-sm-10">
                                <div class=" form-group">
                                    <input type="submit" value="Create" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
