@extends('layouts.app')

@section('form')
<section class="login_content">
    <form action="{{ route('password.email') }}" method="post">
      <h1>{{ __('lg.resetpass') }}</h1>
      @csrf
      @if(session()->has('status'))
      <p class="text-success">{{ session()->get('status') }}</p>
      @endif
      <div>
        <input value="{{ old('email') }}" type="email" name="email" class="form-control" placeholder="{{ __('lg.email') }}" required="" />
        @if($errors->has('email'))
        <p class="text-danger">{{ $errors->first('email') }}</p>
        @endif
      </div>
      <div>
        <button class="btn btn-default submit">{{ __('lg.resetpass') }}</button>
      </div>
      <div class="clearfix"></div>
      <div class="separator">
        <p><a href="{{ route('login') }}"><i class="fa fa-arrow-left"></i> {{ __('lg.backtologin') }}</a></p>
      </div>
    </form>
  </section>
@endsection