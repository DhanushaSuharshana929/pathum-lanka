<?php
include_once(dirname(__FILE__) . '/class/include.php');
$photo_album =new PhotoAlbum(1);
$GALLERY_BANNER =new Banner(11);
$TOUR_PACKAGE = new TourPackage(NULL);
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
         <title>Gallery - Pathum Lanka Tours Sri Lanka</title>
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

        <link href="css/responsive.css" rel="stylesheet">
        <link href="light-box/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="main-wrapper">
            <?php include './header.php' ?>
            <!--header -->
            <!--Banner Wrap Start-->
            <div class="sub-banner " style="background-image: url('./upload/banner/<?php echo $GALLERY_BANNER->image_name;?>') !important;">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active">Gallery</li>
                </ol>
            </div>
            <div class="main-contant">
                <section>
                    <div class="container">
                        <div class="row">
                        <div class="gallery">
                                   <?php
                    $PHOTO_ALBUM = AlbumPhoto::all();
                    foreach ($PHOTO_ALBUM as $photo_album) {
                        ?>
                            <div class="col-md-3 col-sm-12 col-xs-12 gallery-padding">
                                <a href="upload/photo-album/gallery/<?php echo $photo_album["image_name"];?>" ><img src="upload/photo-album/gallery/thumb/<?php echo $photo_album["image_name"];?>" alt="" title="<?php echo $photo_album["caption"];?>" /></a>
                            </div>
                             <?php 
                    }
                    ?>
                
                      
                        </div>
                        </div>
                    </div>
                </section>
                  <?php include './contact-slider.php' ?>
                <!--Footer 1 Start-->
                <?php include './footer.php' ?>
            </div>
            <!-- jQuery Default Library -->
            <script src="js/jquery.js"></script>
            <!-- Bootstrap Default jQuery Library -->
            <script src="js/bootstrap.js"></script>
            <!-- Slick Slider jQuery Library -->
            <script src="js/slick.js"></script>
            <!-- FLICKR Library -->
            <script src="js/jflickrfeed.min.js"></script>
            <!-- Popup Library -->
            <script src="js/jquery.magnific-popup.min.js"></script>
            <!-- Date Picker jQuery Library -->
            <script src="js/jquery.datetimepicker.full.js"></script>
            <!--Dl Menu Script-->
            <script src="js/dl-menu/modernizr.custom.js"></script>
            <script src="js/dl-menu/jquery.dlmenu.js"></script>
            <!-- Custom jQuery Library -->
            <script src="js/custom.js"></script>
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