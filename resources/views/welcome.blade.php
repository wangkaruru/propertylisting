<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Welcome to Bemmasam Holding</title>    
        <!-- Plugins CSS -->
        <link href="css/plugins/plugins.css" rel="stylesheet">
        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
        <!-- REVOLUTION LAYERS STYLES -->
        <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
        <!-- REVOLUTION NAVIGATION STYLES -->
        <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
        <!-- load css for cubeportfolio -->
        <link rel="stylesheet" type="text/css" href="cubeportfolio/css/cubeportfolio.min.css">     
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
        <div class="top-bar topBar-transparent clearfix hidden-md-down">
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
                        <a href="{{url('submit')}}" class="btn btn-white-outline btn-rounded btn-sm">Do you wish to buy,sell or manage your property?</a>
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
                    <img class='logo logo-light hidden-md-down' src="images/logo-medium.png" alt="Logo">
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

        <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 auto mode -->
            <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>    
                    <!-- SLIDE  -->
                    <li data-index="rs-3045" data-transition="parallaxtoleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="images/bg1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption property-price   tp-resizeme" 
                             id="slide-1706-layer-1" 
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['top','top','top','top']" data-voffset="['220','150','150','120']" 
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-fontsize="['20','20','20','20']"
                             data-lineheight="['25','25','25','25']"
                             data-type="text" 
                             data-responsive_offset="on"
                             data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 7; white-space: nowrap;text-transform:left;"></div>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption property-title text-center   tp-resizeme" 
                             id="slide-1706-layer-2" 
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['top','top','top','top']" data-voffset="['280','215','215','200']" 
                             data-fontsize="['55','55','40','30']"
                             data-lineheight="['65','65','55','35']"
                             data-width="['1140','700','621','420']"
                             data-height="none"
                             data-whitespace="normal"
                             data-type="text" 
                             data-responsive_offset="on" 
                             data-frames='[{"delay":1400,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[10,10,10,10]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 6; text-align:left; max-width:1170px; white-space: normal;">Welcome to Bemmasam </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption mainSlide-Button btn btn-white-outline btn-rounded" 
                             id="slide-1706-layer-3" 
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['top','top','top','top']" data-voffset="['370','300','290','266']" 
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="button" 
                             data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                             data-responsive_offset="on" 
                             data-responsive="off"
                             data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[12,12,12,12]"
                             data-paddingright="[35,35,35,35]"
                             data-paddingbottom="[12,12,12,12]"
                             data-paddingleft="[35,35,35,35]"
                             style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">View Details</div>
                    </li>
 <!-- SLIDE  -->
                    <li data-index="rs-3046" data-transition="parallaxtoleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="images/bg2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption property-price   tp-resizeme" 
                             id="slide-1706-layer-4" 
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['top','top','top','top']" data-voffset="['220','150','150','120']" 
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-fontsize="['20','20','20','20']"
                             data-lineheight="['25','25','25','25']"
                             data-type="text" 
                             data-responsive_offset="on"
                             data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 7; white-space: nowrap;text-transform:left;"></div>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption property-title text-center   tp-resizeme" 
                             id="slide-1706-layer-5" 
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['top','top','top','top']" data-voffset="['280','215','215','200']" 
                             data-fontsize="['55','55','40','30']"
                             data-lineheight="['65','65','55','35']"
                             data-width="['1140','700','621','420']"
                             data-height="none"
                             data-whitespace="normal"
                             data-type="text" 
                             data-responsive_offset="on" 
                             data-frames='[{"delay":1400,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[10,10,10,10]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 6; text-align:left; max-width:1170px; white-space: normal;">Welcome to Bemmasam </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption mainSlide-Button btn btn-white-outline btn-rounded" 
                             id="slide-1706-layer-6" 
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['top','top','top','top']" data-voffset="['370','300','290','266']" 
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="button" 
                             data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                             data-responsive_offset="on" 
                             data-responsive="off"
                             data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[12,12,12,12]"
                             data-paddingright="[35,35,35,35]"
                             data-paddingbottom="[12,12,12,12]"
                             data-paddingleft="[35,35,35,35]"
                             style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">View Details</div>
                    </li>
                     <!-- SLIDE  -->
                    <li data-index="rs-3047" data-transition="parallaxtoleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="images/bg3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption property-price   tp-resizeme" 
                             id="slide-1706-layer-7" 
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['top','top','top','top']" data-voffset="['220','150','150','120']" 
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-fontsize="['20','20','20','20']"
                             data-lineheight="['25','25','25','25']"
                             data-type="text" 
                             data-responsive_offset="on"
                             data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 7; white-space: nowrap;text-transform:left;"></div>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption property-title text-center   tp-resizeme" 
                             id="slide-1706-layer-8" 
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['top','top','top','top']" data-voffset="['280','215','215','200']" 
                             data-fontsize="['55','55','40','30']"
                             data-lineheight="['65','65','55','35']"
                             data-width="['1140','700','621','420']"
                             data-height="none"
                             data-whitespace="normal"
                             data-type="text" 
                             data-responsive_offset="on" 
                             data-frames='[{"delay":1400,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[10,10,10,10]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 6; text-align:left; max-width:1170px; white-space: normal;">Welcome to Bemmasam</div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption mainSlide-Button btn btn-white-outline btn-rounded" 
                             id="slide-1706-layer-9" 
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['top','top','top','top']" data-voffset="['370','300','290','266']" 
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="button" 
                             data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                             data-responsive_offset="on" 
                             data-responsive="off"
                             data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[12,12,12,12]"
                             data-paddingright="[35,35,35,35]"
                             data-paddingbottom="[12,12,12,12]"
                             data-paddingleft="[35,35,35,35]"
                             style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">View Details</div>
                    </li>
                </ul>
                <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>    </div>
        </div><!-- END REVOLUTION SLIDER -->
