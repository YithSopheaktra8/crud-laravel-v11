@extends('layout.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>All Posts</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="{{ route('posts.create') }}" class="btn btn-success mx-1">Create</a>
                    <a href="" class="btn btn-warning mx-1">Trashed</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered border-dark">
                <thead style="background-color: #f2f2f2">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width: 10%">Image</th>
                        <th scope="col" style="width: 20%">Title</th>
                        <th scope="col" style="width: 30%">Description</th>
                        <th scope="col" style="width: 10%">Category</th>
                        <th scope="col" style="width: 10%">Publish Date</th>
                        <th scope="col" style="width: 20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>
                                <img class="w-25 h-25" src="{{ asset('storage/' . $post->image) }}" alt="post-image"
                                    width="80">
                            </td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->category_id }}</td>
                            <td>{{ date('d-m-Y', strtotime($post->created_at)) }}</td>
                            <td>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-success">Show</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
