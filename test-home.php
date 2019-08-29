<?php
include_once(dirname(__FILE__) . '/class/include.php');

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$TOUR_PACKAGE = new TourPackage(NULL);

$types = $TOUR_PACKAGE->all();
$COMMENT = new Comments($id);
$BOX_SECTION_OBJ = new IndexBoxSection(null);
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
        <link href="style.css" rel="stylesheet">
        <!-- Responsive Css -->
        <link href="thepalatin_style.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet">
        <link href="index-contact-form/style.css" rel="stylesheet" type="text/css"/>
        <style>
            .vc_row[data-vc-full-width] {
                transition: opacity .5s ease;
                overflow: hidden;
            }
            .vc_custom_1496807427993 {
    margin-bottom: 49px !important;
    padding-left: 0 !important;
}
.vc_row::after, .vc_row::before {
    content: " ";
    display: table;
}
.vc_column_container {
    padding-left: 0;
    padding-right: 0;
}
.vc_row.vc_row-no-padding .vc_column-inner {
    padding-left: 0;
    padding-right: 0;
}
.vc_column_container > .vc_column-inner {
    box-sizing: border-box;
    width: 100%;
}
.vc_custom_1498639130843 {
    margin-top: 72px !important;
    padding-right: 15px !important;
}
.vc_custom_1566016881775 {
    border-radius: 5px !important;
}
.tzElement_FeaturedTour.type-1 .tzTour-top .tour-title {
    font-family: 'Open Sans',sans-serif;
    color: #2a2a2a;
    font-weight: 800;
    margin-bottom: 46px;
    text-transform: uppercase;
}
.tzElement_FeaturedTour.type-1 .tzTour-item {
    background: #FFF;
    display: flex;
    margin-bottom: 40px;
}
.tzElement_FeaturedTour.type-1 .tzTour-item .tzImg-tour {
    border: 1px dashed #e1e1e1;
    flex: 0 0 auto;
    width: 33.33%;
    position: relative;
}
.tzElement_FeaturedTour.type-1 .tzTour-item .tzImg-tour .tz-thumb {
    position: relative;
    overflow: hidden;
}
.tzElement_FeaturedTour.type-1 .tzTour-item .tzImg-tour .tz-thumb a {
    display: block;
    transition: all 0.4s ease 0s;
    transform: scale(1);
}
.tzElement_FeaturedTour.type-1 .tzTour-item .tzImg-tour .tz-thumb a img {
    max-width: none;
    position: relative;
}
.tzElement_FeaturedTour.type-1 .tzTour-item .tzTour-info {
    border-width: 1px 1px 1px 0;
    border-style: dashed solid dashed none;
    border-color: #e1e1e1;
    padding: 25px 25px 29px 30px;
    width: 67%;
}
.tzElement_FeaturedTour.type-1 .tzTour-item .tzTour-info .tz-title {
    display: inline-block;
    width: 100%;
    margin-bottom: 10px;
}
.tzElement_FeaturedTour.type-1 .tzTour-item .tzTour-info .tz-title h4 {
    font-family: 'Open Sans',sans-serif;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    float: left;
    margin: 0;
}
.tzElement_FeaturedTour.type-1 .tzTour-item .tzTour-info .tz-title h4 a {
    color: #595959;
}
.tzElement_FeaturedTour.type-1 .tzTour-item .tzTour-info .tz-title span {
    font-family: 'Open Sans',sans-serif;
    color: #595959;
    font-size: 10px;
    font-weight: bold;
    text-transform: uppercase;
    float: left;
    width: 100%;
    line-height: 15px;
}
.tzElement_FeaturedTour.type-1 .tzTour-item .tzTour-info .tz-title span i {
    font-size: 10px;
    color: #fdb714;
    margin-right: 5px;
}
.tzElement_FeaturedTour.type-1 .tzTour-item .tzTour-info .tz-time {
    float: left;
    width: 100%;
    margin-top: 10px;
}
.tzElement_FeaturedTour.type-1 .tzTour-item .tzTour-info .tz-time .tz-price {
    float: right;
    width: 25%;
    text-align: right;
}
.tzElement_FeaturedTour.type-1 .tzTour-item .tzTour-info .tz-time .tz-price p {
    color: #595959;
    font-family: "Open Sans",sans-serif;
    font-size: 10px;
    font-weight: bold;
    line-height: 0;
    margin: 0 0 5px 0;
    text-transform: uppercase;
}
.tzElement_FeaturedTour.type-1 .tzTour-item .tzTour-info .tz-button {
    float: left;
    margin-top: 30px;
    width: 100%;
}
.tzElement_FeaturedTour.type-1 .tzTour-item .tzTour-info .tz-button .readmore {
    padding: 3px 14px 3px 12px;
}
.tzElement_FeaturedTour.type-1 .tzTour-item .tzTour-info .tz-button .readmore i {
    padding-right: 4px;
    font-size: 12px;
}
.tzElement_FeaturedTour.type-1 .tzTour-item .tzTour-info .tz-button .booking {
    background: #e36252;
    float: right;
    padding: 3px 15px 3px 12px;
    margin: 0;
    position: relative;
}
.tzElement_FeaturedTour.type-1 .tzTour-item .tzTour-info .tz-button .booking i {
    padding-right: 5px;
}
.loading-ajax {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("/wp-content/themes/aventura/images/loading-ajax.gif");
    background-position: center;
    background-repeat: no-repeat;
    background-size: auto;
    background-color: rgba(255,255,255,0.8);
    opacity: 0;
    visibility: hidden;
}

        </style>
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
                        </ul>
                        <!--Masonry Grid End-->
                    </div>
                </section >

                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-gradient-none5d67490358137 vc_custom_1496807427993 vc_row-no-padding">
                    <div class="container">
                        <div class="tz-rightElement wpb_column vc_column_container vc_col-sm-12 vc_col-lg-9 vc_col-md-9 vc_col-sm-offset-0 vc_col-xs-12">
                            <div class="vc_column-inner vc_custom_1498639130843">
                                <div class="wpb_wrapper">    
                                    <div class="tzElement_FeaturedTour  vc_custom_1566016881775 type-1">

                                        <div class="tzTour-top">


                                            <h2 class="tour-title">Featured Tours (October to March)</h2>


                                        </div>
                                        <div class="tzTour ">
                                            <div class="tzTour-item">
                                                <div class="tzImg-tour">
                                                    <div class="tz-thumb tz-thumb-fix" style="height: 210px;">
                                                        <a href="https://driversinsrilanka.com/tour/10-days-tour/">
                                                            <img src="https://driversinsrilanka.com/wp-content/uploads/2019/01/10-days-package-new.jpg" class="attachment-full" alt="" srcset="https://driversinsrilanka.com/wp-content/uploads/2019/01/10-days-package-new.jpg 1920w, https://driversinsrilanka.com/wp-content/uploads/2019/01/10-days-package-new-300x200.jpg 300w, https://driversinsrilanka.com/wp-content/uploads/2019/01/10-days-package-new-768x512.jpg 768w, https://driversinsrilanka.com/wp-content/uploads/2019/01/10-days-package-new-1024x683.jpg 1024w, https://driversinsrilanka.com/wp-content/uploads/2019/01/10-days-package-new-600x400.jpg 600w" sizes="(max-width: 1920px) 100vw, 1920px" data-pagespeed-url-hash="1911928050" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="top: 0px; left: -18.5px; width: 315px; height: 210px;" width="1920" height="1280">                                        </a>

                                                    </div>
                                                </div>
                                                <div class="tzTour-info">
                                                    <div class="tz-title">
                                                        <h4><a href="https://driversinsrilanka.com/tour/10-days-tour/">10 Days Tour Package</a></h4>
                                                        <span><i class="fa fa-clock-o"></i>10 Days 9 Nights</span>

                                                    </div>
                                                    <div class="tz-time">
                                                        <div class="tz-price">
                                                            <p>From</p>
                                                            <span class="price">
                                                                $450.00                                                                                                    </span>
                                                        </div>

                                                    </div>
                                                    <div class="tz-button">

                                                        <a class="readmore" href="https://driversinsrilanka.com/tour/10-days-tour/"><i class="fa fa-info"></i>Read More</a>


                                                        <a class="booking book-now-ajax-btn" href="https://driversinsrilanka.com/tour/10-days-tour/" data-post-id="13136" data-people-available="" data-tour-type="daily" data-max-adults="5" data-max-kids="2" data-adults-price="450" data-child-price="225" data-discount="0" data-available-days="[]" data-start-date="2019-01-01" data-end-date="2025-01-01" data-departure-time="[]">
                                                            <i class="fa fa-shopping-cart"></i>Book Now                                                    <span class="loading-ajax"></span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tzTour-item">
                                                <div class="tzImg-tour">
                                                    <div class="tz-thumb tz-thumb-fix" style="height: 210px;">
                                                        <a href="https://driversinsrilanka.com/tour/10-days-tour-full-package/">
                                                            <img src="https://driversinsrilanka.com/wp-content/uploads/2019/01/10-days-package-full-new.jpg" class="attachment-full" alt="" srcset="https://driversinsrilanka.com/wp-content/uploads/2019/01/10-days-package-full-new.jpg 1920w, https://driversinsrilanka.com/wp-content/uploads/2019/01/10-days-package-full-new-300x200.jpg 300w, https://driversinsrilanka.com/wp-content/uploads/2019/01/10-days-package-full-new-768x512.jpg 768w, https://driversinsrilanka.com/wp-content/uploads/2019/01/10-days-package-full-new-1024x683.jpg 1024w, https://driversinsrilanka.com/wp-content/uploads/2019/01/10-days-package-full-new-600x400.jpg 600w" sizes="(max-width: 1920px) 100vw, 1920px" data-pagespeed-url-hash="2325669606" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="top: 0px; left: -18.5px; width: 315px; height: 210px;" width="1920" height="1280">                                        </a>

                                                    </div>
                                                </div>
                                                <div class="tzTour-info">
                                                    <div class="tz-title">
                                                        <h4><a href="https://driversinsrilanka.com/tour/10-days-tour-full-package/">10 Days Tour FULL Package</a></h4>
                                                        <span><i class="fa fa-clock-o"></i>10 Days 9 Nights</span>

                                                    </div>
                                                    <div class="tz-time">
                                                        <div class="tz-price">
                                                            <p>From</p>
                                                            <span class="price">
                                                                $700.00                                                                                                    </span>
                                                        </div>

                                                    </div>
                                                    <div class="tz-button">

                                                        <a class="readmore" href="https://driversinsrilanka.com/tour/10-days-tour-full-package/"><i class="fa fa-info"></i>Read More</a>


                                                        <a class="booking book-now-ajax-btn" href="https://driversinsrilanka.com/tour/10-days-tour-full-package/" data-post-id="13434" data-people-available="" data-tour-type="daily" data-max-adults="5" data-max-kids="2" data-adults-price="700" data-child-price="350" data-discount="0" data-available-days="[]" data-start-date="2019-01-01" data-end-date="2025-01-01" data-departure-time="[]">
                                                            <i class="fa fa-shopping-cart"></i>Book Now                                                    <span class="loading-ajax"></span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tzTour-item">
                                                <div class="tzImg-tour">
                                                    <div class="tz-thumb tz-thumb-fix" style="height: 210px;">
                                                        <a href="https://driversinsrilanka.com/tour/14-days-tour/">
                                                            <img src="https://driversinsrilanka.com/wp-content/uploads/2019/01/14-days-package.jpg" class="attachment-full" alt="14 Days Package" srcset="https://driversinsrilanka.com/wp-content/uploads/2019/01/14-days-package.jpg 1920w, https://driversinsrilanka.com/wp-content/uploads/2019/01/14-days-package-300x200.jpg 300w, https://driversinsrilanka.com/wp-content/uploads/2019/01/14-days-package-768x512.jpg 768w, https://driversinsrilanka.com/wp-content/uploads/2019/01/14-days-package-1024x683.jpg 1024w, https://driversinsrilanka.com/wp-content/uploads/2019/01/14-days-package-600x400.jpg 600w" sizes="(max-width: 1920px) 100vw, 1920px" data-pagespeed-url-hash="616532107" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="top: 0px; left: -18.5px; width: 315px; height: 210px;" width="1920" height="1280">                                        </a>

                                                    </div>
                                                </div>
                                                <div class="tzTour-info">
                                                    <div class="tz-title">
                                                        <h4><a href="https://driversinsrilanka.com/tour/14-days-tour/">14 Days Tour Package</a></h4>
                                                        <span><i class="fa fa-clock-o"></i>14 Days 13  Nights</span>

                                                    </div>
                                                    <div class="tz-time">
                                                        <div class="tz-price">
                                                            <p>From</p>
                                                            <span class="price">
                                                                $695.00                                                                                                    </span>
                                                        </div>

                                                    </div>
                                                    <div class="tz-button">

                                                        <a class="readmore" href="https://driversinsrilanka.com/tour/14-days-tour/"><i class="fa fa-info"></i>Read More</a>


                                                        <a class="booking book-now-ajax-btn" href="https://driversinsrilanka.com/tour/14-days-tour/" data-post-id="13140" data-people-available="" data-tour-type="daily" data-max-adults="5" data-max-kids="2" data-adults-price="695" data-child-price="348" data-discount="0" data-available-days="[]" data-start-date="2019-01-01" data-end-date="2025-01-01" data-departure-time="[]">
                                                            <i class="fa fa-shopping-cart"></i>Book Now                                                    <span class="loading-ajax"></span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tzTour-item">
                                                <div class="tzImg-tour">
                                                    <div class="tz-thumb tz-thumb-fix" style="height: 210px;">
                                                        <a href="https://driversinsrilanka.com/tour/14-days-tour-full-package/">
                                                            <img src="https://driversinsrilanka.com/wp-content/uploads/2019/01/14-days-package-full.jpg" class="attachment-full" alt="14 Days Full Package" srcset="https://driversinsrilanka.com/wp-content/uploads/2019/01/14-days-package-full.jpg 1920w, https://driversinsrilanka.com/wp-content/uploads/2019/01/14-days-package-full-300x200.jpg 300w, https://driversinsrilanka.com/wp-content/uploads/2019/01/14-days-package-full-768x512.jpg 768w, https://driversinsrilanka.com/wp-content/uploads/2019/01/14-days-package-full-1024x683.jpg 1024w, https://driversinsrilanka.com/wp-content/uploads/2019/01/14-days-package-full-600x400.jpg 600w" sizes="(max-width: 1920px) 100vw, 1920px" data-pagespeed-url-hash="942679447" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="top: 0px; left: -18.5px; width: 315px; height: 210px;" width="1920" height="1280">                                        </a>

                                                    </div>
                                                </div>
                                                <div class="tzTour-info">
                                                    <div class="tz-title">
                                                        <h4><a href="https://driversinsrilanka.com/tour/14-days-tour-full-package/">14 Days Tour FULL Package</a></h4>
                                                        <span><i class="fa fa-clock-o"></i>14 Days 13 Nights</span>

                                                    </div>
                                                    <div class="tz-time">
                                                        <div class="tz-price">
                                                            <p>From</p>
                                                            <span class="price">
                                                                $895.00                                                                                                    </span>
                                                        </div>

                                                    </div>
                                                    <div class="tz-button">

                                                        <a class="readmore" href="https://driversinsrilanka.com/tour/14-days-tour-full-package/"><i class="fa fa-info"></i>Read More</a>


                                                        <a class="booking book-now-ajax-btn" href="https://driversinsrilanka.com/tour/14-days-tour-full-package/" data-post-id="13438" data-people-available="" data-tour-type="daily" data-max-adults="5" data-max-kids="2" data-adults-price="895" data-child-price="448" data-discount="0" data-available-days="[]" data-start-date="2019-01-01" data-end-date="2025-01-01" data-departure-time="[]">
                                                            <i class="fa fa-shopping-cart"></i>Book Now                                                    <span class="loading-ajax"></span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--        <div class="tz-form-booking-ajax-content"></div>-->
                                        <!--        <div class="tz-reviews-ajax-content"></div>-->

                                        <script type="text/javascript">jQuery(document).ready(function () {
                                                "use strict";
                                                jQuery('#tzTour-slider-399134053').each(function () {
                                                    jQuery(this).owlCarousel({rtl: false, nav: true, navText: ["", ""], autoplay: true, autoplayTimeout: 3000, loop: true, smartSpeed: 700, responsive: {0: {items: 1}, 600: {items: 2}, 992: {items: 2}, 1200: {items: 4}, 1500: {items: 4}}, margin: 0})
                                                })
                                            });</script>
                                    </div>

                                    <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                                    <div class="tzElement_FeaturedTour   type-1">

                                        <div class="tzTour-top">


                                            <h2 class="tour-title">Special Tour Package (May to September)</h2>


                                        </div>
                                        <div class="tzTour ">
                                            <div class="tzTour-item">
                                                <div class="tzImg-tour">
                                                    <div class="tz-thumb tz-thumb-fix" style="height: 210px;">
                                                        <a href="https://driversinsrilanka.com/tour/14-days-down-south-to-east-coast-explorer/">
                                                            <img src="https://driversinsrilanka.com/wp-content/uploads/2019/03/14-days-down-south-to-east-coast-explorer.jpg" class="attachment-full" alt="14 Days Down South to East Coast Explorer" srcset="https://driversinsrilanka.com/wp-content/uploads/2019/03/14-days-down-south-to-east-coast-explorer.jpg 1920w, https://driversinsrilanka.com/wp-content/uploads/2019/03/14-days-down-south-to-east-coast-explorer-300x200.jpg 300w, https://driversinsrilanka.com/wp-content/uploads/2019/03/14-days-down-south-to-east-coast-explorer-768x512.jpg 768w, https://driversinsrilanka.com/wp-content/uploads/2019/03/14-days-down-south-to-east-coast-explorer-1024x683.jpg 1024w, https://driversinsrilanka.com/wp-content/uploads/2019/03/14-days-down-south-to-east-coast-explorer-600x400.jpg 600w" sizes="(max-width: 1920px) 100vw, 1920px" data-pagespeed-url-hash="211793290" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="top: 0px; left: -18.5px; width: 315px; height: 210px;" width="1920" height="1280">                                        </a>

                                                    </div>
                                                </div>
                                                <div class="tzTour-info">
                                                    <div class="tz-title">
                                                        <h4><a href="https://driversinsrilanka.com/tour/14-days-down-south-to-east-coast-explorer/">14 Days Down South to East Coast Explorer</a></h4>
                                                        <span><i class="fa fa-clock-o"></i>14 Days 13 Nights</span>

                                                    </div>
                                                    <div class="tz-time">
                                                        <div class="tz-price">
                                                            <p>From</p>
                                                            <span class="price">
                                                                $750.00                                                                                                    </span>
                                                        </div>

                                                    </div>
                                                    <div class="tz-button">

                                                        <a class="readmore" href="https://driversinsrilanka.com/tour/14-days-down-south-to-east-coast-explorer/"><i class="fa fa-info"></i>Read More</a>


                                                        <a class="booking book-now-ajax-btn" href="https://driversinsrilanka.com/tour/14-days-down-south-to-east-coast-explorer/" data-post-id="13667" data-people-available="" data-tour-type="daily" data-max-adults="5" data-max-kids="2" data-adults-price="750" data-child-price="375" data-discount="0" data-available-days="[]" data-start-date="2019-03-01" data-end-date="2028-03-01" data-departure-time="[]">
                                                            <i class="fa fa-shopping-cart"></i>Book Now                                                    <span class="loading-ajax"></span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--        <div class="tz-form-booking-ajax-content"></div>-->
                                        <!--        <div class="tz-reviews-ajax-content"></div>-->

                                        <script type="text/javascript">jQuery(document).ready(function () {
                                                "use strict";jQuery('#tzTour-slider-786494846').each(function () {
                                                    jQuery(this).owlCarousel({rtl: false, nav: true, navText: ["", ""], autoplay: true, autoplayTimeout: 3000, loop: true, smartSpeed: 700, responsive: {0: {items: 1}, 600: {items: 2}, 992: {items: 2}, 1200: {items: 4}, 1500: {items: 4}}, margin: 0})
                                                })
                                            });</script>
                                    </div>

                                    <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                                    <div class="vc_btn3-container vc_btn3-center">
                                        <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline vc_btn3-color-sandy-brown" href="https://www.driversinsrilanka.com/offers/" title="">VIEW ALL OFFERS</a></div>
                                </div></div></div><div class="tz-leftElement wpb_column vc_column_container vc_col-sm-12 vc_col-lg-3 vc_col-md-3 vc_col-xs-12"><div class="vc_column-inner vc_custom_1498103032893"><div class="wpb_wrapper">    <div class="tzElement_Hotline  " style="background-image:url()">
                                        <div class="tzHotlineOverlay">
                                            <span class="title">
                                                Hot Line!            </span>
                                            <p class="descriptions">
                                                Don’t hesitate give us a call. We are here to support you.                </p>
                                            <p class="phone">
                                                <i class="fa fa-headphones"></i>
                                                +94-773-531-693                </p>
                                            <p class="email">
                                                <i class="fa fa-envelope"></i>
                                                driversinsrilanka1@gmail.com                </p>
                                        </div>
                                    </div>

                                    <div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">    <div class="tzElement_LatestTour   type-1">
                                                        <div class="tzLatest-top">
                                                            <h2 class="latest-title">Special Offers</h2>
                                                        </div>
                                                        <div class="tzLatest-item">
                                                            <div class="tz-thumb" style="background-image:url(https://driversinsrilanka.com/wp-content/uploads/2019/01/sigiriya-1024x683.jpg)">
                                                            </div>
                                                            <div class="tz-info">
                                                                <div class="tz-title">
                                                                    <h4><a href="https://driversinsrilanka.com/tour/sigiriya-one-day/">Sigiriya One Day</a></h4>
                                                                    <span>1 Day</span>

                                                                </div>
                                                                <div class="tz-price">
                                                                    <p>From</p>
                                                                    <span class="price">
                                                                        $60.00                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tzLatest-item">
                                                            <div class="tz-thumb" style="background-image:url(https://driversinsrilanka.com/wp-content/uploads/2019/01/kandy1920x1280-1024x683.jpg)">
                                                            </div>
                                                            <div class="tz-info">
                                                                <div class="tz-title">
                                                                    <h4><a href="https://driversinsrilanka.com/tour/kandy-one-day/">Kandy One Day</a></h4>
                                                                    <span>1 Day</span>

                                                                </div>
                                                                <div class="tz-price">
                                                                    <p>From</p>
                                                                    <span class="price">
                                                                        $50.00                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tzLatest-item">
                                                            <div class="tz-thumb" style="background-image:url(https://driversinsrilanka.com/wp-content/uploads/2019/01/galle-fort-1024x683.jpg)">
                                                            </div>
                                                            <div class="tz-info">
                                                                <div class="tz-title">
                                                                    <h4><a href="https://driversinsrilanka.com/tour/galle-one-day/">Galle One Day</a></h4>
                                                                    <span>1 Day</span>

                                                                </div>
                                                                <div class="tz-price">
                                                                    <p>From</p>
                                                                    <span class="price">
                                                                        $40.00                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <script type="text/javascript">jQuery(document).ready(function () {
                                                                "use strict";
                                                                jQuery('.latest-slider').each(function () {
                                                                    jQuery(this).owlCarousel({rtl: false, nav: true, navText: ["", ""], slideSpeed: 1000, autoplay: true, autoplayTimeout: 3000, loop: true, paginationSpeed: 1000, responsive: {0: {items: 1}, 600: {items: 2}, 992: {items: 2}, 1200: {items: 3}, 1500: {items: 5}}, margin: 0})
                                                                })
                                                            });</script>
                                                    </div>

                                                </div></div></div></div><div class="vc_btn3-container vc_btn3-center">
                                        <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline vc_btn3-color-sandy-brown" href="https://driversinsrilanka.com/sri-lanka-day-tours/" title="">ALL DAY TOURS</a></div>
                                </div></div></div></div></div>

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
