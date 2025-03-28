@extends('admin.admin_main')
@section('content')
    <div class="container mt-5">
        <div class="modal-body">
            <div class="container bg-light shadow-lg p-5">
                <meta name="csrf-token" content="{{ csrf_token() }}" />
                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    Post Title <input type="text" name="post_title" id="post_title" class="form-control">
                    <span class="text-danger">
                        @error('post_title')
                            {{ $message }}
                        @enderror
                    </span>
                    Post desc
                    <textarea class="form-control" id="post_desc" name="post_desc" rows="3"></textarea>
                    <span class="text-danger">
                        @error('post_desc')
                            {{ $message }}
                        @enderror
                    </span>
                    Post Image <input type="file" name="image" class="form-control" accept="image/*" id="image">
                    <span class="text-danger">
                        @error('image')
                            {{ $message }}
                        @enderror
                    </span>
                    Post Date <input type="date" name="post_date" id="post_date" class="form-control">
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
    <script>
        //     $(document).ready(function() {
        //         $.ajaxSetup({
        //             headers: {
        //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //             }
        //         });
        //         $("#add_post").on("click", function(e) {
        //             e.preventDefault();
        //             var post_titles = $('#post_title').val();
        //             var post_descs = $('#post_desc').val();
        //             var post_images = $('#image').val();
        //             console.log(post_images);
        //             var post_dates = $('#post_date').val()
        //             var post_add_url = "{{ route('post.store') }}";
        //             $.ajax({
        //                 url: post_add_url,
        //                 type: "POST",
        //                 data: {
        //                     "_token": "{{ csrf_token() }}",
        //                     post_title: post_titles,
        //                     post_desc: post_descs,
        //                     postimage: post_images,
        //                     post_date: post_dates,
        //                 },
        //                 success: function(response) {
        //                     alert("hghygvhnbb");
        //                     console.log(response);
        //                 }
        //             })
        //         })
        //     })
        // 
    </script>
@endsection
