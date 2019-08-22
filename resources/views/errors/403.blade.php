@extends('errors.master')

@section('content')
<div class="text-center text-center">
  <h1 class="error-number">403</h1>
  <h2>{{ __('lg.accessdenied') }}</h2>
  <p>{!! __('lg.accessdeniedmsg') !!}</p>
</div>
@endsection