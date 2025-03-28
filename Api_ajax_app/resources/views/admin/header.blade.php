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
    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse m-auto" id="navbarNavAltMarkup">
            <div class="navbar-nav m-auto">
                <a class="nav-item nav-link  btn btn-outline-info ml-5" href="{{ route('reg.index') }}">Ragistar Form
                </a>
                <a class="nav-item nav-link btn btn-outline-info ml-5" href="{{ route('log.index') }}">Login Form</a>
                <a class="nav-item nav-link btn btn-outline-info ml-5"
                    href="{{ route('post.show', Auth::id()) }}">Post</a>
                <a class="nav-item nav-link btn btn-outline-info ml-5"
                    href="{{ route('viewprofile', Auth::id()) }}">View
                    Profile</a>

                <div class="d-flex justify-content-end">
                    <a class="nav-item nav-link btn btn-outline-danger ml-5" href="{{ route('Logout') }}">Logout</a>
                </div>

            </div>
        </div>
    </nav>
