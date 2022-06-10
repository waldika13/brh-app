<nav class="navbar navbar-expand-lg sticky-sm-top bg-light ">
    <div class="container">
        <a class="navbar-brand fw-bold fs-2" href="/">BRH</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link {{ ($active === 'hotel') ? 'active' : '' }}" href="/">Home</a>
            <a class="nav-link {{ ($active === 'article') ? 'active' : '' }}" href="/article">Article</a>
            <a class="nav-link {{ ($active === 'categories') ? 'active' : '' }}" href="/categories">Category</a>

          <ul class="navbar-nav ms-auto">
            @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Welcome, {{ auth()->user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/dashboard"><i class="bi bi-house-door"></i> Dashboard</a>
                  
                  <div class="dropdown-divider"></div>
                
                  <form action="/signout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Log Out</button>
                  </form>
                  
                </div>
              </li>
            @else
              <a class="nav-link {{ ($active === 'signin') ? 'active' : '' }}" href="/signin"><i class="bi bi-box-arrow-in-right"></i> Sign in</a>
              <form class="form-inline my-2 my-lg-0" action="/signup">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Sign Up</button>
              </form>
            @endauth
          </ul>
          </div>
        </div>
      </div>
    </nav>