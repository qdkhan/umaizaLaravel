@extends('back-master')
@section('title', 'UC | Teams')
@section('content')
<main id="main" class="main">
   <div class="pagetitle">
      @if(session()->has("success"))
         <div class="alert alert-success mt-2" role="alert">{{session("success")}}</div>
      @endif

      @if(session()->has("deleted"))
         <div class="alert alert-danger mt-2" role="alert">{{session("deleted")}}</div>
      @endif
      <h1>Projects</h1>
      <nav>
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Projects</li>
         </ol>
      </nav>
      <a type="button" class="btn btn-primary" href="{{url('get-update-project')}}">Add Projects</a>
   </div>
   <section class="section dashboard">
      <div class="row">
         <div class="col-lg-12">
            <div class="row">
               <div class="col-12">
                  <div class="card recent-sales overflow-auto">
                     <div class="card-body">
                        <table class="table table-borderless datatable">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Description</th>
                                 <th scope="col">Client</th>
                                 <th scope="col">Architect</th>
                                 <th scope="col">Location</th>
                                 <th scope="col">Size</th>
                                 <th scope="col">Year</th>
                                 <th scope="col">Category</th>
                                 <th scope="col">Image</th>
                                 <th scope="col">Date</th>
                                 <th scope="col">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($data as $key => $data)
                                 <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->description}}</td>
                                    <td>{{$data->client}}</td>
                                    <td>{{$data->architect}}</td>
                                    <td>{{$data->location}}</td>
                                    <td>{{$data->size}}</td>
                                    <td>{{$data->year}}</td>
                                    <td>{{$data->category_name}}</td>
                                    <td>
                                       @if ($data->image)
                                             @php
                                                $images = explode(',', $data->image)
                                             @endphp
                                             @foreach ($images as $image)
                                                   <img src={!! displayImage($image) !!} width="100px" height="100px" class="img-responsive rounded-circle">
                                             @endforeach
                                       @endif
                                    </td>
                                    <td>{{$data->created_at}}</td>
                                    <td>
                                    <a href="{{url('get-update-project', [$data->id])}}"><span class="badge rounded-pill bg-primary"><i class="bi bi-box-arrow-in-up-right"></i></span></a>
                                    <a href="{{route('backend.project_delete', [$data->id])}}"><span class="badge rounded-pill bg-danger"><i class="bi bi-x-square"></i><span></a>
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
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Add Team</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="row mb-3">
                     <label for="name" class="col-sm-2 col-form-label">Name</label>
                     <div class="col-sm-10">
                        <input type="text" name="name" id="name" placeholder="Enter Name"class="form-control">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                     <div class="col-sm-10">
                        <input type="text" name="designation" id="designation" placeholder="Designation" class="form-control">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="branch" class="col-sm-2 col-form-label">Branch</label>
                     <div class="col-sm-10">
                        <input type="text" name="branch" id="branch" placeholder="Branch" class="form-control">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                     <div class="col-sm-10">
                        <input type="url" name="facebook" id="facebook" placeholder="Facebook" class="form-control">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                     <div class="col-sm-10">
                        <input type="url" name="twitter" id="twitter" placeholder="Twitter" class="form-control">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                     <div class="col-sm-10">
                        <input type="text" name="instagram" id="instagram" placeholder="Instagram" class="form-control">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="linkdin" class="col-sm-2 col-form-label">Linkdin</label>
                     <div class="col-sm-10">
                        <input type="text" name="linkdin" id="linkdin" class="form-control" placeholder="Linkedin">
                     </div>
                  </div>
                  <div class="row">
                     <label for="formFile" class="col-sm-2 col-form-label">File Upload</label>
                     <div class="col-sm-10">
                        <input class="form-control" type="file" name="profile_image" id="formFile">
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal End -->
   </section>
</main>
@endsection