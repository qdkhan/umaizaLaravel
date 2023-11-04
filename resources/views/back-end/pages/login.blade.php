@extends('back-master')
@section('title', 'UC | Login')
@section('content')
<main>
   @if(session()->has("success"))
      <div class="alert alert-success alert-dismissible fade show fw-bold mt-2" role="alert">
         {{session("success")}}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" title="Close"></button>
      </div>
   @endif

   @if(session()->has("error"))
      <div class="alert alert-danger alert-dismissible fade show fw-bold mt-2" role="alert">
         {{session("error")}}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" title="Close"></button>
      </div>
   @endif

   <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
               <div class="d-flex justify-content-center py-4">
                  <a href="#" class="logo d-flex align-items-center w-auto">
                  <img src="{{ asset('storage/logo.jpg') }}" alt="">
                  <span class="d-none d-lg-block">Umeza Construction</span>
                  </a>
               </div>
               <div class="card mb-3">
                  <div class="card-body">
                     <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                        <p class="text-center small">Enter your username & password to login</p>
                     </div>
                     <form action="{{ route('login') }}" method="post" class="row g-3 needs-validation" novalidate>
                     @csrf   
                     <div class="col-12">
                           <label for="email" class="form-label">Username</label>
                           <div class="input-group has-validation">
                              <span class="input-group-text" id="inputGroupPrepend">@</span>
                              <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Email" required>
                              <div class="invalid-feedback">Please enter your username.</div>
                           </div>
                           @if ($errors->has('email'))
                                 <span class="text-danger">{{ $errors->first('email') }}</span>
                           @endif
                        </div>
                        <div class="col-12">
                           <label for="password" class="form-label">Password</label>
                           <input type="password" name="password" class="form-control" value="{{ old('password') }}" id="password" required>
                           <div class="invalid-feedback">Please enter your password!</div>
                              @if ($errors->has('password'))
                                 <span class="text-danger">{{ $errors->first('password') }}</span>
                              @endif
                        </div>
                        <div class="col-12">
                           <button class="btn btn-primary w-100" type="submit">Login</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
@endsection