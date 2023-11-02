@extends('back-master')
@section('title', 'UC | Project Page')
@section('content')
<main id="main" class="main">
   <div class="row">
      <div class="col">
         <h1 class="fs-4 fw-bold">{{isset($data->id) ? 'Update' : 'Add'}} Project</h1>
         <nav>
         <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Project</a></li>
         </ol>
         </nav>
      </div>
      <div class="col-auto align-self-end mb-3">
         <a type="button" href="{{url('project-list')}}" class="btn btn-primary">Project List</a>
      </div>
   </div>
   <section class="section">
      <div class="row">
         <div class="col">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title"></h5>
                  <form class="row g-3 needs-validation" action="{{url('get-update-project')}}" method="POST" enctype="multipart/form-data" novalidate>
                     @csrf
                     <div class="row mb-3">
                        <input type="text" class="form-control d-none" name="id" id="id" value={{$data->id ?? null}}>
                        <label for="name" class="col-sm-2 form-label">Project Name: <strong class="text-danger">*</strong></label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="name" name="name" value="{{old('name', $data->name ?? null)}}" placeholder="Project name" required>
                           <div class="invalid-feedback">Name field is required.</div>
                           @error('name')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="description" class="col-sm-2 form-label">Project Description: </label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="description" name="description" value="{{old('description', $data->description ?? null)}}" placeholder="Project description">
                           @error('description')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="client" class="col-sm-2 form-label">Client: </label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="client" name="client" value="{{old('client', $data->client ?? null)}}" placeholder="Client name">
                           @error('client')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="architect" class="col-sm-2 form-label">Architect: </label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="architect" name="architect" value="{{old('architect', $data->architect ?? null)}}" placeholder="Architect name">
                           @error('architect')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="location" class="col-sm-2 form-label">Location: <strong class="text-danger">*</strong></label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="location" name="location" value="{{old('location', $data->location ?? null)}}" placeholder="Project location" required>
                           <div class="invalid-feedback">Location field is required.</div>
                           @error('location')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="size" class="col-sm-2 form-label">Size (ft/mt<sup>2</sup>): </label>
                        <div class="col-sm-10">
                           <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" id="size" name="size" value="{{old('size', $data->size ?? null)}}" placeholder="Project size">
                           @error('size')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="year" class="col-sm-2 form-label">Year Completed: </label>
                        <div class="col-sm-10">
                           <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="4" class="form-control" id="year" name="year" value="{{old('year', $data->year ?? null)}}" placeholder="Year completed">
                           @error('year')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="categories" class="col-sm-2 form-label">Categories: <strong class="text-danger">*</strong></label>
                        <div class="col-sm-10">
                           <select class="form-select" aria-label="Default select example" name="categories" id="categories" required>
                              <option value="">--select--</option>
                              @foreach($category as $category)
                                 <option value="{{$category->id}}" {{ old("categories", $data->category_id ?? null) == $category->id ? "selected":"" }}>{{$category->name}}</option>
                              @endforeach
                           </select>
                           <div class="invalid-feedback">Category field is required.</div>
                           @error('categories')
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
                           <input class="form-control" accept=".jpg,.jpeg,.png" type="file" id="image" name="image[]" {{ !isset($data)  ? 'required' : ''}} multiple >
                           <small class="text-secondary"> <strong class="text-danger">Note:</strong> Image should not be greater than 1024 Kb and 750 px * 600 px</small>
                           <div class="invalid-feedback">Image field is required.</div>
                           @error('image.*')
                              <br/>
                              @foreach($errors->get('image.*') as $error)
                                    <span class="text-danger">{{ $error[0] }}</span><br/>
                              @endforeach
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