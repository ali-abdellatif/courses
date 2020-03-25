@extends('front.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Your Email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Pasword">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary login-btn">{{ __('Login') }}</button>
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="message">Not registered? <a href="#register">Create an account</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
