<?php
include_once(dirname(__FILE__) . '/class/include.php');
$OFFER_OBJ = new Offer(NULL);
$OFFER = $OFFER_OBJ->all();
$PACKAGE_BANNER = new Banner(5);

?>
<!DOCTYPE html>

<html lang="en-US">

    <head>

        <title>News & Offers - Pathum Lanka Tours Sri Lanka</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="sri lanka round tours, sri lanka round trips, pathum lanka tours, pathum lanka tours in sri lanka, sri lanka tour packages, sri lanka round trip packages,sri lanka holiday tour, sri lanka holiday trips, round tours with private driver, tour operators of sri lanka, day tours in sri lanka, sightseeing in sri lanka, tailor-made tour packages, private driver in sri lanka">
        <meta name="description" content="Tropical travel destination Sri Lanka is becoming famous throughout the world day by day. Mostly balanced weather conditions that has firmly gifted with 12-hour sunshine in the whole year, one of the richer cultural heritage of the world that sought by majority, fascinating scenic beauty can be reached at all ten directions, and world renowned best travel destination is now stand by to welcome you.">
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
        <link href="css/offer.css" rel="stylesheet" type="text/css"/>
        <!-- Style Css -->
        <link href="style.css" rel="stylesheet">
        <!-- Responsive Css -->
        <link href="css/responsive.css" rel="stylesheet">
        <link href="thepalatin_style.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>

        <div class="main-wrapper">

            <!--header -->

            <?php include './header.php' ?>

            <!--header -->

            <!--Sub Banner Wrap Start-->
            <div class="sub-banner services-banner">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active">News & Offers</li>
                </ol>
            </div>

            <!--Sub Banner Wrap End-->

            <div class="main-contant">


                <section class="about-wrap section-padding-100-0" >
                    <div class="container">
                        <div class="tour-description">
                            <h3 class="text-center">Special Offers </h3>
                            <p class="text-center"> We are gifted to make specail tour offers to our clients because maximum value from your holiday budget.We give on these benifits to our clients,so that everyone enjoying a holiday in Sri Lanka.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <?php 
                                foreach ($OFFER as $key => $offer){
                                ?>
                                <div class="strip_all_rooms_list wow fadeIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-4">
                                            <div class="img_list">
                                                <a href=""><img src="upload/offer/<?php echo $offer["image_name"];?>" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="clearfix visible-xs-block">
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-6">
                                            <div class="rooms_list_desc">
                                                <h3><?php echo $offer["title"];?></h3>
                                              <?php echo $offer["short_description"];?>

                                                <a href="" class="read-more arrows th-cl">Read More</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                            <div class="price_list">
                                                <div>

                                                 <small>From</small>   <span class="normal_price_list">$<?php echo $offer["price"];?></span>


                                                    <p>
                                                        <a href="view-offers.php?id=<?php echo $offer["id"];?>" class="btn_1">Book Now</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--End strip -->
      <?php 
                                }
                                ?>
               

                            </div><!-- End col-lg-9 -->

                        </div>
                    </div>
                </section>
                <?php include './contact-slider.php' ?>

                <!--Cars Detail Section End-->

            </div>
            <?php include './footer.php' ?>
        </div>

    </div>

    <!-- jQuery Default Library -->

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Default jQuery Library -->

    <script src="js/bootstrap.js"></script>

    <!-- Slick jQuery Library -->

    <script src="js/slick.js"></script>

    <!-- Popup Library -->

    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- FLICKR Library -->

    <script src="js/jflickrfeed.min.js"></script>

    <!--Dl Menu Script-->

    <script src="js/dl-menu/modernizr.custom.js"></script>

    <script src="js/dl-menu/jquery.dlmenu.js"></script>

    <!-- Custom jQuery Library -->

    <script src="js/custom.js"></script>
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