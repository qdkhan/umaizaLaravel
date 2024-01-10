@extends('back-master')
@section('title', 'UC | Enquiry')
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
         <h1 class="fs-4 fw-bold">Projects</h1>
         <nav>
         <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Enquiry</a></li>
         </ol>
         </nav>
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
                                 <th scope="col">Email</th>
                                 <th scope="col">Mobile</th>
                                 <th scope="col">Subject</th>
                                 <th scope="col">Message</th>
                                 <th scope="col">Date</th>
                                 <th scope="col" class="no-sort" width="120px">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($enquiries as $key => $data)
                                 <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->mobile}}</td>
                                    <td>{{$data->subject}}</td>
                                    <td>{{$data->message}}</td>
                                    <td>{{$data->created_at}}</td>
                                    <td>
                                       <a href="{{route('backend.enquiry_delete', [$data->id])}}">
                                          <i class="bi bi-trash-fill text-danger fs-5 me-1"></i>
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