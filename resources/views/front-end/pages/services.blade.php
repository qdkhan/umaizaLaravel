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
                  <img class="img-responsive" width="500px;" src="{{ asset('storage/services/service1.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/team_worker.png') }}" alt="" />
               </div>
               <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="#">Manpower Supply</a></h3>
                  <p>
                     Once the potential candidate has been identified, the next step is his selection test, oral or practical, by the employer or his authorized representative. In case we are entrusted with the selection & testing of the prospective employee, we conduct it with the help of a panel of experts, for technical & professional categories, under direct supervision of our professional executives.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive" width="500px;" src="{{ asset('storage/services/maintenance.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/training.png') }}" alt="" />
               </div>
               <div class="ts-service-info text-justify">
                  <h3 class="service-box-title"><a href="#">Maintenance and Repair Services</a></h3>
                  <p class="text-justify">
                     Umeza Construction Pvt Ltd  transform your dreams into reality. As a leading civil and interior construction company, we are committed to delivering excellence in every project we undertake. With years of experience and a passion for craftsmanship, we bring your vision to life, one brick at a time.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive"  width="500px;" src="{{ asset('storage/services/service11.jpg') }}" alt="">
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
         <div class="gap-30"></div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive"  width="500px;" src="{{ asset('storage/services/service22.jpg') }}" alt="">
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
                  <img class="img-responsive"  width="500px;" src="{{ asset('storage/services/service33.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/service-icon3.png') }}" alt="" />
               </div>
               <div class="ts-service-info text-justify">
                  <h3 class="service-box-title"><a href="#">Interior Design</a></h3>
                  <p> At Umeza Construction, we focus on bringing interior design and construction together from the first time we talk with our customers. Our team has years of experience in handling large interior design projects, and we also have worked with professional interior design and architecture firms in the past.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive"  width="500px;" src="{{ asset('storage/services/service4.jpg') }}" alt="">
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
         <div class="gap-30"></div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive"  width="500px;" src="{{ asset('storage/services/service5.jpg') }}" alt="">
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
                  <img class="img-responsive"  width="500px;" src="{{ asset('storage/services/service6.jpg') }}" alt="">
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
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive"  width="500px;" src="{{ asset('storage/services/real.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/real-state.png') }}" alt="" />
               </div>
               <div class="ts-service-info text-justify">
                  <h3 class="service-box-title"><a href="#">Real State</a></h3>
                  <p>Umeza Construction Pvt. Ltd. is one of the prominent names in the development of residential & commercial projects of various sizes and prices ensuring that we have everything as per our customer’s requirements and convenience. We take pride in being amongst the leading real estate developers in North India and we achieved this feat because we perform best and ethical business processes and execute these processes with due diligence and accuracy.</p>
               </div>
            </div>
         </div>
         <div class="gap-30"></div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive"  width="500px;" src="{{ asset('storage/services/service3.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/service-icon1.png') }}" alt="" />
               </div>
               <div class="ts-service-info text-justify">
                  <h3 class="service-box-title"><a href="service-single.html">All Types Of Construction Hub</a></h3>
                     <p>
                     We transform your dreams into reality. As a leading civil and interior construction company, we are committed to delivering excellence in every project we undertake. With years of experience and a passion for craftsmanship, we bring your vision to life, one brick at a time.
                     <h5>Our Services :-</h5>
                        <ol>
                           <h6><li>Civil Construction: </h6> Our team of skilled engineers and construction experts specializes in creating strong, durable structures. Whether it's residential, commercial, or industrial construction, we have the expertise to handle it all.</li>
                           <h6><li>Interior Design: </h6> Elevate your living or working space with our interior design services. From elegant homes to stylish offices, we turn empty spaces into functional works of art.</li>
                           <h6><li>Renovation and Remodeling: </h6> Is your property in need of a facelift? We excel in renovation and remodeling projects, breathing new life into existing structures while preserving their unique character. </li>
                           <h6><li>Project Management: </h6> Leave the complexities of project management to us. We ensure that every project is completed on time, within budget, and to your exact specifications.</li>
                        </ol>
                        <h5>Why Choose Us? </h5>
                        <ol>
                           <h6><li>Quality Craftsmanship: </h6>Our skilled craftsmen take pride in their work, ensuring that every detail is executed to perfection.</li>
                           <h6><li>Innovative Design: </h6>We stay ahead of industry trends, incorporating the latest design concepts and technology into your projects.</li>
                           <h6><li>Transparency: </h6>We believe in open communication and transparency throughout the construction process, keeping you informed every step of the way.</li>
                           <h6><li>Timely Delivery: </h6>We understand the importance of deadlines. Rest assured, we will complete your project on time.</li>
                           <h6><li>Affordability: </h6>Quality construction doesn't have to break the bank. We offer competitive pricing without compromising on quality.</li>   
                     </ol>
                     </p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive"  width="500px;" src="{{ asset('storage/services/advertising.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/megaphone.png') }}" alt="" />
               </div>
               <div class="ts-service-info text-justify">
                  <h3 class="service-box-title"><a href="#">Advertising</a></h3>
                     <p>
                     Construction work encompasses a wide range of activities and types. Here's a list of some common types of construction work:-
                     <ol>
                        <h6><li>Residential Construction: </h6>This involves building or renovating houses, apartments, and other residential structures.</li>
                        <h6><li>Commercial Construction: </h6>This includes the construction of office buildings, shopping malls, hotels, and other commercial properties.</li>
                        <h6><li>Industrial Construction: </h6>Building facilities like factories, warehouses, power plants, and manufacturing plants falls under this category.</li>
                        <h6><li>Infrastructure Construction: </h6>Infrastructure projects involve building or repairing essential public structures like roads, bridges, tunnels, and airports.</li>
                        <h6><li>Heavy Civil Construction: </h6>This includes large-scale projects such as dams, highways, and water treatment plants.</li>
                        <h6><li>Specialized Construction: </h6>This can refer to niche construction work like installing telecommunications towers, wind turbines, or solar farms.</li>
                        <h6><li>Renovation and Remodeling: </h6>Revamping existing structures to improve functionality or aesthetics.</li>
                        <h6><li>Demolition: </h6>The process of tearing down buildings and structures.</li>
                        <h6><li>Interior Fit-Out: </h6> Creating interior spaces within buildings, including offices, homes, and retail spaces.</li>
                        <h6><li>Landscaping and Site Development: </h6>Enhancing outdoor areas with features like gardens, parking lots, and walkways.</li>
                        <h6><li>Foundation Work: </h6>Constructing the base upon which a building or structure will be erected.</li>
                        <h6><li>Roofing and Siding: </h6>Installing roofs and exterior cladding for weatherproofing.</li>
                        <h6><li>Electrical and Plumbing: </h6>Wiring buildings for electricity and installing plumbing systems.</li>
                        <h6><li>Concrete and Masonry Work: </h6>Building with concrete, brick, stone, and other masonry materials.</li>
                        <h6><li>HVAC Heating, Ventilation, and Air Conditioning: </h6>Installing climate control systems in buildings.</li>
                        <h6><li>Carpentry: </h6>Crafting and installing wooden structures and components.</li>
                        <h6><li>Painting and Finishing: </h6>Adding the final touches to surfaces with paint, wallpaper, or other finishes.</li>
                        <h6><li>Environmental Remediation: </h6>Cleaning up contaminated sites and restoring them to their natural state.</li>
                        <h6><li>Steel Fabrication</h6></li>
                     </ol>
                     </p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive"  width="500px;" src="{{ asset('storage/services/exteriorwork.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/service-icon1.png') }}" alt="" />
               </div>
               <div class="ts-service-info text-justify">
                  <h3 class="service-box-title"><a href="#">All Type Of Exterior Work</a></h3>
                  <p>Exterior work encompasses a variety of tasks to improve the outer appearance and functionality of a building or property. Some common types include:-
                     <ol>
                        <h6><li>Painting: </h6>Applying fresh coats of paint to walls, doors, and trim to enhance aesthetics and protect against weathering.</li>
                        <h6><li>Landscaping: </h6>Designing and maintaining gardens, lawns, trees, and shrubs to enhance curb appeal.</li>
                        <h6><li>Siding Installation: </h6>Adding or replacing siding materials like vinyl, wood, or brick to improve insulation and aesthetics.</li>
                        <h6><li>Roofing: </h6>Repairing or replacing the roof to prevent leaks and improve energy efficiency.</li>
                        <h6><li>Window and Door Installation: </h6>Upgrading or installing new windows and doors to enhance security and energy efficiency.</li>
                        <h6><li>Deck or Patio Construction: </h6>Building outdoor living spaces for relaxation and entertainment.</li>
                        <h6><li>Fence Installation: </h6>Erecting fences for privacy, security, or aesthetic purposes.</li>
                        <h6><li>Driveway and Walkway Paving: </h6>Installing or repairing paved surfaces for safe access and parking.</li>
                        <h6><li>Gutter Maintenance: </h6>Cleaning and repairing gutters to redirect rainwater away from the building.</li>
                        <h6><li>Exterior Lighting: </h6>Installing outdoor lighting for safety and aesthetics.</li>
                        <h6><li></h6>Each type of exterior work serves a specific purpose in improving the appearance, functionality, and value of a property.</li>
                        <h6><li></h6></li>
                     </ol>
                     </p>
               </div>
            </div>
         </div>
         <div class="gap-30"></div>
         <div class="col-md-4">
            <div class="ts-service-box">
               <div class="ts-service-image-wrapper">
                  <img class="img-responsive"  width="500px;" src="{{ asset('storage/services/sale.jpg') }}" alt="">
               </div>
               <div class="ts-service-box-img pull-left">
                  <img src="{{ asset('storage/icon-image/sale-purchase.png') }}" alt="" />
               </div>
               <div class="ts-service-info text-justify">
                  <h3 class="service-box-title"><a href="#">Sale Purchase</a></h3>
                  <p>Umeza Construction Pvt. Ltd. is also working in the field of sale and purchase of building materials like Cement of all Brands (OPC Cement, PPC Cement, PSC Cement, ACC Cement, myCem Cement, Ambuja Cement and much more brands.), Bricks (Red bricks, Fly ash bricks and Interlocking bricks etc.), Cocrete, Gypsum Plaster, Construction sand, Metal Bars (TMT Bars, Steel bar and iron bar) and Blue metals and much more. </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection