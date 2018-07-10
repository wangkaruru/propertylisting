<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Welcome to bemmasam</title>    
        <!-- Plugins CSS -->
        <link href="css/plugins/plugins.css" rel="stylesheet">
        <!-- load css for cubeportfolio -->
        <link rel="stylesheet" type="text/css" href="cubeportfolio/css/cubeportfolio.min.css">  
        <link rel="stylesheet" type="text/css"  href="smart-form/smart-templates/css/smart-forms.css">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div id="preloader">
            <div id="preloader-inner"></div>
        </div><!--/preloader-->

        <!-- Pushy Menu -->
        <aside class="pushy pushy-right">
            <div class="advanced-search">
                <h4>Find Homes</h4>
                <hr>
                <form>
                    <div class="form-group">
                        <label for="location">Enter Location</label>
                        <input type="text" id="location" class="form-control" placeholder="eg. Paris">
                    </div><!--form group-->
                    <div class="form-group">
                        <label for="types">Any Types</label>
                        <select class="form-control" id="types">
                            <option> Any types</option>
                            <option> Apartments</option>
                            <option> Houses</option>
                            <option> Commercial</option>
                            <option> Garages</option>
                            <option> Lots</option>
                        </select>
                    </div><!--form group-->
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="min-price">Min. Price ($)</label>
                                <input type="text" id="min-price" class="form-control" placeholder="eg. $1000">
                            </div><!--form group-->
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="max-price">Max. Price ($)</label>
                                <input type="text" id="max-price" class="form-control" placeholder="eg. $15000">
                            </div><!--form group-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="min-area">Min. Area (Sq Ft)</label>
                                <input type="text" id="min-area" class="form-control" placeholder="Sq Ft">
                            </div><!--form group-->
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="max-area">Max. Area (Sq Ft)</label>
                                <input type="text" id="max-area" class="form-control" placeholder="Sq Ft">
                            </div><!--form group-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="beds">Beds</label>
                                <select class="form-control" id="beds">
                                    <option> Beds</option>
                                    <option> 1</option>
                                    <option> 2</option>
                                    <option> 3</option>
                                    <option> 4</option>
                                    <option> 5</option>
                                </select>
                            </div><!--form group-->
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="max-area">Baths</label>
                                <select class="form-control" id="baths">
                                    <option> Baths</option>
                                    <option> 1</option>
                                    <option> 2</option>
                                    <option> 3</option>
                                    <option> 4</option>
                                    <option> 5</option>
                                </select>
                            </div><!--form group-->
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg btn-block">Search</button>
                </form>

            </div>
        </aside>
        <!-- Site Overlay -->
        <div class="site-overlay"></div>
        <div class="top-bar clearfix hidden-md-down">
            <div class="container">
                <div class="float-lg-left">
                    <div class="top-contact-info">
                        <span>
                            <i class="ti-mobile"></i>
                            +254737050966
                        </span>
                        <span>
                            <i class="ti-email"></i>
                            info@bemmasam.co.ke
                        </span>
                    </div>
                </div>
                <div class="float-lg-right">
                    <div class="clearfix">
                        <a href="https://www.facebook.com/bemmasamproperties/" class="social-icon-sm si-dark si-colored-facebook si-gray-round">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com/Bemmasamp" class="social-icon-sm  si-dark si-colored-twitter si-gray-round">
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/Bemmasam/" class="social-icon-sm si-dark si-colored-linkedin si-gray-round">
                            <i class="fa fa-instagram"></i>
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="{{url('submit')}}" class="btn btn-outline-primary btn-rounded btn-sm">Do you wish to buy,sell or manage your property?</a>
                        
                    </div>
                </div>
            </div>
        </div><!-- Top Bar -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-transparent bg-faded nav-sticky">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">
                    <img class='logo logo-dark' src="images/translogo.PNG" alt="Logo">
                </a>
                <div  id="navbarNavDropdown" class="navbar-collapse collapse">
                    <ul class="navbar-nav ml-auto">
                     <li class="nav-item dropdown"><a href="{{url('/')}}" class="nav-link">Home</a></li>

                       <li class="nav-item dropdown"><a href="{{url('about')}}" class="nav-link">About</a></li>
                         <li class="nav-item dropdown"><a href="{{url('propertylist')}}" class="nav-link">Properties</a></li>

                        
                        <li class="nav-item dropdown"><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
                    </ul>        
                </div>
               
            </div>
        </nav>

        <div class="white-page-content">
            <div class="container pt0 pb40">
                <ol class="breadcrumb mb30">

                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Property Detail</li>
                </ol>
                <div class="row">
                    <div class="col-md-9 mb30">
                        
                        <div id="js-grid-slider-thumbnail" class="cbp">
                        @foreach ($listings as $listing)
                                      
                            <div class="cbp-item">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                    <img src="{{ asset("images/$listing->image") }}" alt="">
                                    </div>
                                </div>
                            </div>
                              
                            @endforeach
                            
                           
                            
                        </div>

                        <div id="js-pagination-slider">
                        @foreach ($listings as $listing)
                                     
                            
                            <div class="cbp-pagination-item">
                            <img src="{{ asset("images/$listing->image") }}" alt="">

                            </div>
                            @endforeach
                            
                            
                        </div>
                        
                    </div>
                    <div class="col-md-3">
                    <div class="sidebar-widget">
                            <h4 class="sidebar-title">Contact Us</h4>
                            <a href="{{url('contact')}}"><button  class="btn btn btn-primary btn-rounded  mb20">Click to Contact us</button></a>
                            
                            </div>
                           
                            <div class="clearfix"></div>
                            <h3 class="mb0">Description</h3><hr>
                            <p>One acre commercial plot touching namanga Rd. Before kisaju town. Between RAF University and KAG University. Area developed with commercial buildings and go downs. title deed available.</p>
                            <hr>
                           
                                        
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer footer-dark pt100 pb30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb40">
                        <h3>About Us</h3>
                        <p>
                            Bemmasam Holding Company ltd (BHC) is a locally-owned, independent real general supplies and property/real estate company incorporated in the Republic of Kenya under the companies Act cap 486 laws of Kenya. The company was started in the year 2011 and registered under a business name; the company was upgraded and duly registered as a Limited Company on 14th April 2015.
                        </p>
                        <a href="{{url('about')}}" class="btn btn-sm btn-white-outline">Learn More</a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb40">
                        <h3>Quick Links</h3>
                        <ul class="list-unstyled footer-list-item">
                            <li>
                                <a href="#">
                                    Home
                                </a><br>
                                <em></em>
                            </li>
                            <li>
                                <a href="#">
                                    Properties
                                </a><br>
                                <em></em>
                            </li>
                            <li>
                                <a href="#">
                                    About Us
                                </a><br>
                                <em></em>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb40">
                        <h3>Featured properties</h3>
                        <div class="clearfix">
                            <a href="#" class="thumb-hover-icon">
                                <img src="images/propimg7.jpg" alt="" class="img-fluid" width="90">
                                <span class="ti-plus"></span>
                            </a><!--/.hover-->
                            <a href="#" class="thumb-hover-icon">
                                <img src="images/propimg8.jpg" alt="" class="img-fluid" width="90">
                                <span class="ti-plus"></span>
                            </a><!--/.hover-->
                            <a href="#" class="thumb-hover-icon">
                                <img src="images/propimg9.jpg" alt="" class="img-fluid" width="90">
                                <span class="ti-plus"></span>
                            </a><!--/.hover-->
                            <a href="#" class="thumb-hover-icon">
                                <img src="images/propimg4.jpg" alt="" class="img-fluid" width="90">
                                <span class="ti-plus"></span>
                            </a><!--/.hover-->
                            <a href="#" class="thumb-hover-icon">
                                <img src="images/propimg5.jpg" alt="" class="img-fluid" width="90">
                                <span class="ti-plus"></span>
                            </a><!--/.hover-->
                            <a href="#" class="thumb-hover-icon">
                                <img src="images/propimg6.jpg" alt="" class="img-fluid" width="90">
                                <span class="ti-plus"></span>
                            </a><!--/.hover-->
                        </div><!--/.clearfix-->
                    </div>
                    <div class="col-lg-3 col-md-6 mb40">
                        <h3>Contact Us</h3>
                        <ul class="list-unstyled contact-list-item">
                            <li>
                                
                               
                            </li>
                            <li>
                                <i class="ti-email"></i>
                               info@bemmasam.co.ke
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                               +254737050966
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <span>&copy; Copyright 2018. All Right Reserved.</span>
                        </div>
                        <div class="col-sm-8 text-right">
                            
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--/footer-->
        <!--back to top-->
        <a href="#" class="back-to-top hidden-xs-down" id="back-to-top"><i class="ti-angle-up"></i></a>
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script type="text/javascript" src="js/plugins/plugins.js"></script> 
        <script type="text/javascript" src="js/assan.custom.js"></script> 
        <script type="text/javascript" src="cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="js/cube-thumbSlider.js"></script> 
        <!--google map-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMwVpUj3-oHHW8N21819BhKttOga2Rj2s"></script>
        <script src="js/jquery.gmap.min.js"></script> 
        <script>
            // Marker Map
            $(document).ready(function () {
                map = new GMaps({
                    scrollwheel: false,
                    el: '#markermap',
                    lat: 26.981942,
                    lng: 75.684486

                });
                map.addMarker({
                    lat: 26.981942,
                    lng: 75.684486,
                    title: 'Marker with InfoWindow',
                    infoWindow: {
                        content: '<h4>GUNJAN Land & builders</h4><p>We build your dreams</p>'
                    }
                });
            });
        </script> 
        <!--Contact script-->
        <script src="js/contact.js" type="text/javascript"></script>
    </body>
</html>
