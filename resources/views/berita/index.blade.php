@extends('layouts.main')

@section('container')



<!-- kategori berita -->
<div class="container-xxl py-5">
   <div class="container">
       
       <div class="text-center wow fadeInUp mb-5" data-wow-delay="0.1s">
           <h6 class="section-title bg-white text-center text-primary px-3">Informasi</h6>
           <h1 class="mb-5">Berita dan Informasi SMAS MUHAMMADIYAH KENDARI</h1>
       </div>
       <div class="row g-4 justify-content-center mt-5">
           <div class="row">
               @foreach ($berita as $beritas)
           <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
               <div class="course-item bg-light">
                   <div class="position-relative overflow-hidden">

                     <a class="product-item" style="text-decoration:none" href="{{ url('detail') }}/{{ $beritas->id  }}">

                       <img class="img-fluid" src="{{ asset('storage/'. $beritas->image) }}" alt="">
                       <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                           <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px ;">Read More</a>
                       </div>
                     </a>
                   </div>
                   <div class="text-center p-4 pb-0">
                       <h5 class="mb-4">{{ $beritas->title }}</h5>
                   </div>
               </div>
           </div>
           @endforeach
           </div>
           
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>

@endsection
<!-- Courses End -->