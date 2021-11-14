
<nav class="navbar navbar-expand-lg  navbar-fixed-top" style="background-color: #f2ad1c;">
    <div class="container-fluid">
    <button class="openbtn" onclick="openNav()">☰</button>  
    <a class="navbar-brand" href="/">
      <img  src="{{ url('/images/logoblue.png') }}"> Module CMS
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/about" id="link">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/modules" id="link">Modules</a>
          </li>
          @guest
          @if (Route::has('login'))
         
          @endif
          @else
        
            <a class="nav-link " href="/mymodules" id="link">
              Your Modules
            </a>
          
          @endguest
        </ul>
         <!-- Right Side Of Navbar -->
         <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}" id="link">{{ __('Login') }} </a>
                  </li>
              @endif

              {{-- @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}" id="link">{{ __('Register') }}</a>
                  </li>
              @endif --}}
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
        <form class="d-flex"type="get" action="search">
          <input class="form-control me-2" type="search" placeholder="Search" name="query" aria-label="Search">
          <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
        </form> 
      </div>
    </div>
  </nav>

{{-- <script>
$(document).ready(function(){
  $('#search').on('keyup',function(){
    var query = $(this).val();
    $.ajax({
      url:"search",
      type:"GET",
      data{'search':query

      }
      success: function(data){
        console.log("Success");
                             },
      error: function(data){
        console.log("Fail");
                           }
    })
  })
})
</script> --}}