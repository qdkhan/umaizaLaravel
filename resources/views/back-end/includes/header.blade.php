<header id="header" class="header fixed-top d-flex align-items-center">
   <div class="d-flex align-items-center justify-content-between">
      <a href="javascript:void(0)" class="logo d-flex align-items-center">
      <img src="{{ asset('storage/logo.jpg') }}" alt="">
      <span class="d-none d-lg-block">Umeza Construction</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
   </div>
   <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
         <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
            </a>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
               <li class="dropdown-header">
                  You have 3 new messages
                  <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
               </li>
               <li>
                  <hr class="dropdown-divider">
               </li>
               <li class="message-item">
                  <a href="#">
                     <img src="{{asset('storage/img/messages-1.jpg')}}" alt="" class="rounded-circle">
                     <div>
                        <h4>Maria Hudson</h4>
                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                        <p>4 hrs. ago</p>
                     </div>
                  </a>
               </li>
               <li>
                  <hr class="dropdown-divider">
               </li>
               <li class="message-item">
                  <a href="#">
                     <img src="{{asset('storage/img/messages-2.jpg')}}" alt="" class="rounded-circle">
                     <div>
                        <h4>Anna Nelson</h4>
                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                        <p>6 hrs. ago</p>
                     </div>
                  </a>
               </li>
               <li>
                  <hr class="dropdown-divider">
               </li>
               <li class="message-item">
                  <a href="#">
                     <img src="{{asset('storage/img/messages-3.jpg')}}" alt="" class="rounded-circle">
                     <div>
                        <h4>David Muldon</h4>
                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                        <p>8 hrs. ago</p>
                     </div>
                  </a>
               </li>
               <li>
                  <hr class="dropdown-divider">
               </li>
               <li class="dropdown-footer">
                  <a href="#">Show all messages</a>
               </li>
            </ul>
         </li>
         <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{!! displayImage(Auth::user()->image) !!}" alt="Profile" class="rounded-circle" style="width:36px;height:36px">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
               <li class="dropdown-header">
                  <h6>{{Auth::user()->name}}</h6>
                  <span>Web Designer</span>
               </li>
               <li>
                  <hr class="dropdown-divider">
               </li>
               <li>
                  <hr class="dropdown-divider">
               </li>
               <li>
                  <a class="dropdown-item d-flex align-items-center" href="{{url('get-update-profile')}}">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                  </a>
               </li>
               <li>
                  <hr class="dropdown-divider">
               </li>
               <li>
                  <hr class="dropdown-divider">
               </li>
               <li>
                  <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                  </a>
               </li>
            </ul>
         </li>
      </ul>
   </nav>
</header>