<?php 
foreach($modules as $module)
{  
$title = $module->module_name;
$id = $module->module_id;
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

    
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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

        @include('commentForm')
        <a class="btn btn-purple" id="likeButton" style="color:grey;">
          <i class="fas fa-heart pr-2" aria-hidden="true"></i><span id="likeText">Like</span></a>
    </div>
    
    @include('inc.footer')


    <script type="text/javascript" src="/plugins/jquery-1.11.3/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="{{ asset('/plugins/jquery-1.11.3/jquery-1.11.3.min.js')}}"></script>
      <script type="text/javascript" src="/plugins/bootstrap-3.4.1/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
      <script type="text/javascript" src="/plugins/ckeditor-4.11.4/ckeditor.js"></script>
      <script type="text/javascript" src="{{ URL::asset('plugins/bootstrap-3.4.1/js/bootstrap.min.js') }}"></script>
      <script type="text/javascript" src="/plugins/formBuilder-2.5.3/form-builder.min.js"></script>
      <script type="text/javascript" src="/plugins/formBuilder-2.5.3/form-render.min.js"></script>
   
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
rel="stylesheet"
/>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>

<script type="text/javascript">
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  </script>
<script type="text/javascript">
function submitComment(){
  var moduleid = <?php echo $id;?>;
  var comment = document.getElementById("comment").value;
  var url = '{{ url("/comment") }}';
  $.ajax({
    type: 'post',
    url:url,
    data:{
      id:moduleid,
      comment:comment
    },
    success: function(data){
                                     window.alert("Your comment was submitted!");
                                     setTimeout(function(){ window.location.reload();},10);
                              
                                },
                                error: function(data){
                                  window.alert("Your comment could not be submitted");
                                }
  })
}

  </script>
<script type="text/javascript">
$("#likeButton").click(function (){
  var moduleid = <?php echo $id;?>;
  if(document.getElementById("likeButton").style.color ==="grey"){
  var url = '{{ url("/like") }}';
  console.log("red");
  $.ajax({
    type: 'post',
    url:url,
    data:{
      id:moduleid
    },
    success: function(data){
                                     window.alert("liked");
                                     document.getElementById("likeButton").style.color="red";
                              
                                },
                                error: function(data){
                                  window.alert("Could not process");
                                     document.getElementById("likeButton").style.color="grey";
                                }
  })
  }
  else{
    var url = '{{ url("/unlike") }}';
    document.getElementById("likeButton").style.color ="grey";
    console.log("grey");
    $.ajax({
    type: 'post',
    url:url,
    data:{
      id:moduleid
    },
    success: function(data){
                                     window.alert("unliked");
                                     document.getElementById("likeButton").style.color="grey";
                              
                                },
                                error: function(data){
                                  window.alert("Could not process");
                                     document.getElementById("likeButton").style.color="red";
                                }
  })
  }
});
</script>
</body>
</html>

