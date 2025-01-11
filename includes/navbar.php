<link rel="stylesheet" href="assets/css/style.css">
  <nav class="navbar navbar-expand-md bg-dark shadow p-3 mb-5 bg-body rounded">
    <a class="navbar-brand btn" href="?page=home">Kuliner</a> 
<!-- --- -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
    <span class="navbar-toggler-icon"></span> </button> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent" > 
      <ul class="navbar-nav nav-tabs centered-nav" role="tablist"> 
        <li class="nav-item" role="presentation"> 
          <a class="nav-link" id="makanan-tab" href="?page=makanan">Makanan</a> 
        </li> 
          <li class="nav-item"> 
            <a class="nav-link" id="minuman-tab" href="?page=minuman">Minuman</a> 
        </li> 
          <li class="nav-item dropdown"> 
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> About </a>
             <ul class="dropdown-menu"> 
              <li><a class="dropdown-item" id="about-tab" href="?page=about">About Us</a>
            </li>
            <li><a class="dropdown-item" href="?page=contact">Contact</a></li> 
          </ul> 
        </li> 
      </ul> 
      <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="makanan-tab"></div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="minuman-tab"></div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"></div>
</div>
</div> 
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> 
        <li><a class="btn btn-outline-light" href="?page=login">Login</a>
      </li> 
    </ul> 
</nav>
