<style>
.logo-nav{
  font-size: 40px;
  color: #0088be;
}
@media only screen and (min-width: 992px) {
    .nav-btn{
        margin: 0 7px;
    }
}

@media only screen and (max-width: 768px) {
    .nav-btn{
        margin: 10px 10px;
    }
}
</style>
<nav class="navbar navbar-expand-lg navbar-light a-nav" style="z-index: 111;">
  <div class="container-fluid ">
      <a class="navbar-brand" href="/"> Ecommerce</a>
      <button style="border: none"; class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav" style="margin: 0 auto;">
              {{-- <li class="nav-item">
                  <a class="nav-link" href="{{ route('home') }}">Home</a>
              </li> --}}
          </ul>
          <ul class="navbar-nav ms-auto right">
              @guest
                  @if (Route::has('login'))
                      <li class="nav-item">
                          <a class="nav-link btn btn-light nav-btn"
                              href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif

                  @if (Route::has('register'))
                      <li class="nav-item">

                          <a class="nav-link btn nav-btn" style="color: white; background:#0088be;"
                              href="{{ route('register') }}">{{ __('Register Now') }}</a>
                      </li>
                 
                  @endif
              @else
                  <li class="nav-item dropdown">
                     

                      <div class="d-flex" aria-labelledby="navbarDropdown">
                            <a href="#"   
                            class="dropdown-item">
                            {{ Auth::user()->name }}
                        </a>
                          <a   class="dropdown-item" href="{{ route('dashboard.index') }}">
                          {{ __('Dashboard') }}
                        </a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>
