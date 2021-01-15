<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Admin panel</title>

    <!-- vendor css -->
    <link href="{{ asset('../lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('../lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('../lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('../lib/jquery-switchbutton/jquery.switchButton.css') }}" rel="stylesheet">
    <link href="{{ asset('../lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../lib/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('../css/bracket.css') }}">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>Admin <i>Panel</i><span>]</span></a></div>
    @include('admin.inc.navbar')
    <div class="container">
      
        @include('admin.inc.messages')
        @yield('content')
    </div>
    <div class="br-header">
      <div class="br-header-left">
          <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
          <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        </div><!-- br-header-left -->
      <div class="br-header-right">
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->


    <!-- ########## END: RIGHT PANEL ########## -->


    <script src="{{ asset('../lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('../lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('../lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('../lib/moment/moment.js') }}"></script>
    <script src="{{ asset('../lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('../lib/jquery-switchbutton/jquery.switchButton.js') }}"></script>
    <script src="{{ asset('../lib/peity/jquery.peity.js') }}"></script>
    <script src="{{ asset('../lib/d3/d3.js') }}"></script>
    <script src="{{ asset('../lib/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('../lib/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('../lib/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('../lib/flot-spline/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('../lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('../lib/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('../lib/select2/js/select2.full.min.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCuWEQWfVkWfcUoSIZeGw5JioT9LVCwYkE"></script>
    <script src="{{ asset('../lib/gmaps/gmaps.js') }}"></script>

    <script src="{{ asset('../js/bracket.js') }}"></script>
    <script src="{{ asset('../js/map.shiftworker.js') }}"></script>
    <script src="{{ asset('../js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('../js/dashboard.js') }}"></script>
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>
  </body>
</html>
