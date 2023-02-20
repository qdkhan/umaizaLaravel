@extends('front-master')
@section('title', 'UC | News Page')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url('{{ asset('storage/banner/banner1.jpg')}}')">
   <div class="banner-text">
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <div class="banner-heading">
                  <h1 class="banner-title">News</h1>
                  <ol class="breadcrumb">
                     <li><a href="{{url('/')}}">Home</a></li>
                     <li><a href="#">News</a></li>
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
         <div class="error-page text-center">
            <div class="error-code">
               <h2><strong>404</strong></h2>
            </div>
            <div class="error-message">
               <h3>Oops... Page is Under Construction!</h3>
            </div>
            <div class="error-body">
               Try using the button below to go to main page of the site <br>
               <a href="{{ url('/') }}" class="btn btn-primary">Back to Home Page</a>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection