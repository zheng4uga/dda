<nav class="navbar is-spaced is-transparent is-fixed-top" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{url('/')}}">
      <img src="{{url('images/dda_logo_transparent.png')}}" alt="DDA">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="dda-nav">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="dda-nav" class="navbar-menu">
    <div class="navbar-start">
      <a href="#thingwespecialize" class="dda-nav-link navbar-item is-uppercase">
        Thing we specialize
      </a>

      <a href="#whychoosedda" class="dda-nav-link navbar-item is-uppercase">
        Why Choose DDA
      </a>
      <a href="#whoweare" class="dda-nav-link navbar-item is-uppercase">
        Who we are
      </a>
      <a href="#projectgallery" class="dda-nav-link navbar-item is-uppercase">
        Project Gallery
      </a>
      <a href="#contactus" class="dda-nav-link navbar-item is-uppercase">
        Contact Us
      </a>
    </div>
     

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a href="{{url('estimate')}}" class="button is-primary is-outlined">
            <span class="icon is-small">
                <i class="fas fa-dollar-sign"></i>
            </span>
            <strong class="is-uppercase">Get an estimate</strong>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>