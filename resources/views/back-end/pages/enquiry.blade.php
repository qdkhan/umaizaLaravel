@extends('back-master')
@section('title', 'UC | Enquiry')
@section('content')
<main id="main" class="main">
   <div class="pagetitle">
      @if(session()->has("deleted"))
         <div class="alert alert-danger mt-2" role="alert">{{session("deleted")}}</div>
      @endif
      <h1>Enquiries</h1>
      <nav>
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active"><a href="#">Enquiries</a></li>
         </ol>
      </nav>
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
                                 <th scope="col">Action</th>
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
                                       <a href="{{route('backend.enquiry_delete', [$data->id])}}"><span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Delete<span></a>
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