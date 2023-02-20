@extends('front-master')
@section('title', 'UC | Services')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url('{{ asset('storage/banner/banner2.jpg')}}');">
   <div class="banner-text">
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <div class="banner-heading">
               <h1 class="banner-title">Services</h1>
                  <ol class="breadcrumb">
                     <li><a href="{{url('/')}}">Home</a></li>
                     <li><a href="#">Services</a></li>
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
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive" src="{{ asset('storage/services/service1.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/team_worker.png') }}" alt="" />
               </div>
               <div class="ts-service-info text-justify">
                  <h3 class="service-box-title"><a href="service-single.html">Manpower Consultancy</a></h3>
                  <p>
                     Once the potential candidate has been identified, the next step is his selection test, oral or practical, by the employer or his authorized representative. In case we are entrusted with the selection & testing of the prospective employee, we conduct it with the help of a panel of experts, for technical & professional categories, under direct supervision of our professional executives.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive" src="{{ asset('storage/services/training.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/training.png') }}" alt="" />
               </div>
               <div class="ts-service-info text-justify">
                  <h3 class="service-box-title"><a href="service-single.html">Site Training Center</a></h3>
                  <p>
                     We are are providing training in the field of construction for numerous civil and interior work like "Tiles, Marbles, Granite, Plumbing, Air Conditioner, Painting, Fire Fighting system, Carpentry, Glass, Fabrication, Welder, Aluminium Partion, False Ceiling, Land Survey,Electrical, Matting, Water Proofing, Ducting, Steel Railing, & Spray Painting etc. After successfully completing the training we will provide certificate."
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive" src="{{ asset('storage/services/service3.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/service-icon1.png') }}" alt="" />
               </div>
               <div class="ts-service-info text-justify">
                  <h3 class="service-box-title"><a href="service-single.html">Construction Civil & Interior</a></h3>
                  <p>
                     Because of hard work we are best and the leading construction company in the region. Our employees are our pearl, they make work completed on time. Our priority is client’s requirement and satisfaction, and by work we make their dream come true. Also one of the main reason for our achievement is we provide services at affordable price.
                  </p>
               </div>
            </div>
         </div>
         <div class="gap-30"></div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive" src="{{ asset('storage/services/service11.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/service-icon1.png ') }}" alt="" />
               </div>
               <div class="ts-service-info text-justify">
                  <h3 class="service-box-title"><a href="service-single.html">Home Construction</a></h3>
                  <p>
                     We are the top contractors who offer house construction services in India. We consult the client to determine whether they want a small or large scale house construction project. Then dedicate our professionals, range from civil engineers,interior designers, architects, project managers, and skilled or unskilled labours to complete the work.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive" src="{{ asset('storage/services/service22.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/service-icon4.png') }}" alt="" />
               </div>
               <div class="ts-service-info text-justify">
                  <h3 class="service-box-title"><a href="service-single.html">Exterior Design</a></h3>
                  <p>Is you thinking about exterior Design? We have planning to develop your home. We uses combinations of timber, plaster, bamboo, glass and concrete, they shoot up straight in large vertical panels, slither into long horizontal levels, and criss-cross with the forest and palm trees in a myriad of natural settings.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive" src="{{ asset('storage/services/service33.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/service-icon3.png') }}" alt="" />
               </div>
               <div class="ts-service-info text-justify">
                  <h3 class="service-box-title"><a href="#">Interior Design</a></h3>
                  <p> At Umaiza Construction, we focus on bringing interior design and construction together from the first time we talk with our customers. Our team has years of experience in handling large interior design projects, and we also have worked with professional interior design and architecture firms in the past.</p>
               </div>
            </div>
         </div>
         <div class="gap-30"></div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive" src="{{ asset('storage/services/service4.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/service-icon2.png') }}" alt="" />
               </div>
               <div class="ts-service-info text-justify">
                  <h3 class="service-box-title"><a href="#">Building Remodel</a></h3>
                  <p>We consult with  client about Remodeling that involves changing an entire room or building. Remodeling  involved many process , it involves making changes to a building's structure. In remodeling include expanding the square footage of a building, Gutting, removing, or adding walls, Raising ceilings, Adding plumbing, Adding heating/cooling ducts.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive" src="{{ asset('storage/services/service5.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/service-icon5.png') }}" alt="" />
               </div>
               <div class="ts-service-info text-justify">
                  <h3 class="service-box-title"><a href="service-single.html">Renovation</a></h3>
                  <p>
                     Renovation tends to be cheaper than remodeling.
                     Typically, renovations are done in conjunction with restorations. For example, someone may decide they want to restore their bathrooms or kitchen. But to make it a bit more modern, they add a shower component to the tub, which would make it a renovation project as well.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive" src="{{ asset('storage/services/service6.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/service-icon6.png') }}" alt="" />
               </div>
               <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="#">Safety Management</a></h3>
                  <p>Safety performance monitoring  performed by we to avoid injuries and fatalities in the construction sites. The first step in evaluating the safety performance of a construction site is to identify the hazards, evaluate their priorities and effect, and take adequate measures to avoid such hazards.</p>
               </div>
            </div>
         </div>
         <div class="gap-30"></div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive" src="{{ asset('storage/services/real.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/real-state.png') }}" alt="" />
               </div>
               <div class="ts-service-info text-justify">
                  <h3 class="service-box-title"><a href="#">Real State</a></h3>
                  <p>Umaiza Construction Pvt. Ltd. is one of the prominent names in the development of residential & commercial projects of various sizes and prices ensuring that we have everything as per our customer’s requirements and convenience. We take pride in being amongst the leading real estate developers in North India and we achieved this feat because we perform best and ethical business processes and execute these processes with due diligence and accuracy.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive" src="{{ asset('storage/services/sale.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/sale-purchase.png') }}" alt="" />
               </div>
               <div class="ts-service-info text-justify">
                  <h3 class="service-box-title"><a href="#">Sale Purchase</a></h3>
                  <p>Umaiza Construction Pvt. Ltd. is also working in the field of sale and purchase of building materials like Cement of all Brands (OPC Cement, PPC Cement, PSC Cement, ACC Cement, myCem Cement, Ambuja Cement and much more brands.), Bricks (Red bricks, Fly ash bricks and Interlocking bricks etc.), Cocrete, Gypsum Plaster, Construction sand, Metal Bars (TMT Bars, Steel bar and iron bar) and Blue metals and much more. </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection