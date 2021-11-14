<?php
if(!empty(Auth::user())){
$roleid = Auth::user()->user_role;
}
?>

<head>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/exampleK.css') }}" />
<link href="{{ asset('/css/site.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<nav class="navbar navbar-expand-lg  navbar-fixed-top" style="background-color: #f2ad1c;">
    <div class="container-fluid">
    @if ((!empty($roleid)) && $roleid == 0)
    <button class="openbtn" onclick="openNav()">☰</button>  
    @endif
      <a class="navbar-brand" href="/">
    <img  src="{{ url('/images/logoCMS.png') }}"> 
      </a>
      <button class="navbar-toggler" onclick="navResponsive()" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">☰</span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @if ((!empty($roleid)) && $roleid != 2)
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/about" id="link">How it works</a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="/modules" id="link">Modules</a>
          </li>
          @guest
          @if (Route::has('login'))
         
          @endif
          @else
          @if ($roleid == 1)
            <a class="nav-link " href="/mymodules" id="link">
              Your Modules
            </a>
          @endif
          @if($roleid ==0)
          <a class="nav-link " href="/admin" id="link">
            Your Dashboard
          </a>
          @endif
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

          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  v-pre>
                      Hello {{ Auth::user()->name }}
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
        <form class="d-flex" type="get" action="search">
          <input class="form-control me-2" type="search" placeholder="Search" name="query" aria-label="Search">
          <button class="btn btn-dark" type="submit">Search</button>
        </form> 
      </div>
    </div>
  </nav>
  

 