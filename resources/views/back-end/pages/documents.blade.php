@extends('back-master')
@section('title', 'UC | Document')
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
         <h1 class="fs-4 fw-bold">Documents</h1>
         <nav>
         <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Document</a></li>
         </ol>
         </nav>
      </div>
      <div class="col-auto align-self-end mb-3">
         <a type="button" href="{{url('get-update-document')}}" class="btn btn-primary">Add Document</a>
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
                                <th scope="col">Name</th>
                                <th scope="col">Client</th>
                                <th scope="col">Location</th>
                                <th scope="col" class="no-sort">Download</th>
                                <th scope="col">Date</th>
                                <th scope="col" class="no-sort" width="170px">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($data as $key => $data)
                                 <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->client}}</td>
                                    <td>{{$data->location}}</td>
                                    <td>
                                       @if($data->document_type == 'pdf')
                                          <a class="text-decoration-none" href={!! displayImage($data->document) !!} download={{$data->name}} >
                                             <i class="bi bi-file-earmark-pdf me-1 text-danger" style="font-size: 40px; width: 40px; height: 40px;"></i>
                                          </a>
                                       @else
                                       <a class="" href="#" >
                                             <i class="bi bi-file-earmark-ppt me-1 text-primary" style="font-size: 40px; width: 40px; height: 40px;"></i>
                                          </a>
                                       @endif
                                    </td>
                                    <td>{{$data->created_at}}</td>
                                    <td>
                                        <a href="{{url('get-update-document', [$data->id])}}" class="btn btn-sm btn-primary">
                                          <i class="bi bi-box-arrow-in-up-right me-1"></i>
                                          Edit
                                       </a>
                                       <a href="{{route('backend.document_delete', [$data->id])}}" class="btn btn-sm btn-danger">
                                          <i class="bi bi-exclamation-octagon me-1"></i>
                                          Delete
                                       </a>
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
   </section>
</main>
@endsection