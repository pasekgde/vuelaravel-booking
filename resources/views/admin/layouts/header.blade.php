<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
        <!-- User Account Menu -->
        <li class="dropdown menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->

            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs">{{ Auth::user()->name  }}<span class="caret"></span></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <!-- The user image in the menu -->
              <li>
                <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


          </ul>
        </li>
      </ul>
      </div>
    </nav>
  </header>