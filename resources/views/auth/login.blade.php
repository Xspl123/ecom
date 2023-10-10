@extends('layouts.base')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<style>
    input [type="text"]:focus,
    [type="email"]:focus,
    [type="url"]:focus,
    [type="password"]:focus,
    [type="number"]:focus,
    [type="date"]:focus,
    [type="datetime-local"]:focus,
    [type="month"]:focus,
    [type="search"]:focus,
    [type="tel"]:focus,
    [type="time"]:focus,
    [type="week"]:focus,
    [multiple]:focus,
    textarea:focus,
    select:focus {
        --tw-ring-color: transparent !important;
        border-color: transparent !important;
    }

    input [type="text"]:hover,
    [type="email"]:hover,
    [type="url"]:hover,
    [type="password"]:hover,
    [type="number"]:hover,
    [type="date"]:hover,
    [type="datetime-local"]:hover,
    [type="month"]:hover,
    [type="search"]:hover,
    [type="tel"]:hover,
    [type="time"]:hover,
    [type="week"]:hover,
    [multiple]:hover,
    textarea:hover,
    select:hover {
        --tw-ring-color: transparent !important;
        border-color: transparent !important;
    }

    input [type="text"]:active,
    [type="email"]:active,
    [type="url"]:active,
    [type="password"]:active,
    [type="number"]:active,
    [type="date"]:active,
    [type="datetime-local"]:active,
    [type="month"]:active,
    [type="search"]:active,
    [type="tel"]:active,
    [type="time"]:active,
    [type="week"]:active,
    [multiple]:active,
    textarea:active,
    select:active {
        --tw-ring-color: transparent !important;
        border-color: transparent !important;
    }
</style>
<!-- Log In Section Start -->
<div class="login-section">
    <div class="materialContainer">
        <div class="box">
            <form method="POST" action="{{route('login')}}">
                @csrf

                <div class="login-title">
                    <h2>Login</h2>
                </div>
                <div class="input">
                    <label for="name">Email</label>
                    <input type="email" id="name" name="email" :value="old('email')" required=""  autocomplete="email" autofocus=""
                        autocomplete="email">
                    @error('email')
                        <span class="text-danger mt-3" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" class="block mt-1 w-full" name="password" required=""
                        autocomplete="current-password">
                        @error('password')
                        <span class="text-danger mt-3" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <a href="javascript:void(0)" class="pass-forgot">Forgot your password?</a>

                <div class="button login">
                    <button type="submit">
                        <span>Log In</span>
                        <i class="fa fa-check"></i>
                    </button>
                </div>

                <p>Not a member? <a href="{{route('register')}}" class="theme-color">Sign up now</a></p>
            </form>
        </div>
    </div>
</div>
@endsection
