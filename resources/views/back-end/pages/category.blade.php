@extends('back-master')
@section('title', 'UC | Teams')
@section('content')
<main id="main" class="main">
   <div class="pagetitle">
      <h1>Category</h1>
      <nav>
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
         </ol>
      </nav>
      <div class="d-flex justify-content-end mb-3">
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">Add Category</button>
      </div>
   </div>
   <section class="section dashboard">
      <div class="row">
         <div class="col-lg-12">
            <div class="row">
               <div class="col-12">
                  <div class="card recent-sales overflow-auto">
                     <div class="card-body">
                        <h5 class="card-title">Recent Sales <span>| Today</span></h5>
                        <table class="table table-borderless datatable">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Customer</th>
                                 <th scope="col">Product</th>
                                 <th scope="col">Price</th>
                                 <th scope="col">Status</th>
                                 <th scope="col">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row"><a href="#">#2457</a></th>
                                 <td>Brandon Jacob</td>
                                 <td><a href="#" class="text-primary">At praesentium minu</a></td>
                                 <td>$64</td>
                                 <td><span class="badge bg-success">Approved</span></td>
                                 <td>
                                    <span class="badge rounded-pill bg-primary"><i class="bi bi-box-arrow-in-up-right"></i></span>
                                    <span class="badge rounded-pill bg-danger"><i class="bi bi-x-square"></i><span>
                                 </td>
                              </tr>
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