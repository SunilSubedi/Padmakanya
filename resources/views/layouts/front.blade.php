<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>PK School : Home</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png"/> -->

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="{{ asset('pk/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="{{ asset('pk/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="{{ asset('pk/css/superslides.css')}}">
    <!-- Slick slider css file -->
    <link href="{{ asset('pk/css/slick.css')}}" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="{{ asset('pk/css/animate.css')}}"> 
    <!-- preloader -->
    <link rel="stylesheet" href="{{ asset('pk/css/queryLoader.css')}}" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="{{ asset('pk/css/jquery.tosrus.all.css')}}" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="{{ asset('pk/css/themes/default-theme.css')}}" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="{{ asset('pk/style.css')}}" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    
 
  </head>
  <body>    

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              
                <!-- IMG BASED LOGO   -->
                <a class="navbar-brand" href="index.html" style="margin-top:0px;"><img src="img/logo.png" width="50px" height="50px" alt="logo"></a>           
            <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.html">PadmaKanya <span>School</span></a>              
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="{{url('exam')}}">Exam</a></li>
                <li><a href="{{url('carrer')}}">Career</a></li>

                <li><a href="{{url('scholarship')}}">Scholarship</a></li>
                <li><a href="{{url('events')}}">Events</a></li>
                <li><a href="{{url('gallery')}}">Gallery</a></li>                
               
                          
                <li><a href="{{url('contact')}}">Contact</a></li>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 



   @yield('content')

     
        

    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>About Us</h3>
                <p>Padma Kanya Vidyashram Secondary School is located in Dillibazar, Kathmandu and with affiliation from NEB it offers plus two program in Management, Humanities and Education.</p>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>PK School</h3>
                <ul class="footer_widget_nav">
                  <li><a href="#">Programs</a></li>
                  <li><a href="#">Our Courses</a></li>
                  <li><a href="#">Our Team</a></li>
                  <li><a href="#">Extra Activities</a></li>
                  <li><a href="#">Latest &amp; News</a></li>
                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Others Links</h3>
                <ul class="footer_widget_nav">
                  <li><a href="#">Ministry Of Education</a></li>
                  <li><a href="#">PK Campus</a></li>
                  <li><a href="#">Banijya Bank</a></li>
                  <li><a href="#">CTEVT</a></li>
                  <li><a href="#">SEE</a></li>
                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer top area -->

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> Copyright &copy; <a href="http://bikash-adhikari.com.np/">Bikash Adhikari</a> </a></p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
                <p>Designed by <a href="http://bikash-adhikari.com.np/" rel="nofollow">Bikash Adhikari</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->
    </footer>
    <!--=========== END FOOTER SECTION ================--> 

  


    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
    <script src="{{asset('pk/js/queryloader2.min.js')}}" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="{{ asset('pk/js/wow.min.js')}}"></script>  
    <!-- Bootstrap js -->
    <script src="{{asset('pk/js/bootstrap.min.js')}}"></script>
    <!-- slick slider -->
    <script src="{{ asset('pk/js/slick.min.js')}}"></script>
    <!-- superslides slider -->
    <script src="{{ asset('pk/js/jquery.easing.1.3.js')}}"></script>
    <script src=" {{ asset('pk/js/jquery.animate-enhanced.min.js')}}"></script>
    <script src="{{ asset('pk/js/jquery.superslides.min.js')}}" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="{{ asset('pk/js/jquery.tosrus.min.all.js')}}"></script>   
   
    <!-- Custom js-->
    <script src="{{ asset('pk/js/custom.js')}}"></script>
    
    


  </body>
</html>