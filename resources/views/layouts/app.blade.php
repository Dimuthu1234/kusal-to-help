<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} {{ app()->version() }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('js/chart.js') }}"></script>
         
    </head>
    <body> 
    <!-- <div id="app"> -->
         <!--MENU--> 
 <nav class="navbar has-shadow w3-orange">
                <div class="container">
                    <div class="navbar-brand">
                        <a href="{{ route('home') }}" class="navbar-item">{{ config('app.name', 'Laravel') }}</a>
                        <a href="#" class="navbar-item">Link 1</a>
                        <a href="#" class="navbar-item">Link 2</a>
                        <a href="#" class="navbar-item">Link 3</a>

                        <div class="navbar-burger burger" data-target="navMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="navbar-menu" id="navMenu">
                        <div class="navbar-start"></div>

                        <div class="navbar-end">
                            @if (Auth::guest())
                                <a class="navbar-item " href="{{ route('login') }}">Login</a>
                                <a class="navbar-item " href="{{ route('register') }}">Register</a>
                            @else
                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>

                                    <div class="navbar-dropdown">
                                        <a class="navbar-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>

<!-- </div> -->

   <br/>


 <div class="w3-row">
  @include('layouts.left_side_menu')
    <!--MENU-->
   <div class="w3-col s8 w3-centered">
      @yield('content')
   </div>
 @include('layouts.right_side_menu')
</div> 
    <!-- </div> -->
        <script src="{{ asset('js/app.js') }}"></script>

@stack('scripts')
  </body>
</html>
