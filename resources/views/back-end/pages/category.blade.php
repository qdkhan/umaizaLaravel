@extends('back-master')
@section('title', 'UC | Category')
@section('content')
<main id="main" class="main">
   @if(session()->has("success"))
      <div class="alert alert-success alert-dismissible fade show fw-bold mt-2" role="alert">
         {{session("success")}}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" title="Close"></button>
      </div>
   @endif

   @if(session()->has("deleted"))
      <div class="alert alert-danger alert-dismissible fade show fw-bold mt-2" role="alert">
         {{session("deleted")}}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" title="Close"></button>
      </div>
   @endif
   <div class="row">
      <div class="col">
         <h1 class="fs-4 fw-bold">Category</h1>
         <nav>
         <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Category</a></li>
         </ol>
         </nav>
      </div>
      <div class="col-auto align-self-end mb-3">
         <a href="{{url('get-update-category')}}" class="btn btn-primary">Add Category</a>
      </div>
   </div>
   <section class="section dashboard">
      <div class="row">
         <div class="col-lg-12">
            <div class="row">
               <div class="col-12">
                  <div class="card recent-sales overflow-auto">
                     <div class="card-body mt-3">
                        <table class="table table-borderless table-striped datatable">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Category Name</th>
                                 <th scope="col">Date</th>
                                 <th scope="col" class="no-sort" width="170px">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($data as $key => $data)
                              <tr>
                                 <th scope="row">{{$key+1}}</th>
                                 <td>{{$data->name}}</td>
                                 <td>{{$data->created_at}}</td>
                                 <td>
                                    <a href="{{url('get-update-category', [$data->id])}}" >
                                    <i class="bi bi-pencil-square fs-5 me-1"></i>
                                    </a>
                                    <a href="{{route('backend.category_delete', [$data->id])}}">
                                    <i class="bi bi-trash-fill text-danger fs-5 me-1"></i>
                                    </a>
                                    <!-- <a href="">
                                    <i class="bi bi-eye-fill text-success fs-5 me-1"></i>
                                    </a> -->
                                 </td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal Start -->
      <div class="modal fade" id="largeModal" tabindex="-1">
         <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Category</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="mb-2 d-flex align-items-center">
                     <div class="w-25">
                        <label for="name" class="col-form-label">Category Name<span class="text-danger">*</span></label>
                     </div>
                     <div class="w-75">
                        <input type="text" name="name" id="name" placeholder="Enter Name"class="ms-2 form-control">
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save</button>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal End -->

      <div class="modal fade" id="smallModal" tabindex="-1">
         <div class="modal-dialog modal-sm">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Add Category</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="row mb-3 mx-1">
                  <input type="text" name="name" id="name" placeholder="Enter category name"class="form-control">
               </div>
            </div>
            <div class="modal-footer">
               
               <button type="button" class="btn btn-primary">Save</button>
            </div>
         </div>
         </div>
      </div>


   </section>
</main>
@endsection