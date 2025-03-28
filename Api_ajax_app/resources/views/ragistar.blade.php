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
               RAGISTAR FORM
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form method="post">
                        @csrf
                        <div class="form-group">
                            <label class="form-control-label">Name</label>
                            <input type="text" name="name"class="form-control" i>
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Email </label>
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

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role"  value="admin" id="flexRadioDefault1">
                            <label class="form-check-label text-light" for="flexRadioDefault1">
                              Admin
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" value="normal" id="flexRadioDefault2">
                            <label class="form-check-label text-light" for="flexRadioDefault2">
                              Normal
                            </label>
                            <br>
                            <span class="text-danger">
                                @error('role')
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
                <a href="{{ route('log.index') }}">
                    <button type="submit" class="btn btn-outline-primary">Login Form</button>
                </a>
            </div>
        </div>
    </div>
@endsection