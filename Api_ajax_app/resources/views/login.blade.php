@extends('main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    LOGIN FORM
                </div>
                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">EMAIl</label>
                                <input type="email" name="email" class="form-control" i>
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="password" class="form-control" i>
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 login-btm login-button">
                    <a href="{{ route('reg.index') }}">
                        <button type="submit" class="btn btn-outline-primary">Ragistar Form</button>
                    </a>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-5 mt-5 ">
                @if (session('error_msg'))
                    <div class="alert alert-danger">
                        {{ session('error_msg') }}
                    </div>
                @endif
            </div>
        </div>
    @endsection
