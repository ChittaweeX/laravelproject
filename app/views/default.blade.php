<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Commerec Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::to('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- font-awesome core CSS -->
    <link href="{{ URL::to('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::to('assets/customcss/justified-nav.css')}}" rel="stylesheet">


  </head>
  <body>

    <div class="container">


        <!-- The justified navigation menu is meant for single line per list item.
             Multiple lines will require custom code not provided by Bootstrap. -->
        <div class="masthead">
          @yield('title')
          <nav>
            <ul class="nav nav-justified">
              @if( Request::segment(1) == 'admin')
              <li {{ ( Request::segment(2) == 'index' ? 'class="active"' : '') }}><a href="{{url('admin/index')}}">Admin <i class="fa fa-users"></i></a></li>
              <li {{ ( Request::segment(2) == 'product' ? 'class="active"' : '') }}><a href="{{url('admin/product')}}">Product <i class="fa fa-users"></i></a></li>
              <li {{ ( Request::segment(2) == 'user' ? 'class="active"' : '') }}><a href="{{url('admin/user')}}">User <i class="fa fa-users"></i></a></li>
              <li><a href="{{url('home')}}">Shop</a></li>
              <li><a href="{{url('login/logout')}}">Log out</a></li>
              @else
              <li {{ ( Request::segment(1) == 'home' ? 'class="active"' : '') }} ><a href="{{url('home')}}">Home</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="{{url('admin')}}">Admin</a></li>
              @endif
            </ul>
          </nav>
        </div>
        @if(Session::has('message'))
          <div class="alert alert-info" role="alert" style="margin-top:20px;">
              {{ Session::get('message')}}
          </div>
        @endif


        <!-- page header-->
          @yield('pageinfor')

        <!-- slider -->
        @yield('slider')




          @yield('maincontent')


        <!-- Site footer -->
        <footer class="footer">
          <p>&copy; S.I.N.Commercial</p>
        </footer>

      </div> <!-- /container -->




  </body>
  </html>
