@extends('layouts.admin.app')
@section('content')
    <div class=" row">
        <div class=" col-md-12 mb-5">
            <div class=" card">
                <div class=" card-header"><h4 class=" card-title">Users</h4>
                </div>
                <div class=" card-body table-full-width">
                    <div class="table-striped table-responsive">
                        <table class=" table table-striped" id="series-table">
                            <thead class=" text-primary">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role->role}}</td>
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
