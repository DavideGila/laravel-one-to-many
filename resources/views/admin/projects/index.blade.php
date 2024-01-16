@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Project List</h1>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-6">
                    <img src="{{ asset('storage/' . $project->image) }}" alt="" style="width: 660px; height:450px">
                    <p><a href="{{ route('admin.projects.show', $project) }}">{{ $project->title }}</a></p>
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger text-white text-decoration-none">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a
                href="{{ route('admin.projects.create', $project) }}"class="text-white text-decoration-none btn btn-primary">Crea</a>
        </div>

    </section>
@endsection
