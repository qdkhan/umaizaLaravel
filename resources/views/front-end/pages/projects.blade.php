@extends('front-master')
@section('title', 'UC | Projects')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url('{{ asset('storage/banner/banner2.jpg')}}');">
   <div class="banner-text">
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <div class="banner-heading">
                  <h1 class="banner-title">Projects</h1>
                  <ol class="breadcrumb">
                     <li><a href="{{url('/')}}">Home</a></li>
                     <li><a href="#">Projects</a></li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<section id="main-container" class="main-container">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="isotope-nav" data-isotope-nav="isotope">
               <ul>
                  <li><a href="#" class="active" data-filter="*">Show All</a></li>
                  <li><a href="#" data-filter=".commercial">Commercial</a></li>
                  <li><a href="#" data-filter=".education">Education</a></li>
                  <li><a href="#" data-filter=".government">Government</a></li>
                  <li><a href="#" data-filter=".infrastructure">Infrastructure</a></li>
                  <li><a href="#" data-filter=".residential">Residential</a></li>
                  <li><a href="#" data-filter=".healthcare">Completed</a></li>
               </ul>
            </div>
         </div>
      </div>
      <div id="isotope" class="isotope">
         <div class="col-md-4 col-sm-6 col-xs-12 commercial isotope-item">
            <div class="isotope-img-container">
               <a class="gallery-popup" href="{{ asset('storage/projects/project1.jpg')}}">
               <img class="img-responsive" src="{{ asset('storage/projects/project1.jpg')}}" alt="">
               <span class="gallery-icon"><i class="fa fa-plus"></i></span>
               </a>
               <div class="project-item-info">
                  <div class="project-item-info-content">
                     <h3 class="project-item-title">
                     </h3>
                     <p class="project-cat">Commercial, Interiors</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12 commercial isotope-item">
            <div class="isotope-img-container">
               <a class="gallery-popup" href="{{ asset('storage/projects/project11.jpg')}}">
               <img class="img-responsive" src="{{ asset('storage/projects/project11.jpg')}}" alt="">
               <span class="gallery-icon"><i class="fa fa-plus"></i></span>
               </a>
               <div class="project-item-info">
                  <div class="project-item-info-content">
                     <h3 class="project-item-title">
                     </h3>
                     <p class="project-cat">Commercial, Interiors</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12 healthcare isotope-item">
            <div class="isotope-img-container">
               <a class="gallery-popup" href="{{ asset('storage/projects/project2.jpg')}}">
               <img class="img-responsive" src="{{ asset('storage/projects/project2.jpg')}}" alt="">
               <span class="gallery-icon"><i class="fa fa-plus"></i></span>
               </a>
               <div class="project-item-info">
                  <div class="project-item-info-content">
                     <h3 class="project-item-title">
                     </h3>
                     <p class="project-cat">Completed</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12 government isotope-item">
            <div class="isotope-img-container">
               <a class="gallery-popup" href="{{ asset('storage/projects/project3.jpg')}}">
               <img class="img-responsive" src="{{ asset('storage/projects/project3.jpg')}}" alt="">
               <span class="gallery-icon"><i class="fa fa-plus"></i></span>
               </a>
               <div class="project-item-info">
                  <div class="project-item-info-content">
                     <h3 class="project-item-title">
                     </h3>
                     <p class="project-cat">Government</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12 education isotope-item">
            <div class="isotope-img-container">
               <a class="gallery-popup" href="{{ asset('storage/projects/project4.jpg')}}">
               <img class="img-responsive" src="{{ asset('storage/projects/project4.jpg')}}" alt="">
               <span class="gallery-icon"><i class="fa fa-plus"></i></span>
               </a>
               <div class="project-item-info">
                  <div class="project-item-info-content">
                     <h3 class="project-item-title">
                     </h3>
                     <p class="project-cat">Educational</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12 infrastructure isotope-item">
            <div class="isotope-img-container">
               <a class="gallery-popup" href="{{ asset('storage/projects/project3.jpg')}}">
               <img class="img-responsive" src="{{ asset('storage/projects/project5.jpg')}}" alt="">
               <span class="gallery-icon"><i class="fa fa-plus"></i></span>
               </a>
               <div class="project-item-info">
                  <div class="project-item-info-content">
                     <h3 class="project-item-title">
                     </h3>
                     <p class="project-cat">Infrastructure</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12 residential isotope-item">
            <div class="isotope-img-container">
               <a class="gallery-popup" href="{{ asset('storage/projects/project6.jpg')}}">
               <img class="img-responsive" src="{{ asset('storage/projects/project6.jpg')}}" alt="">
               <span class="gallery-icon"><i class="fa fa-plus"></i></span>
               </a>
               <div class="project-item-info">
                  <div class="project-item-info-content">
                     <h3 class="project-item-title">
                     </h3>
                     <p class="project-cat">Residential</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection