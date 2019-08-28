<?php
include_once(dirname(__FILE__) . '/class/include.php');
$THINGS_TO_DO_VIEW_BANNER = new Banner(8);
$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$ACTIVITY = new Activities($id);
$TOUR_PACKAGE = new TourPackage(NULL);
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
         <title><?php echo $ACTIVITY->title; ?>  - Pathum Lanka Tours Sri Lanka</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="pathum lanka tours activities, things to do in sri lanka , excursion, excursion in srilnaka , activities in sri lanka, <?php echo $ACTIVITY->title;?>, pathum lanka tours, pathum lanka tours in sri lanka, sri lanka holiday trips, round tours with private driver, tour operators of sri lanka, day tours in sri lanka, sightseeing in sri lanka, tailor-made tour packages, private driver in sri lanka">
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
        <!--         <link href="light-box/simplelightbox.min.css" rel="stylesheet" type="text/css"/>-->
        <link href="slick-slider/slick.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="main-wrapper">
            <!--header -->
            <?php include './header.php' ?>
            <!--header -->
            <!--Sub Banner Wrap Start-->
            <div class="sub-banner " style="background-image: url('./upload/banner/<?php echo $THINGS_TO_DO_VIEW_BANNER->image_name;?>') !important;">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active"><?php echo $ACTIVITY->title;?></li>
                </ol>
            </div>
            <!--Sub Banner Wrap End-->
            <div class="main-contant">
                <!--Blog List Start-->
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <!--Blog List Start-->
                                <div class="blog-thumb blog-detail">
                                    <figure>
                                        <div class="things-to-do-view-slider box-arrow">
                                            <?php
                                            $ACTIVITY_PHOTO = ActivitiesPhoto::getActivitiesPhotosbyId($id);
                                            foreach ($ACTIVITY_PHOTO as $activity_photo) {
                                                ?>
                                                <div class="col-md-4 gallery-padding">
                                                    <img src="upload/activity/gallery/<?php echo $activity_photo["image_name"];?>" alt="" title="<?php echo $activity_photo["caption"];?>" />
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </figure>
                                    <div class="text">
                                        <h6 class="title"><a href="#"><?php echo $ACTIVITY->title;?></a></h6>
                                        <p><?php echo $ACTIVITY->description;?></p>
                                   </div>
                                </div>
                                <!--Blog List End-->

                            </div>
                            <div class="col-md-4">
                                <aside class="sidebar">
                                    <!-- Similar Products Widget Start-->
                                    <div class="widget widget-recent-post">
                                        <h6 class="widget-title">More Things to do</h6>
                                        <!-- Similar Products List Start-->
                                        <ul class="similar-product-list">
                                             <?php
                                            $ACTIVITY = Activities::all();
                                            foreach ($ACTIVITY as $key => $activities) {
                                                  if($key > 5){
                                                   break;
                                               }
                                            ?>
                                            <li>
                                                <!-- Similar Products Start-->
                                               
                                                <div class="similar-products">
                                                     <a href="things-to-do-view.php?id=<?php echo $activities["id"];?>">
                                                    <figure><img src="upload/activity/<?php echo $activities["image_name"];?>" alt=""></figure>
                                                    <div class="text-overflow">
                                                        <h6 class="title"><a href="things-to-do-view.php?id=<?php echo $activities["id"];?>"><?php echo $activities["title"];?></a></h6>
                                                        <ul class="blog-meta">
                                                            <li><?php echo substr($activities["description"],0,60);?>..</li>
                                                        </ul>
                                                        <a href="things-to-do-view.php?id=<?php echo $activities["id"];?>" class="read-more arrows th-cl">Read More</a>

                                                    </div>
                                                      </a>
                                                </div>
                                              
                                                <!-- Similar Products End-->
                                            </li>
                                          <?php 
                                            }
                                          ?>

                                        </ul>
                                        <!-- Similar Products List End-->
                                    </div>   
                                </aside>
                            </div>
                        </div>
                    </div>
                </section>
               <?php include './contact-slider.php' ?>
                <!--Blog List End-->
            </div>
            <?php include './footer.php' ?>
        </div>
   
    <!-- jQuery Default Library -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Default jQuery Library -->
    <script src="js/bootstrap.js"></script>
    <!-- Slick Slider jQuery Library -->

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