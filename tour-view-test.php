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
                                        <h3 style="margin-bottom: 10px;"><a href="#" style="color: #f23232;">FROM $35</a></h3>
                                        <div class="location"><strong><i>For 2 Adults - $70</i></strong></div>
                                        <div class="location"><strong><i>Between 03 - 04 Adults – $110</i></strong></div>
                                        <div class="location"><strong><i>Between 05 - 06 Adults – $120</i></strong></div>
                                        <br>
                                        <div class="location" style="color: #c80e0e;">« Minimum 2 Adults Are Required »</div>
                                        <div class="location" style="color: #c80e0e;">« Below 6 Years Old Children on Free Of Charge »</div>

                                        <a href="#" class="d-flex align-items-center justify-content-center btn-custom">
                                            <img src="images/offer.png">
                                        </a>
                                    </div>
                                </div>

                                <?php echo $OFFER->description; ?>
                                <!--Blog List Start-->

                                <?php
                                $TOUR_DATES = TourDate::getTourDatesById($id);

                                foreach ($TOUR_DATES as $key => $tour_date) {
                                    ?>

                                    <div class="blog-thumb blog-detail tour-thumb-detail">



                                        <div class="text">

                                            <h6 class="tour-package-day-title "><a href="#"><?php echo $tour_date["title"]; ?></a></h6>
                                            <div class="content-p" >
                                                <?php echo $tour_date["description"]; ?>
                                            </div>



                                        </div>

                                        <figure>

                                            <div class="gallery gallery-padding-img-4">

                                                <?php
                                                $DateId = $tour_date['id'];

                                                $TOUR_DATES_PHOTOS = TourDatePhoto::getTourDatePhotosById($DateId);

                                                foreach ($TOUR_DATES_PHOTOS as $key => $tour_date_photo) {

                                                    if ($key < 4) {
                                                        ?>

                                                        <div class="col-md-3 gallery-padding">

                                                            <a href="upload/tour-package/date/gallery/<?php echo $tour_date_photo["image_name"]; ?>" ><img src="upload/tour-package/date/gallery/thumb/<?php echo $tour_date_photo["image_name"]; ?>" alt="" title="<?php echo $tour_date_photo["caption"]; ?>" /></a>

                                                        </div>



                                                        <?php
                                                    }
                                                }
                                                ?>



                                            </div>

                                        </figure>

                                    </div>

                                    <?php
                                }
                                ?>

                                <div class="highlight-icons">

                                    <h4>Highlights of the Tour</h4>
                                    <ul class="highlight-design-li">
                                        <?php echo $TOUR_PACKAGE->highlights; ?>
                                    </ul>
                                </div>

                                <div class="">
                                    <!-- Heading with Background Start-->
                                    <h3 class="title" style="margin-bottom: 40px;">Book This Tour - <?php echo $TOUR_PACKAGE->title; ?></h3>
                                    <!-- Heading with Background End-->
                                    <!-- Contact Form Start-->
                                    <div id="contact" class="contact-form" >
                                        <!--Divider Start-->
                                        <div class="row form-group">
                                            <div class="col-md-12 col-sm-6">
                                                <!--Input Field Start-->
                                                <div class="input-field">
                                                    <div class="col-md-12">
                                                        <span id="spanTour"></span>
                                                    </div>
    <!--                                                <label>:<span class="red">*</span></label>-->
                                                    <input type="text"  maxlength="100" class="form-control " name="txtTour"  placeholder="Tour Name" id="txtTour"  value="<?php echo $TOUR_PACKAGE->title; ?>" readonly required>
                                                </div>
                                                <!--Input Field End-->
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-6 col-sm-12">
                                                <!--Input Field Start-->
                                                <div class="input-field">
                                                    <div class="col-md-12">
                                                        <span id="spanFullName"></span>
                                                    </div>
    <!--                                                <label>:<span class="red">*</span></label>-->
                                                    <input type="text"  maxlength="100" class="form-control " name="txtFullName"  placeholder="Your Name" id="txtFullName"   required>
                                                </div>
                                                <!--Input Field End-->
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <!--Input Field Start-->
                                                <div class="input-field">
                                                    <div class="col-md-12">
                                                        <span id="spanEmail"></span>
                                                    </div>
    <!--                                                <label>Your Email:<span class="red">*</span></label>-->
                                                    <input type="email" maxlength="100" class="form-control " placeholder="Your Email" name="txtEmail" id="txtEmail"   required>
                                                </div>
                                                <!--Input Field End-->
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-6 col-sm-12">
                                                <!--Input Field Start-->
                                                <div class="input-field">
                                                    <div class="col-md-12">
                                                        <span id="spanPhone"></span>
                                                    </div>
    <!--                                                <label>:<span class="red">*</span></label>-->
                                                    <input type="text"  maxlength="100" class="form-control " name="txtPhone"  placeholder="Contact No" id="txtPhone"   required>
                                                </div>
                                                <!--Input Field End-->
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <!--Input Field Start-->
                                                <div class="input-field">
                                                    <div class="col-md-12">
                                                        <span id="spanDate"></span>
                                                    </div>
    <!--                                                <label>:<span class="red">*</span></label>-->
                                                    <input type="date"  maxlength="100" class="form-control datepicker" name="txtDate"  placeholder="Tour Date" id="txtDate"   required>
                                                </div>
                                                <!--Input Field End-->
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-6 col-sm-12">
                                                <!--Input Field Start-->
                                                <div class="input-field">
                                                    <div class="col-md-12">
                                                        <span id="spanPerson"></span>
                                                    </div>
    <!--                                                <label>:<span class="red">*</span></label>-->
                                                    <input type="text"  maxlength="100" class="form-control " name="txtPerson"  placeholder="No of Person" id="txtPerson"   required>
                                                </div>
                                                <!--Input Field End-->
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <!--Input Field Start-->
                                                <div class="input-field">
                                                    <div class="col-md-12">
                                                        <span id="spanPickup"></span>
                                                    </div>
    <!--                                                <label>:<span class="red">*</span></label>-->
                                                    <input type="text"  maxlength="100" class="form-control " name="txtPickup"  placeholder="Pickup Location" id="txtPickup"   required>
                                                </div>
                                                <!--Input Field End-->
                                            </div>
                                        </div>
                                        <!--Divider End-->
                                        <!--Input Field Start-->
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <div class="input-field">
                                                    <div class="col-md-12">
                                                        <span id="spanMessage"></span>
                                                    </div>
    <!--                                                <label>Your Message:<span class="red">*</span></label>-->
                                                    <textarea maxlength="5000"  rows="4" class="form-control " name="txtMessage" id="txtMessage" placeholder="Your Message" required></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Input Field End-->
                                        <div class="row form-group">

                                            <div class="col-sm-8">
                                                <label>Security Code :<span class="red">*</span></label>
                                                <div class="input-field">
                                                    <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the security code >> ">
                                                    <div class="col-md-12">
                                                        <span id="capspan" ></span> 
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-4"> 
                                                <div class="input-field">
                                                    <?php include("./booking-form-tour/captchacode-widget.php"); ?> 
                                                </div>
                                            </div>  
                                            <div class="col-sm-12">
                                                <div class="input-field">
                                                    <div class="div-check" >
                                                        <img src="booking-form-tour/img/checking.gif"  alt="checking" id="checking"/>
                                                    </div>
                                                    <div id="dismessage" align="center"></div>
                                                    <button type="submit" id="btnSubmit" class="contact-btn df-button sm-button th-bg">BOOK YOUR TOUR</button>

                                                </div>
                                            </div>
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