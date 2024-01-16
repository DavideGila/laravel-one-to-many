@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Project Create</h1>
        <form action="{{ route('admin.categories.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
     <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                required value="{{ old('name') }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="body">Body</label>
        <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" cols="30" rows="10">
        {{ old('body') }}
        </textarea>
        @error('body')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="category">Select Category</label>
        <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
            <option value="">Select a Category</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{$category->name}}</option>

            @endforeach
        </select>
        @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-success">Save</button>
    <button type="reset" class="btn btn-primary">Reset</button>

        </form>
    </section>
@endsection
