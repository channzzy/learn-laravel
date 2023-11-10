<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Laravel By Parsinta</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          @foreach ($navbar as $name => $url)
              <li class="nav-item">
                <a href="{{ $url }}" class="nav-link">{{ $name }}</a>
            </li>
          @endforeach
        </ul>
      </div>
      @if (!Auth::check())    
      <a href="{{ route('register') }}" class="btn btn-success me-2">Daftar Akun</a>
      <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
      @else
      <p class="mt-3 me-1">Hallo {{ Auth::user()->name }}</p>
      <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
      </form>
      @endif
      
    </div>
  </nav>