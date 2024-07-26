@extends('layout.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>Trashed Posts</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="{{ route('posts.create') }}" class="btn btn-success mx-1">Back</a>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img class="w-25 h-25" src="https://picsum.photos/200" alt="post-image" width="80">
                        </td>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Category</td>
                        <td>Publish Date</td>
                        <td>
                            <a href="" class="btn btn-success">Show</a>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
