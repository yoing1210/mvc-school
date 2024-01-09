@extends('layouts.main')

@section('container')


 <!-- Header Start -->
 <div class="container-fluid bg-primary py-5 mb-5 page-header">
  <div class="container py-5">
      <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
              <h1 class="display-3 text-white animated slideInDown">Profil Sekolah</h1>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                      <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                      <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                  </ol>
              </nav>
          </div>
      </div>
  </div>
</div>
<!-- Header End -->



{{-- identitas sekolah --}}
<div id="item-1">


<div class="container-xxl py-5 mt-5">
  <div class="container mt-5 py-5">
      <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
              <div class="position-relative h-100">
                  <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
              </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            @foreach ($profil as $profils)
            
            <h1 class="mb-4">Identitas sekolah</h1>
            <table class="table ">
                
                <tbody>
                  <tr class="mb-0">
                    <td>Nama Sekolah</td>
                    <td>{{ $profils->nama }}</td>
                  </tr>

                  <tr>
                    <td>Alamat Sekolah</td>
                    <td>{{ $profils->alamat }}</td>
                  </tr>

                  <tr>
                    <td>Kepala Sekolah</td>
                    <td>{{ $profils->ks }}</td>
                  </tr>
                  
                  <tr>
                    <td>NIP</td>
                    <td>{{ $profils->nip }}</td>
                  </tr>

                  <tr>
                    <td>Akreditasi</td>
                    <td>{{ $profils->akreditasi }}</td>
                  </tr>

                </tbody>
              </table>
              @endforeach
            
             
          </div>
      </div>
  </div>
</div>

</div>
{{-- identitas sekolah --}}



{{-- sejarah --}}
<div id="item-2">



<div class="container-xxl py-5 mt-5">
  <div class="container py-5 mt-5">
      <div class="row g-5  mt-1">
          <div class="col-lg-12 wow fadeInUp text-center  mt-5" data-wow-delay="0.3s" style="min-height: 100px;">
              
              <h1 class="mb-4 pt-5 pb-3" >Sejarah Sekolah</h1>
              <p class="mb-4 w-75 px-5" style="color: blue">{!! $profils->sejarah !!}</p>
             
          </div>
      </div>
  </div>
</div>

</div>
{{-- sejarah --}}


{{-- visi misi --}}
<div id="item-3">


    <div class="container-xxl py-5">
        <div class="container py-5 mt-5">
            <div class="row g-5">
        
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
              
              <h1 class="mb-4">Visi </h1>
              <p class="mb-4">{!! $profils->visi !!}</p>
          </div>

          
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
              
              <h1 class="mb-4"> Misi</h1>
              <p class="mb-4">{!! $profils->misi !!}</p>
              
          </div>
        </div>
    </div>
</div>
</div>
{{-- visi misi--}}


{{--jurusan --}}
<div id="item-5">

</div>
<div class="container-xxl py-5">
  <div class="container py-5 mt-5">
      <div class="row g-5">

          <div class="col-lg-6 wow fadeInUp mt-5 py-5" data-wow-delay="0.3s">
              
              <h1 class="my-4 text-center ">Jurusan</h1>
              <p class="mb-4">{!! $profils->jurusan !!}</p>
              
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
              <div class="position-relative h-100">
                  <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
              </div>
          </div>
      </div>
  </div>
</div>
{{-- jurusan--}}

{{--prestasi --}}
<div id="item-6">

    <div class="container-xxl py-5">
        <div class="container py-5 mt-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    
                    <h1 class="mb-4">Prestasi</h1>
                    <p class="mb-4">{{ $profils->prestasi }}</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
    {{-- prestasi--}}
    
{{--fasilitas --}}
<div id="item-7">

    <div class="container-xxl py-5">
        <div class="container py-5 mt-5">
            <div class="row g-5">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                  <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                
                <h1 class="mb-4">Fasilitas</h1>
                <p class="mb-4">{!! $profils->fasilitas !!}</p>
                
            </div>
        </div>
    </div>
</div>
</div>
{{-- fasilitas--}}

    @endsection