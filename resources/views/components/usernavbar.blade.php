<nav class="navbar navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="Loyal-title ms-5 me-auto" href="{{route('index')}}">Loyal Land</a>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-sm-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"data-mdb-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="container">
        <div class="collapse navbar-collapse justify-content-center ms-5" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item ">
              <a class="nav-link-fonts " aria-current="page" href="{{route('index')}}">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link-fonts " aria-current="page" href="{{route('free_books')}}">Library</a>
            </li>
            <li class="nav-item">
              <a class="nav-link-fonts" href="{{route('prayer')}}">Prayer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link-fonts" href="#">Lessons</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
          <li class="nav-item me-1 me-lg-0">
            <h4 class="l-usr">{{auth()->user()->name}}</h4>
          </li>
          <li class="nav-item me-1 me-lg-0">
            <a href="" class="" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Profile"><i class="far fa-user-circle l-profile"></i></a>
          </li>
          <li class="nav-item me-1 me-lg-0">
            <a href="{{route('logout')}}" class="" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Sign-out"><i class="fas fa-sign-out-alt l-sign"></i></a>
          </li>
        </ul>
        </div>
      </div>
      
        
  </div>
</nav>
