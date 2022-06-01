<nav class="navbar navbar-expand-lg sticky-sm-top bg-light ">
    <div class="container">
        <a class="navbar-brand fw-bold fs-2" href="#">BRH</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link {{ ($title === 'Home Page') ? 'active' : '' }}" href="/">Home</a>
            <a class="nav-link {{ ($title === 'About Page') ? 'active' : '' }}" href="/about">About</a>
            <a class="nav-link {{ ($title === 'Article Page') ? 'active' : '' }}" href="/article">Article</a>
            <a class="nav-link {{ ($title === 'hotels') ? 'active' : '' }}" href="/detail_page">Hotels</a>
            <a class="nav-link {{ ($title === 'Sign in') ? 'active' : '' }}" href="#">Sign in</a>
            <button type="button" class="btn btn-outline-dark ms-2" href="/">Sing Up</button>
          </div>
        </div>
      </div>
    </nav>