<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::to('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

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
              <li class="active"><a href="{{url('admin')}}">Admin</a></li>
              <li><a href="{{url('admin/user')}}">User</a></li>
              <li><a href="{{url('home')}}">Shop</a></li>
              @else
              <li class="active"><a href="{{url('home')}}">Home</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="{{url('admin')}}">Admin</a></li>
              @endif
            </ul>
          </nav>
        </div>

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
