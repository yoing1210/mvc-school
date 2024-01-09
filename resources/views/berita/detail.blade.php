@extends('layouts.main')

@section('container')


 <!-- Header Start -->
 <div class="container-fluid bg-primary py-5 mb-5 page-header">
  <div class="container py-5">
      <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
              <h1 class="display-3 text-white animated slideInDown">Informasi</h1>
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

 <!--================Blog Area =================-->
 <section class="blog_area single-post-area section-padding">
  <div class="container">
     <div class="row">
        <div class="col-lg-8 posts-list">
           <div class="single-post">
              <div class="feature-img">
                 <img class="img-fluid" src="img/blog/single_blog_1.png" alt="">
               </div>
               <div class="blog_details">
                  <h2>{{ $berita->title }} </h2>
                  <img class="img-fluid my-4" src="{{ asset('storage/'. $berita->image) }}" alt="">
                 {{-- <ul class="blog-info-link mt-3 mb-4">
                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                 </ul> --}}
                 <p class="excert">
                  {!! $berita->body !!}
                 </p>
              </div>
           </div>
           <div class="navigation-top">
              <div class="d-sm-flex justify-content-between text-center">
                 <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                    people like this</p>
                 <div class="col-sm-4 text-center my-2 my-sm-0">
                    <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                 </div>
                 <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                 </ul>
              </div>
              <div class="navigation-area">
                 <div class="row">
                    <div
                       class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                       <div class="thumb">
                          <a href="#">
                             <img class="img-fluid" src="img/post/preview.png" alt="">
                          </a>
                       </div>
                       <div class="arrow">
                          <a href="#">
                             <span class="lnr text-white ti-arrow-left"></span>
                          </a>
                       </div>
                       <div class="detials">
                          <p>Prev Post</p>
                          <a href="#">
                             <h4>Space The Final Frontier</h4>
                          </a>
                       </div>
                    </div>
                    <div
                       class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                       <div class="detials">
                          <p>Next Post</p>
                          <a href="#">
                             <h4>Telescopes 101</h4>
                          </a>
                       </div>
                       <div class="arrow">
                          <a href="#">
                             <span class="lnr text-white ti-arrow-right"></span>
                          </a>
                       </div>
                       <div class="thumb">
                          <a href="#">
                             <img class="img-fluid" src="img/post/next.png" alt="">
                          </a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>

          
        </div>
        <div class="col-lg-4">
           <div class="blog_right_sidebar">
              <aside class="single_sidebar_widget search_widget">
    
              </aside>
              <aside class="single_sidebar_widget post_category_widget">
                 <h4 class="widget_title mt-4">Category</h4>
                 <ul class="list cat-list">
                    @foreach ( $cat as $cats )
                    <li> 
                    <a href="{{ route("berita") }}" class="d-flex">
                       <p>{{ $cats->name }}</p>
                     </a>
                    </li>
                    @endforeach
                  
        
                 </ul>
              </aside>
              <aside class="single_sidebar_widget popular_post_widget">
                 <h3 class="widget_title">Recent Post</h3>
                 @foreach ($ber as $berita)
                     
                 @endforeach
                 <div class="media post_item">
                    <div class="media-body">
                       <a href="single-blog.html">
                          <h5>{{ $berita->title }}</h5>
                        </a>
                        <img src="{{ asset('storage/'. $berita->image) }}" width="100" alt="post">
                        <p>January 12, 2019</p>
                    </div>
                 </div>
                 
              </aside>
     
           </div>
        </div>
     </div>
  </div>
</section>
<!--================ Blog Area end =================-->

    @endsection