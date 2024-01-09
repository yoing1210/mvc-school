<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-danger-subtle sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column ">


      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3
      mt-4 mb-2 text-muted">
        <span>Post Data Sekolah</span>
      </h6>

  
        <a class="nav-link  {{ Request::is('admin') ? 'active' : '' }}" href="/admin/profil">
          <h5 class="text-dark">Post Profil Sekolah</h5>
        </a>


      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/berita') ? 'active' : '' }}" href="/admin/berita">
          <span data-feather="grid" class="align-text-bottom"></span>
          <h5 class="text-dark">Post Berita Sekolah</h5>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/categories*') ? 'active' : '' }}" href="/admin/categories">
          <span data-feather="grid" class="align-text-bottom"></span>
          <h5 class="text-dark">Post Category</h5>
        </a>
      </li>

    </ul>
  </div>
</nav>


