<header>
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
      <div class="container">
          <a class="navbar-brandLogo" href="#">
              <img src="../assets/img/logo.png" alt="Logo" width="78" height="76" class="d-inline-block align-text-top" />
              <a class="navbar-brand" href="/">MOMMY<br />GUIDE</a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupport">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="/">Beranda</a>
                  </li>
                  @if (auth()->check() && (auth()->user()->role == 'pasien' ))
                      <li class="nav-item">
                          <a class="nav-link" href="/janjitemu">Janji Temu</a>
                      </li>
                  @endif
                  @if (auth()->check() && auth()->user()->role != 'admin')
                      <li class="nav-item">
                          <a class="nav-link" href="/myappointment">Janji Temu Saya</a>
                      </li>
                  @endif
                  <li class="nav-item dropdown active">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Fitur
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item active" href="/blog">Panduan Kesehatan</a>
                          @if (auth()->check() && (auth()->user()->role == 'pasien' || auth()->user()->role == 'dokter'))
                              <a class="dropdown-item" href="/bukudigital">Buku KIA Digital</a>
                              <a class="dropdown-item" href="/diskusi">Diskusi</a>
                          @endif
                      </div>
                  </li>

                  @guest
                      <li class="nav-item">
                          <a class="nav-link" href="/login">Masuk</a>
                      </li>
                  @else
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </li>
                  @endguest

                  @if (auth()->check() && auth()->user()->role == 'admin')
                      <li class="nav-item">
                          <a class="nav-link" href="/dashboard_admin">Dashboard</a>
                      </li>
                  @endif
              </ul>
          </div>
      </div>
  </nav>
</header>
