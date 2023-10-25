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
                     <li><a href="#">{{$project->name}}</a></li>
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
         <div class="col-md-8">
            <div id="page-slider" class="owl-carousel owl-theme page-slider page-slider-small">
                @php
                    $images = explode(',', $project->image)
                @endphp
                @foreach($images as $image)
                <div class="item">
                  <img src={!! displayImage($image) !!} alt="" />
               </div>
                @endforeach
            </div>
         </div>
         <div class="col-md-4">
            <h3 class="column-title mrt-0">{{$project->name}}</h3>
            <p>{{$project->description}}</p>
            <ul class="project-info unstyled">
               <li>
                  <div class="project-info-label">Client</div>
                  <div class="project-info-content">{{$project->client}}</div>
               </li>
               <li>
                  <div class="project-info-label">Architect</div>
                  <div class="project-info-content">{{$project->architect}}</div>
               </li>
               <li>
                  <div class="project-info-label">Location</div>
                  <div class="project-info-content">{{$project->location}}</div>
               </li>
               <li>
                  <div class="project-info-label">Size (ft/mt<sup>2</sup>)</div>
                  <div class="project-info-content">{{$project->size}}</div>
               </li>
               <li>
                  <div class="project-info-label">Year Completed</div>
                  <div class="project-info-content">{{$project->year}}</div>
               </li>
               <li>
                  <div class="project-info-label">Categories</div>
                  <div class="project-info-content">{{$project->category_name}}</div>
               </li>
               <li>
                  <div class="project-link">
                     <a class="btn btn-primary" target={{url('projects')}} href="#">View All Project</a>
                  </div>
               </li>
            </ul>
         </div>
         <!-- Content col end -->
      </div>
   
   </div>

</section>

@endsection