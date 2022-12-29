<div class="border-end border-warning h-100">
    <div class="text-center">
     <img src="{{asset ('images/profile.jpg')}}" alt="" class="img-fluid rounded-circle mt-5">
     <h3 class="text-white mt-3 st-font">Abdul Hafeez</h3>
    </div>
    <nav class="nav flex-column text-center mt-4">
     <a href=" {{ route('home')}}" class="nav-link {{ Request::routeIs('home') ? 'active': ''}} ">Home</a>
     <a href="{{ route('services')}}" class="nav-link {{ Request::routeIs('services') ? 'active': ''}}">Services</a>
     <a href="{{ route('skill')}}" class="nav-link {{ Request::routeIs('skill') ? 'active': ''}}">Skill</a>
     <a href="{{ route('contact')}}" class="nav-link {{ Request::routeIs('contact') ? 'active': ''}} ">Contact</a>
     <a href="{{ route('projects')}}" class="nav-link {{ Request::routeIs('projects') ? 'active': ''}} ">Projects</a>

    </nav>
   </div>