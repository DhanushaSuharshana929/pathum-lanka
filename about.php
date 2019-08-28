<?php
include_once(dirname(__FILE__) . '/class/include.php');
$ABOUT_BANNER = new Banner(2);
$TOUR_PACKAGE = new TourPackage(NULL);
$ABOUT = new Page(1);
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>About us -Pathum Lanka Tours Sri Lanka</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="sri lanka round tours, sri lanka round trips, pathum lanka tours, pathum lanka tours in sri lanka, sri lanka tour packages, sri lanka round trip packages,sri lanka holiday tour, sri lanka holiday trips, round tours with private driver, tour operators of sri lanka, day tours in sri lanka, sightseeing in sri lanka, tailor-made tour packages, about pathum lanka tours, private driver in sri lanka, vision of pathum lanka tours">
        <meta name="description" content="To assist the travelers, gain the most out of their coverage is utter satisfaction to a tour consultant. The best service that a one can offer is honesty, so that the traveler is protected in every manner during within a lesser known region. Smile in the face at the time departing says a lengthy story. True friendship.">
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
        <link href="catmandu_style.css" rel="stylesheet" type="text/css"/>
  <link href="light-box/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="main-wrapper">
            <!--header -->
            <?php include './header.php' ?>
            <!--header -->
            <!--Sub Banner Wrap Start-->
            <div class="sub-banner " style="background-image: url('./upload/banner/<?php echo $ABOUT_BANNER->image_name; ?>') !important;">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active">About</li>
                </ol>
            </div>
            <!--Sub Banner Wrap End-->
            <div class="main-contant">
                <section  class="section section-featured-page no-padding-btm ">
                    <div class="container">
                        <div class="inner-wrapper">
                            <div class="col-md-6 no-margin">
                                <img src="upload/page/<?php echo $ABOUT->image_name; ?>" alt=""/>
                            </div>
                            <div class="col-md-6 text-justify">
                                <h6 class="title">Hi ....</h6>
                                <br>
                                <?php echo $ABOUT->description; ?> 

                                <div class="gallery about-licence">
                                        <div class="col-md-6 gallery-padding">
                                            <a href="images/about/20190126_105233.png" ><img src="images/about/20190126_105233.png" alt="" title="Srilanka Travel Guide Licence" /></a>
                                        </div>
                                     <div class="col-md-6 gallery-padding">
                                            <a href="images/about/20190126_105304.png" ><img src="images/about/20190126_105304.png" alt="" title="Srilanka Travel Guide Licence" /></a>
                                        </div>
                                </div>
                              
                            </div>
                        </div><!-- .inner-wrapper -->
                    </div> <!-- .container -->
                </section> <!-- .section-featured-page -->

                <section class="gray-bg section section-services service-layout-1">
                    <div class="container">
                        <div class="service-block-list">
                            <div class="inner-wrapper">
                                <div class="col-md-4 service-block-item">
                                    <div class="service-block-inner box-shadow-block">
                                        <a class="service-icon" href="#" >
                                            <img src="images/icons/eye.png" alt=""/>
                                        </a>
                                        <div class="service-block-inner-content">
                                            <h3 class="service-item-title"><a href="#" >Vision</a></h3>
                                            <div class="service-block-item-excerpt">
                                                <p>To assist the travelers, gain the most out of their coverage is utter satisfaction to a tour consultant. The best service that a one can offer is honesty, so that the traveler is protected in every manner during within a lesser known region. Smile in the face at the time departing says a lengthy story. True friendship.</p>
                                            </div><!-- .service-block-item-excerpt -->
                                        </div><!-- .service-block-inner-content -->
                                    </div> <!-- .service-block-inner -->
                                </div> <!-- .service-block-item -->
                                <div class="col-md-4  service-block-item">
                                    <div class="service-block-inner box-shadow-block">
                                        <a class="service-icon" href="#" >
                                            <img src="images/icons/placeholder-black-shape-for-localization-on-maps.png" alt=""/>
                                        </a>
                                        <div class="service-block-inner-content">
                                            <h3 class="service-item-title"><a href="#" >Way</a>  </h3>
                                            <div class="service-block-item-excerpt">
                                                <p>A kind reception is the better treatment, that will be an unforgettable memory. A tour consultant is the first person the traveler remembering for kind cooperation. Being a knowledgeable and experienced would help ascertaining travelers believes, which those are not to break anyway. Keeping them totally satisfied is a life style.</p>
                                            </div><!-- .service-block-item-excerpt -->
                                        </div><!-- .service-block-inner-content -->
                                    </div> <!-- .service-block-inner -->
                                </div> <!-- .service-block-item -->
                                <div class="col-md-4  service-block-item">
                                    <div class="service-block-inner box-shadow-block">
                                        <a class="service-icon" href="#" >
                                            <img src="images/icons/high-five.png" alt=""/>
                                        </a>
                                        <div class="service-block-inner-content">
                                            <h3 class="service-item-title"><a href="#" >For</a>  </h3>
                                            <div class="service-block-item-excerpt">
                                                <p>Hopes are making life well kept, it is fair if one can help people joy. Travel consultation was an opt in some years ago. Now it is well established and that means people keep trust on us. Securing the trust can make people fall in bond with the consultant. If you are happy with us, then we are happy ourselves.</p>
                                            </div><!-- .service-block-item-excerpt -->
                                        </div><!-- .service-block-inner-content -->
                                    </div> <!-- .service-block-inner -->
                                </div> <!-- .service-block-item -->

                            </div> <!-- .inner-wrapper -->
                        </div> <!-- .service-block-list -->
                    </div> <!-- .container -->
                </section> <!-- .section section-services -->

                <!--Choose Us Section End-->
                <?php include './contact-slider.php' ?>
            </div>
            <!--Footer 1 Start-->
            <?php include './footer.php' ?>
        </div>
    </div>
    <!-- jQuery Default Library -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Default jQuery Library -->
    <script src="js/bootstrap.js"></script>
    <!-- FLICKR Library -->
    <script src="js/jflickrfeed.min.js"></script>
    <!-- Popup Library -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!--Dl Menu Script-->
    <script src="js/dl-menu/modernizr.custom.js"></script>
    <script src="js/dl-menu/jquery.dlmenu.js"></script>
    <!-- Custom jQuery Library -->
    <script src="js/custom.js"></script>
    <!-- Slick Slider jQuery Library -->
    <script src="slick-slider/slick.min.js" type="text/javascript"></script>
   <script src="light-box/simple-lightbox.js" type="text/javascript"></script>
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
</body>

</html>