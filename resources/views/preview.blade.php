<?php 
foreach($modules as $module)
{  
$title = $module->module_name;
}
?>

@include('master')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
            <link href="{{ asset('/css/site.css') }}" rel="stylesheet">
            <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  
    <title>{{ $title }}</title>
  </head>
  
  <body>
    <div id="contentWidth">
          @foreach ($modules as $module)     
        {!! $module->pagehtml !!}
        
        @endforeach
    </div>
    {{-- <div id=footer>@include('.inc/footer') --}}
      <div>
      @if(!empty($userID))
      @foreach ($modules as $module)
      @if($module->user_id  == $userID)   
       <a class="btn btn-sm btn-info"  id="previewEdit" href="{{ url('update/'.$module->module_id) }}" style="position:relative;">Edit Content</a>  
      @endif
      @endforeach 
      @endif
      
    </div>
   
    
 
</body>
<footer style="position:relative;">
      <div id="bottomText">
          &copy;ModuleCMS - 2021
          <br />
          <a href="facebook.com"><img src="{{ url('/images/facebook.png') }}" alt="ModuleCMS Facebook" class="fa" /></a>
          <a href="instagram.com"><img src="{{ url('/images/Instagram.png') }}" alt="ModuleCMS Instagram" class="fa" /></a>
          <a href="twitter.com"><img src="{{ url('/images/Path 2.png') }}" alt="ModuleCMS Twitter" class="fa" /></a>
          <a href="#"><img src="{{ url('/images/web.png') }}" alt="ModuleCMS " class="fa" /></a>
  
      </div>
  </footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</html>

