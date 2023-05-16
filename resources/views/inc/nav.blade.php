<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
         
            @guest
            
          
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('register')}}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('login')}}">LogIn</a>
          </li>
  
@endguest

@auth
  

          
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{route('logout')}}">LogOut</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{route('dashboard')}}">DashBoard</a>
          </li>
          @endauth
          <span class="text-white">{{auth()->user() !=null ? auth()->user()->name : "Guest"}}</span>

        </ul>
      </div>
    </div>
  </nav>