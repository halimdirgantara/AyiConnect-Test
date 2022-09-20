@extends('layouts.app')

@section('title', 'Register')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')

    <div class="card card-primary">

        <div class="lang ml-4 mr-4 mt-4">
            <div class="form-group">
                <div class="selectgroup w-100">
                    <label class="selectgroup-item">
                        <input type="radio" name="lang" value="en" class="selectgroup-input btn-lang" checked="">
                        <span class="selectgroup-button">English</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="lang" value="id" class="selectgroup-input btn-lang">
                        <span class="selectgroup-button">Indonesian</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="lang" value="es" class="selectgroup-input btn-lang">
                        <span class="selectgroup-button">Spain</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="card-header">
            <h4>Register</h4>
        </div>

        <div class="card-body">
            <form method="POST">
                <div class="row">
                    <div class="form-group col-4">
                        <label for="fullname">Full Name</label>
                    </div>
                    <div class="form-group col-8">
                        <input id="fullname" type="text" class="form-control" name="fullname" autofocus>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-4">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-group col-8">
                        <input id="email" type="email" class="form-control" name="email">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-4">
                        <label for="subdomain">Sub Domain</label>
                    </div>
                    <div class="form-group col-8">
                        <input id="subdomain" type="text" class="form-control" name="subdomain" autofocus>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-4">
                        <label for="password" class="d-block">Password</label>
                    </div>
                    <div class="form-group col-8">
                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                            name="password">
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-4">
                        <label for="password-confirm" class="d-block">Password Confirmation</label>
                    </div>
                    <div class="form-group col-8">
                        <input id="password-confirm" type="password" class="form-control" name="password-confirm">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/jquery.pwstrength/jquery.pwstrength.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/auth-register.js') }}"></script>
@endpush
