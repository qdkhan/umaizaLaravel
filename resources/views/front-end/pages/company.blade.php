@extends('front-master')
@section('title', 'About Us | UC Enterprises')
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
            <p>Welcome to UC Enterprises  It is one of the top Manpower Consultants and training centre in Lucknow, Noida, Gurgaon, Himachal Pradesh, Ghaziabad and we Offering full project management, our passionate, highly talented & skilled team are recognized for their expertise, professionalism and attention to detail.</p>
            With a wealth of in-house tradesmen, a trusted supplier network built up over two decades, UC Enterprises  Manpower Consultants and training centre offers a complete end-to-end service. 
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
         <div class="item">
            <div class="ts-team-wrapper">
               <div class="team-img-wrapper">
                  <img alt="" src="{{asset('storage/team/yasmeen.jpg')}}" class="img-responsive">
               </div>
               <div class="ts-team-content">
                  <h3 class="ts-name">Yasmeen</h3>
                  <p class="ts-designation">Founder</p>
                  <p class="ts-description">
                  </p>
                  <div class="team-social-icons">
                     <a title="Facebook" href="https://www.facebook.com/Umaiza-construction-pvt-ltd-114157273783436/" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-facebook"></i>
                     </span>
                     </a>
                     <a title="Twitter" href="https://twitter.com/?lang=en" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-twitter" target="_blank"></i>
                     </span>
                     </a>
                     <a title="Instagram" href="https://instagram.com/">
                     <span class="social-icon">
                     <i class="fa fa-instagram" target="_blank"></i>
                     </span>
                     </a>
                     <a title="Linkdin" href="https://linkedin.com/" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-linkedin" target="_blank"></i>
                     </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="ts-team-wrapper">
               <div class="team-img-wrapper">
                  <img alt="" src="{{asset('storage/team/shakeel.jpeg')}}" class="img-responsive">
               </div>
               <div class="ts-team-content">
                  <h3 class="ts-name">Ar. Shakeel Ahmad</h3>
                  <p class="ts-designation">Engineer</p>
                  <p class="ts-description">
                  </p>
                  <div class="team-social-icons">
                     <a title="Facebook" href="https://www.facebook.com/Umaiza-construction-pvt-ltd-114157273783436/" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-facebook"></i>
                     </span>
                     </a>
                     <a title="Twitter" href="https://twitter.com/?lang=en" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-twitter" target="_blank"></i>
                     </span>
                     </a>
                     <a title="Instagram" href="https://instagram.com/">
                     <span class="social-icon">
                     <i class="fa fa-instagram" target="_blank"></i>
                     </span>
                     </a>
                     <a title="Linkdin" href="https://linkedin.com/" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-linkedin" target="_blank"></i>
                     </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="ts-team-wrapper">
               <div class="team-img-wrapper">
                  <img alt="" src="{{asset('storage/team/ishtiyak.jpeg')}}" class="img-responsive">
               </div>
               <div class="ts-team-content">
                  <h3 class="ts-name">Mohd. Ishtiyak Ansari</h3>
                  <p class="ts-designation">Manager</p>
                  Lucknow Branch 
                  <div class="team-social-icons">
                     <a title="Facebook" href="https://www.facebook.com" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-facebook"></i>
                     </span>
                     </a>
                     <a title="Twitter" href="https://twitter.com/?lang=en" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-twitter" target="_blank"></i>
                     </span>
                     </a>
                     <a title="Instagram" href="https://instagram.com/">
                     <span class="social-icon">
                     <i class="fa fa-instagram" target="_blank"></i>
                     </span>
                     </a>
                     <a title="Linkdin" href="https://linkedin.com/" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-linkedin" target="_blank"></i>
                     </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="ts-team-wrapper">
               <div class="team-img-wrapper">
                  <img alt="" src="{{asset('storage/team/user.png')}}" class="img-responsive">
               </div>
               <div class="ts-team-content">
                  <h3 class="ts-name">Babu</h3>
                  <p class="ts-designation">Care Taker
                  <div class="team-social-icons">
                     <a title="Facebook" href="https://www.facebook.com" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-facebook"></i>
                     </span>
                     </a>
                     <a title="Twitter" href="https://twitter.com/?lang=en" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-twitter" target="_blank"></i>
                     </span>
                     </a>
                     <a title="Instagram" href="https://instagram.com/">
                     <span class="social-icon">
                     <i class="fa fa-instagram" target="_blank"></i>
                     </span>
                     </a>
                     <a title="Linkdin" href="https://linkedin.com/" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-linkedin" target="_blank"></i>
                     </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="ts-team-wrapper">
               <div class="team-img-wrapper">
                  <img alt="" src="{{asset('storage/team/kaleem.jpeg')}}" class="img-responsive">
               </div>
               <div class="ts-team-content">
                  <h3 class="ts-name">Kalim Ahmad</h3>
                  <p class="ts-designation">Manager</p>
                  <p class="ts-description">
                     Bahraich Branch
                     <!-- Some Text Here -->
                  </p>
                  <div class="team-social-icons">
                     <a title="Facebook" href="https://www.facebook.com/Umaiza-construction-pvt-ltd-114157273783436/" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-facebook"></i>
                     </span>
                     </a>
                     <a title="Twitter" href="https://twitter.com/?lang=en" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-twitter" target="_blank"></i>
                     </span>
                     </a>
                     <a title="Instagram" href="https://instagram.com/">
                     <span class="social-icon">
                     <i class="fa fa-instagram" target="_blank"></i>
                     </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="ts-team-wrapper">
               <div class="team-img-wrapper">
                  <img alt="" src="{{asset('storage/team/mohd-ahmad.jpeg')}}" class="img-responsive">
               </div>
               <div class="ts-team-content">
                  <h3 class="ts-name">Mohammad Ahmad</h3>
                  <p class="ts-designation">Manager</p>
                  <p class="ts-description"> Mumbai Branch </p>
                  <div class="team-social-icons">
                     <a title="Facebook" href="https://www.facebook.com/" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-facebook"></i>
                     </span>
                     </a>
                     <a title="Twitter" href="https://twitter.com/?lang=en" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-twitter" target="_blank"></i>
                     </span>
                     </a>
                     <a title="Instagram" href="https://instagram.com/">
                     <span class="social-icon">
                     <i class="fa fa-instagram" target="_blank"></i>
                     </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="ts-team-wrapper">
               <div class="team-img-wrapper">
                  <img alt="" src="{{asset('storage/team/mohid.jpg')}}" class="img-responsive">
               </div>
               <div class="ts-team-content">
                  <h3 class="ts-name">Mohid</h3>
                  <p class="ts-designation">Incharge (Mumbai Branch)</p>
                  <div class="team-social-icons">
                     <a title="Facebook" href="https://www.facebook.com/" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-facebook"></i>
                     </span>
                     </a>
                     <a title="Twitter" href="https://twitter.com/?lang=en" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-twitter" target="_blank"></i>
                     </span>
                     </a>
                     <a title="Instagram" href="https://instagram.com/">
                     <span class="social-icon">
                     <i class="fa fa-instagram" target="_blank"></i>
                     </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="ts-team-wrapper">
               <div class="team-img-wrapper">
                  <img alt="" src="{{asset('storage/team/dawood.jpeg')}}" class="img-responsive">
               </div>
               <div class="ts-team-content">
                  <h3 class="ts-name">Qazi Mohd Dawood</h3>
                  <p class="ts-designation">Project Manager</p>
                  <div class="team-social-icons">
                     <a title="Facebook" href="https://www.facebook.com/" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-facebook"></i>
                     </span>
                     </a>
                     <a title="Twitter" href="https://twitter.com/?lang=en" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-twitter" target="_blank"></i>
                     </span>
                     </a>
                     <a title="Instagram" href="https://instagram.com/">
                     <span class="social-icon">
                     <i class="fa fa-instagram" target="_blank"></i>
                     </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="ts-team-wrapper">
               <div class="team-img-wrapper">
                  <img alt="" src="{{asset('storage/team/juned.jpeg')}}" class="img-responsive">
               </div>
               <div class="ts-team-content">
                  <h3 class="ts-name">Md Juned Advocate</h3>
                  <p class="ts-designation">Legal Advisor</p>
                  <div class="team-social-icons">
                     <a title="Facebook" href="https://www.facebook.com/Umaiza-construction-pvt-ltd-114157273783436/" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-facebook"></i>
                     </span>
                     </a>
                     <a title="Twitter" href="https://twitter.com/?lang=en" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-twitter" target="_blank"></i>
                     </span>
                     </a>
                     <a title="Instagram" href="https://instagram.com/">
                     <span class="social-icon">
                     <i class="fa fa-instagram" target="_blank"></i>
                     </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="ts-team-wrapper">
               <div class="team-img-wrapper">
                  <img alt="" src="{{asset('storage/team/asif.jpeg')}}" class="img-responsive">
               </div>
               <div class="ts-team-content">
                  <h3 class="ts-name">Mohd Asif</h3>
                  <p class="ts-designation">Site Supervisor</p>
                  <div class="team-social-icons">
                     <a title="Facebook" href="https://www.facebook.com/" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-facebook"></i>
                     </span>
                     </a>
                     <a title="Twitter" href="https://twitter.com/?lang=en" target="_blank">
                     <span class="social-icon">
                     <i class="fa fa-twitter" target="_blank"></i>
                     </span>
                     </a>
                     <a title="Instagram" href="https://instagram.com/">
                     <span class="social-icon">
                     <i class="fa fa-instagram" target="_blank"></i>
                     </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection