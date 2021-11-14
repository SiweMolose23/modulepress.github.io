<?php
if(!empty(Auth::user())){
$roleid = Auth::user()->user_role;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="icon" href="{{ url('/images/logoblue.png') }}" type="image/x-icon" />
        <link href="{{ asset('/css/site.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body onload="isEmpty()">
<div id="main">
    @if ((!empty($roleid)) && $roleid == 0)
    @include('.inc/sidebar')
    @endif
  <div id="nav-placeholder">  @include('.inc/navbar')
</div>
<div id="homeContent">
@yield('content')
</div>
</div>


    <script>
        function openNav() {
          document.getElementById("mySidebar").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidebar").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
        }
        function navResponsive() {
          var x = document.getElementsByClassName("navbar-toggler-icon");
          if(x.innerHTML = "☰")
          {
            x.innerHTML = "X"
          }
        }
        
        function closeNavResponsive() {
          document.getElementsByClassName("navbar-toggler-icon").innerHTML = "X" ;
       
        }
        
        function isEmpty(){
          try{
         if($layout === "edit" || $layout === "layout" || $layout === "delete" || $layout === "show"){
          document.getElementById('content').innerHTML = $layout;
         }
        }
          catch(error){
            console.log("Error in if statement");
          }
        }
        </script>   
        
        {{-- @include('inc.footer') --}}
</body>
</html>