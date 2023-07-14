<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">
      <img src="{{ asset('assets') }}/img/logo.webp" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Ege Tahin Helva</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="{{ route('profile.show') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.category.index')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Ürün Kategorileri
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.product.index')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Ürünler
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.settings') }}" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Ayarlar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.message.index') }}" class="nav-link">
              <i class="nav-icon fas fa-mail-bulk"></i>
              <p>
                Mesajlar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.gallery.index') }}" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Galeri
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.comment.index') }}" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Yorumlar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logoutuser') }}" class="nav-link">
              <p>
                Çıkış Yap
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>