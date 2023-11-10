<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">GJKI Pematangsiantar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'GJKI Pematangsiantar') ? 'active' :'' }}" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/about/visi-misi">Visi & Misi</a></li>
              <li><a class="dropdown-item" href="/about/activities">What We Do</a></li>
              <li><a class="dropdown-item" href="/about/petugas">Petugas</a></li>
              <li><a class="dropdown-item" href="/about/tasks">Tasks</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/about/schedule">Jadwal</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact Us</a>
          </li>
          
          
        </ul>
  
        <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard">My dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">
                    Logout <i class="bi bi-box-arrow-right"></i>
                  </button>
                </form>
              </li>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a href="/login" class="nav-link"><i class="bi bi-person-circle"></i> Login Admin</a>
          </li>
        @endauth
        </ul>
        
      </div>
    </div>
  </nav>