<nav class="navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
  <div class="collapse navbar-collapse order-3" id="navbarCollapse">
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/user" class="nav-link">Nyumbani</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Mtaa Wangu
      </a>
        <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
          {{-- <a class="dropdown-item" href="{{ route('tencellleader.index') }}">{{ __('Balozi Nyumba Kumi') }}</a> --}}
          <a class="dropdown-item" href="{{ route('house.index') }}">{{ __('Nyumba') }}</a>
          <a class="dropdown-item" href="{{ route('resident.index') }}">{{ __('Wakazi') }}</a>
          {{-- <a class="dropdown-item" href="#">{{ __('Wajumbe') }}</a> --}}
        </div>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
           
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->username }} <span class="caret"></span>
      </a>
        <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/user/profile">{{ __('Kuhusu') }} </a>
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
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </div>
</nav>