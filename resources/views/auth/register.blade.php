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
      #registerForm{
        padding: 3rem 0;
        height: 100%;
      }
      #registerForm .panel-body{
        padding: 2rem;
      }
    </style>
    @yield('styles')
</head>
<body class="grey lighten-3">
    <div id="app">
      <section id="registerForm">
      <div class="container">
          <div class="row">
              <div class="col s12 m8 offset-m2">

                  <div class="">
                    <h5 class="center grey-text" style="padding: 1.5rem 0;">Register Now</h5>
                  </div>
                  <div class="card white teal-text">
                      <div class="card-content">
                          <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                              {{ csrf_field() }}

                              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                  <label for="name" class="teal-text">Name</label>

                                  <div class="col-md-6">
                                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                      @if ($errors->has('name'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                  <label for="email" class="teal-text">E-Mail Address</label>

                                  <div class="col-md-6">
                                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                      @if ($errors->has('email'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                  <label for="password" class="teal-text">Password</label>

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
                                  <label for="password-confirm" class="teal-text">Confirm Password</label>

                                  <div class="col-md-6">
                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="col-md-6 col-md-offset-4">
                                      <button type="submit" class="btn waves-effect waves-light">
                                          Register
                                      </button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>

                  <div class="center">
                    <span>Already registered? <a href="{{ route('login') }}">Sign in here.</a></span>
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
