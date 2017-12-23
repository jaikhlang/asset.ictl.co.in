<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style media="screen">
    body{
      height: 100%;
      margin: 0 auto;
    }
      #loginForm{
        padding: 5rem 0;
        height: 100%;
      }
      #loginForm .panel-body{
        padding: 2rem;
      }
    </style>
    @yield('styles')
</head>
<body class="grey lighten-3">
  <div id="app">
    <section id="loginForm">
      <div class="container">
        <div class="row">
          <div class="col m8 offset-m2 s12">
              <div class="">
                <h5 class="center grey-text" style="padding: 1.5rem 0;">Login</h5>
              </div>
              <div class="card">
                  <div class="card-content">
                      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                          {{ csrf_field() }}

                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <label for="password" class="col-md-4 control-label">Password</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control" name="password" required>

                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <div class="checkbox">
                                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }} />
                                    <label for="remember">Remember Me</label>
                                  </div>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="" style="margin-top: 1.5rem;">
                                  <button type="submit" class="btn btn-primary">
                                      Login
                                  </button>
                                  <br><br>
                                  <a class="" href="{{ route('password.request') }}">
                                      Forgot Your Password?
                                  </a>
                              </div>
                          </div>


                      </form>
                  </div>
              </div>
              <div class="center">
                <span>Not registered yet? <a class="" href="{{ route('events.registration') }}">Register Now</a></span>
              </div>
          </div>
      </div>
      </div>
    </section>
  </div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="{{ asset('js/init.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@yield('scripts')
</body>
</html>
