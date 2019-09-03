<?php
include_once(dirname(__FILE__) . '/class/include.php');

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$TOUR_PACKAGE = new TourPackage(NULL);
$TOUR = $TOUR_PACKAGE->selectOneDayTours();

$types = $TOUR_PACKAGE->all();
$COMMENT = new Comments($id);
$BOX_SECTION_OBJ = new IndexBoxSection(null);

$OFFER_OBJ = new Offer(NULL);
$OFFER = $OFFER_OBJ->all();
?>
<!DOCTYPE html> 
<html lang="en-US">
    <head>
        <title> Sri Lanka Tour Driver | Fahrer/Chauffeur Sri Lanka | Pathum Lanka Tours </title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="sri lanka tour driver, sri lanka round tours, sri lanka round trips, pathum lanka tours, pathum lanka tours in sri lanka, sri lanka tour packages, sri lanka round trip packages,sri lanka holiday tour, sri lanka holiday trips, round tours with private driver, tour operators of sri lanka, day tours in sri lanka, sightseeing in sri lanka, tailor-made tour packages, airport transfer in sri lanka, private driver in sri lanka">
        <meta name="description" content="This is Pathum, your tour consultant at your visit to Sri Lanka. There is no barrier to travel whole over the country with a certified chauffer, that is having passion for helping people to keep finest wishes. Ascertaining much with career history  able to cover whole country with historical, leisurely, adventure, and religious sites.">
        <link rel="icon" type="image/png" sizes="16x16" href="images/icons/img.png">
        <!-- Bootstrap Css -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Animate For Amination Css -->
        <link href="css/animate.css" rel="stylesheet">
        <!-- Date Picker Css -->
        <link href="css/datetimepicker.css" rel="stylesheet">
        <!-- Slick Slider Css -->
        <link href="css/slick.css" rel="stylesheet">
        <!-- Short Codes Css -->
        <link href="css/shortcodes.css" rel="stylesheet">
        <!-- Widget Css -->
        <link href="css/widget.css" rel="stylesheet">
        <!--Dl Menu Script-->
        <link href="js/dl-menu/component.css" rel="stylesheet">
        <!-- Font Awesome Css -->
        <link href="css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="css/svg.css">
        <!-- Theme Default Css -->
        <link href="css/typography.css" rel="stylesheet">
        <!-- Style Css -->
        <link href="css/color.css" rel="stylesheet">
        <!-- Style Css -->
        <link href="css/offer.css" rel="stylesheet" type="text/css"/>
        <link href="style.css" rel="stylesheet">
        <!-- Responsive Css -->
        <link href="thepalatin_style.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet">
        <link href="index-contact-form/style.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="main-wrapper">
            <!--header -->
            <?php include './header.php' ?>
            <!--header -->
            <!--Banner Wrap Start-->
            <?php include './banner.php' ?>
            <!--Banner Wrap End-->
            <div class="main-contant">
                <section  >
                    <div class="container index-box-4-container">
                        <!--Section Heading Start-->
                        <!--Section Heading End-->
                        <!--Masonry Grid Start-->
                        <ul class="masonry row clearfix destination-gallery">
                            <?php
                            $BOX_SECTION = $BOX_SECTION_OBJ->all();
                            foreach ($BOX_SECTION as $key => $box_section) {
                                if ($key > 3) {
                                    break;
                                }
                                ?>
                                <li class="grid-item col-md-3 col-sm-6 index-box-4">

                                    <div class="destination-thumb-3">

                                        <figure >
                                            <img src="./upload/box-section/<?php echo $box_section["image_name"]; ?>" alt="">
                                            <div class="destination-title" style="text-align:center;">
                                                <h3 class="title"><a href="<?php echo $box_section["link"]; ?>"><?php echo $box_section["title"]; ?></a></h3>
                                            </div>
                                        </figure>
                                        <div class="text absolute">
                                            <?php echo $box_section["description"]; ?> 
                                            <a href="<?php echo $box_section["link"]; ?>" class="df-button gray-bg">Read More</a>
                                        </div>

                                    </div>

                                </li>
                                <?php
                            }
                            ?>
                            <!--                            Destination Thumb Start
                                                        <li class="grid-item col-md-3 col-sm-6 index-box-4">
                                                            <div class="destination-thumb-3">
                                                                <figure >
                                                                    <img src="images/services/services-1.png" alt="">
                                                                    <div class="destination-title" style="text-align:center;">
                                                                        <h3 class="title"><a  href="services.php">Services</a></h3>
                                                                        </div>
                                                                </figure>
                                                                <div class="text absolute">
                                                                    <h6 class="title"><a href="#">Services</a></h6>
                                                                    <p>We are providing special services to help arrange your holiday, arrange accommodation and airport transport to suit the holiday budget. </p>
                                                                    <a href="services.php" class="df-button gray-bg">Read More</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        Destination Thumb End
                                                        Destination Thumb Start
                                                        <li class="grid-item col-md-3 col-sm-6 index-box-4">
                                                            <div class="destination-thumb-3">
                                                                <figure>
                                                                    <img src="images/services/services-2.jpg" alt="">
                                                                     <div class="destination-title" style="text-align:center;">
                                                                            <h3 class="title"><a  href="tour-packages.php?type=2">One Day Tour</a></h3>
                                                                        </div>
                                                                </figure>
                                                                <div class="text absolute">
                                                                    <h6 class="title"><a href="tour-packages.php?type=1">One Day Tour</a></h6>
                                                                    <p>When you have already landed to Sri Lanka a little ago, and you are on your plan, but you need to have one-day excursion for a selected site, we offer some of destinations to be pick a one by you.</p>
                                                                    <a href="tour-packages.php?type=1" class="df-button gray-bg">Read More</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        Destination Thumb End
                                                        Destination Thumb Start
                                                        <li class="grid-item col-md-3 col-sm-6 index-box-4">
                                                            <div class="destination-thumb-3">
                                                                <figure>
                                                                    <img src="images/services/services-3.jpg" alt="">
                                                                    <div class="destination-title" style="text-align:center;">
                                                                            <h3 class="title"><a  href="tour-packages.php?type=2">Round Tours</a></h3>
                                                                        </div>
                                                                </figure>
                                                                <div class="text absolute">
                                                                    <h6 class="title"><a href="tour-packages.php?type=2">Round Tours</a></h6>
                                                                    <p>When you are planning to have next visit to Sri Lanka, we offer some packages to you. Family Tour, Honeymoon Tour, Half on the Beach tour or Mini tour. Just select a one and let us know, then we arrange your tour.</p>
                                                                    <a href="tour-packages.php?type=2" class="df-button gray-bg">Read More</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        Destination Thumb End
                                                        Destination Thumb Start
                                                        <li class="grid-item col-md-3 col-sm-6 index-box-4">
                                                            <div class="destination-thumb-3">
                                                                <figure>
                                                                    <img src="images/services/services-4.jpg" alt="">
                            <div class="destination-title" style="text-align:center;">
                                <h3 class="title"><a  href="news-and-offers.php">News & Offers</a></h3>
                                                                        </div>
                                                                </figure>
                                                                <div class="text absolute">
                                                                    <h6 class="title"><a href="#">News & Offers</a></h6>
                                                                    <p>We are gifted to make special tour offers to our clients because maximum value from your holiday budget. We give on these benefits to our clients, so that everyone enjoying a holiday in Sri Lanka.</p>
                                                                    <a href="news-and-offers.php" class="df-button gray-bg">Read More</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        Destination Thumb End-->
                        </ul>
                        <!--Masonry Grid End-->
                    </div>
                </section >
                <section class="about-wrap1" >
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-9 col-md-8">
                                <div class=" text-left">
                                    <h3 class="title-3">Featured Offers</h3>
                                </div>
                                <?php
                                foreach ($OFFER as $key => $offer) {
                                    if ($key < 2) {
                                        ?>
                                        <div class="strip_all_rooms_list wow fadeIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-4">
                                                    <div class="img_list">
                                                        <a href=""><img src="upload/offer/<?php echo $offer["image_name"]; ?>" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="clearfix visible-xs-block">
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-6">
                                                    <div class="rooms_list_desc">
                                                        <h3><?php echo $offer["title"]; ?></h3>
                                                        <?php echo $offer["short_description"]; ?>

                                                        <a href="" class="read-more arrows th-cl">Read More</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="price_list">
                                                        <div>

                                                            <small>From</small>   <span class="normal_price_list">$<?php echo $offer["price"]; ?></span>


                                                            <p>
                                                                <a href="view-offers.php?id=<?php echo $offer["id"]; ?>" class="btn_1">Book Now</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--End strip -->
                                        <?php
                                    }
                                }
                                ?>
                                <p>
                                    <a href="news-and-offers.php" class="t-btn df-button th-bg bt">View All Offers</a>
                                </p>
                            </div><!-- End col-lg-9 -->

                            <div class="col-lg-3 col-md-4">
                                <div class=" text-center">
                                    <h3 class="title-2">Day Tours Offers</h3>
                                </div>
                                <?php
                                foreach ($TOUR as $key => $oneday) {
                                    if($key < 3){
                                    ?>
                                    <div class="img_zoom">
                                        <a href=""><img src="images/8.jpg" alt="" class="offer_img img-responsive"></a>
                                        <div class="img_zoom_desc">
                                            <h3><?php echo $oneday["title"];?> <span class="price_home"><span class="from-color">From</span> $<?php echo $oneday["start_price"];?></span></h3>

                                        </div>
                                    </div>
                                    <?php
                                    }
                                }
                                ?>
                                <p>
                                    <a href="" class="t-btn df-button th-bg bt">View All Offers</a>
                                </p>
                            </div><!-- End col-lg-3 -->
                        </div>
                    </div>
                </section>
                <section class="about-wrap" style="padding:0px;">
                    <div class="container">
                        <!--Section Heading Start-->
                        <div class="section-heading text-left">
                            <h3 class="title">Who We Are</h3>
                        </div>
                        <!--Section Heading End-->
                        <div class="about-text">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text">
                                        <p>This is Pathum, your tour guide and chauffeur at your visit to Sri Lanka. There is no barrier to travel whole over the country with a Tourist Board certified chauffeur, it is about helping people achieve their dream journey. Ascertaining much with career history able to cover whole country with historical, leisure, nature, adventure, and religious sites. It is sure, you seek for an Educated and Honest guy, you’ve reached the end. Come, let us have a decent tour on a standard vehicle.</p>
                                        <h6 class="small-title">What We Do</h6>
                                        <ul class="about-list">
                                            <li>Organize a tour based on your requirement and budget</li>
                                            <li>Comfortable accommodation suitable to your budget</li>
                                            <li>Secure & Comfortable Travel Service</li>
                                            <li>Coordinating in English</li>
                                            <li>Ethical & Protection service from Tourist Chauffeur</li>
                                            <!--                                            <li>Tour Beefing And Assistance</li>-->
                                            <!--<li>Arrange Your Accommodations</li>-->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 home-about-bg">
                                    <img src="images/about-bg.jpg" alt=""/>
                                </div>
                            </div>
                        </div>
                        <!--Section Heading End-->
                    </div>
                </section>

                <section class="gray-bg rooms-area section-padding-100-0">
                    <div class="container">
                        <div class="section-heading text-center">
                            <h3 class="title">Tour Packages</h3>
                        </div>
                        <div class="row  justify-content-center">
                            <div class="tour-package-slider box-arrow">
                                <!-- Single Rooms Area -->
                                <?php
                                $TOUR_PACKAGE = TourPackage::all();
                                foreach ($TOUR_PACKAGE as $key => $tour_package) {
                                    if ($key == 8) {
                                        break;
                                    }
                                    ?>

                                    <div class="col-12 col-md-4 col-lg-4">
                                        <a href="tour-packages-view.php?id=<?php echo $tour_package["id"]; ?>">
                                            <div class="col-md-3">
                                                <div  class="">
                                                    <div class="ribbon red">FROM <strong class="rbn-price">$<?php echo $tour_package['start_price']; ?></strong>/Person</div>
                                                </div>
                                            </div>
                                            <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                                                <!-- Thumbnail -->
                                                <div class="bg-thumbnail bg-img" style="background-image: url(upload/tour-package/<?php echo $tour_package["image_name"]; ?>);"></div>
                                                <!-- Price -->
                                                <p class="price-from"><?php echo $tour_package["day"]; ?></p>
                                                <!-- Rooms Text -->
                                                <div class="rooms-text">
                                                    <div class="line"></div>
                                                    <a href="tour-packages-view.php?id=<?php echo $tour_package["id"]; ?>">  <h4><?php echo $tour_package["title"]; ?></h4></a>
                                                    <p><?php echo substr($tour_package["short_description"], 0, 75); ?></p>
                                                </div>
                                                <!-- Book Room -->
                                                <a href="tour-packages-view.php?id=<?php echo $tour_package["id"]; ?>" class="book-room-btn btn palatin-btn">View More </a>
                                            </div>
                                        </a>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Destination Section End-->
                <section class="stretcher-wrapper">
                    <div class="container-fluid">
                        <div class="row customize-tour-banner" >
                            <div class="section-heading text-center" style="margin-bottom: 35px!important;">
                                <h3 class="title" style="color:#fff!important;">Things to do in Sri Lanka</h3>
                            </div>
                        </div>
                        <div class="row">
                            <ul class="stretcher">

                                <!-- === stretcher item === -->
                                <?php
                                $ACTIVITY = Activities::all();
                                foreach ($ACTIVITY as $key => $activity) {
                                    if ($key == 4) {
                                        break;
                                    }
                                    ?>
                                    <li class="stretcher-item" style="background-image:url(upload/activity/<?php echo $activity["image_name"]; ?>);">

                                        <!--logo-item-->
                                        <div class="stretcher-logo">
                                            <div class="text">
                                                <span class="text-intro h4"><?php echo $activity["title"]; ?></span>
                                            </div>
                                        </div>
                                        <!--main text-->
                                        <figure>
                                            <a href="things-to-do-view.php?id=<?php echo $activity["id"]; ?>">   <h4><?php echo $activity["title"]; ?></h4></a>
                                            <figcaption> <?php echo substr($activity["short_description"], 0, 150); ?></figcaption>
                                            <a href="things-to-do-view.php?id=<?php echo $activity["id"]; ?>" class="read-more arrows th-cl">Read More</a>

                                        </figure>
                                        <!--anchor-->

                                    </li>

                                    <?php
                                }
                                ?>
                                <!-- === stretcher item more === -->

                                <li class="stretcher-item more">
                                    <div class="more-icon" >
                                        <a href="things-to-do.php" class="view-more-things-todo">
                                            <span  data-title-show="View More" data-title-hide="+" ></span>
                                        </a>

                                    </div>

                                </li>

                            </ul>
                        </div>


                    </div>
                </section>
                <!--Holiday Section Start-->
                <!--Holiday Section End-->
                <!--Testimonial Section Start-->
                <section class="gray-bg">
                    <div class="container">
                        <!--Section Heading Start-->
                        <div class="section-heading text-center">
                            <h3 class="title">Customer Feedback</h3>
                        </div>
                        <!--Section Heading End-->
                        <div class="row">
                            <div class="col-md-4 col-sm-12 " id="feedback">
                                <div class="testimonial-slider-2 row box-arrow">
                                    <?php
                                    $COMMENTS = Comments::activeComments($id);
                                    foreach ($COMMENTS as $key => $comments) {
                                        ?>
                                        <div class="testimonial-2">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="upload/comments/<?php echo $comments["image_name"]; ?>" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="testimonial-tripad"><img src="images/tripadvisor_stars.png"></div>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient.</p>
                                                <div style="float: right;"><img src="images/tripadvisor_outline.png"></div>
                                                <div style="margin-top: 20px;"><h6 class=""><?php echo $comments["name"]; ?></h6></div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 ">
                                <iframe width="100%" height="297" src="https://www.youtube.com/embed/pmQN9RrEGnE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                            </div>
                            <div class="col-md-4 col-sm-12 " id="tripad">
                                <div id="TA_selfserveprop837" class="TA_selfserveprop"><ul id="KEWHRuWIMV" class="TA_links JexZnt"><li id="jgAYPb" class="l6iiPyjaMW"><a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=837&amp;locationId=12948667&amp;lang=en_US&amp;rating=true&amp;nreviews=0&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk = true"></script>

                            </div>
                        </div>    
                </section>
                <section class=" plan-your-trip-banner">
                    <div class="plan-your-trip-parallex container-fluid" >
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 trip-banner"  > 
                                    <h3 class="title">Tailor Made Tour</h3>
                                    <p>
                                        When you are planning to visit Sri Lanka in your next trip, you can have it arranged 
                                        your own way. We cover all the country. You may fill your diary, picking sites you
                                        want to see, and we help fix your aim, either total fun, total exploring or mixture 
                                        of them. We tailor your journey with the help of our experiences in a protective way.
                                    </p>
                                    <a href="booking.php" class="t-btn df-button th-bg">Customize your tour</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </section>
                <section >
                    <div class="container">
                        <!--Section Heading Start-->
                        <div class="section-heading text-center">
                            <h3 class="title">Popular Destinations</h3>
                        </div>
                        <!--Section Heading End-->
                        <div class="row ">
                            <div class="destination-slider box-arrow">
                                <?php
                                $ATTRACTION = Attraction::all();
                                foreach ($ATTRACTION as $key => $attraction) {
                                    if ($key == 7) {
                                        break;
                                    }
                                    ?>
                                    <!--Destination Thumb Start-->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="destination-thumb thumb">
                                            <img src="upload/attraction/<?php echo $attraction["image_name"]; ?>" alt="">
                                            <div class="destination-title">
                                                <h3 class="title"><a href="#"><?php echo $attraction["title"]; ?></a></h3>
                                            </div>
                                            <div class="absolute">
                                                <div class="text">
    <!--                                                    <h6 class="title"><a href="#"><?php echo $attraction["title"]; ?></a></h6>-->
                                                    <p><?php echo substr($attraction["short_description"], 0, 150); ?></p>
                                                    <a href="destination-view.php?id=<?php echo $attraction["id"]; ?>" class="read-more arrows th-cl">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Destination Thumb End-->
                                    <?php
                                }
                                ?>
                            </div>
                            <!--Destination Thumb End-->
                        </div>
                    </div>
                </section>
<?php include './contact-slider.php' ?>

            </div>
            <!--Footer 1 Start-->
<?php include './footer.php' ?>
        </div>
        <!-- jQuery Default Library -->
        <script src="js/jquery.js"></script>

        <script src="js/bootstrap.js"></script>
        <!--<script src="js/slick.js"></script>-->
        <!-- FLICKR Library -->
        <script src="js/jflickrfeed.min.js"></script>
        <!-- Popup Library -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="index-contact-form/scripts.js" type="text/javascript"></script>
        <script>

                                    $(document).ready(function () {

                                        // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
                                        window.onscroll = function () {
                                            scrollFunction()
                                        };

                                        function scrollFunction() {
                                            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                                                $("#inner-h").addClass("affix");

                                            } else {
                                                $("#inner-h").removeClass("affix");
                                                $("#inner-h").addClass("affix-top");
                                            }
                                        }
//                $('.dl-menuwrapper ul').on('click', function () {
//                    $(this).parent().find('.dl-menuwrapper ul').removeClass('dl-menuopen');
//                    $(this).addClass('dl-menuopen');
//                });
//
//                var selector = '.dl-menuwrapper ul';
//                $(selector).on('click', function () {
//                    $(selector).removeClass('active');
//                    $(this).addClass('active');
//                });

                                        $('.dl-trigger').on('click', function () {

                                            var activity = $(this).attr("action");

                                            if (activity === "false") {
                                                $(this).addClass('dl-active');
                                                $(this).attr("action", "true");
                                                $("#mob-nav").addClass("dl-menuopen");
                                            }


                                            if (activity === "true") {
                                                $(this).removeClass('dl-active');
                                                $(this).attr("action", "false");
                                                $("#mob-nav").removeClass("dl-menuopen");
                                            }
                                        });

                                        $(".service-title").hover(function () {
                                            $(this).addClass(".service-title");
                                        }, function () {
                                            $(this).removeClass(".service-title");
                                        });

                                    });


        </script>
        <!-- Date Picker jQuery Library -->
        <script src="js/jquery.datetimepicker.full.js"></script>
        <!--Dl Menu Script-->
        <script src="js/dl-menu/modernizr.custom.js"></script>
        <script src="js/dl-menu/jquery.dlmenu.js"></script>
        <!-- Custom jQuery Library -->
        <script src="js/custom.js"></script>
        <script src="slick-slider/slick.min.js" type="text/javascript"></script>
        <script src="slick-slider/slick-custom.js" type="text/javascript"></script>

        <script type="text/javascript">
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
                                    }
        </script>        
        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>

        <script type="text/javascript">
                                    $('.translation-links a').click(function () {
                                        var lang = $(this).data('lang');
                                        var $frame = $('.goog-te-menu-frame:first');
                                        if (!$frame.size()) {
                                            alert("Error: Could not find Google translate frame.");
                                            return false;
                                        }
                                        $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
                                        return false;
                                    });
        </script>

    </body>
</html>
