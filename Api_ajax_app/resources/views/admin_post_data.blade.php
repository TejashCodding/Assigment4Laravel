@extends('admin.admin_main')
@section('content')
    <div class="container">
        <a href="{{ route('post') }}"><button class="btn btn-primary">Add Post</button></a>
        <table class="table bg-light mt-5">
            <thead>
                <tr>
                    <th>id</th>
                    <th>post_title</th>
                    <th>post_desc</th>
                    <th>Post image</th>
                    <th>Post Date</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post_datas as $post)
                    <tr>
                        <td scope="row">{{ $post->id }}</td>
                        <td>{{ $post->post_title }}</td>
                        <td>{{ $post->post_desc }}</td>
                        <td><img src="{{ asset('post_image') . '/' . $post->image }}" height="50px" width="50px">
                        </td>
                        <td>{{ $post->post_date }}</td>
                        <td><a href="{{ route('post.edit', $post->id) }}"><button class="btn btn-success">Update</button></a>
                        </td>
                        <td><a href="{{ route('delete.post', $post->id) }}"><button
                                    class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
