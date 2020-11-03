@extends('layouts.app')

@section('banner')
    
@endsection

@section('content')
    <div style="background-color: #624d9c; padding:40px 0;">
        <div class="container text-white"style="display: flex; justify-content: center">
            <div class="col-md-8  " style=" padding: 10px; margin-left: auto; margin-right: auto ">

                    <div style="font-size: 35px; text-align: center; margin-bottom: 15px; color: white ">{{ __('auth.login_page') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="email" type="text" placeholder="{{ __('auth.login') }}" class="form-control @error('email') is-invalid @enderror" name="login" value="{{ old('email') }}" >

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="password" type="password" placeholder="{{ __('auth.password') }}" class="form-control @error('password') is-invalid @enderror" name="password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a style="color: #fff;" class="btn  btn-link" href="{{ route('password.request') }}">
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

@endsection
