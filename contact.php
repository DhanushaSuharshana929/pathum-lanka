<?php
include_once(dirname(__FILE__) . '/class/include.php');
$CONTACT_BANNER = new Banner(1);

$TOUR_PACKAGE = new TourPackage(NULL);
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Contact us - Pathum Lanka Tours Sri Lanka</title>
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
        <!-- Style Css -->
        <link href="style.css" rel="stylesheet">
        <!-- Responsive Css -->
        <link href="css/responsive.css" rel="stylesheet">
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="main-wrapper">
            <!--header -->
            <?php include './header.php' ?>
            <!--header -->
            <!--Sub Banner Wrap Start-->
            <div class="sub-banner " style="background-image: url('./upload/banner/<?php echo $CONTACT_BANNER->image_name; ?>') !important;">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div>
            <!--Sub Banner Wrap End-->
            <div class="main-contant">
                <!-- Contact Us Section Start-->
                <section>
                    <div class="container">

                        <div class="row">
                            <div class="col-md-8">
                                <!-- Heading with Background Start-->
                                <div class="section-heading text-center">
                                    <h3 class="title">Get in Touch With Us</h3>
                                </div>
                                <!-- Heading with Background End-->
                                <!-- Contact Form Start-->
                                <div id="contact" class="contact-form" >
                                    <!--Divider Start-->
                                    <div class="row form-group">
                                        <div class="col-md-12 col-sm-6">
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
                                     
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="input-field">
<!--                                                <label>Your Contact No:</label>-->
                                                <input type="text"  maxlength="100" class="form-control " placeholder="Your Contact No" name="txtPhone" id="txtPhone"  required>
                                            </div>

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
                                    <!--
                                             <div class="col-md-6 col-sm-6">
                                            Input Field Start
                                            <div class="input-field">
                                                <div class="col-md-12">
                                                    <span id="spanCountry"></span>
                                                </div>
                                                 <label>Your Country:<span class="red">*</span></label>
                                                <input type="text"  maxlength="100" class="form-control " name="txtCountry" id="txtCountry"  required>
                                            </div>
                                            Input Field End
                                        </div>
                                      </div>-->
<!--                                    <div class="row form-group">
                                        <div class="col-md-12 col-sm-6">
                                            Input Field Start
                                            <div class="input-field">
                                                <div class="col-md-12">
                                                    <span id="spanSubject"></span>
                                                </div>
                                                <label>How Did you Find us:<span class="red">*</span></label>
                                                <input type="text"  maxlength="100" class="form-control " name="txtSubject" id="txtSubject"  required>
                                            </div>
                                            Input Field End
                                        </div>
                                    </div>-->
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
<!--                                            <label>Security Code :<span class="red">*</span></label>-->
                                            <div class="input-field">
                                                <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the security code >> ">
                                                <div class="col-md-12">
                                                    <span id="capspan" ></span> 
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-sm-4"> 
                                            <div class="input-field">
                                                <?php include("./contact-form/captchacode-widget.php"); ?> 
                                            </div>
                                        </div>  
                                        <div class="col-sm-12">
                                            <div class="input-field">
                                                <div class="div-check" >
                                                    <img src="contact-form/img/checking.gif"  alt="checking" id="checking"/>
                                                </div>
                                                <div id="dismessage" align="center"></div>
                                                <button type="submit" id="btnSubmit" class="contact-btn df-button sm-button th-bg">SEND YOUR MESSAGE</button>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="office_list_second">
                                    <ul>
                                        <li>
                                            <div class="inner">
                                                <div class="definitions_wrap">
                                                    <div class="office">
                                                        <h3>Contact No</h3>
                                                        <div class="icon">
                                                            <img class="svg" src="images/icons/call.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="short_info_wrap">

                                                        <div class="row">
                                                            <span>+94 774-741416</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inner">
                                                <div class="definitions_wrap">
                                                    <div class="office">
                                                        <h3>Email</h3>
                                                        <div class="icon">
                                                            <img class="svg" src="images/icons/opened-email-envelope.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="short_info_wrap">

                                                        <div class="row">
                                                            <span>info@pathumlankatours.com</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inner">
                                                <div class="definitions_wrap">
                                                    <div class="office">
                                                        <h3>Address</h3>
                                                        <div class="icon">
                                                            <img class="svg" src="images/icons/placeholder.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="short_info_wrap">
                                                        <div class="row">
                                                            <p> 87/L ,Gammanpila cross road,
                                                                Bandaragama.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                </section>

                <!-- Contact Us Section End-->
            </div>
            <!--Footer 1 Start-->
            <?php include './footer.php' ?>
        </div>
    </div>
    <!-- jQuery Default Library -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Default jQuery Library -->
    <script src="js/bootstrap.js"></script>
    <!-- Popup Library -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- FLICKR Library -->
    <script src="js/jflickrfeed.min.js"></script>
    <!-- FORMS VALIDATION   -->
    <script src="js/jquery.validate.min.js"></script>
  
    <!-- GOOLE MAP 
    !!! To setup Google Maps, please, see the documentation !!! --> 
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> 
    <script src="js/gmap3.min.js"></script> 
    <!--Dl Menu Script-->
    <script src="js/dl-menu/modernizr.custom.js"></script>
    <script src="js/dl-menu/jquery.dlmenu.js"></script>
    <!-- Custom jQuery Library -->
    <script src="js/custom.js"></script>
    <script src="contact-form/scripts.js" type="text/javascript"></script>
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