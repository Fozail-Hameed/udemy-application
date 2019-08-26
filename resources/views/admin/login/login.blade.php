<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Qubit Solution | </title>

    <!-- Bootstrap --> <link href="{{
    asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}"
    rel="stylesheet"> <!-- Font Awesome --> <link href="{{
    asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}"
    rel="stylesheet"> <!-- NProgress --> <link href="{{
    asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet"> <!--
    Animate.css --> <link href="{{
    asset('admin/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="{{ url('Log_in') }}">
                @csrf
              <h1>Admin Panel</h1>
              <div>
               @if(Session::has('error'))
                <div class="alert alert-danger">
                {{ Session::get('error') }}
                </div>
                @endif
                <input type="text" name="email" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default"><b>Login</b></button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <!-- <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1> -->
                  <p>©2016 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
