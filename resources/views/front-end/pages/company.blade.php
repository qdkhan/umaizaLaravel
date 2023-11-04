@extends('front-master')
@section('title', 'About Us | Umeza Construction Pvt Ltd.')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url('{{ asset('storage/banner/banner1.jpg')}}')">
   <div class="banner-text">
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <div class="banner-heading">
                  <h1 class="banner-title">Company</h1>
                  <ol class="breadcrumb">
                     <li><a href="{{url('/')}}">Home</a></li>
                     <li><a href="#">Company</a></li>
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
         <div class="col-md-6">
            <h3 class="column-title">Who We Are</h3>
            <p>Welcome to Umeza Construction Pvt Ltd.  It is one of the top Manpower Consultants and training centre in Lucknow, Noida, Gurgaon, Himachal Pradesh, Ghaziabad and we Offering full project management, our passionate, highly talented & skilled team are recognized for their expertise, professionalism and attention to detail.</p>
            With a wealth of in-house tradesmen, a trusted supplier network built up over two decades, Umeza Construction Pvt Ltd.  Manpower Consultants and training centre offers a complete end-to-end service. 
            <blockquote>
               <p>The  has achieved excellent reputation through all these years and this is an ongoing process as it continues to build a good reputation by quoting competitive pricing, keeping the integrity and giving the right concern for each and every customer’s respective requirements.</p>
            </blockquote>
            <p>It is also one of the best architectural and Interior Designers consultancy  in Delhi NCR, Pan India. We have more than 1345 happy clients in Lucknow, Shimla, Gonda, Uttrakhand . We keep the customer satisfaction on top priority for achieving a target. We believe in Leadership and continuously strive to find better solutions and technologies that can help us deliver superior projects. </p>
         </div>
         <div class="col-md-6">
            <div id="page-slider" class="owl-carousel owl-theme page-slider small-bg">
               <div class="item" style="background-image:url('{{ asset('storage/slider-pages/slide-page1.jpg')}}');">
                  <div class="container">
                     <div class="box-slider-content">
                        <div class="box-slider-text">
                           <h2 class="box-slide-title">Leadership</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item" style="background-image:url('{{ asset('storage/slider-pages/slide-page2.jpg')}}');">
                  <div class="container">
                     <div class="box-slider-content">
                        <div class="box-slider-text">
                           <h2 class="box-slide-title">Relationships</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item" style="background-image:url('{{ asset('storage/slider-pages/slide-page3.jpg')}}')">
                  <div class="container">
                     <div class="box-slider-content">
                        <div class="box-slider-text">
                           <h2 class="box-slide-title">Performance</h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="ts-team" class="ts-team">
   <div class="container">
   <div class="row text-center">
      <h3 class="section-sub-title">Professional Team</h3>
   </div>
   <div class="row">
      <div id="team-slide" class="owl-carousel owl-theme team-slide">
         @foreach($teams as $team)
         <div class="item">
            <div class="ts-team-wrapper">
               <div class="team-img-wrapper">
                  <img alt="" src={!! displayImage($team->image) !!} class="img-responsive">
               </div>
               <div class="ts-team-content">
                  <h3 class="ts-name">{{$team->name}}</h3>
                  <p class="ts-designation">{{$team->designation}}</p>
                  @if (isset($team->branch))
                  <p class="ts-description">
                     {{$team->branch}}
                  </p>
                  @endif
                  <div class="team-social-icons">
                     <a title="Facebook" href="{{$team->facebook ? $team->facebook : 'https://www.facebook.com/umaizaconstruction?mibextid=ZbWKwL'}}" target="_blank">
                        <span class="social-icon">
                           <i class="fa fa-facebook"></i>
                        </span>
                     </a>
                     <a title="Twitter" href="{{$team->twitter ? $team->twitter : 'https://twitter.com/UCPLSERVICES'}}" target="_blank">
                        <span class="social-icon">
                           <i class="fa fa-twitter" target="_blank"></i>
                        </span>
                     </a>
                     <a title="Instagram" href="{{$team->instagram ? $team->instagram : 'https://www.instagram.com/UMAIZA_CONSTRUCTION_PVT_LTD'}}" target="_blank">
                        <span class="social-icon">
                           <i class="fa fa-instagram" target="_blank"></i>
                        </span>
                     </a>
                     <a title="Linkedin" href="{{$team->linkedin ? $team->linkedin : 'https://www.linkedin.com/in/umaizaconstruction/'}}" target="_blank">
                        <span class="social-icon">
                           <i class="fa fa-linkedin" target="_blank"></i>
                        </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</section>
@endsection