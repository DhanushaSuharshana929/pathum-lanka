<?phpinclude_once(dirname(__FILE__) . '/class/include.php');$PACKAGE_BANNER = new Banner(5);$TOUR_PACKAGE_OBJ = new TourPackage(NULL);$type = '';if (isset($_GET['type'])) {    $type = $_GET['type'];    if ($type == '1') {        $TOUR_PACKAGE = $TOUR_PACKAGE_OBJ->selectOneDayTours();    } else {        $TOUR_PACKAGE = $TOUR_PACKAGE_OBJ->selectRoundTours();    }} else {    $TOUR_PACKAGE = $TOUR_PACKAGE_OBJ->all();}?><!DOCTYPE html><html lang="en-US">    <head>        <title>Tour Packages - Pathum Lanka Tours Sri Lanka</title>        <meta charset="utf-8">        <meta http-equiv="X-UA-Compatible" content="IE=edge">        <meta name="viewport" content="width=device-width, initial-scale=1">        <meta name="keywords" content="sri lanka round tours, sri lanka round trips, pathum lanka tours tour packages, pathum lanka tours in sri lanka, sri lanka tour packages, sri lanka round trip packages,sri lanka holiday tour, beach tours in sri lanka, wild life safari in sri lanka, sri lanka holiday trips, round tours with private driver, tour operators of sri lanka, day tours in sri lanka, sightseeing in sri lanka, tailor-made tour packages, private driver in sri lanka">        <meta name="description" content="Tropical travel destination Sri Lanka is becoming famous throughout the world day by day. Mostly balanced weather conditions that has firmly gifted with 12-hour sunshine in the whole year, one of the richer cultural heritage of the world that sought by majority, fascinating scenic beauty can be reached at all ten directions, and world renowned best travel destination is now stand by to welcome you.">        <link rel="icon" type="image/png" sizes="16x16" href="images/icons/img.png">        <!-- Bootstrap Css -->        <link href="css/bootstrap.css" rel="stylesheet">        <!-- Animate For Amination Css -->        <link href="css/animate.css" rel="stylesheet">        <!-- Date Picker Css -->        <link href="css/datetimepicker.css" rel="stylesheet">        <!-- Slick Slider Css -->        <link href="css/slick.css" rel="stylesheet">        <!-- Short Codes Css -->        <link href="css/shortcodes.css" rel="stylesheet">        <!-- Widget Css -->        <link href="css/widget.css" rel="stylesheet">        <!--Dl Menu Script-->        <link href="js/dl-menu/component.css" rel="stylesheet">        <!-- Font Awesome Css -->        <link href="css/font-awesome.css" rel="stylesheet">        <link rel="stylesheet" href="css/svg.css">        <!-- Theme Default Css -->        <link href="css/typography.css" rel="stylesheet">        <!-- Style Css -->        <link href="css/color.css" rel="stylesheet">        <!-- Style Css -->        <link href="style.css" rel="stylesheet">        <!-- Responsive Css -->        <link href="css/responsive.css" rel="stylesheet">        <link href="thepalatin_style.css" rel="stylesheet" type="text/css"/>    </head>    <body>        <div class="main-wrapper">            <!--header -->            <?php include './header.php' ?>            <!--header -->            <!--Banner Wrap Start-->            <div class="sub-banner " style="background-image: url('./upload/banner/<?php echo $PACKAGE_BANNER->image_name; ?>') !important;">                <ol class="breadcrumb">                    <li class="breadcrumb-item"><a href="./">Home</a></li>                    <li class="breadcrumb-item active">Tour Packages</li>                </ol>            </div>            <!--Banner Wrap End-->            <div class="main-contant">                <section class="rooms-area section-padding-100-0">                    <div class="container">                        <?php                        if (isset($_GET['type'])) {                            $type = $_GET['type'];                            if ($type == '1') {                                ?>                                <div class="tour-description">                                    <h3 class="text-center">One Day Tours</h3>                                    <p class="text-center"> When you have already landed to Sri Lanka a little ago, and you are on your plan, but you need to have one-day excursion for a selected site, we offer some of destinations to be pick a one by you.                                    </p>                                </div>                                <?php                            } else {                                ?>                                <div class="tour-description">                                    <h3 class="text-center">Round Tours</h3>                                    <p class="text-center">                                        When you are planning to have next visit to Sri Lanka, we offer some packages to you. Family Tour, Honeymoon Tour, Half on the Beach tour or Mini tour. Just select a one and let us know, then we arrange your tour.                                    </p>                                </div>                                <?php                            }                        }                        ?>                        <div class="row justify-content-center">                            <?php                            foreach ($TOUR_PACKAGE as $key => $tour_package) {                                if (isset($_GET['type'])) {                                    $type = $_GET['type'];                                    if ($type == '1') {                                        ?>                                        <div class="col-12 col-md-4 col-lg-4">                                            <a href="tour-packages-view.php?id=<?php echo $tour_package["id"]; ?>">                                                <div class="col-md-3">                                                    <div class="">                                                        <div class="ribbon red">FROM <strong class="rbn-price">$<?php echo $tour_package['start_price']; ?></strong></div>                                                    </div>                                                </div>                                                <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">                                                    <!-- Thumbnail -->                                                    <div class="bg-thumbnail bg-img" style="background-image: url(upload/tour-package/<?php echo $tour_package["image_name"]; ?>);"></div>                                                    <!-- Price -->                                                    <p class="price-from"><?php echo $tour_package["day"]; ?></p>                                                    <!-- Rooms Text -->                                                    <div class="rooms-text">                                                        <div class="line"></div>                                                        <h4><?php echo $tour_package["title"]; ?></h4>                                                        <p><?php echo substr($tour_package["short_description"], 0, 50); ?>...</p>                                                    </div>                                                    <!-- Book Room -->                                                    <a href="tour-packages-view.php?id=<?php echo $tour_package["id"]; ?>" class="book-room-btn btn palatin-btn">View More</a>                                                </div>                                            </a>                                        </div>                                        <?php                                    } else {                                        ?>                                        <div class="col-12 col-md-4 col-lg-4">                                            <a href="tour-packages-view.php?id=<?php echo $tour_package["id"]; ?>">                                                <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">                                                    <!-- Thumbnail -->                                                    <div class="bg-thumbnail bg-img" style="background-image: url(upload/tour-package/<?php echo $tour_package["image_name"]; ?>);"></div>                                                    <!-- Price -->                                                    <p class="price-from"><?php echo $tour_package["day"]; ?></p>                                                    <!-- Rooms Text -->                                                    <div class="rooms-text">                                                        <div class="line"></div>                                                        <h4><?php echo $tour_package["title"]; ?></h4>                                                        <p><?php echo substr($tour_package["short_description"], 0, 50); ?>...</p>                                                    </div>                                                    <!-- Book Room -->                                                    <a href="tour-packages-view.php?id=<?php echo $tour_package["id"]; ?>" class="book-room-btn btn palatin-btn">View More</a>                                                </div>                                            </a>                                        </div>                                        <?php                                    }                                }                            }                            ?>                        </div>                    </div>                </section>            </div>            <!--Footer 1 Start-->            <?php include './footer.php' ?>        </div>        <!-- jQuery Default Library -->        <script src="js/jquery.js"></script>        <!-- Bootstrap Default jQuery Library -->        <script src="js/bootstrap.js"></script>        <!-- Slick Slider jQuery Library -->        <script src="js/slick.js"></script>        <!-- FLICKR Library -->        <script src="js/jflickrfeed.min.js"></script>        <!-- Popup Library -->        <script src="js/jquery.magnific-popup.min.js"></script>        <!-- Date Picker jQuery Library -->        <script src="js/jquery.datetimepicker.full.js"></script>        <!--Dl Menu Script-->        <script src="js/dl-menu/modernizr.custom.js"></script>        <script src="js/dl-menu/jquery.dlmenu.js"></script>        <!-- Custom jQuery Library -->        <script src="js/custom.js"></script>        <script type="text/javascript">            function googleTranslateElementInit() {                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');            }        </script>                <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>        <script type="text/javascript">            $('.translation-links a').click(function () {                var lang = $(this).data('lang');                var $frame = $('.goog-te-menu-frame:first');                if (!$frame.size()) {                    alert("Error: Could not find Google translate frame.");                    return false;                }                $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();                return false;            });        </script>    </body></html>