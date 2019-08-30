<?php
include_once(dirname(__FILE__) . '/class/include.php');
$VIEW_PACKAGE_BANNER = new Banner(6);
$id = '';
$offer = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
if (isset($_GET['offer'])) {
    $offer = $_GET['offer'];
}

$TOUR_PACKAGE_OBJ = new TourPackage(NULL);
$TOUR_PACKAGE = new TourPackage($id);
$OFFER = new Offer($offer);
?>
<!DOCTYPE html>

<html lang="en-US">

    <head>
        <title><?php echo $TOUR_PACKAGE->title; ?> - Pathum Lanka Tours Sri Lanka</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="<?php echo $TOUR_PACKAGE->title; ?>, sri lanka round tours, sri lanka round trips, pathum lanka tours, pathum lanka tours in sri lanka, sri lanka tour packages, sri lanka round trip packages,sri lanka holiday tour, sri lanka holiday trips, round tours with private driver, tour operators of sri lanka, day tours in sri lanka, sightseeing in sri lanka, tailor-made tour packages, private driver in sri lanka">
        <meta name="description" content="<?php echo $TOUR_PACKAGE->short_description; ?> ">
        <link rel="icon" type="image/png" sizes="16x16" href="images/icons/img.png">
        <!-- Bootstrap Css -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Animate For Amination Css -->
        <link href="css/animate.css" rel="stylesheet">
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
        <link href="style.css" rel="stylesheet">
        <!-- Responsive Css -->
        <link href="css/responsive.css" rel="stylesheet">
        <link href="light-box/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
        <link href="booking-form-tour/style.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>

        <div class="main-wrapper">

            <!--header -->

            <?php include './header.php' ?>

            <!--header -->

            <!--Sub Banner Wrap Start-->

            <div class="sub-banner " style="background-image: url('./upload/banner/<?php echo $VIEW_PACKAGE_BANNER->image_name; ?>') !important;">

                <ol class="breadcrumb">

                    <li class="breadcrumb-item"><a href="./">Home</a></li>

                    <li class="breadcrumb-item active"><?php echo $TOUR_PACKAGE->title; ?></li>

                </ol>

            </div>

            <!--Sub Banner Wrap End-->

            <div class="main-contant">

                <!--Blog List Start-->

                <section id="tour-view">

                    <div class="container">

                        <div class="row">

                            <div class="col-md-8">

                                <div class="property-wrap ftco-animate fadeInUp ftco-animated">
                                    <div class="text">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <h3 style="margin-bottom: 10px;"><a href="#" style="color: #f23232;"><span style="font-size: 24px; color: #15a2e0;"><?php echo $TOUR_PACKAGE->title; ?>  </span><span>FROM $<?php echo $TOUR_PACKAGE->start_price; ?></span></a></h3>

                                                <?php echo $TOUR_PACKAGE->price_list; ?>
                                            </div>
                                            <div class="col-md-1">
                                                <a href="#" class="d-flex align-items-center justify-content-center btn-custom hidden-xs hidden-sm">
                                                    <img src="images/offer.png">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <?php echo $OFFER->description; ?>
                                <!--Blog List Start-->


                                <div class="blog-thumb blog-detail tour-thumb-detail" style="margin-top: 30px;">
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h6>What to Expect</h6>
                                        </div>
                                        <div class="col-md-7">
                                            <strong><p>Colombo City Tour</p></strong>
                                            <ul>
                                                <li>Gangarama Temple</li>
                                                <li>Old Dutch Church</li>
                                                <li>Independence Square</li>
                                                <li>Colombo National Museum</li>
                                            </ul>
                                            <br>
                                            <strong><p>Negombo</p></strong>
                                            <ul>
                                                <li>Negombo lagoon</li>
                                                <li>Negombo Fish Market</li>
                                                <li>Old Dutch Fort</li>
                                                <li>St. Mary's Church</li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                    
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h6>Hotels</h6>
                                        </div>
                                        <div class="col-md-7">
                                            <p><i class="fa fa-star" style="margin-right: 5px;"></i>Hotel 1</p>
                                            <p><i class="fa fa-star" style="margin-right: 5px;"></i>Hotel 2</p>
                                            <p><i class="fa fa-star" style="margin-right: 5px;"></i>Hotel 3</p>
                                            <p><i class="fa fa-star" style="margin-right: 5px;"></i>Hotel 4</p>
                                        </div>
                                    </div>
                                    
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h6>Included</h6>
                                        </div>
                                        <div class="col-md-7">
                                            <p><i class="fa fa-check" style="margin-right: 5px;"></i>Luxury Vehicle</p>
                                            <p><i class="fa fa-check" style="margin-right: 5px;"></i>Experienced Driver</p>
                                            <p><i class="fa fa-check" style="margin-right: 5px;"></i>Professional Guide </p>
                                            <p><i class="fa fa-check" style="margin-right: 5px;"></i>Accommodations</p>
                                            <p><i class="fa fa-check" style="margin-right: 5px;"></i>Pickup and Drop off</p>
                                        </div>
                                    </div>
                                    
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h6>Not Included</h6>
                                        </div>
                                        <div class="col-md-7">
                                            <p><i class="fa fa-close" style="margin-right: 5px;"></i>Entrance Fees</p>
                                            <p><i class="fa fa-close" style="margin-right: 5px;"></i>Food and Drinks</p>
                                        </div>
                                    </div>
                                </div>
                            <!--<a href="booking.php?tour=<?php echo $id; ?>" style="margin-top: 30px;"   class="df-button th-bg">INQUIRE NOW THIS PACKAGE</a>-->




                            </div>

                            <div class="col-md-4">

                                <aside class="sidebar">

                                    <!-- Similar Products Widget Start-->

                                    <div class="widget widget-recent-post">

                                        <h6 class="widget-title">More Packages</h6>

                                        <!-- Similar Products List Start-->

                                        <ul class="similar-product-list">



                                            <li>



                                                <!-- Similar Products Start-->

                                                <div class="similar-products">

                                                    <?php
                                                    if ($TOUR_PACKAGE->type == 1) {
                                                        $MORE_PACKAGES = $TOUR_PACKAGE_OBJ->selectOneDayTours();
                                                    } else {
                                                        $MORE_PACKAGES = $TOUR_PACKAGE_OBJ->selectRoundTours();
                                                    }
