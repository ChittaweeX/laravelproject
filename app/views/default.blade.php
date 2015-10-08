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
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Downloads</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>
        </div>



        <!-- slider -->

          @yield('slider')


        <div class="row">
          @yield('maincontent')
        </div>

        <!-- Site footer -->
        <footer class="footer">
          <p>&copy; Company 2014</p>
        </footer>

      </div> <!-- /container -->




  </body>
  </html>
