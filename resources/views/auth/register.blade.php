@extends('layouts.auth')

@section('content')
    <div class="col mx-auto">
        <div class="auth-form-box">
            <div class="text-center mb-7">
                <a class="d-flex flex-center text-decoration-none mb-4" href="{{ route('index') }}">
                    <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                        <img src="{{ asset('assets/img/icons/logo.png') }}" alt="phoenix" width="58" />
                    </div>
                </a>
                <h3 class="text-body-highlight">Sign Up</h3>
                <p class="text-body-tertiary">Create your account today</p>
            </div>

            <form action="{{ route('register') }}" method="post">
                @csrf

                <div class="mb-3 text-start">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                        type="text" placeholder="Name" value="{{ old('name') }}" required autocomplete="name"
                        autofocus />
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3 text-start">
                    <label class="form-label" for="email">Email address</label>
                    <input class="form-control @error('email') is-invalid @enderror" id="email" type="email"
                        name="email" value="{{ old('email') }}" placeholder="name@example.com" required
                        autocomplete="email" />
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-xl-6">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control form-icon-input @error('password') is-invalid @enderror" id="password"
                            type="password" name="password" placeholder="Password" required autocomplete="new-password" />
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-xl-6">
                        <label class="form-label" for="confirmPassword">Confirm Password</label>
                        <input class="form-control form-icon-input" id="confirmPassword" type="password"
                            name="password_confirmation" placeholder="Confirm Password" required
                            autocomplete="new-password" />
                    </div>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" id="termsService" type="checkbox" />
                    <label class="form-label fs-9 text-transform-none" for="termsService">I accept the <a
                            href="#!">terms
                        </a>and <a href="#!">privacy policy</a></label>
                </div>
                <button type="submit" class="btn btn-primary w-100 mb-3">Sign up</button>
                <div class="text-center">
                    <a class="fs-9 fw-bold" href="{{ route('login') }}">Sign in to an existing account</a>
                </div>
            </form>
        </div>
    </div>
@endsection