<br>
<br>

         <div class="container">
            <h2 class="center-title">Our Services</h2>
            <br>
                <div class="row">

                    <div class="col-md-4 mb40 text-center">
                        <i class="ti-user fa-4x text-primary"></i>
                        <h4 class="text-uppercase font500  pt30 pb10">We have the best agents</h4>
                        <p>
                             Dedicated team to make your search a breeze
                        </p>
                    </div>
                    <div class="col-md-4 mb40 text-center">
                        <i class="ti-palette fa-4x text-primary"></i>
                        <h4 class="text-uppercase font500  pt30 pb10">Modern tools</h4>
                        <p>
                            The best tools in the business.  
                        </p>
                    </div>
                    <div class="col-md-4 mb40 text-center">
                        <i class="ti-cup fa-4x text-primary"></i>
                        <h4 class="text-uppercase font500 pt30 pb10">Award winners</h4>
                        <p>
                            Our clients trust us to manage their property
                        </p>
                    </div>
                </div>
            </div>
             <div class="container pt100 pb50">
            <h3 class="left-title">Featured Property</h3>
            <div class="row">
                <div class="col-md-12 mb40">
                    <div class="owl-carousel owl-theme owl-nav-slide">
                        <div class="item">
                            <div class="listing-card">
                                <a class="listing-thumb" href="{{url('ngongplots')}}">
                                    
                                    <img src="images/ngongimage.JPG" alt="" class="img-fluid">
                                    <span class="listing-label sale">For Sale</span>
                                    <div class="listing-content">
                                        <h4 class="listing-title">Ngong Town</h4>
                                        <div class="listing-price">Ksh 450,0000</div>
                                    </div>
                                </a>
                                <ul class="listing-meta list-inline">
                                   
                                </ul>
                            </div><!--property-card-->
                        </div><!--property-item-->

                        <div class="item">
                            <div class="listing-card">
                                <a class="listing-thumb" href="{{url('kamakisplots')}}">
                                    
                                    <img src="images/kamakisimage.JPG" alt="" class="img-fluid">
                                    <span class="listing-label rent">For Rent</span>
                                    <div class="listing-content">
                                        <h4 class="listing-title">Kamakis Plots</h4>
                                        <div class="listing-price">Ksh 250,000</div>
                                    </div>
                                </a>
                                <ul class="listing-meta list-inline">
                                   
                                </ul>
                            </div><!--property-card-->
                        </div><!--property-item-->
                        <div class="item">
                            <div class="listing-card">
                                <a class="listing-thumb" href="{{url('naivashaplots')}}">
                                    
                                    <img src="images/naivashaimage.JPG" alt="" class="img-fluid">
                                    <span class="listing-label rent">For Sale</span>
                                    <div class="listing-content">
                                        <h4 class="listing-title">Naivasha Escarpment View</h4>
                                        <div class="listing-price">Ksh 450,000</div>
                                    </div>
                                </a>
                                <ul class="listing-meta list-inline">
                                    
                                </ul>
                            </div><!--property-card-->
                        </div><!--property-item-->
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb40">
                    <div class="owl-carousel owl-theme owl-nav-slide">
                        <div class="item">
                            <div class="listing-card">
                                <a class="listing-thumb" href="{{url('kitengelaplots')}}">
                                    
                                    <img src="images/kitengelaimage.JPG" alt="" class="img-fluid">
                                    <span class="listing-label sale">For Sale</span>
                                    <div class="listing-content">
                                        <h4 class="listing-title">Kitengela Plots</h4>
                                        <div class="listing-price">Ksh 450,0000</div>
                                    </div>
                                </a>
                                <ul class="listing-meta list-inline">
                                   
                                </ul>
                            </div><!--property-card-->
                        </div><!--property-item-->
                        <div class="item">
                            <div class="listing-card">
                                <a class="listing-thumb" href="{{url('athiriverplots')}}">
                                    
                                    <img src="images/athiriverimage.JPG" alt="" class="img-fluid">
                                    <span class="listing-label rent">For Sale</span>
                                    <div class="listing-content">
                                        <h4 class="listing-title">Athi River Plots</h4>
                                        <div class="listing-price">Ksh 450,000</div>
                                    </div>
                                </a>
                                <ul class="listing-meta list-inline">
                                   
                                </ul>
                            </div><!--property-card-->
                        </div><!--property-item-->
                        <div class="item">
                            <div class="listing-card">
                                <a class="listing-thumb" href="{{url('commercialplots')}}">
                                    
                                    <img src="images/commercialimage.JPG" alt="" class="img-fluid">
                                    <span class="listing-label sale">For Sale</span>
                                    <div class="listing-content">
                                        <h4 class="listing-title">Commercial Plots</h4>
                                        <div class="listing-price">Ksh 450,000</div>
                                    </div>
                                </a>
                                <ul class="listing-meta list-inline">
                                   
                                </ul>
                            </div><!--property-card-->
                        </div><!--property-item-->
                        
                    </div>
                </div>
            </div>
        </div><!--featured properties-->

        
       
        <div class="bg-faded pt100 pb100 bg-parallax parallax-overlay call-to-action" data-jarallax='{"speed": 0.2}' style='background-image: url("images/bg5.jpg")'>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="text-white font300">Do you wish to buy,sell or manage your property?</h2>
                    </div>
                    <div class="col-md-4">
                        <a href="{{url('submit')}}" class="btn btn-lg btn-white-outline">Contact Us!</a>
                    </div>
                </div>
            </div>
        </div><!--call to action-->
        
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
                        <h3>Recently Listed properties</h3>
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
        <!-- load cubeportfolio -->
        <script type="text/javascript" src="cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script>
            /**Hero  script**/
            var tpj = jQuery;

            var revapi1078;
            tpj(document).ready(function () {
                if (tpj("#rev_slider_1078_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_1078_1");
                } else {
                    revapi1078 = tpj("#rev_slider_1078_1").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "revolution/js/",
                        sliderLayout: "auto",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            arrows: {
                                enable: true,
                                style: 'uranus',
                                tmp: '',
                                rtl: false,
                                hide_onleave: false,
                                hide_onmobile: true,
                                hide_under: 600,
                                hide_over: 9999,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                left: {
                                    container: 'slider',
                                    h_align: 'left',
                                    v_align: 'center',
                                    h_offset: 0,
                                    v_offset: 0
                                },
                                right: {
                                    container: 'slider',
                                    h_align: 'right',
                                    v_align: 'center',
                                    h_offset: 0,
                                    v_offset: 0
                                }
                            }
                        },
                        viewPort: {
                            enable: true,
                            outof: "pause",
                            visible_area: "80%",
                            presize: false
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: [1140, 992, 700, 465],
                        gridheight: [600, 530, 500, 480],
                        lazyType: "none",
                        parallax: {
                            type: "mouse",
                            origo: "slidercenter",
                            speed: 2000,
                            levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 46, 47, 48, 49, 50, 55]
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false
                        }
                    });
                }
            }); /*ready*/
            //places masonry
            (function ($, window, document, undefined) {
                'use strict';

                // init cubeportfolio
                $('#js-grid-mosaic-flat').cubeportfolio({
                    filters: '#js-filters-mosaic-flat',
                    layoutMode: 'mosaic',
                    sortToPreventGaps: true,
                    mediaQueries: [{
                            width: 1500,
                            cols: 6
                        }, {
                            width: 1100,
                            cols: 4
                        }, {
                            width: 800,
                            cols: 3
                        }, {
                            width: 480,
                            cols: 2,
                            options: {
                                caption: '',
                                gapHorizontal: 15,
                                gapVertical: 15
                            }
                        }],
                    defaultFilter: '*',
                    animationType: 'fadeOutTop',
                    gapHorizontal: 0,
                    gapVertical: 0,
                    gridAdjustment: 'responsive',
                    caption: 'fadeIn',
                    displayType: 'fadeIn',
                    displayTypeSpeed: 100,
                    // lightbox
                    lightboxDelegate: '.cbp-lightbox',
                    lightboxGallery: true,
                    lightboxTitleSrc: 'data-title',
                    lightboxCounter: '<div class="cbp-popup-lightbox-counter"> of </div>',
                    plugins: {
                        loadMore: {
                            selector: '#js-loadMore-mosaic-flat',
                            action: 'click',
                            loadItems: 3
                        }
                    }
                });
            })(jQuery, window, document);
        </script> 
    </body>
</html>
