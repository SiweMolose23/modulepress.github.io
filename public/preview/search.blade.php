@include('master')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Search Modules</title>
  </head>
  
  <body>
    <div id="contentWidth">
    <h1>Search results</h1>

    @if($layout == null)
    <div class="container-fluid">
        <section class="col">
            @include("searchlist")
        </section>
        <section class="col"></section>
    </div> 
     @elseif($layout == 'index')
    <div class="container-fluid">
        <section class="col">
            @include("searchlist")
        </section>
        <section class="col"></section>

    </div> 
 @elseif($layout == 'create')
    <div class="container-fluid">
        <section class="col">
            @include("searchlist")
        </section>
        <section class="col"></section>

    </div>
    @elseif($layout == 'show')
    <div class="container-fluid">
        <section class="col">
            @include("list")
        </section>
        <section class="col"></section>

    </div>
    @elseif($layout == 'edit')
    <div class="container-fluid">
        <section class="col">
            @include("searchlist")
        </section>
        <section class="col"></section>

    </div>

  
    @endif 
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
    <div id=footer>@include('.inc/footer')
    </div> 
</body>
</html>

