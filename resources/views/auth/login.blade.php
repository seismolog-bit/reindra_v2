@extends('layouts.auth')

@section('content')
    <div class="auth-form-box">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="text-center mb-7">
                {{-- <a class="d-flex flex-center text-decoration-none mb-4" href="{{ route('index') }}">
                    <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                        <img src="{{ asset('images/logo.png') }}" alt="phoenix" width="58" />
                    </div>
                </a> --}}
                <h3 class="text-body-highlight">Sign In</h3>
                <p class="text-body-tertiary">Get access to your account</p>
            </div>
            <div class="mb-3 text-start">
                <label class="form-label" for="email">{{ __('Email Address') }}</label>
                <div class="form-icon-container">
                    <input class="form-control form-icon-input @error('email') is-invalid @enderror" id="email"
                        type="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required
                        autocomplete="email" autofocus /><span class="fas fa-user text-body fs-9 form-icon"></span>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 text-start">
                <label class="form-label" for="password">Password</label>
                <div class="form-icon-container">
                    <input class="form-control form-icon-input @error('password') is-invalid @enderror" id="password"
                        type="password" name="password" required autocomplete="current-password"
                        placeholder="Password" /><span class="fas fa-key text-body fs-9 form-icon"></span>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row flex-between-center mb-7">
                <div class="col-auto">
                    <div class="form-check mb-0">
                        <input class="form-check-input" id="basic-checkbox" type="checkbox" name="remember"
                            {{ old('remember') ? 'checked' : '' }} /><label class="form-check-label mb-0"
                            for="basic-checkbox">{{ __('Remember Me') }}</label>
                    </div>
                </div>
                @if (Route::has('password.request'))
                    <div class="col-auto">
                        <a class="fs-9 fw-semibold" href="{{ route('password.request') }}">Forgot Password?</a>
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-3">{{ __('Login') }}</button>
            @if (Route::has('register'))
            <div class="text-center">
                <a class="fs-9 fw-bold" href="{{route('register')}}">Create an account</a>
            </div>
            @endif
        </form>
    </div>
@endsection
