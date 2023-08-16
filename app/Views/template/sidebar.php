<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)" style="padding:1rem">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" style="max-height:3rem" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="/home">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
          </ul>
          <!-- Generator -->
          <?php if( array_values(user()->getRoles())[0] == 'user' ): ?>
          <hr class="my-3">
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Tools Generator</span>
          </h6>
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="/headline">
                <i class="ni ni-spaceship text-orange"></i>
                <span class="nav-link-text">Headline</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/copywriting" id="copywritingNavLink">
                <i class="ni ni-ruler-pencil text-green"></i>
                <span class="nav-link-text">Copywriting</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/quote">
                <i class="ni ni-paper-diploma text-info"></i>
                <span class="nav-link-text">Quote</span>
              </a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/history">
                <i class="ni ni-single-copy-04 text-brown"></i>
                <span class="nav-link-text">History</span>
              </a>
            </li>
          </ul>
          <?php endif; ?>
          <!-- Auth -->
          <hr class="my-3">
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Autentikasi</span>
          </h6>
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="/profile">
                <i class="ni ni-single-02 text-blue"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/logout">
                <i class="ni ni-user-run text-red"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav d-md-none" style="position:absolute;bottom:0;background:var(--blue)" id="collapseSide">
            <li class="nav-item">
              <a class="nav-link text-white" href="javascript:void(0)">
                <i class="ni ni-bold-left"></i>
                <span class="nav-link-text fw-bold">Collapse</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>