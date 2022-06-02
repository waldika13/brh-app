<nav class="navbar navbar-expand-lg sticky-sm-top bg-light ">
    <div class="container">
        <a class="navbar-brand fw-bold fs-2" href="/">BRH</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link {{ ($title === 'Home Page') ? 'active' : '' }}" href="/">Home</a>
            <a class="nav-link {{ ($title === 'Article Page') ? 'active' : '' }}" href="/article">Article</a>
            <a class="nav-link {{ ($title === 'Category Page') ? 'active' : '' }}" href="/categories">Category</a>
            <a class="nav-link {{ ($title === 'Signin Page') ? 'active' : '' }}" href="/signin">Sign in</a>
            <form class="form-inline my-2 my-lg-0" action="/signup">
              <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </nav>