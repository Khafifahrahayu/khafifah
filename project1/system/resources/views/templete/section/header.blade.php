 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('templete')}}" class="nav-link">Beranda</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('templete')}}" class="nav-link">Kontak</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        
        <a class="nav-link" data-toggle="dropdown" href="#">
          Khafifah Rahayu
          <img src="{{url('public')}}/dist/img/user1-128x128.jpg" alt="User Avatar" style="height: 100%;" class="img-size-50 mr-3 img-circle">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item"> 
             <i class="fa fa-cog"></i>Profile 
          </a>

          <a href="#" class="dropdown-item"> 
             <i class="fa fa-cog"></i>Setting 
          </a>

          <a href="#" class="dropdown-item"> 
             <i class="fa fa-sign-out"></i>logout 
          </a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
  </nav>