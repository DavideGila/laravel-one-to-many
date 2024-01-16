@extends('layouts.app')
@section('content')
    <section class="container">
        <img src="{{ asset('storage/' . $project->image) }}" alt="">
        <h1>{{$project->title}}</h1>
        <p>{{$project->body}}</p>
        <div>{{$project->category ? $project->category->name : 'Uncategorized'}}</div>

        <button class="btn btn-primary mb-3"><a href="{{route('admin.projects.edit', $project)}}" class="text-white text-decoration-none">Edit</a></button>
        <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger text-white text-decoration-none">Delete</button>
        </form>

    </section>
@endsection
