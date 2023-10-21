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
                  <li><a href="{{ route('front.projects') }}" class="active" data-filter="*">Show All</a></li>
                  @foreach ($categories as $key => $value)
                     <li><a class="active" href="{{route('front.projects', ['category_id' => $value->id])}}" data-filter={{$value->slug}}>{{$value->name}}</a></li>
                  @endforeach
               </ul>
            </div>
         </div>
      </div>
      <!-- <div id="isotope" class="isotope"> -->
      <div id="isotope" >
         @foreach($projects as $key => $value)
            @php
               $images = explode(',', $value->image)
            @endphp
            @foreach($images as $image)
               <div class="col-md-4 col-sm-6 col-xs-12 {{ $value->slug }} isotope-item">
               <div class="isotope-img-container">
                  <a class="gallery-popup" href={!! displayImage($image) !!}>
                  <img class="img-responsive" src={!! displayImage($image) !!} alt="">
                     <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                  </a>
                  <div class="project-item-info">
                     <div class="project-item-info-content">
                        <h3 class="project-item-title">
                        <a href="#">{{$value->name}}</a>
                        </h3>
                        <p class="project-cat">{{$value->category_name}}</p>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         @endforeach
      </div>
   </div>
</section>
@endsection