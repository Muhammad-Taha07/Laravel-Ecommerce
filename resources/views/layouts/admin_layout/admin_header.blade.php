<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
      {{-- WORKING HERE --}}
      <ul class="navbar-nav ml-auto">

        <li><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{-- {{ucfirst(Auth::user()->name)}} --}}DUMMY
      </a>
  
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          
      <a class="nav-link" href="#"><i class="fas fa-user-circle"></i> Profile</a> 
          <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form> 
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->