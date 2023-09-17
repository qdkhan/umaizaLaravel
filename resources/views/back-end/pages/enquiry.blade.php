@extends('back-master')
@section('title', 'UC | Enquiry')
@section('content')
<main id="main" class="main">
   <div class="pagetitle">
      <h1>Enquiries</h1>
      <nav>
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Enquiries</li>
         </ol>
      </nav>
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
   </section>
</main>
@endsection