@extends('front-master')
@section('title', 'Contact Us | Umaiza Construction Pvt Ltd.')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url('{{ asset('storage/banner/banner3.jpg')}}')">
   <div class="banner-text">
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <div class="banner-heading">
               <h1 class="banner-title">Contact</h1>
                  <ol class="breadcrumb">
                     <li><a href="{{url('/')}}">Home</a></li>
                     <li><a href="#">Contact</a></li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<section id="main-container" class="main-container">
   <div class="container">
      <div class="row text-center">
         <h2 class="section-title">Reaching our Office</h2>
         <h3 class="section-sub-title">Find Our Location</h3>
      </div>
      <div class="row">
         <div class="col-md-4 customDiv">
            <div class="ts-service-box-bg text-center">
               <span class="ts-service-icon icon-round">
               <i class="fa fa-map-marker"></i>
               </span>
               <div class="ts-service-box-content">
                  <h4>Visit Our Mumbai Office</h4>
                  <p style="padding-bottom:8px;">
                  297-B, Behind Takiya Ward Masjid, Kurla West  400070 
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-4 customDiv mb-md-0 mb-3">
            <div class="ts-service-box-bg text-center">
               <span class="ts-service-icon icon-round">
               <i class="fa fa-envelope"></i>
               </span>
               <div class="ts-service-box-content">
                  <h4>Email Us</h4>
                  <p>umaizaconstruction@gmail.com</p>
                  <p>care@umaizaconstruction.com</p>
               </div>
            </div>
         </div>
         <div class="col-md-4 customDiv mb-md-0 mb-3">
            <div class="ts-service-box-bg text-center">
               <span class="ts-service-icon icon-round">
               <i class="fa fa-phone-square"></i>
               </span>
               <div class="ts-service-box-content">
                  <h4>Call Us</h4>
                  <p>(+91) 983-364-5488</p>
                  <p>(+91) 981-971-6926</p>
               </div>
            </div>
         </div>
      </div>
      <div class="gap-20"></div>
      <div class="row">
         <div class="col-md-4 customDiv">
            <div class="ts-service-box-bg text-center">
               <span class="ts-service-icon icon-round">
               <i class="fa fa-map-marker"></i>
               </span>
               <div class="ts-service-box-content">
                  <h4>Visit Our Lucknow Office</h4>
                  <p style="padding-bottom:8px;">
                     Khurram Nagar Lucknow, Uttar Pradesh 226022
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-4 customDiv">
            <div class="ts-service-box-bg text-center">
               <span class="ts-service-icon icon-round">
               <i class="fa fa-envelope"></i>
               </span>
               <div class="ts-service-box-content">
                  <h4>Email Us</h4>
                  <p>umaizaconstruction@gmail.com</p>
                  <p>care@umaizaconstruction.com</p>
               </div>
            </div>
         </div>
         <div class="col-md-4 customDiv">
            <div class="ts-service-box-bg text-center">
               <span class="ts-service-icon icon-round">
               <i class="fa fa-phone-square"></i>
               </span>
               <div class="ts-service-box-content">
                  <h4>Call Us</h4>
                  <p>(+91) 786-006-6002</p>
                  <p>(+91) 885-801-7091</p>
               </div>
            </div>
         </div>
      </div>
      <div class="gap-20"></div>
      <div class="row">
         <div class="col-md-4 customDiv">
            <div class="ts-service-box-bg text-center">
               <span class="ts-service-icon icon-round">
               <i class="fa fa-map-marker"></i>
               </span>
               <div class="ts-service-box-content">
                  <h4>Visit Our Bahraich Office</h4>
                  <p style="padding-bottom:8px;">
                     Basheer Ganj Bahraich, Uttar Pradesh 271801
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-4 customDiv">
            <div class="ts-service-box-bg text-center">
               <span class="ts-service-icon icon-round">
               <i class="fa fa-envelope"></i>
               </span>
               <div class="ts-service-box-content">
                  <h4>Email Us</h4>
                  <p>umaizaconstruction@gmail.com</p>
                  <p>care@umaizaconstruction.com</p>
               </div>
            </div>
         </div>
         <div class="col-md-4 customDiv">
            <div class="ts-service-box-bg text-center">
               <span class="ts-service-icon icon-round">
               <i class="fa fa-phone-square"></i>
               </span>
               <div class="ts-service-box-content">
                  <h4>Call Us</h4>
                  <p>(+91) 786-006-6002</p>
                  <p>(+91) 700-728-7608</p>
               </div>
            </div>
         </div>
      </div>
      <div class="gap-60"></div>
      <div class="map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.047795014553!2d72.8741117!3d19.061636099999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9f66aba9739%3A0x76369bf52920b524!2sUmaiza%20Construction%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1694573072398!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="gap-40"></div>
      <div class="row">
         <div class="col-md-12">
            <h3 class="column-title">We love to hear</h3>
            @if(session()->has("success"))
               <div class="alert alert-success" role="alert">{{session("success")}}</div>
            @endif
            <form action="{{ route('front.sendEnquiry') }}" method="POST">
               @csrf
               <div class="error-container"></div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control form-control-name" name="name" id="name" placeholder="Enter your name" type="text" required>
                     </div>
                     @error('name')
                        <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control form-control-email" name="email" id="email" 
                           placeholder="Enter your email" required>
                     </div>
                     @error('email')
                        <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="mobile">Mobile/Phone No.</label>
                        <input class="form-control form-control-mobile" name="mobile" id="mobile" 
                           placeholder="Enter your mobile no." min="0" step="1" type="number" required>
                     </div>
                     @error('mobile')
                        <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="subject">Subject</label>
                        <input class="form-control form-control-subject" name="subject" id="subject" 
                           placeholder="Enter your query">
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label for="message" >Message</label>
                  <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10"></textarea>
               </div>
               <div class="text-right"><br>
                  <button class="btn btn-primary solid blank" type="submit">Send Message</button> 
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
@endsection