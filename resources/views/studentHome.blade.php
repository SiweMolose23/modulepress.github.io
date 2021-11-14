@include('master')

@section('title','Home')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


          <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>@yield('title')</title>
            <link rel="icon" href="{{ url('/images/logoblue.png') }}" type="image/x-icon" />
            <link href="{{ asset('/css/site.css') }}" rel="stylesheet">
            <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Modules</title>
  </head>
  <body>
  <nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ url('/images/banner2.png') }}"  alt="Burger" class="d-block w-100" />
            <div class="carousel-caption" role="option">
                
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ url('/images/banner3.png') }}" alt="Impossible Burger" class="d-block w-100" />
            <div class="carousel-caption" role="option">
                
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ url('/images/banner1.png') }}" alt="Microsoft Azure" class="d-block w-100" />
            <div class="carousel-caption" role="option">
               
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"  aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"  aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div> 
  </nav>

<div id="contain">
        <section class="pb-5">
                <div class="container text-center">
                    <!-- Masonry grid -->
                    <div class="gallery-wrapper">
                        <!-- Grid sizer -->
                        <div class="grid-sizer col-lg-4 col-md-6"></div>
                        
                        <!-- Grid item -->
                        <div class="col-lg-4 col-md-6 grid-item mb-4">
                            <img class="img-fluid w-100 mb-3 img-thumbnail shadow-sm rounded-0" src="https://res.cloudinary.com/mhmd/image/upload/v1579670060/grid-item-1_gdkusl.png" alt="">
                            <h2 class="h4">Masonry grid item</h2>
                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        
                        <!-- Grid item -->
                        <div class="col-lg-4 col-md-6 grid-item mb-4">
                            <img class="img-fluid w-100 mb-3 img-thumbnail shadow-sm rounded-0" src="https://res.cloudinary.com/mhmd/image/upload/v1579670057/grid-item-2_ek540c.png" alt="">
                            <h2 class="h4">Masonry grid item</h2>
                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        
                        <!-- Grid item -->
                        <div class="col-lg-4 col-md-6 grid-item mb-4">
                            <img class="img-fluid w-100 mb-3 img-thumbnail shadow-sm rounded-0" src="https://res.cloudinary.com/mhmd/image/upload/v1579670057/grid-item-3_osmjje.png" alt="">
                            <h2 class="h4">Masonry grid item</h2>
                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        
                        <!-- Grid item -->
                        <div class="col-lg-4 col-md-6 grid-item mb-4">
                            <img class="img-fluid w-100 mb-3 img-thumbnail shadow-sm rounded-0" src="https://res.cloudinary.com/mhmd/image/upload/v1579670059/grid-item-4_nfmiyt.png" alt="">
                            <h2 class="h4">Masonry grid item</h2>
                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        
                        <!-- Grid item -->
                        <div class="col-lg-4 col-md-6 grid-item mb-4">
                            <img class="img-fluid w-100 mb-3 img-thumbnail shadow-sm rounded-0" src="https://res.cloudinary.com/mhmd/image/upload/v1579670057/grid-item-5_sft8ph.png" alt="">
                            <h2 class="h4">Masonry grid item</h2>
                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        
                        <!-- Grid item -->
                        <div class="col-lg-4 col-md-6 grid-item mb-4">
                            <img class="img-fluid w-100 mb-3 img-thumbnail shadow-sm rounded-0" src="https://res.cloudinary.com/mhmd/image/upload/v1579670052/grid-item-6_apvkno.png" alt="">
                            <h2 class="h4">Masonry grid item</h2>
                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </section>
            

</div>
 


@include('inc.footer')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
