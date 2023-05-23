<header class="d-flex mt-4">

  <div class="container d-flex justify-content-between align-items-center">
    <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo">
    <nav class="navigation">
      <ul class="header-nav d-flex list-unstyled">
          <li class="m-1 p-1">
            <a class="nav-link" href="{{url('/characters')}}">Characters</a>
            <span class="underline"></span>
          </li>
          <li class="m-1 p-1">
            <a class="nav-link" href="{{url('/comics')}}">Comics</a>
          </li>
          <li class="m-1 p-1">
            <a class="nav-link" href="">Movies</a>
          </li>
          <li class="m-1 p-1">
            <a class="nav-link" href="">TV</a>
          </li>
      </ul>
      </nav>
  </div>

</header>