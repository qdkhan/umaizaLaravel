@extends('back-master')
@section('title', 'UC | Teams')
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
         <h1 class="fs-4 fw-bold">Teams</h1>
         <nav>
         <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Team</a></li>
         </ol>
         </nav>
      </div>
      <div class="col-auto align-self-end mb-3">
         <a type="button" href="{{url('get-update-team')}}" class="btn btn-primary">Add Team</a>
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
                                 <th scope="col">Image</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Designation</th>
                                 <th scope="col">Branch</th>
                                 <!-- <th scope="col">Facebook</th>
                                 <th scope="col">Twitter</th>
                                 <th scope="col">Instagram</th>
                                 <th scope="col">Linkedin</th> -->
                                 <th scope="col">Date</th>
                                 <th scope="col" class="no-sort" width="190px">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($data as $key => $data)
                                 <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td><img src={!! displayImage($data->image) !!} width="50px" height="50px" class="img-responsive" style="border-radius:5px"></td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->designation}}</td>
                                    <td>{{$data->branch ? $data->branch : 'N/A'}}</td>
                                    <!-- <td>{{$data->facebook}}</td>
                                    <td>{{$data->twitter}}</td>
                                    <td>{{$data->instagram}}</td>
                                    <td>{{$data->linkedin}}</td> -->
                                    <td>{{$data->created_at}}</td>
                                    <td>
                                       <div class="d-flex gap-3">
                                       <a href="{{url('get-update-team', [$data->id])}}">
                                       <i class="bi bi-pencil-square fs-5 me-1"></i>
                                       
                                       </a>
                                       <a href="{{route('backend.team_delete', [$data->id])}}">
                                          <i class="bi bi-trash-fill text-danger fs-5 me-1"></i>
                                       </a>
                                       </div>
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
                  <form method="post" action="{{url('get-update-team')}}" enctype="multipart/form-data">
                  @csrf
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
                  <button type="submit" class="btn btn-primary">Save</button>
               </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Modal End -->
   </section>
</main>
@endsection