@extends('layouts.app')

@section('form')
<section class="login_content">
    <form action="{{ route('login') }}" method="post">
      <h1>{{ __('lg.accountlogin') }}</h1>
      @csrf
      <div>
        <input type="email" name="email" class="form-control" placeholder="{{ __('lg.email') }}" required="" />
      </div>
      <div>
        <input type="password" name="password" class="form-control" placeholder="{{ __('lg.password') }}" required="" />
        @if($errors)
        <div class="text-danger">{{ $errors->first('email') }}</div>
        <br>
        @endif
      </div>
      <div>
        <button class="btn btn-default submit">{{ __('lg.signin') }}</button>
      </div>
      <div class="clearfix"></div>
      <div class="separator">
        <p>{{ __('lg.resetpassmsg') }} <a href="{{ url('password/reset') }}">{{ __('lg.resetpass') }}</a>@if(setting('registration.value'))<br>{{ __('lg.donthaveanaccountyet') }} <a href="{{ route('register') }}">{{ __('lg.register') }}</a> @endif</p>
      </div>
    </form>
  </section>
@endsection
