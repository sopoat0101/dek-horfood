<nav class="navbar navbar-expand-lg navbar-dark bg-dekhor">
  <a class="navbar-brand" href="/"><img src="/img/logo.png" height="60" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/food/new">New Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about" target="_blank">About Us</a>
      </li>
        @if (Route::has('login'))
              @auth
                  <li class="dropdown" class="nav-link ml-0">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right p-1">
                            <li>
                                <a class="btn btn-dekhor col-12" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                            </li>
                        </ul>
                    </li>
              @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
              @endauth
        @endif

    </ul>
  </div>
</nav>
