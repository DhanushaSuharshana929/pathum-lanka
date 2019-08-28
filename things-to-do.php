<?php
include_once(dirname(__FILE__) . '/class/include.php');
$THINGS_TO_DO_BANNER =new Banner(7);
$TOUR_PACKAGE = new TourPackage(NULL);
$ACTIVITY = Activities::all();
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
         <title>Things to Do in Sri Lanka - Pathum Lanka Tours Sri Lanka</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="keywords" content="pathum lanka tours activities, things to do in sri lanka , excursion, excursion in srilnaka , activities in sri lanka,pathum lanka tours, pathum lanka tours in sri lanka, sri lanka holiday trips, round tours with private driver, tour operators of sri lanka, day tours in sri lanka, sightseeing in sri lanka, tailor-made tour packages, private driver in sri lanka, <?php  foreach ($ACTIVITY as $activity){echo ', '.$activity['title'];}?>">
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
    </head>
    <body>
        <div class="main-wrapper">
            <!--header -->
            <?php include './header.php' ?>
            <!--header -->
            <!--Sub Banner Wrap Start-->
            <div class="sub-banner " style="background-image: url('./upload/banner/<?php echo $THINGS_TO_DO_BANNER->image_name;?>') !important;">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active">Things to Do</li>
                </ol>
            </div>
            <!--Sub Banner Wrap End-->
            <div class="main-contant">
                <!--Blog Section Start-->
                <section class="blog-grid-2">
                    <div class="container">
                        <div class="row">
                            <?php
                           foreach ($ACTIVITY as $key => $activity) {
                              
                                ?>
                                <!--Blog Thumb Start-->
                                <div class=" col-md-4 col-sm-6">
                                    <div class="blog-thumb">
                                        <figure>
                                            <a href="things-to-do-view.php?id=<?php echo $activity["id"]; ?>"><img src="upload/activity/<?php echo $activity["image_name"]; ?>" alt=""></a>
                                        </figure>
                                        <div class="text">
                                            <h6 class="title"><a href="things-to-do-view.php?id=<?php echo $activity["id"]; ?>"><?php echo $activity["title"]; ?></a></h6>
                                            <p> <?php echo substr($activity["short_description"], 0, 150); ?>...</p>
                                            <div class="things-to-do-btn">
                                                <a href="things-to-do-view.php?id=<?php echo $activity["id"]; ?>" class="df-button th-bg">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Blog Thumb End-->
                                <?php
                            }
                            ?>

                        </div>
                    </div>
                </section>
              <?php include './contact-slider.php' ?>
                <!--Blog Section End-->
            </div>
            <!--Footer 1 Start-->
            <?php include './footer.php' ?>
        </div>
    </div>
    <!-- jQuery Default Library -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Default jQuery Library -->
    <script src="js/bootstrap.js"></script>
    <!-- Slick Slider jQuery Library -->
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