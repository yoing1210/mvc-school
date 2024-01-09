<nav class="navbar bg-secondary sticky-top.flex-md-nowrap py-3 shadow border-0">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo mx-4 me-5 text-light " href="index.html"> <H2 class="shadow border-0">DASHBOARD ADMIN</H2></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
     
      <ul class="navbar-nav navbar-nav-right">
        
     
        <div class="navbar-nav">
          <div class="nav-item text-nowrap ">
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="btn btn-primary mb-3 mx-5 mt-3 px-4 pt-2 bg-light shadow border-0 text-dark "> <h5>logout</h5> <span data-feather="log-out" class="align-text-bottom"></span> </button>
            </form>
          </div>
        </div>
      </ul>
    </div>
  </nav>
  
  
  
  
  
  
  
  
  
  
  
  {{-- 
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow border-0">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">Mebel Puji</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="nav-link px-3 bg-dark border-0"> logout <span data-feather="log-out" class="align-text-bottom"></span> </button>
          </form>
        </div>
      </div>
    </header> --}}