@extends('back-master')
@section('title', 'UC | Profile')
@section('content')
<main id="main" class="main">
  @if(session()->has("success"))
      <div class="alert alert-success alert-dismissible fade show fw-bold mt-2" role="alert">
        {{session("success")}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" title="Close"></button>
      </div>
  @endif

  @if(session()->has("errors"))
  <div class="alert alert-danger alert-dismissible fade show fw-bold mt-2" role="alert">
    <ul>
    @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
    @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" title="Close"></button>
  </div>
  @endif

  @if(session()->has("error"))
    <div class="alert alert-success alert-dismissible fade show fw-bold mt-2" role="alert">
        {{session("error")}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" title="Close"></button>
    </div>
  @endif
  <div class="row">
    <div class="col">
      <h1 class="fs-4 fw-bold">Profile</h1>
        <nav>
          <ol class="breadcrumb mb-3">
              <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
          </ol>
        </nav>
    </div>
  </div>
  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">
        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
            <img src="{!! displayImage(Auth::user()->image) !!}" alt="Profile" class="rounded-circle" style="width:120px;height:120px;">
            <h2>{{Auth::user()->name}}</h2>
            <h3>{{Auth::user()->job}}</h3>
            <div class="social-links mt-2">
              <a href="{{Auth::user()->twitter}}" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="{{Auth::user()->facebook}}" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="{{Auth::user()->instagram}}" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="{{Auth::user()->linkedin}}" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-8">
        <div class="card">
          <div class="card-body pt-3">
            <ul class="nav nav-tabs nav-tabs-bordered">
              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
              </li>
            </ul>
            <div class="tab-content pt-2">
              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">About</h5>
                  <p class="small fst-italic">{{Auth::user()->about}}</p>
                <h5 class="card-title">Profile Details</h5>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Full Name</div>
                  <div class="col-lg-9 col-md-8">{{Auth::user()->name}}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Company</div>
                  <div class="col-lg-9 col-md-8">{{Auth::user()->company}}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Job</div>
                  <div class="col-lg-9 col-md-8">{{Auth::user()->job}}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Country</div>
                  <div class="col-lg-9 col-md-8">{{Auth::user()->country}}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Address</div>
                  <div class="col-lg-9 col-md-8">{{Auth::user()->address}}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Phone</div>
                  <div class="col-lg-9 col-md-8">{{Auth::user()->phone}}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8">{{Auth::user()->email}}</div>
                </div>
              </div>
              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                <form class="needs-validation" action="{{url('get-update-profile')}}" method="POST" enctype="multipart/form-data" novalidate>
                  @csrf  
                  <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                    <div class="col-md-8 col-lg-9">
                      <img src="{!! displayImage(Auth::user()->image) !!}" style="border-radius:10px;width:120px;height:120px" alt="Profile">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="name" class="col-md-4 col-lg-3 col-form-label">Full Name: <strong class="text-danger">*</strong></label>
                    <div class="col-md-8 col-lg-9">
                      <input name="name" id="name" type="text" class="form-control" value="{{old('name',Auth::user()->name)}}" minlength="5" required>
                      <div class="invalid-feedback">Name should be minimum 5 character.</div>
                        @error('name')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="about" class="col-md-4 col-lg-3 col-form-label">About: <strong class="text-danger">*</strong></label>
                    <div class="col-md-8 col-lg-9">
                      <textarea name="about" class="form-control" id="about" minlength="50" required>{{old('about', Auth::user()->about)}}</textarea>
                      <small class="text-secondary"> <strong class="text-danger">Note:</strong> This field should be at least 50 characters</small>  
                      <div class="invalid-feedback">About should be minimum 50 character.</div>
                        @error('about')
                          <br/>
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Company: <strong class="text-danger">*</strong></label>
                    <div class="col-md-8 col-lg-9">
                      <input name="company" type="text" class="form-control" id="company" value="{{old('company', Auth::user()->company)}}" minlength="5" required>
                      <div class="invalid-feedback">Company should be minimum 5 character.</div>
                        @error('company')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="job" class="col-md-4 col-lg-3 col-form-label">Job: <strong class="text-danger">*</strong></label>
                    <div class="col-md-8 col-lg-9">
                      <input name="job" type="text" class="form-control" id="job" value="{{old('job', Auth::user()->job)}}" minlength="5" required>
                      <div class="invalid-feedback">Job should be minimum 5 character.</div>
                        @error('job')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="country" class="col-md-4 col-lg-3 col-form-label">Country: <strong class="text-danger">*</strong></label>
                    <div class="col-md-8 col-lg-9">
                      <input name="country" type="text" class="form-control" id="country" value="India" readonly minlength="5" required>
                      <div class="invalid-feedback">Country should be minimum 5 character.</div>
                        @error('country')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="address" class="col-md-4 col-lg-3 col-form-label">Address: <strong class="text-danger">*</strong></label>
                    <div class="col-md-8 col-lg-9">
                      <input name="address" type="text" class="form-control" id="address" value="{{old('address', Auth::user()->address)}}" minlength="10" required>
                      <div class="invalid-feedback">Address should be minimum 10 character.</div>
                        @error('address')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone: <strong class="text-danger">*</strong></label>
                    <div class="col-md-8 col-lg-9">
                      <input name="phone" id="phone" type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" minlength="10" maxlength="12" value="{{old('phone', Auth::user()->phone)}}" required>
                      <div class="invalid-feedback">Phone should be minimum 10 digits and maximum 12 digits.</div>
                        @error('phone')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="email" class="col-md-4 col-lg-3 col-form-label">Email: <strong class="text-danger">*</strong></label>
                    <div class="col-md-8 col-lg-9">
                      <input name="email" type="email" class="form-control" id="email" value="{{old('email', Auth::user()->email)}}" required>
                      <div class="invalid-feedback">Enter a valid email.</div>
                        @error('email')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile: <strong class="text-danger">*</strong></label>
                    <div class="col-md-8 col-lg-9">
                      <input name="twitter" type="url" class="form-control" id="twitter" value="{{old('twitter', Auth::user()->twitter)}}" required>
                      <div class="invalid-feedback">Enter a valid twitter url starts with http:// or https://</div>
                        @error('twitter')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile: <strong class="text-danger">*</strong></label>
                    <div class="col-md-8 col-lg-9">
                      <input name="facebook" type="url" class="form-control" id="facebook" value="{{old('facebook', Auth::user()->facebook)}}" required>
                      <div class="invalid-feedback">Enter a valid facebook url starts with http:// or https://</div>
                        @error('facebook')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile: <strong class="text-danger">*</strong></label>
                    <div class="col-md-8 col-lg-9">
                      <input name="instagram" type="url" class="form-control" id="instagram" value="{{old('instagram', Auth::user()->instagram)}}" url>
                      <div class="invalid-feedback">Enter a valid instagram url starts with http:// or https://</div>
                        @error('instagram')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile: <strong class="text-danger">*</strong></label>
                    <div class="col-md-8 col-lg-9">
                      <input name="linkedin" type="url" class="form-control" id="linkedin" value="{{old('linkedin', Auth::user()->linkedin)}}" required>
                      <div class="invalid-feedback">Enter a valid linkedin url starts with http:// or https://</div>
                        @error('linkedin')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="image" class="col-md-4 col-lg-3 col-form-label">Upload Image: </label>
                    <div class="col-md-8 col-lg-9">
                      <input name="image" id="image" type="file" accept=".jpg,.jpeg,.png" class="form-control" >
                      <small class="text-secondary"> <strong class="text-danger">Note:</strong> Image should not be greater than 50 Kb</small>  
                      @error('image')
                        <br/>
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="tab-pane fade pt-3" id="profile-change-password">
              <form class="needs-validation" action="{{url('change-password')}}" method="POST" novalidate>
                @csrf  
                <div class="row mb-3">
                  <label for="current_password" class="col-md-4 col-lg-3 col-form-label">Current Password: <strong class="text-danger">*</strong></label>
                  <div class="col-md-8 col-lg-9">
                    <input class="form-control" type="password" name="current_password" id="current_password" minlength="9" placeholder="Current password" value="{{old('current_password')}}" required>
                    <div class="invalid-feedback">Current password should be minimum 9 character.</div>
                      @error('current_password')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="password" class="col-md-4 col-lg-3 col-form-label">New Password: <strong class="text-danger">*</strong></label>
                  <div class="col-md-8 col-lg-9">
                    <input name="password" type="password" class="form-control" id="password" minlength="9" placeholder="New password" value="{{old('password')}}" required>
                    <div class="invalid-feedback">New password should be minimum 9 character.</div>
                      @error('password')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="password_confirmation" class="col-md-4 col-lg-3 col-form-label">Confirm Password: <strong class="text-danger">*</strong></label>
                  <div class="col-md-8 col-lg-9">
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" minlength="9" placeholder="Confirm new password" value="{{old('password_confirmation')}}" required>
                    <div class="invalid-feedback">Confirm password should be minimum 9 character.</div>
                      @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
              </form>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection