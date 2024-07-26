@extends('layout.master')

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>Edit Post</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="" class="btn btn-success mx-1">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div>
                        <img style="width: 250px" src="{{ asset('storage/' . $post->image) }}" alt="">
                    </div>
                    <label for="" class="form-label">
                        Image
                    </label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control" value="{{ $post->title }}" name="title">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Category</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach ($categories as $category)
                            <option {{ $category->id == $post->category_id ? 'selected' : '' }} value="{{ $category->id }}">
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label"></label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $post->description }}</textarea>
                </div>

                <button class="btn btn-primary mt-2">submit</button>
            </form>
        </div>
    </div>
@endsection
