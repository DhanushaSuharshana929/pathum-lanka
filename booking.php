<?php
include_once(dirname(__FILE__) . '/class/include.php');
$TOUR_PACKAGE = new TourPackage(NULL);
$INQUIRY_BANNER = new Banner(13);
$tour = '';
if (isset($_GET['tour'])) {
    $tour = $_GET['tour'];
}
?>
<!doctype html>
<html class="no-js" lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
        <title>Inquiry - Pathum Lanka Tours Sri Lanka</title>

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
        <link href="booking-form/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/countrySelect.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">   
        <link href="code.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="main-wrapper">
            <!--header -->
            <?php include './header.php' ?>
            <!--header -->
            <!--Sub Banner Wrap Start-->
            <div class="sub-banner " style="padding: 230px 0 0;background-image: url('./upload/banner/<?php echo $INQUIRY_BANNER->image_name; ?>') !important;">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active">Inquiry Form</li>
                </ol>
            </div>
            <!--Sub Banner Wrap End-->
            <div class="main-contant">
                <!-- Contact Us Section Start-->
                <section>
                    <div class="container">
                        <!--Section Heading Start-->
                        <div class="row">
                            <div class="tour-description">
                                <h3 class="text-center">Tailor Made Tour</h3>
                                <p class="text-center"> We are tailoring your tour. We hope you have study the Destinations can cover in tour to Sri Lanka. Please, let us know how far it is long, what do you want to see, explore, and enjoy. Simply fill out this form and send it. </p>

                            </div></div>
                        <!--Section Heading End-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Heading with Background Start-->

                                <!-- Heading with Background End-->
                                <!-- Contact Form Start-->
                                <div id="contact-form" >
                                    <div class="row form-group">

                                        <div class="col-xs-12 col-sm-6 col-md-3">
<!--                                            <label>Title:<span class="red">*</span></label>-->
                                            <select name="txtTitle" id="txtTitle" class=" select-title  input-validater">
                                                <option selected="" value="Mrs">Mrs</option>
                                                <option value="Mr">Mr</option>
                                                <option value="Ms">Ms</option>
                                                <option value="Miss">Miss</option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Prof.">Prof.</option>
                                            </select>

                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <input type="text" name="txtFullName" id="txtFullName" placeholder="Your Name" class="form-control input-validater">
                                            <div class="col-md-12">
                                                <span id="spanFullName"></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <input type="text" name="txtNationality" id="txtNationality"  placeholder="Nationality" class="form-control input-validater">

                                        </div>
                                    </div>
                                    <div class="row form-group">
