@extends('errors.master')

@section('content')
<div class="text-center text-center">
  <h1 class="error-number">404</h1>
  <h2>{{ __('Page not found') }}</h2>
  <p>{!! __('something is wrong!') !!}</p>
</div>
@endsection