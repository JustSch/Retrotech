<nav class="navbar navbar-expand-lg navbar-dark bg-primary one">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <a class="nav-item nav-link <?php if ($active === '0') {echo 'active';} ?>" href="index.php">Home</a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Course
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Sample Link</a>
          </div>
        </li>
        <li class="nav-item dropdown <?php if ($active === '2') {echo 'active';} ?>">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Search
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <a class="dropdown-item <?php if ($currentPage === 'phase2') {echo 'active';} ?>" href="search.php">Phase 2: Fixed List</a>
            <a class="dropdown-item <?php if ($currentPage === 'phase3') {echo 'active';} ?>" href="upsearch.php">Phase 3: From File</a>
            <a class="dropdown-item <?php if ($currentPage === 'phase4') {echo 'active';} ?>" href="customSearch.php">Phase 4: Google API</a>
            <a class="dropdown-item <?php if ($currentPage === 'phase5') {echo 'active';} ?>" href="rSearch.php">Phase 5: My Search Engine</a>
          </div>
        </li>
        <li class="nav-item dropdown <?php if ($active === '3') {echo 'active';} ?>">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Browser
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item <?php if ($currentPage === 'browser') {echo 'active';} ?>" href="browser.php">Navigator</a>
            <a class="dropdown-item <?php if ($currentPage === 'window') {echo 'active';} ?>" href="window.php">Window</a>
            <a class="dropdown-item <?php if ($currentPage === 'screen') {echo 'active';} ?>" href="screen.php">Screen</a>
            <a class="dropdown-item <?php if ($currentPage === 'location') {echo 'active';} ?>" href="location.php">Location</a>
            <a class="dropdown-item <?php if ($currentPage === 'geolocation') {echo 'active';} ?>" href="geolocation.php">Geolocation</a>
          </div>
        </li>
        <li class="nav-item dropdown <?php if ($active === '4') {echo 'active';} ?>">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            About
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
            <a class="dropdown-item <?php if ($currentPage === 'ContactUs') {echo 'active';} ?>" href="about.php">Contact Us</a>
          </div>
        </li>

      </ul>
    </div>
  </nav>
