<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #1A2F5E;">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="/gambar/logo.png" style="width: 80px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="{{ route('home.index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="{{ route('tags.index') }}">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#article">Catalog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Member
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">MOT</a></li>
              <li><a class="dropdown-item" href="#">MP21</a></li>
              <li><a class="dropdown-item" href="#">MP22</a></li>
            </ul>
        </ul>
      </div>
    </div>
  </nav>
