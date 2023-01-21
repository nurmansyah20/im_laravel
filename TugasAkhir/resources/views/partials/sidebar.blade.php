<div class="sidebar">
  <!-- Sidebar user (optional) -->
        {{-- <div class="sidebar"> --}}
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset ('/template/dist/img/iconAkun.jfif') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">

            @auth
            <a href="/" class="d-block">{{ Auth::user()->name }}</a>
            @endauth
            
            @guest
            <a href="/" class="d-block">Silahkan Login/Register</a>
            @endguest
            
            
          </div>
        </div>    
          <!-- SidebarSearch Form -->
          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                   <li class="nav-item">
                    <a href="/" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Dashboard
                      </p>
                    </a>
                  </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Halaman
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/data-tables" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Table</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="/cast" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    CRUD Cast
                  </p>
                </a>
              </li>
              
              @auth
              <li class="nav-item has-treeview">
                <a href="/genre" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    CRUD Genre
                  </p>
                </a>
              </li>
              @endauth

              <li class="nav-item has-treeview">
                <a href="/film" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    CRUD Film
                  </p>
                </a>
              </li>

              <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
              </aside>
              @guest
              <li class="nav-item">
                <a href="/login" class="nav-link bg-primary">
                  <i class="nav-icon"></i>
                  <p>
                    Login
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/register" class="nav-link bg-danger">
                  <i class="nav-icon"></i>
                  <p>
                    Register
                  </p>
                </a>
              </li>
              @endguest
              
              @auth
              <li class="nav-item">
                <a class="nav-link bg-danger" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    logout
                  </a>
                  
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </li>
                @endauth
              
              </ul>
              
          </nav>
          <!-- /.sidebar-menu -->