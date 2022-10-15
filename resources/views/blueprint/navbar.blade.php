<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded mb-2">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">@lang('navbar.dashboard')</span></a>
            </li>
            @auth
            <li class="nav-item">
              <a class="nav-link " href="/topup">@lang('navbar.topup')</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cool-avatar">@lang('navbar.avatar')</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/creators-angel">@lang('navbar.creator')</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/thumbed-user">@lang('navbar.wishlist')</a>
            </li>
            @endauth
          </ul>
        </div>
        <div class="d-flex flex-wrap flex-row align-items-center justify-content-end">
          <div class="btn-group">
              <a href="/localization/id" class="btn btn-light">ID</a>
              <a href="/localization/en" class="btn btn-primary">EN</a>    
          </div>
      </div>
      </nav>
</div>
