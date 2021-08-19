<nav class="navbar navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="Loyal-title ms-5 me-auto" href="#">Loyal Land</a>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-sm-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"data-mdb-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="container">
        <div class="collapse navbar-collapse justify-content-center ms-5" id="navbarNav">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link-fonts active" aria-current="page" href="{{route('index')}}">Home</a>
            </li>
            <!-- Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link-fonts dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                  Library
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li>
                    <a class="dropdown-item" href="{{route('free_books')}}">Free Books</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Books of Sale</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">other</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link-fonts" href="{{route('prayer')}}">Prayer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link-fonts" href="#">Lessons</a>
              </li>
          </ul>
        </div>
    </div>
    <ul class="navbar-nav d-flex flex-row">
      <!-- Icons -->
      <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" href="#">
          <i class="fas fa-shopping-cart"></i>
        </a>
      </li>
      <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" href="#">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <!-- Icon dropdown -->
      <li class="nav-item me-3 me-lg-0">
        <a class="nav-link dropdown-toggle" href="#" role="button">
          <i class="fas fa-user"></i>
        </a>
      </li>
    </ul>
  </div>
</nav>