<!--                                        <div class="col-xs-12 col-sm-6 col-md-2" style="padding-right:0px!important;">

                                            <input type="text" name="txtCountryCode" id="txtCountryCode" placeholder="" class="form-control input-validater">

                                        </div>-->
                                        <div class="col-xs-12 col-sm-6 col-md-6" style="border-left: none;">
                                            <input type="text" name="txtPhone" id="txtPhone" placeholder="Your Contact Number" class="form-control input-validater">
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="text" name="txtEmail" id="txtEmail" placeholder="Your Email" class="form-control input-validater">
                                            <div class="col-md-12">
                                                <span id="spanEmail" ></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-6 col-md-2">
                                            <input type="text" name="txtDdate" id="txtDdate"  placeholder="Starting On" class="form-control input-validater datepicker ">
                                            <span id="spanDdate"></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                            <input type="text" name="txtAdate" id="txtAdate" placeholder="Duration of Stay - Number of Nights" class="form-control input-validater ">
                                            <div class="col-md-12">
                                                <span id="spanAdate"></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <input type="text" name="txtAdult" id="txtAdult" placeholder="Number of Adults" class="form-control">
                                            <div class="col-md-12">
                                                <span id="spanAdult" ></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <input type="text" name="txtChildren"   id="txtChildren" placeholder="Number of Kids" class="form-control">   

                                        </div>
                                    </div>


                                    <div class="row form-group">

                                        <div class="col-xs-12 col-sm-12 col-md-6">
                                            <div class="input-field">
                                                <input type="text" name="txtRooms" id="txtRooms" placeholder="Type of Accommodation & Number of Rooms" class=" select-item form-control input-validater">
                                            </div>
                                        </div>
                                      <div class="col-md-6 col-sm-12 col-xs-12">

                                            <?php
                                            if (count($TOUR_PACKAGE->all()) > 0) {
                                                foreach ($TOUR_PACKAGE->all() as $key => $package) {
                                                    if (isset($_GET['tour'])) {
                                                        if ($package['id'] === $_GET['tour']) {
                                                            ?>
                                                            <label>Tour Package:</label>
                                                            <div class="input-field">
                                                                <input  name="txtPackage" id="txtPackage" class="form-control" value="<?php echo $package['title']; ?>">
                                                            </div>                 


                                                            <?php
                                                        }
                                                    } else {
                                                        ?>
                                                        <input  name="txtPackage" id="txtPackage" type="hidden" class="form-control" value="">
                                                        <?php
                                                    }
                                                }
                                            } 
                                            ?>

                                        </div>

                                    </div>

                                    <div class="row form-group">
                                        <div class="col-sm-12 col-md-4">

                                            <label >How Did Your Hear About Us:</label>
                                            <div >
                                                <div class=" c-box" style="text-transform:capitalize;">
                                                    <label > <input type="checkbox" value="Google Search" class="prefers c-1" >  <i class="fa fa-google"></i>  Google Search</label>
                                                    <label > <input type="checkbox" value="Tripadvisor" class="prefers c-2" >  <i class="fa fa-tripadvisor"></i>  Tripadvisor</label>
                                                    <label > <input type="checkbox" value="Facebook" class="prefers c-3" >  <i class="fa fa-facebook"></i>  Facebook</label>
                                                    <label > <input type="checkbox" value="Instagram" class="prefers c-4" >  <i class="fa fa-instagram"></i>  Instagram</label>
                                                    <label > <input type="checkbox" value="Twitter" class="prefers c-5" >  <i class="fa fa-twitter"></i>  Twitter</label>
                                                    <label > <input type="checkbox" value="Through friends /Family" class="prefers c-6" > <i class="fa fa-users"></i>  Through friends /Family</label>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-sm-12 col-md-8">


                                            <div class="input-field" >
                                                <textarea maxlength="5000" rows="10" class="form-control " name="txtMessage" id="txtMessage" placeholder="Details of Requirements & Areas of Interest"  required></textarea>
                                                <div class="col-md-12">
                                                    <span id="spanMessage"></span>
                                                </div>
                                            </div>

                                        </div>


                                    </div>


                                    <div class="row form-group">
                                        <div class="col-sm-12 col-md-4">
                                            <div class="input-field" >

                                                <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the Security Code >> ">
                                                <div class="col-md-12">
                                                    <span  id="capspan" ></span> 
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-sm-12"> 
                                            <div class="input-field" >


                                                <?php include("./booking-form/captchacode-widget.php"); ?> 
                                                <div class="div-check" >
                                                    <img src="booking-form/img/checking.gif"  alt="checking" id="checking"/>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="col-sm-12 ">
                                            <div class="input-field" >
                                                <div id="dismessage" align="center"></div>
                                                <button type="submit" id="btnSubmit" class="contact-btn df-button sm-button th-bg">SEND YOUR MESSAGE</button>
                                            </div>
                                        </div> 

                                    </div>





                                    <!-- Contact Form End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Contact Us Section End-->
            </div>
            <!--Footer 1 Start-->
            <?php include './footer.php' ?>
        </div>

        <!-- Custom jQuery Library -->

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
        <script src="js/custom.js"></script>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="js/countrySelect.min.js" type="text/javascript"></script>
        <script type="text/javascript">


            $("#txtNationality").countrySelect({
                preferredCountries: ["xx"]
            });

            blankFlag.call(this);

            $("#txtNationality").on('change', blankFlag);

            function blankFlag(e) {
                if ($('.flag').hasClass('xx')) {

                    $('.xx').addClass('blank');

                } else {

                    return false;
                }
            }

// $("#").countrySelect();
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
            }


        </script>        
        <script src="code.js" type="text/javascript"></script>
        <script>

            $("#txtCountryCode").intlTelInput({
             
                autoFormat: false,
                autoHideDialCode: false,
                responsiveDropdown: true
        
            });
        </script>

        <script>

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
        <script src="booking-form/scripts.js" type="text/javascript"></script>
    </body>

</html>