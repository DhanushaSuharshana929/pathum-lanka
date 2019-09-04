<?php
include_once(dirname(__FILE__) . '/class/include.php');
$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$OFFER_OBJ = new Offer(NULL);

$PACKAGE_BANNER = new Banner(5);
$OFFER = new Offer($id);
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
        <link href="offer-form/style.css" rel="stylesheet" type="text/css"/>
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


                        <div class="row">

                            <div class="col-lg-8">
                                <div class="offer-title2">   
                                    <h3 class="text-left">  <?php echo $OFFER->title; ?></h3>
                                </div>
                                <div >
                                    <div class="col-lg-6 col-md-3">
                                        <div class="box-offer">
                                            <h2>Package 01</h2>
                                            <div class="box-title"><h3><span class="from-color">From</span> $<?php echo $OFFER->price; ?></h3></div>
                                            <?php echo $OFFER->accommodation1; ?>
                                            <button type="submit" id="myBtn1" class="contact-btn df-button sm-button th-bg">View Accomadations</button>


                                            <!-- The Modal -->
                                            <div id="myModal_1" class="modal">

                                                <!-- Modal content -->
                                                <div class="modal-content">
                                                    <span class="close">&times;</span>
                                                 <h4>Hotels</h4>
                                                    <?php echo $OFFER->accommodation_h1; ?>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-3">
                                        <div class="box-offer">
                                            <h2>Package 02</h2>
                                            <div class="box-title"><h3><span class="from-color">From</span> $<?php echo $OFFER->price2; ?></h3></div>
                                            <?php echo $OFFER->accommodation2; ?>
                                            <button type="submit" id="myBtn2" class="contact-btn df-button sm-button th-bg">View Accomadations</button>
                                            <div id="myModal_2" class="modal">

                                                <!-- Modal content -->
                                                <div class="modal-content">
                                                    <span class="close">&times;</span>
                                                    <h4>Hotels</h4>
                                                    <?php echo $OFFER->accommodation_h2; ?>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class=" tour-des">
                                    <div class="col-md-3">
                                        <h3>What to Expect</h3>
                                    </div>
                                    <div class="col-md-9">

                                        <?php echo $OFFER->description; ?>

                                    </div><!-- End col-md-9  -->

                                </div>
                                <div class=" tour-des">
                                    <div class="col-md-3">
                                        <h3>Include</h3>
                                    </div>
                                    <div class="col-md-9">

                                        <?php echo $OFFER->include; ?>


                                    </div><!-- End col-md-9  -->

                                </div>
                                <div class=" tour-des">
                                    <div class="col-md-3">
                                        <h3>Not Include</h3>
                                    </div>
                                    <div class="col-md-9">


                                        <?php echo $OFFER->notinclude; ?>

                                    </div><!-- End col-md-9  -->

                                </div>


                            </div>


                            <div class="col-lg-4 col-md-3">
                                <div class="offer-title">   
                                    <h3 class="text-left">Book Offer - <?php echo $OFFER->title; ?></h3>
                                </div>
                                <div id="contact" class="contact-form" >
                            
                                                                        <div class="row form-group">
                                                                            <div class="col-md-12 col-sm-6">
<!--                                                                                Input Field Start-->
                                                                                <div class="input-field">
                                                                                    <div class="col-md-12">
                                                                                        <span id="spanTour"></span>
                                                                                    </div>

                                                                                    <input type="text"  maxlength="100" class="form-control " name="txtTour"  placeholder="Tour Name" id="txtTour"  value="<?php echo $OFFER->title;?>" readonly required>
                                                                                </div>
<!--                                                                                Input Field End-->
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
                                                <?php include("./offer-form/captchacode-widget.php"); ?> 
                                            </div>
                                        </div>  
                                        <div class="col-sm-12">
                                            <div class="input-field">
                                                <div class="div-check" >
                                                    <img src="./offer-form/img/checking.gif"  alt="checking" id="checking"/>
                                                </div>
                                                <div id="dismessage" align="center"></div>
                                                <button type="submit" id="btnSubmit" class="contact-btn df-button sm-button th-bg">BOOK YOUR TOUR</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

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
<script>
    // Get the modal
    var modal = document.getElementById("myModal_1");

// Get the button that opens the modal
    var btn = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

// When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

// When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script>
    // Get the modal
    var modal = document.getElementById("myModal_2");

// Get the button that opens the modal
    var btn = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

// When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

// When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
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
<script src="offer-form/scripts.js" type="text/javascript"></script>
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