//                                                    $TOUR_PACKAGE = TourPackage::all();

                                                    foreach ($MORE_PACKAGES as $key => $tour_package) {

                                                        if ($key > 7) {

                                                            break;
                                                        }
                                                        ?>
                                                        <a href="tour-packages-view.php?id=<?php echo $tour_package["id"]; ?>">
                                                            <div class="tour-more">
                                                                <figure><img src="upload/tour-package/<?php echo $tour_package["image_name"]; ?>" alt=""></figure>

                                                                <div class="text-overflow">

                                                                    <h6 class="title"><a href="tour-packages-view.php?id=<?php echo $tour_package["id"]; ?>"><?php echo substr($tour_package["title"], 0, 75); ?> </a></h6>

                                                                    <ul class="blog-meta">

                                                                        <li><?php echo substr($tour_package["short_description"], 0, 150); ?>..</li>

                                                                    </ul>

                                                                    <a href="tour-packages-view.php?id=<?php echo $tour_package["id"]; ?>" class="read-more arrows th-cl">Read More</a>



                                                                </div>
                                                            </div>
                                                        </a>

                                                        <?php
                                                    }
                                                    ?>

                                                </div>

                                                <!-- Similar Products End-->



                                            </li>





                                        </ul>

                                        <!-- Similar Products List End-->

                                    </div>   

                                </aside>

                            </div>

                        </div>

                    </div>

                </section>

                <!--Blog List End-->

            </div>

            <?php include './footer.php' ?>

        </div>

    </div>

    <!-- jQuery Default Library -->

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Default jQuery Library -->

    <script src="js/bootstrap.js"></script>

    <!-- Slick Slider jQuery Library -->

    <script src="js/slick.js"></script>

    <!-- Masonry jQuery Library -->

    <script src="js/masonry.min.js"></script>

    <!-- Popup Library -->

    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- FLICKR Library -->

    <script src="js/jflickrfeed.min.js"></script>

    <!--Dl Menu Script-->

    <script src="js/dl-menu/modernizr.custom.js"></script>

    <script src="js/dl-menu/jquery.dlmenu.js"></script>

    <!-- Custom jQuery Library -->

    <script src="js/custom.js"></script>

    <script src="light-box/simple-lightbox.js" type="text/javascript"></script>

    <script src="booking-form-tour/scripts.js" type="text/javascript"></script>

    <script>

        $(function () {

            var $gallery = $('.gallery a').simpleLightbox();



            $gallery.on('show.simplelightbox', function () {

                console.log('Requested for showing');

            })

                    .on('shown.simplelightbox', function () {

                        console.log('Shown');

                    })

                    .on('close.simplelightbox', function () {

                        console.log('Requested for closing');

                    })

                    .on('closed.simplelightbox', function () {

                        console.log('Closed');

                    })

                    .on('change.simplelightbox', function () {

                        console.log('Requested for change');

                    })

                    .on('next.simplelightbox', function () {

                        console.log('Requested for next');

                    })

                    .on('prev.simplelightbox', function () {

                        console.log('Requested for prev');

                    })

                    .on('nextImageLoaded.simplelightbox', function () {

                        console.log('Next image loaded');

                    })

                    .on('prevImageLoaded.simplelightbox', function () {

                        console.log('Prev image loaded');

                    })

                    .on('changed.simplelightbox', function () {

                        console.log('Image changed');

                    })

                    .on('nextDone.simplelightbox', function () {

                        console.log('Image changed to next');

                    })

                    .on('prevDone.simplelightbox', function () {

                        console.log('Image changed to prev');

                    })

                    .on('error.simplelightbox', function (e) {

                        console.log('No image found, go to the next/prev');

                        console.log(e);

                    });

        });

    </script>
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

    <script>
        $(function () {
            $(".datepicker").datepicker();
        });

    </script>

</body>



</html>