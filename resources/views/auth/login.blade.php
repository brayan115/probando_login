@extends('layouts.app')

@section('content')
<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
            <div class="sign-in-htm">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="group">
                        <label for="user" class="label">{{ __('E-Mail Address') }}</label>
                        <input id="user" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="group">
                        <label for="password" class="label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="group">
                        <input class="check" type="checkbox" name="remember" id="check" {{ old('remember') ? 'checked' : '' }}>
                        <label  for="check"><span class="icon"></span>
                        {{ __('Keep me Signed in') }}
                        </label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </form>
            </div>
            <div class="sign-up-htm">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="group">
                        <label for="name" class="label">{{ __('Name') }}</label>
                        <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="group">
                        <label for="email" class="label">{{ __('E-Mail Address') }}</label>    
                        <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="group">
                        <label for="password" class="label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group">
                        <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value=" {{ __('Register') }}">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection