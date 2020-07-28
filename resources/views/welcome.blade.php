<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Title -->
        <title>Alpha | Login</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="{{ asset('source/assets/plugins/materialize/css/materialize.min.css') }}"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('source/assets/plugins/material-preloader/css/materialPreloader.min.css') }}" rel="stylesheet">
        <!-- Theme Styles -->
        <link href="{{ asset('source/assets/css/alpha.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('source/assets/css/custom.css') }}" rel="stylesheet" type="text/css"/>

    </head>
    <body class="signin-page">
        <div class="loader-bg"></div>

        @include('layouts.loader')

        <div class="mn-content valign-wrapper">
            <main class="mn-inner container">
                <div class="valign">
                      <div class="row">
                          <div class="col s12 m6 l4 offset-l4 offset-m3">
                              <div class="card white darken-1">
                                  <div class="card-content ">
                                      <span class="card-title">Sign In</span>
                                       <div class="row">
                                           <form class="col s12" method="POST" action="{{ route('login') }}">
                                                @csrf
                                               <div class="input-field col s12">
                                                   <input id="email" type="email" class="validate{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                   <label for="email">Email</label>

                                                   @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="password" type="password" class="validate{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                   <label for="password">Password</label>

                                                   @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                               </div>
                                               <div class="col s12 right-align m-t-sm">
                                                   <a href="{{route('register')}}" class="waves-effect waves-grey btn-flat">sign up</a>
                                                   <button type="submit" class="waves-effect waves-light btn teal">sign in</button>
                                               </div>
                                           </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                    </div>
                </div>
            </main>
        </div>

        <!-- Javascripts -->
        <script src="{{ asset('source/assets/plugins/jquery/jquery-2.2.0.min.js') }}"></script>
        <script src="{{ asset('source/assets/plugins/materialize/js/materialize.min.js') }}"></script>
        <script src="{{ asset('source/assets/plugins/material-preloader/js/materialPreloader.min.js') }}"></script>
        <script src="{{ asset('source/assets/plugins/jquery-blockui/jquery.blockui.js') }}"></script>
        <script src="{{ asset('source/assets/js/alpha.min.js') }}"></script>

    </body>
</html>
