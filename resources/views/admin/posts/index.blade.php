@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Photo</th>
                <th scope="col">User</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
        </tr>

        </thead>
        <tbody>
            @if($posts)
                @foreach($posts as $post)
                    <tr>
                        <th>{{$post->id}}</th>
                        <td><img height="50" src="{{$post->photo ? $post->photo->file: 'http://placehold.it/400x400'}}" alt="pic"></td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post->category_id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->body}}</td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>
                    </tr>
                @endForeach
            @endif
        </tbody>
    </table>

@stop