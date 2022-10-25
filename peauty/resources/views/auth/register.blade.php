@extends('layouts.app')

@section('content')
<div class="container h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-8">
            <div class="card rounded-4">

                <div class="card-body p-5">
                    <div class="row p-2">
                        <div class="col-md-6">
                            <img src="{{ asset('images/logo.png') }}" alt="Peauty">
                        </div>
                        <div class="col-md-6">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row text-center">
                                    <h1>{{ __('CREATE ACCOUNT') }}</h1>
                                </div>
                                
                                <div class="row p-1">
                                    <div class="col-md-6">
                                        <label for="nama" class="col-md-6 col-form-label">{{ __('Name') }}</label>
                                        <input id="nama" type="text" class="form-control rounded-4 @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>
        
                                        @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="username" class="col-md-6 col-form-label">{{ __('Username') }}</label>
                                        <input id="username" type="text" class="form-control rounded-4 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
        
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row p-1">
                                    <div class="col-md-6">
                                        <label for="email" class="col-md-6 col-form-label">{{ __('Email') }}</label>
                                        <input id="email" type="email" class="form-control rounded-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="col-md-6 col-form-label">{{ __('Phone') }}</label>
                                        <input id="phone" type="text" class="form-control rounded-4 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
        
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row p-1">
                                    <div class="col-md">
                                        <label for="gender" class="col-md col-form-lavel">{{ __('Gender') }}</label><br>
                                        <input id="gender" type="radio" name="gender" value="Male" required>
                                        <label for="male">Male</label>
                                        <input id="gender" type="radio" name="gender" value="Female" required>
                                        <label for="female">Female</label>
                                    </div>
                                </div>

                                <div class="row p-1">
                                    <div class="col-md">
                                        <label for="password" class="col-md-6 col-form-label">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control rounded-4 @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <button type="submit" class="btn btn-danger rounded-5">
                                        {{ __('Register') }}
                                    </button>
                                    @if (Route::has('login'))
                                            <a class="btn btn-link" href="{{ route('login') }}">
                                                {{ __('Have an account? Login') }}
                                            </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
