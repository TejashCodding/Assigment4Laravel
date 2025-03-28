$(document).ready(function () {
    $("#add_post").on("click", function (e) {
        e.preventDefault();
        var data = {
            'post_title': $('#post_title').val(),
            'post_desc': $('#post_desc').val(),
            'post_image': $('#post_image').val(),
            'post_date': $('#post_date').val(),
        }
        var post_add_url = "{{route('post.store')}}";
        console.log(post_add_url);
        $.ajax({
            url: post_add_url,
            type: "POST",
            data: data,
            success: function () {

            }
        })
    })
})