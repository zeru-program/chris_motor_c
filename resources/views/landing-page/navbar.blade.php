<nav class="navbar navbar-expand-lg fixed-top shadow-sm" style="background:#fff;">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold text-light bg-danger px-2" href="{{ route('home') }}">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list fs-1"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mt-1">
        <li class="nav-item {{ url()->current() === url('/') ? 'nav-act' : '' }}">
          <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item {{ url()->current() === url('/blog') ? 'nav-act' : '' }}">
          <a class="nav-link" href="{{ route('blog') }}">Blog</a>
        </li>
        <li class="nav-item {{ url()->current() === url('/about-us') ? 'nav-act' : '' }}">
          <a class="nav-link" href="{{ route('about') }}">About us</a>
        </li>
        <li class="nav-item {{ url()->current() === url('/contact-us') ? 'nav-act' : '' }}">
          <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
        </li>
        <li class="nav-item">
        <button class="btn-hub px-2 py-1 fw-bold text-nowrap" onclick="window.open('https://wa.me/6281807356179')">HUBUNGI KAMI</button>
        </li>
      </ul>
    </div>
  </div>
</nav>