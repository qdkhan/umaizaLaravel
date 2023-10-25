<aside id="sidebar" class="sidebar">
   <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
         <a class="nav-link" href="{{url('/dashboard')}}">
         <i class="bi bi-grid"></i>
         <span>Dashboard</span>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="{{url('team-list')}}">
            <i class="bi bi-people"></i>
            <span>Teams</span>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-shop"></i><span>Projects</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
               <a href="{{url('category-list')}}">
               <i class="bi bi-circle"></i><span>Category</span>
               </a>
            </li>
            <li>
               <a href="{{url('project-list')}}">
               <i class="bi bi-circle"></i><span>Projects</span>
               </a>
            </li>
         </ul>
      </li>
      <li class="nav-item">
         <a class="nav-link collapsed" href="{{url('enquiry-list')}}">
         <i class="bi bi-question-circle"></i>
         <span>Customer enquiry</span>
         </a>
      </li>
   </ul>
</aside>