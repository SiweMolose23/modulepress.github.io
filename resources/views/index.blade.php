<?php
$bus = 2;
$edu = 3;
$hum = 1;
$eng = 4;
$heal= 5;
$law = 6;
$sci = 7;
?>

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
            <link href="{{ asset('/css/grid.css') }}" rel="stylesheet">
            <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

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

<div id="contain" style="min-height:100vh;">
    <div class="col-md-12">
        <h1>Welcome to Module CMS</h1>   
    </div>  
        <br/>
        <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="product-grid2">
                            <div class="product-image2"> <a href="{{ url('index/'.$bus) }}"> <img class="pic-1" src="{{ url('/images/Business.jpeg') }}"> <img class="pic-2" src="{{ url('/images/bus2.png') }}"> </a>
                                <ul class="social">
                   
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="{{ url('index/'.$bus) }}">Faculty of Business & Economic Sciences</a></h3> <span class="price"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-grid2">
                            <div class="product-image2"> <a href="{{ url('index/'.$edu) }}"> <img class="pic-1" src="{{ url('/images/Education.jpeg') }}"> <img class="pic-2" src="{{ url('/images/edu2.png') }}"> </a>
                                <ul class="social">
                            
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="{{ url('index/'.$edu) }}">Faculty of Education</a></h3> <span class="price"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-grid2">
                            <div class="product-image2"> <a href="{{ url('index/'.$eng) }}"> <img class="pic-1" src="{{ url('/images/EBEIT.jpeg') }}"> <img class="pic-2" src="{{ url('/images/ebeit2.png') }}"> </a>
                                <ul class="social">
                        
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="{{ url('index/'.$eng) }}">Faculty of Engineering, Built Environment and Technology</a></h3> <span class="price"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="product-grid2">
                            <div class="product-image2"> <a href="{{ url('index/'.$heal) }}"> <img class="pic-1" src="{{ url('/images/HS.jpeg') }}"> <img class="pic-2" src="{{ url('/images/heal2.png') }}"> </a>
                                <ul class="social">
                                   
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="{{ url('index/'.$heal) }}">Faculty of Health Sciences</a></h3> <span class="price"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-grid2">
                            <div class="product-image2"> <a href="{{ url('index/'.$hum) }}"> <img class="pic-1" src="{{ url('/images/Arts.jpeg') }}"> <img class="pic-2" src="{{ url('/images/hum2.png') }}"> </a>
                                <ul class="social">
                           
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="{{ url('index/'.$hum) }}">Faculty of Humanities</a></h3> <span class="price"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-grid2">
                            <div class="product-image2"> <a href="{{ url('index/'.$law) }}"> <img class="pic-1" src="{{ url('/images/Law.jpeg') }}"> <img class="pic-2" src="{{ url('/images/law2.png') }}"> </a>
                                <ul class="social">
                           
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="{{ url('index/'.$law) }}">Faculty of Law</a></h3> <span class="price"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="product-grid2">
                            <div class="product-image2"> <a href="{{ url('index/'.$sci) }}"> <img class="pic-1" src="{{ url('/images/Science.jpeg') }}"> <img class="pic-2" src="{{ url('/images/science2.png') }}"> </a>
                                <ul class="social">
                                 
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="{{ url('index/'.$sci) }}">Faculty of Sciences</a></h3> <span class="price"></span>
                            </div>
                        </div>
                    </div>
                   
            </div>
            <hr>

        </div>
        @include('inc.footer')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



  </body>
</html>
