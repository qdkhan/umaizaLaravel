@extends('back-master')
@section('title', 'UC | Dashboard')
@section('content')
<main id="main" class="main">
   <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{url('dashboard')}}>Home</a></li>
          <li class="breadcrumb-item"><a href={{url('dashboard')}}>Dashboard</a></li>
        </ol>
      </nav>
   </div>
   <section class="section dashboard">
      <div class="row">
         <div class="col-lg-12">
            <div class="row">
               <div class="col-xxl-4 col-md-6">
                  <div class="card info-card sales-card">
                     <div class="card-body">
                        <h5 class="card-title">Team <span>| </span></h5>
                        <div class="d-flex align-items-center">
                           <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                              <i class="bi bi-people"></i>
                           </div>
                           <div class="ps-3">
                              @if(isset($dashboardData['team']))
                                 <h6>{{ $dashboardData['team'] }}</h6>
                              @else
                                 <h6>0</h6>
                              @endif
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-4 col-md-6">
                  <div class="card info-card revenue-card">
                     <div class="card-body">
                        <h5 class="card-title">Category <span>| </span></h5>
                        <div class="d-flex align-items-center">
                           <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                              <i class="ri-building-2-line"></i>
                           </div>
                           <div class="ps-3">
                              @if(isset($dashboardData['category']))
                                 <h6>{{ $dashboardData['category'] }}</h6>
                              @else
                                 <h6>0</h6>
                              @endif
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-4 col-md-6">
                  <div class="card info-card customers-card">
                     <div class="card-body">
                        <h5 class="card-title">Project <span>| </span></h5>
                        <div class="d-flex align-items-center">
                           <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                              <i class="bi bi-shop"></i>
                           </div>
                           <div class="ps-3">
                              @if(isset($dashboardData['project']))
                                 <h6>{{ $dashboardData['project'] }}</h6>
                              @else
                                 <h6>0</h6>
                              @endif
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               <!-- Recently added Team (Only 5 will show here) -->
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-title">Recently Added Team</h5>
                     <table class="table table-hover">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">Image</th>
                              <th scope="col">Name</th>
                              <th scope="col">Designation</th>
                              <th scope="col">Branch</th>
                              <th scope="col">Date</th>
                           </tr>
                        </thead>
                        <tbody>
                           @forelse($dashboardData['teams'] as $key => $team)
                              <tr>
                                 <th scope="row">{{$key+1}}</th>
                                 <td><img src={!! displayImage($team->image) !!} width="100px" height="100px" class="img-responsive" style="border-radius:5px"></td>
                                 <td>{{$team->name}}</td>
                                 <td>{{$team->designation}}</td>
                                 <td>{{$team->branch ? $team->branch : 'N/A'}}</td>
                                 <td>{{$team->created_at}}</td>
                              </tr>
                              @empty
                              <tr><td colspan="6">No team found.</td></tr>
                           @endforelse
                        </tbody>
                     </table>
                  </div>
               </div>

               <!-- Recently added Category (Only 5 will show here) -->
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-title">Recently Added Category</h5>
                     <table class="table table-hover">
                        <thead>
                           <tr>
                           <th scope="col">#</th>
                           <th scope="col">Name</th>
                           <th scope="col">Date</th>
                           </tr>
                        </thead>
                        <tbody>
                           @forelse($dashboardData['categories'] as $key => $value)
                              <tr>
                                 <th scope="row">{{$key+1}}</th>
                                 <td>{{$value->name}}</td>
                                 <td>{{$value->created_at}}</td>
                              </tr>
                              @empty
                              <tr><td colspan="3">No Category Found.</td></tr>
                           @endforelse
                        </tbody>
                     </table>
                  </div>
               </div>

               <!-- Recently added Project (Only 5 will show here) -->
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-title">Recently Added Project</h5>
                     <table class="table table-hover">
                        <thead>
                           <tr>
                              <th scope="col">Images</th>
                              <th scope="col">Name</th>
                              <th scope="col">Category</th>
                              <th scope="col">Location</th>
                              <th scope="col">Date</th>
                           </tr>
                        </thead>
                        <tbody>
                           @forelse($dashboardData['projects'] as $key => $project)
                              <tr>
                                 <td>
                                    @if ($project->image)
                                          @php
                                             $images = explode(',', $project->image)
                                          @endphp
                                          @foreach ($images as $index => $image)
                                                <img src={!! displayImage($image) !!} width="50px" height="50px" style="border-radius:5px" class="img-responsive my-1">
                                          @endforeach
                                    @endif
                                 </td>
                                 <td>{{$project->name}}</td>
                                 <td>{{$project->category_name}}</td>
                                 <td>{{$project->location}}</td>
                                 <td>{{$project->created_at}}</td>
                              </tr>
                              @empty
                              <tr><td colspan="5">No Project Found.</td></tr>
                           @endforelse
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
@endsection