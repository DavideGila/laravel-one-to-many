@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{$category->name}}</h1>

        <button class="btn btn-primary mb-3"><a href="{{route('admin.categories.edit', $category)}}" class="text-white text-decoration-none">Edit</a></button>
        <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger text-white text-decoration-none">Delete</button>
        </form>

    </section>
@endsection
