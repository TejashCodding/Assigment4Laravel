@extends('admin.admin_main')
@section('content')
    <div class="container mt-5">
        <div class="modal-body">
            <div class="container bg-light shadow-lg p-5">

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    Post Title <input type="text" name="post_title" id="post_title" class="form-control"
                        value="{{ $updata->post_title }}">
                    <span class="text-danger">
                        @error('post_title')
                            {{ $message }}
                        @enderror
                    </span>
                    Post desc
                    <textarea class="form-control" id="post_desc" name="post_desc" rows="3">{{ $updata->post_desc }}</textarea>
                    <span class="text-danger">
                        @error('post_desc')
                            {{ $message }}
                        @enderror
                    </span>
                    Post Image <input type="file" name="image" class="form-control" accept="image/*" id="image">
                    <img src="{{ asset('post_image') . '/' . $updata->image }}" class="m-2" height="50px"
                        width="50px">
                    <span class="text-danger">
                        @error('image')
                            {{ $message }}
                        @enderror
                    </span>
                    Post Date <input type="date" name="post_date" id="post_date" class="form-control"
                        value="{{ $updata->post_date }}">
                    <span class="text-danger">
                        @error('post_date')
                            {{ $message }}
                        @enderror
                    </span>
                    <br>
                    <button id="add_post" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script></script>
@endsection
