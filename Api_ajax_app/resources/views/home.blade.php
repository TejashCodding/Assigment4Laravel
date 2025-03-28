<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body class="bg-dark">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="shop-default shop-cards shop-tech ">
            <div class="row">
                @foreach ($post_data as $post)
                    <div class="col-md-4 mb-5  ">
                        <div class="block product no-border z-depth-2-top z-depth-2--hover bg-light">
                            <div class="block-image">
                                <a href="#">
                                    <img src="{{ asset('post_image') . '/' . $post->image }}" class="img-center">
                                </a>
                                <span
                                    class="product-ribbon product-ribbon-right product-ribbon--style-1 bg-blue text-uppercase">New</span>
                            </div>
                            <div class="block-body text-center">
                                <h3 class="heading heading-5 strong-600 text-capitalize">
                                    <a href="#">
                                        {{ $post->post_title }}
                                    </a>
                                </h3>
                                <p class="product-description">
                                    {{ $post->post_desc }}
                                </p>
                                <div class="product-colors mt-2">
                                    <div class="color-switch float-wrapper">
                                        <a href="#" class="bg-purple"></a>
                                        <a href="#" class="bg-pink"></a>
                                        <a href="#" class="bg-blue"></a>
                                    </div>
                                </div>
                                <div class="product-buttons mt-4">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <button type="button" class="btn-icon" data-toggle="tooltip"
                                                data-placement="top" title="" data-original-title="Favorite">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </div>
                                        <div class="col-2">
                                            <button type="button" class="btn-icon" data-toggle="tooltip"
                                                data-placement="top" title="" data-original-title="Compare">
                                                <i class="fa fa-share"></i>
                                            </button>
                                        </div>
                                        <div class="col-8">
                                            <button type="button"
                                                class="btn btn-block btn-primary btn-circle btn-icon-left">
                                                Read more
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
