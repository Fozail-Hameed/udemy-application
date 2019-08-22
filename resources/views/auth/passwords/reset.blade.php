@extends('layouts.app')

@section('form')
<section class="login_content">
    <form action="{{ url('password/reset') }}" method="post">
      <h1>{{ __('lg.resetpass') }}</h1>
      @csrf
      <input type="hidden" name="token" value="{{ request()->token }}">
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
        <button class="btn btn-default submit">{{ __('lg.resetpass') }}</button>
      </div>
      <div class="clearfix"></div>
      <div class="separator">
        <p><a href="{{ route('login') }}">{{ __('lg.backtologin') }}</a></p>
      </div>
    </form>
  </section>
@endsection