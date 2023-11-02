@extends('back-master')
@section('title', 'UC | Doc Upload')
@section('content')
<main id="main" class="main">
   <div class="row">
      <div class="col">
         <h1 class="fs-4 fw-bold">{{isset($data->id) ? 'Update' : 'Add'}} Document</h1>
         <nav>
         <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Document</a></li>
         </ol>
         </nav>
      </div>
      <div class="col-auto align-self-end mb-3">
         <a type="button" href="{{url('document-list')}}" class="btn btn-primary">Document List</a>
      </div>
   </div>
   <section class="section">
      <div class="row">
         <div class="col">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title"></h5>
                  <form class="row g-3 needs-validation" action="{{url('get-update-document')}}" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="row mb-3">
                        <input type="text" class="form-control d-none" name="id" id="id" value={{$data->id ?? null}}>
                        <label for="name" class="col-sm-2 form-label">Project Name: <strong class="text-danger">*</strong></label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $data->name ?? null)}}" placeholder="Category name" required>
                           <div class="invalid-feedback">Name field is required.</div>
                           @error('name')
                              <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="client" class="col-sm-2 form-label">Client: <strong class="text-danger">*</strong></label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="client" name="client" value="{{old('client', $data->client ?? null)}}" placeholder="Client name" required>
                           <div class="invalid-feedback">Client field is required.</div>
                           @error('client')
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
                        <label for="year" class="col-sm-2 form-label">Year : <strong class="text-danger">*</strong></label>
                        <div class="col-sm-10">
                           <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="4" class="form-control" id="year" name="year" value="{{old('year', $data->year ?? null)}}" placeholder="Year completed" required>
                           <div class="invalid-feedback">Year field is required.</div>
                           @error('year')
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
                           <input class="form-control" accept=".pdf,.ppt,.pptx" type="file" id="document" name="document" {{ !isset($data)  ? 'required' : ''}} >
                           <small class="text-secondary"> <strong class="text-danger">Note:</strong> Document should not be more than 5120 Kb in pdf or ppt format</small>
                           <div class="invalid-feedback">Document field is required.</div>
                           @error('document')
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