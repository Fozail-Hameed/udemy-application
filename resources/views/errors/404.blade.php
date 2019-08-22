@extends('errors.master')

@section('content')
<div class="text-center text-center">
  <h1 class="error-number">404</h1>
  <h2>{{ __('lg.notfound') }}</h2>
  <p>{!! __('lg.notfoundmsg') !!}</p>
</div>
@endsection