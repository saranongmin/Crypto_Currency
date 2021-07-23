 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('ui/backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     

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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>
        
          <li class="nav-item">
            <a href="{{route('videos.create')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Videos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('videos.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Videos</p>
                </a>
              </li>
              
             
            
            </ul>
          </li>
         
          <li class="nav-header"></li>
          
         
          <li class="nav-item">
            <a href="{{route('products.create')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Class Room
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('exchanges.index')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Exchanges
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('wallets.index')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Wallets
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('contacts.index')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Contact List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('newsletters.index')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Newsletter Signup List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('teams.create')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Team List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('partners.create')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Partners List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('investors.create')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Investor List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('blogs.create')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Blog Content List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                HAA
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/faq.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contact-us.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contact-us.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Team List</p>
                </a>
              </li>
            </ul>
          </li>
        
       
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>