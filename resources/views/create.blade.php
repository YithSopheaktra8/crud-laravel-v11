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
                    <h4>Create Post</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="" class="btn btn-success mx-1">Back</a>
                </div>
            </div>
        </div>



        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="form-label">
                        Image
                    </label>
                    <input name="image" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Category</label>
                    <select name="category_id" id="" class="form-control">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Description</label>
                    <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <button class="btn btn-primary mt-2">submit</button>
            </form>
        </div>
    </div>
@endsection
