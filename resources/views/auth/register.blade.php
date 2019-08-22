@extends('layouts.app')

@section('form')
@if(setting('registration'))
<section class="login_content">
    <form action="{{ route('register') }}" method="post">
      <h1>{{ __('lg.accountsignup') }}</h1>
      @csrf
      <div>
        <input type="text" value="{{ old('name') }}" name="name" class="form-control" placeholder="{{ __('lg.name') }}" required="" />
        @if($errors->has('name'))
        <p class="text-danger">{{ $errors->first('name') }}</p>
        @endif
      </div>
      <div>
        <input value="{{ old('email') }}" type="email" name="email" class="form-control" placeholder="{{ __('lg.email') }}" required="" />
        @if($errors->has('email'))
        <p class="text-danger">{{ $errors->first('email') }}</p>
        @endif
      </div>
      <div>
        <input autocomplete="new-password" type="password" name="password" class="form-control" placeholder="{{ __('lg.password') }}" required="" />
        @if($errors->has('password'))
        <p class="text-danger">{{ $errors->first('password') }}</p>
        @endif
      </div>
      <div>
        <input autocomplete="new-password" type="password" name="password_confirmation" class="form-control" placeholder="{{ __('lg.confirmpassword') }}" required="" />
        @if($errors->has('password_confirmation'))
        <p class="text-danger">{{ $errors->firat('password_confirmation') }}</p>
        @endif
      </div>
      <div>
        <button class="btn btn-default submit">{{ __('lg.register') }}</button>
      </div>
      <div class="clearfix"></div>
      <div class="separator">
        <p>{{ __('lg.alreadyhaveaccount') }} <a href="{{ route('login') }}">{{ __('lg.login') }}</a></p>
      </div>
    </form>
  </section>
  @else
  <div class="row text-center">
    <h2><i class="fa fa-ban fa-3x"></i></h2>
    <h3>{{ __('lg.regdisabled') }}</h3>
    <p>{{ __('lg.regdisabledmsg') }}</p>
  </div>
  @endif
@endsection