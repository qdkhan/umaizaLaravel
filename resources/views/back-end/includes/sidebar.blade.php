<aside id="sidebar" class="sidebar">
   <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
         <a class="nav-link collapsed" href="{{url('/dashboard')}}">
         <i class="bi bi-grid"></i>
         <span>Dashboard</span>
         </a>
      </li>
      <li class="nav-item {{ Request::is('team*') || Request::is('get-update-team*') ? 'active' : '' }}">
         <a class="nav-link collapsed" href="{{url('team-list')}}">
            <i class="bi bi-people"></i>
            <span>Teams</span>
         </a>
      </li>
      <li class="nav-item {{ Request::is('category*') || Request::is('project*') || Request::is('get-update-category*') || Request::is('get-update-project*') ? 'active' : '' }}">
         <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#" area-expanded="{{ Request::is('category*') || Request::is('project*') ? 'true' : '' }}">
         <i class="bi bi-shop"></i><span>Projects</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="forms-nav" class="nav-content collapse {{ Request::is('category*') || Request::is('project*') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
            <li>
               <a href="{{url('category-list')}}" class={{ Request::is('category*')  ? 'active' : '' }}>
               <i class="bi bi-circle"></i><span>Category</span>
               </a>
            </li>
            <li>
               <a href="{{url('project-list')}}" class={{ Request::is('project*') ? 'active' : '' }}>
               <i class="bi bi-circle"></i><span>Projects</span>
               </a>
            </li>
         </ul>
      </li>
      <li class="nav-item {{ Request::is('enquiry-list') ? 'active' : '' }}">
         <a class="nav-link collapsed" href="{{url('enquiry-list')}}">
         <i class="bi bi-question-circle"></i>
         <span>Customer enquiry</span>
         </a>
      </li>
      <li class="nav-item {{ Request::is('document*') || Request::is('get-update-document*') ? 'active' : '' }}">
         <a class="nav-link collapsed" href="{{url('document-list')}}">
         <i class="bi bi-file-earmark-text"></i>
         <span>Documents</span>
         </a>
      </li>
   </ul>
</aside>