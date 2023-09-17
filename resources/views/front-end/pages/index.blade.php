@extends('front-master')
@section('title', 'UC | Home Page')
@section('content')
<div id="box-slide" class="owl-carousel owl-theme page-slider">
   <div class="item" style="background-image:url('{{ asset('storage/slider-main/bg8.jpg')}}');">
      <div class="container">
         <div class="box-slider-content">
            <div class="box-slider-text">
               <h2 class="box-slide-title">17 Years Of Excellence In</h2>
               <h3 class="box-slide-sub-title">Construction Industry</h3>
               <p class="box-slide-description">Umaiza Construction Pvt Ltd. is the leader among infrastructure companies in India.  The company was founded in Lcknow in 2005 by Shakeel Shah & Sons.</p>
               <p>
                  <a href="{{ route('front.company') }}" class="slider btn btn-primary">Know Us</a>
               </p>
            </div>
         </div>
      </div>
   </div>
   <div class="item" style="background-image:url('{{ asset('storage/slider-main/bg6.jpg')}}');">
      <div class="container">
         <div class="box-slider-content">
            <div class="box-slider-text">
               <h2 class="box-slide-title">When Services Matters</h2>
               <h3 class="box-slide-sub-title">Everything is Here</h3>
               <p class="box-slide-description">Home Construction, Government Construction, Interior Design, Exterior Design, Renovation, Building Remodels, Sale Purchase and much more...</p>
               <p>
                  <a href="{{ route('front.services') }}" class="slider btn btn-primary">Services</a>
               </p>
            </div>
         </div>
      </div>
   </div>
   <div class="item" style="background-image:url('{{ asset('storage/slider-main/bg11.jpg')}}');">
      <div class="container">
         <div class="box-slider-content">
            <div class="box-slider-text">
               <h2 class="box-slide-title">Be Aware about work</h2>
               <h3 class="box-slide-sub-title">Our Highlights</h3>
               <p class="box-slide-description">India's arm of the Construction Group, Information and news on Completed Work...</p>
               <p>
                  <a href="{{ route('front.projects') }}" class="slider btn btn-primary">News</a>
               </p>
            </div>
         </div>
      </div>
   </div>
   <div class="item" style="background-image:url('{{ asset('storage/slider-main/bg12.jpg')}}');">
      <div class="container">
         <div class="box-slider-content">
            <div class="box-slider-text">
               <h2 class="box-slide-title">When Services Matters</h2>
               <h3 class="box-slide-sub-title">Happy To Connect</h3>
               <p class="box-slide-description">You can connect with all the way using mail, website, whatsup. We are available 24 X 7 and 365 Days.</p>
               <p>
                  <a href="{{ route('front.contact') }}" class="slider btn btn-primary">Contact Us</a>
               </p>
            </div>
         </div>
      </div>
   </div>
