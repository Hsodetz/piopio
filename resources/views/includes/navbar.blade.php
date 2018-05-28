<!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-dark border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link">Inicio</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
          <li class="nav-item d-none d-sm-inline-block mr-4">
            <a href="{{ route('login') }}" class="text-light"> Login </a>
          </li>
          
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('register') }}" class="text-light"> Registro </a>
          </li>
        @else
            <li class="nav-item dropdown">
                <a href="#" class="dropdown-toggle text-light mr-4" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();" class="text-dark ml-2">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endguest
    </ul>
    
  </nav>
<!-- /.navbar -->