@extends('back-master')
@section('title', 'UC | Team')
@section('content')
<main id="main" class="main">
   <div class="row">
      <div class="col">
         <h1 class="fs-4 fw-bold">{{isset($data->id) ? 'Update' : 'Add'}} Team</h1>
         <nav>
         <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Team</a></li>
         </ol>
         </nav>
      </div>
      <div class="col-auto align-self-end mb-3">
         <a href="{{url('team-list')}}" class="btn btn-primary">Team List</a>
      </div>
   </div>
   <section class="section">
      <div class="row">
         <div class="col">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title"></h5>
                  <form class="row g-3 needs-validation" action="{{url('get-update-team')}}" method="POST" enctype="multipart/form-data" novalidate>
                     @csrf
                     <div class="row mb-3">
                        <input type="text" class="form-control d-none" name="id" id="id" value={{$data->id ?? null}}>
                        <label for="name" class="col-sm-2 form-label">Name: <strong class="text-danger">*</strong></label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="name" name="name" minlength="5" value="{{old('name', $data->name ?? null)}}" placeholder="Name" required>
                           <div class="invalid-feedback">Name should be minimum 5 character.</div>
                           @error('name')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="description" class="col-sm-2 form-label">Designation: <strong class="text-danger">*</strong></label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="designation" minlength="5" name="designation" value="{{old('designation', $data->designation ?? null)}}" placeholder="Designation" required>
                           <div class="invalid-feedback">Designation should be minimum 5 character.</div>
                           @error('designation')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="client" class="col-sm-2 form-label">Branch: </label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="branch" name="branch" minlength="5" value="{{old('branch', $data->branch ?? null)}}" placeholder="Branch">
                           <div class="invalid-feedback">Branch should be minimum 5 character.</div>
                           @error('branch')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="architect" class="col-sm-2 form-label">Facebook: </label>
                        <div class="col-sm-10">
                           <input type="url" class="form-control" id="facebook" name="facebook" value="{{old('facebook', $data->facebook ?? null)}}" placeholder="Facebook URL">
                           <div class="invalid-feedback">Enter a valid facebook url starts with http:// or https://</div>
                           @error('facebook')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="location" class="col-sm-2 form-label">Twitter: </label>
                        <div class="col-sm-10">
                           <input type="url" class="form-control" id="twitter" name="twitter" value="{{old('twitter', $data->twitter ?? null)}}" placeholder="Twitter URL">
                           <div class="invalid-feedback">Enter a valid twitter url starts with http:// or https://</div>
                           @error('twitter')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="location" class="col-sm-2 form-label">Instagram: </label>
                        <div class="col-sm-10">
                           <input type="url" class="form-control" id="instagram" name="instagram" value="{{old('instagram', $data->instagram ?? null)}}" placeholder="Instagram URL">
                           <div class="invalid-feedback">Enter a valid instagram url starts with http:// or https://</div>
                           @error('instagram')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="location" class="col-sm-2 form-label">Linkedin: </label>
                        <div class="col-sm-10">
                           <input type="url" class="form-control" id="linkedin" name="linkedin" value="{{old('linkedin', $data->linkedin ?? null)}}" placeholder="Linkedin">
                           <div class="invalid-feedback">Enter a valid linkedin url starts with http:// or https://</div>
                           @error('linkedin')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="image" class="col-sm-2 form-label">File Upload: 
                           @if(!(isset($data)))
                              <strong class="text-danger">*</strong>
                           @endif   
                        </label>
                        <div class="col-sm-10">
                           <input class="form-control" accept=".jpg,.jpeg,.png" type="file" id="image" name="image" {{ !isset($data)  ? 'required' : ''}} >
                           <small class="text-secondary"> Note: Image should not be greater than 50 Kb and 263 px * 300 px</small>
                           <div class="invalid-feedback">Image field is required.</div>
                           @error('image')
                              <br/>
                              <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
@endsection