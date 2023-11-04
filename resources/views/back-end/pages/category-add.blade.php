@extends('back-master')
@section('title', 'UC | Home Page')
@section('content')
<main id="main" class="main">
   <div class="row">
      <div class="col">
         <h1 class="fs-4 fw-bold">{{isset($data->id) ? 'Update' : 'Add'}} Category</h1>
         <nav>
         <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Category</a></li>
         </ol>
         </nav>
      </div>
      <div class="col-auto align-self-end mb-3">
         <a href="{{url('category-list')}}" class="btn btn-primary">Category List</a>
      </div>
   </div>
   <section class="section">
      <div class="row">
         <div class="col">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title"></h5>
                  <form action="{{url('get-update-category')}}" class="row g-3 needs-validation" method="POST" class="row g-3" novalidate>
                     @csrf
                     <div class="row mb-3">
                        <input type="text" class="form-control d-none" name="id" id="id" value={{$data->id ?? null}}>
                        <label for="name" class="col-sm-2 form-label">Category Name: <strong class="text-danger">*</strong></label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $data->name ?? null)}}" minlength="5" placeholder="Category name" required>
                           <div class="invalid-feedback">Category name should be minimum 5 character.</div>
                           @error('name')
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