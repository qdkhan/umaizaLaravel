<header id="header" class="header-two">
   <div class="container">
      <div class="row">
         <div class="navbar-header">
            <div class="logo">
               <a href="/">
               <img src="{{asset('storage/black.png')}}" alt="logo" style="width:80px;height:80px;border-radius:50%">
               </a>
            </div>
         </div>
         <nav class="site-navigation navigation pull-right" style="padding-top:28px;">
            <div class="site-nav-inner">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <div class="collapse navbar-collapse navbar-responsive-collapse">
                  <ul class="nav navbar-nav header-bar">
                     <li class="dropdown">
                        <a href="{{url('/')}}" >Home </a>
                     </li>
                     <li class="dropdown">
                        <a href="{{route('front.company')}}">Company </a>
                     </li>
                     <li class="dropdown">
                        <a href="{{route('front.projects')}}">Projects</a>
                     </li>
                     <li class="dropdown">
                        <a href="{{route('front.services')}}">Services</a>
                     </li>
                     <li class="dropdown">
                        <a href="{{route('front.news')}}" >News </a>
                     </li>
                     <li>
                        <a href="{{route('front.contact')}}">Contact</a>
                     </li>
                     <li>
                        <a href="{{route('login')}}" class="btn btn-primary">Login</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
   </div>
</header>