</div>
<section class="call-to-action no-padding">
   <div class="container">
      <div class="action-style-box">
         <div class="row">
            <div class="col-md-10">
               <div class="call-to-action-text">
                  <h3 class="action-title">We understand your needs on construction</h3>
               </div>
            </div>
            <div class="col-md-2">
               <div class="call-to-action-btn">
                  <a class="btn btn-primary" href="{{ route('front.contact') }}">Get In Touch For Solution</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="ts-features" class="ts-features">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive" src="{{asset('storage/services/service1.jpg')}}" alt="service1">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{asset('storage/icon-image/team_worker.png')}}" alt="" />
               </div>
               <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="{{ route('front.services') }}">Manpower Supply</a></h3>
                  <p class="text-justify">
                     Once the potential candidate has been identified, the next step is his selection test, oral or practical, by the employer or his authorized representative. In case we are entrusted with the selection & testing of the prospective employee, we conduct it with the help of a panel of experts, for technical & professional categories, under direct supervision of our professional executives.
                  </p>
                  <p><a class="learn-more" href="{{ route('front.services') }}"><i class="fa fa-caret-right"></i><strong>Learn More</strong></a></p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive" src="{{asset('storage/services/maintenance.jpg')}}" alt="service2">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{asset('storage/icon-image/training.png')}}" alt="" />
               </div>
               <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="{{ route('front.services') }}">Maintenance &#38; Repair Services</a></h3>
                  <p class="text-justify">
                  Umaiza Construction Pvt Ltd  transform your dreams into reality. As a leading civil and interior construction company, we are committed to delivering excellence in every project we undertake. With years of experience and a passion for craftsmanship, we bring your vision to life, one brick at a time.
                  </p>
                  <p><a class="learn-more" href="{{ route('front.services') }}"><i class="fa fa-caret-right"></i> <strong>Learn More</strong></a></p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive" src="{{asset('storage/services/service3.jpg')}}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{asset('storage/icon-image/service-icon3.png')}}" alt="" />
               </div>
               <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="{{ route('front.services') }}">All Types Of Construction Hub</a></h3>
                  <p class="text-justify">Welcome to Umaiza Construction Pvt Ltd we transform your dreams into reality. As a leading civil and interior construction company, we are committed to delivering excellence in every project we undertake. With years of experience and a passion for craftsmanship, we bring your vision to life, one brick at a time. </p>
                  <p><a class="learn-more" href="{{ route('front.services') }}"><i class="fa fa-caret-right"></i> <strong>Learn More</strong></a></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="facts" class="facts-area dark-bg">
   <div class="container">
      <div class="row">
         <div class="facts-wrapper">
            <div class="col-sm-3 ts-facts">
               <div class="ts-facts-img">
                  <img src="{{asset('storage/icon-image/fact1.png')}}" alt="" />
               </div>
               <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="1985">0</span></h2>
                  <h3 class="ts-facts-title">Total Projects</h3>
               </div>
            </div>
            <div class="col-sm-3 ts-facts">
               <div class="ts-facts-img">
                  <img src="{{asset('storage/icon-image/fact2.png')}}" alt="" />
               </div>
               <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="200">0</span></h2>
                  <h3 class="ts-facts-title">Staff Members</h3>
               </div>
            </div>
            <div class="col-sm-3 ts-facts">
               <div class="ts-facts-img">
                  <img src="{{asset('storage/icon-image/fact3.png')}}" alt="" />
               </div>
               <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="24">0</span></h2>
                  <h3 class="ts-facts-title">Hour ready to help</h3>
               </div>
            </div>
            <div class="col-sm-3 ts-facts">
               <div class="ts-facts-img">
                  <img src="{{asset('storage/icon-image/fact4.png')}}" alt="" />
               </div>
               <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="17">0</span></h2>
                  <h3 class="ts-facts-title">Years Of Experience</h3>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="ts-service-area" class="ts-service-area">
   <div class="container">
      <div class="row text-center">
         <h2 class="section-title">We Are Specialists In</h2>
         <h3 class="section-sub-title">What We Do</h3>
      </div>
      <div class="row">
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-box-img pull-left">
                  <img src="{{asset('storage/icon-image/fact1.png')}}" alt="" />
               </div>
               <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="{{ route('front.services') }}">Project Construction</a></h3>
                  <p>We are the top contractors who offer house construction services in India.....</p>
                  <p><a class="learn-more" href="{{ route('front.services') }}"><i class="fa fa-caret-right"></i> <strong>Learn More</strong></a></p>
               </div>
            </div>
            <div class="ts-service-box">
               <div class="ts-service-box-img pull-left">
                  <img src="{{asset('storage/icon-image/service-icon1.png')}}" alt="" />
               </div>
               <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="{{ route('front.services') }}">All type RCC Structure</a></h3>
                  <p>We are construct all types of RCC structure .....</p>
                  <p><a class="learn-more" href="{{ route('front.services') }}"><i class="fa fa-caret-right"></i> <strong>Learn More</strong></a></p>
               </div>
            </div>
            <div class="ts-service-box">
               <div class="ts-service-box-img pull-left">
                  <img src="{{asset('storage/icon-image/service-icon2.png')}}" alt="" />
               </div>
               <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="{{ route('front.services') }}">Building Remodels</a></h3>
                  <p>We consult with  client about Remodeling that involves changing an entire room or building.....</p>
                  <p><a class="learn-more" href="{{ route('front.services') }}"><i class="fa fa-caret-right"></i> <strong>Learn More</strong></a></p>
               </div>
            </div>
            <div class="ts-service-box">
               <div class="ts-service-box-img pull-left">
                  <img src="{{asset('storage/icon-image/service-icon3.png')}}" alt="" />
               </div>
               <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="{{ route('front.services') }}">Interior Design</a></h3>
                  <p>When it comes to putting interior design and construction together, most general contractors....</p>
                  <p><a class="learn-more" href="{{ route('front.services') }}"><i class="fa fa-caret-right"></i> <strong>Learn More</strong></a></p>
               </div>
            </div>
            <div class="ts-service-box">
               <div class="ts-service-box-img pull-left">
                  <img src="{{asset('storage/icon-image/sale-purchase.png')}}" alt="" />
               </div>
               <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="{{ route('front.services') }}">Sale Purchase</a></h3>
                  <p>Umaiza Construction Pvt Ltd. is also working in the field of sale and purchase of building materials....</p>
                  <p><a class="learn-more" href="{{ route('front.services') }}"><i class="fa fa-caret-right"></i> <strong>Learn More</strong></a></p>
               </div>
            </div>
            <div class="ts-service-box">
               <div class="ts-service-box-img pull-left">
                  <img src="{{asset('storage/icon-image/real-state.png')}}" alt="" />
               </div>
               <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="{{ route('front.services') }}">Real State</a></h3>
                  <p>Umaiza Construction Pvt Ltd. Pvt. Ltd has real property that consists of land and improvements...</p>
                  <p><a class="learn-more" href="{{ route('front.services') }}"><i class="fa fa-caret-right"></i> <strong>Learn More</strong></a></p>
               </div>
            </div>
         </div>
         <div class="col-md-4 text-center">
            <img class="service-center-img img-responsive" src="{{asset('storage/services/service-center.jpg')}}" alt="" />
         </div>
         <div class="col-md-4">
         <div class="ts-service-box">
               <div class="ts-service-box-img pull-left">
                  <img src="{{asset('storage/icon-image/service-icon4.png')}}" alt="" />
               </div>
               <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="{{ route('front.services') }}">Exterior Work</a></h3>
                  <p>We consult the client about all type of exterior work ? We have planning to develop your Exterior work.....</p>
                  <p><a class="learn-more" href="{{ route('front.services') }}"><i class="fa fa-caret-right"></i> <strong>Learn More</strong></a></p>
               </div>
            </div>
            <div class="ts-service-box">
               <div class="ts-service-box-img pull-left">
                  <img src="{{asset('storage/icon-image/service-icon4.png')}}" alt="" />
               </div>
               <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="{{ route('front.services') }}">Exterior Design</a></h3>
                  <p>We consult the client about exterior Design? We have planning to develop your home.....</p>
                  <p><a class="learn-more" href="{{ route('front.services') }}"><i class="fa fa-caret-right"></i> <strong>Learn More</strong></a></p>
               </div>
            </div>
            <div class="ts-service-box">
               <div class="ts-service-box-img pull-left">
                  <img src="{{asset('storage/icon-image/service-icon5.png')}}" alt="" />
               </div>
               <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="{{ route('front.services') }}">Building, Home Construction</a></h3>
                  <p>We construct all type of building and home accordingly clied client need.....</p>
                  <p><a class="learn-more" href="{{ route('front.services') }}"><i class="fa fa-caret-right"></i> <strong>Learn More</strong></a></p>
               </div>
            </div>
            <div class="ts-service-box">
               <div class="ts-service-box-img pull-left">
                  <img src="{{asset('storage/icon-image/service-icon5.png')}}" alt="" />
               </div>
               <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="{{ route('front.services') }}">Renovation</a></h3>
                  <p>Renovation is the process of renewing a building or structure by fixing what's already present—and.....</p>
                  <p><a class="learn-more" href="{{ route('front.services') }}"><i class="fa fa-caret-right"></i> <strong>Learn More</strong></a></p>
               </div>
            </div>
            <div class="ts-service-box">
               <div class="ts-service-box-img pull-left">
                  <img src="{{asset('storage/icon-image/service-icon6.png')}}" alt="" />
               </div>
               <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="{{ route('front.services') }}">Safety Management</a></h3>
                  <p>Safety performance monitoring should be performed by we to avoid injuries and fatalities...</p>
                  <p><a class="learn-more" href="{{ route('front.services') }}"><i class="fa fa-caret-right"></i> <strong>Learn More</strong></a></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="content">
   <div class="container">
      <div class="row">
         <div class="text-center">
            <h3 class="column-title">Our Happy Clients</h3>
         </div>
         <div class="col-md-12">
            <div class="row all-clients">
               <div class="col-sm-2">
                  <figure class="clients-logo">
                     <a href="#"><img class="img-responsive" src="{{asset('storage/clients/client1.png')}}" alt="" /></a>
                  </figure>
               </div>
               <div class="col-sm-2">
                  <figure class="clients-logo">
                     <a href="#"><img class="img-responsive" src="{{asset('storage/clients/client2.png')}}" alt="" /></a>
                  </figure>
               </div>
               <div class="col-sm-2">
                  <figure class="clients-logo">
                     <a href="#"><img class="img-responsive" src="{{asset('storage/clients/client3.png')}}" alt="" /></a>
                  </figure>
               </div>
               <div class="col-sm-2">
                  <figure class="clients-logo">
                     <a href="#"><img class="img-responsive" src="{{asset('storage/clients/client4.png')}}" alt="" /></a>
                  </figure>
               </div>
               <div class="col-sm-2">
                  <figure class="clients-logo">
                     <a href="#"><img class="img-responsive" src="{{asset('storage/clients/client5.png')}}" alt="" /></a>
                  </figure>
               </div>
               <div class="col-sm-2">
                  <figure class="clients-logo">
                     <a href="#"><img class="img-responsive" src="{{asset('storage/clients/client6.png')}}" alt="" /></a>
                  </figure>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="subscribe no-padding">
   <div class="container">
      <div class="row">
         <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="subscribe-call-to-acton">
               <h4>Can We Help?</h4>
               <h4><a href="tel:+917860066002" target="_blank">(+91) 786 006 6002 </a></h4>
            </div>
         </div>
         <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="ts-newsletter">
               <div class="newsletter-introtext">
                  <h4><a href="#">Office:- (+91) 831 836 1961, (+91) 739 894 6970</a></h4>
                  <p>umaizaconstruction@gmail.com</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="news" class="news">
   <div class="container">
      <div class="row text-center">
         <h2 class="section-title">Work of Excellence</h2>
         <h3 class="section-sub-title">Recent Projects</h3>
      </div>
      <div class="row">
         <div class="col-md-4 col-xs-12">
            <div class="latest-post">
               <div class="latest-post-media">
                  <a href="{{ route('front.projects')}}" class="latest-post-img">
                  <img class="img-responsive" src="{{asset('storage/news/news1.jpg')}}" alt="img">
                  </a>
               </div>
               <div class="post-body">
                  <div class="latest-post-meta">
                     <span class="post-item-date">
                     <i class="fa fa-clock-o"></i> July 20, 2017
                     </span>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-xs-12">
            <div class="latest-post">
               <div class="latest-post-media">
                  <a href="{{ route('front.projects') }}" class="latest-post-img">
                  <img class="img-responsive" src="{{asset('storage/news/news2.jpg')}}" alt="img">
                  </a>
               </div>
               <div class="post-body">
                  <div class="latest-post-meta">
                     <span class="post-item-date">
                     <i class="fa fa-clock-o"></i> June 17, 2017
                     </span>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-xs-12">
            <div class="latest-post">
               <div class="latest-post-media">
                  <a href="{{ route('front.projects') }}" class="latest-post-img">
                  <img class="img-responsive" src="{{asset('storage/news/news3.jpg')}}" alt="img">
                  </a>
               </div>
               <div class="post-body">
                  <div class="latest-post-meta">
                     <span class="post-item-date">
                     <i class="fa fa-clock-o"></i> Aug 13, 2020
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="general-btn text-center">
         <a class="btn btn-primary" href="{{ route('front.projects') }}">See All Projects</a>
      </div>
   </div>
</section>
@endsection