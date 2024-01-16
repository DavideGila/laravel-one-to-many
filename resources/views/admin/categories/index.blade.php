@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Category List</h1>
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-6">
                    <h2><a href="{{ route('admin.categories.show', $category) }}">{{ $category->name }}</a></h2>
                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger text-white text-decoration-none">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a
                href="{{ route('admin.categories.create', $category) }}"class="text-white text-decoration-none btn btn-primary">Crea</a>
        </div>

    </section>
@endsection
