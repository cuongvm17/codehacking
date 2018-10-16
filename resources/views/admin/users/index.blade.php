@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_user'))
        <p class="bg-danger">{{session('deleted_user')}}</p>
    @endif


    <h3>List user</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Status</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
            </tr>
        </thead>
        <tbody>

        @if($users)
            @foreach($users as $key=>$user)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td> <img height="50" src="{{ $user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}"></td>
                    <td> <a href="{{route('admin.users.edit', $user->id)}}">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td>{{ $user->is_active == 1?'Actived':'Not actived' }}</td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                    <td>{{ !$user?$user->update_at->diffForHumans():'null' }}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    @include('includes.form_error')
@stop