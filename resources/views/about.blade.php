<?php
$temp = 2;
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
    <link href="{{ asset('/css/site.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>How It Works</title>
  </head>
  
  <body>
      
    <div id="contentWidth">
    <h1>About</h1>
    <h2>Let's Talk about CMS</h2>
<p>
    Content management system (CMS) is a prolific software category that covers all types of applications for the creation and modification of digital content. So it should come as no huge surprise that the history of the CMS traces back to the first website in history, by Tim Berners-Lee in 1990, which was modeled on an internet-based hypertext system HTML, which represented just text and links.

  
    timeline of CMS market evolution
    The humble beginnings of the world wide web lay in static sites that served content without the need for a back-end database. They consumed very little computing resources, so they loaded quickly—because there were no database queries, no templates to render, and no client-server requests to process. There was also little in the way of web traffic, given that few people were regular "web surfers," especially compared to today.
    
    And, of course, it was all open source software that facilitated this interoperability. Indeed, open source has always played an important role in the evolution of CMS.
    
    Rise of the CMS
    Fast-forward to the mid-nineties, as the popularity of the world wide web grows and websites increase the need for frequent updates—a change from its origins hosting brochure-type static content. This led to the introduction of a plethora of CMS products from FileNet, StoryBuilder from Vignette, Documentum, and many others. These were all proprietary, closed source products, which was not unusual for that time period.
</p>
   
<p>
    Throughout the evolution of the content management system, which has been driven by how information on the internet is consumed, open source software has progressed along the same trend lines, with new technologies emerging to solve arising requirements. Indeed, it seems there is an interdependency between CMS, the world wide web, and open source. The need to manage the growing volumes of content isn't going away anytime soon. There is every reason to expect even more widespread adoption of open source software in the coming ahead.
</p>
    
<h1>How does ModuleCMS Work</h1>
<p>
        ModuleCMS(TBD) is a content management system that will be used by lecturers to create
        digital material that will best showcase elective modules to prospective student. Lecturers
        should be able to create pages that contain videos, images and any media of their
        choosing to best describe what their elective module is about.
        Elective modules are modules that students are able to choose, i.e., not compulsory, which
        add varying or complementary information to their knowledge obtained throughout their
        degree.
        Content Management Systems or CMS are software that are designed to help users create,
        manage and display content on a digital platform. The main feature of the CMS is a content
        editor is a tool used to manage and edit the content on the CMS. Compared to coding a
        static webpage, using a content management system to create a webpage is much easier
        to develop and deploy. The simple interface of a CMS allows users of different
        technological ability to be able to learn and understand how to use it. Using a CMS can
        allow users to create personalized content and interactive material, giving them complete
        control.
        This system aims to make the process of marketing modules towards students a much
        easier process for lecturers. To do this it has to take into account the different principles
        that go into creating effective marketing campaigns for a particular audience. In this case
        the audience is whoever is able to register for the module.
</p>
<p>
    Get started with a template!
</p>
<a id="start"  href="{{ url('template/'.$temp) }}" type="button" class="btn btn-primary btn-lg" style="position:centered;" >Get Started </a>

      <div class="row">
        <div class="column"> 
            Play this to get a better understanding
                <video width="320" height="180" frameborder="0">
                    <source  src="https://livenmmuac-my.sharepoint.com/:v:/g/personal/s217720080_mandela_ac_za/EXRR1CoCkJtKoOmryMSVj9QBHDq9OXvoXTT7cHigsRwMnQ?e=JdH5Wj" >
                </video>
        </div >
    </div>
</div>

<button id="start" href="#" type="button" class="btn btn-primary" style="position:centered;">Get Started</button>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     
    <footer style="position:fixed;">
        <div id="bottomText">
            &copy;ModuleCMS - 2021
            <br />
            <a href="facebook.com"><img src="{{ url('/images/facebook.png') }}" alt="ModuleCMS Facebook" class="fa" /></a>
            <a href="instagram.com"><img src="{{ url('/images/Instagram.png') }}" alt="ModuleCMS Instagram" class="fa" /></a>
            <a href="twitter.com"><img src="{{ url('/images/Path 2.png') }}" alt="ModuleCMS Twitter" class="fa" /></a>
            <a href="#"><img src="{{ url('/images/web.png') }}" alt="ModuleCMS " class="fa" /></a>
  
        </div>
    </footer>
</body>

  
</html>

