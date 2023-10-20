@extends('back-master')
@section('title', 'UC | Team Page')
@section('content')
<main id="main" class="main">
   <section class="section">
      <div class="row">
         <div class="col">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Add Team</h5>
                  <form class="row g-3" action="{{url('get-update-team')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="row mb-3">
                        <input type="text" class="form-control d-none" name="id" id="id" value={{$data->id ?? null}}>
                        <label for="name" class="col-sm-2 form-label">Name: <strong class="text-danger">*</strong></label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="name" name="name" value="{{old('name', $data->name ?? null)}}" placeholder="Name" required>
                           @error('name')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="description" class="col-sm-2 form-label">Designation: <strong class="text-danger">*</strong></label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="designation" name="designation" value="{{old('designation', $data->designation ?? null)}}" placeholder="Designation" required>
                           @error('designation')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="client" class="col-sm-2 form-label">Branch: </label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="branch" name="branch" value="{{old('branch', $data->branch ?? null)}}" placeholder="Branch">
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="architect" class="col-sm-2 form-label">Facebook: </label>
                        <div class="col-sm-10">
                           <input type="url" class="form-control" id="facebook" name="facebook" value="{{old('facebook', $data->facebook ?? null)}}" placeholder="Facebook URL">
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="location" class="col-sm-2 form-label">Twitter: </label>
                        <div class="col-sm-10">
                           <input type="url" class="form-control" id="twitter" name="twitter" value="{{old('twitter', $data->twitter ?? null)}}" placeholder="Twitter URL">
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="location" class="col-sm-2 form-label">Instagram: </label>
                        <div class="col-sm-10">
                           <input type="url" class="form-control" id="instagram" name="instagram" value="{{old('instagram', $data->instagram ?? null)}}" placeholder="Instagram URL">
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="location" class="col-sm-2 form-label">Linkedin: </label>
                        <div class="col-sm-10">
                           <input type="url" class="form-control" id="linkedin" name="linkedin" value="{{old('linkedin', $data->linkedin ?? null)}}" placeholder="Linkedin">
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
                           <small class="text-secondary"> Note: Image should not be greater than 50 Kb and 263 px X 300 px</small>
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