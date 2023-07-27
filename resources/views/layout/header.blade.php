<!-- loading page -->
<div id="loader">
  <div class="scene">
    <div class="cube-wrapper">
      <div class="cube">
        <div class="cube-faces">
          <div class="cube-face shadow"></div>
          <div class="cube-face bottom"></div>
          <div class="cube-face top"></div>
          <div class="cube-face left"></div>
          <div class="cube-face right"></div>
          <div class="cube-face back"></div>
          <div class="cube-face front"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end loading page -->

<!-- back to top -->
<button class="back-to-top">
  <i class="fa-solid fa-arrow-up"></i>
</button>

<!-- end back to top -->
<!-- header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a href="home.html">
      <img src="{{asset('img/logo tách nền.png')}}" alt="" width="80px" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="model.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Model Gundam
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Option 1</a></li>
            <li><a class="dropdown-item" href="#">Option 2</a></li>
            <li><a class="dropdown-item" href="#">Option 3</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">News Gundam</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Blogs</a>
        </li>
        <li class="nav-item">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </li>
        <li class="nav-item">
          <i class="fa-solid fa-cart-shopping"></i>
        </li>
        <li class="nav-item">
          <button class="btn btn-outline-primary" type="submit">Login</button>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- end header -->