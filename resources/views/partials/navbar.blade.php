<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h5 class="m-0 text-primary"><img src="img/logo.png" width="60" alt=""> SMAS MUHAMMADIYAH KENDARI
        </h5>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route("beranda") }}" class="nav-link {{ ($title === "beranda" ) ? 'active' : '' }}">Beranda</a>
            <div class="nav-item dropdown">
                <a href="{{ route("profilsekolah") }}" class="nav-link {{ ($title === "profil" ) ? 'active' : '' }} dropdown-toggle" data-bs-toggle="dropdown">Profil Sekolah</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="/profilSekolah.index#item-1" class="dropdown-item">Identitas Sekolah</a>
                    <a href="/profilSekolah.index#item-2" class="dropdown-item">Sejarah</a>
                    <a href="/profilSekolah.index#item-3" class="dropdown-item">Visi Dan Misi</a>
                    <a href="/profilSekolah.index#item-4" class="dropdown-item">Akreditasi</a>
                    <a href="/profilSekolah.index#item-5" class="dropdown-item">Jurusan</a>
                    <a href="/profilSekolah.index#item-6" class="dropdown-item">Prestasi</a>
                    <a href="/profilSekolah.index#item-7" class="dropdown-item">Fasilitas</a>
                </div>
            </div>

            
            <a href="{{ route("berita") }}" class="nav-link {{ ($title === "berita" ) ? 'active' : '' }} " >Informasi</a>
              
           
            <a href="/kontak.index" class="nav-item {{ ($title === "kontak" ) ? 'active' : '' }} nav-link">Kontak</a>
        </div>
        <a href="/login.index" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->
