<footer class="footer1">
    <div class="container">
        <div class="row">
            <!--Widget Contact Start-->
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-contact">
                    <!--Widget Title Start-->
                    <!--Widget Title End-->
                    <!--Info Thumb Start-->
                    <div class="info-thumb" style="width:100%">
                        <img src="images/footer-logo-surf.png" alt=""/>
                    </div>
                    <!--Info Thumb End-->
                    <!--Info Thumb Start-->
                    <div class="socail-thumb ">
                        <span class=" th-cl"><img  src="images/icons/viber(2).png" alt=""/></span>
                        <span class=" th-cl"><img src="images/icons/whatsapp(2).png" alt=""/></span>
                        <span class=" th-cl"><img src="images/icons/speech-bubble.png" alt=""/></span>



                    </div>
                    <div class="info-thumb"  style="padding-top:24px;">
                        <p ><a href="tel:+94 774 741 416" style="text-decoration: none;font-size:24px!important;font-weight: 400;"> +94 774 741 416</a></p>
                    </div>
                    <!--Info Thumb End-->
                    <!--Info Thumb Start-->
                    <div class="info-thumb">
                        <span class=" th-cl">   <img src="images/icons/mail-black-envelope-symbol.png" alt=""/></span>
                        <div class="text-overflow">
                            <a href="mailto:info@pathumlankatours.com">info@pathumlankatours.com</a>
                        </div>
                    </div>
                    <div class="info-thumb">
                        <span class="th-cl">
                            <img src="images/icons/browser(1).png" alt=""/>
                        </span>
                        <div class="text-overflow">
                            <a href="">www.pathumlankatours.com</a>
                        </div>
                    </div>
                    <!--Info Thumb End-->
                </div>
            </div>
            <!--Widget Contact End-->
            <!--Widget Pages Start-->

            <div class="col-md-3 col-sm-6">
                <div class="widget widget_pages">
                    <!--Widget Title Start-->
                    <h5 class="widget-title"> Day tours </h5>
                    <!--Widget Title End-->
                    <ul> 
                        <?php
                        $TOUR_PACKAGE = TourPackage::selectOneDayTours();
                        foreach ($TOUR_PACKAGE as $key => $tour_package) {
                            if ($key == 6) {
                                break;
                            }
                            ?>
                        <li class="footer-li"><a href="tour-packages-view.php?id=<?php echo $tour_package["id"]; ?>" style="font-weight: 600;"><?php echo $tour_package["title"]; ?></a></li>
                        <?php }
                        ?>

                    </ul>
                </div>
            </div>
            <!--Widget Pages End-->
            <div class="col-md-2 col-sm-6">
                <div class="widget">
                    <h5 class="widget-title">Tripadvisor</h5>

                    <div id="TA_rated2" class="TA_rated"><ul id="CX4JS3H68TI" class="TA_links PFzxNOq4mDg"><li id="c9XuBCeHxhwa" class="dLDpZU0"><a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/badges/ollie-11424-2.gif" alt="TripAdvisor"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=rated&amp;uniq=2&amp;locationId=12948667&amp;lang=en_US&amp;display_version=2" data-loadtrk onload="this.loadtrk = true"></script>
                </div>


            </div>
            <div class="col-md-4 col-sm-6">
                <div class="widget">
                    <h5 class="widget-title">Find Us on Facebook</h5>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPathumlankatours%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=false&appId" width="100%" height="140" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
                <div class="widget">
                </div>

            </div>
        </div>
        <div id="widget-contact" class="copy-right widget-contact ">
            <div class="row">
                <p class="copy-right-pd pull-left">
                        Copyright Pathumlanka Tours @ <?php echo date("Y"); ?>. ||   Website By:   <a href="https://www.synotec.lk/"  target="_blank" style="color:white;"> <i class="fa fa-hand-o-right text-primary heart"  style="color:white;"></i>   Synotec Holdings (Pvt) Ltd. 

                    
                    </p>
                <ul class="social pull-right">
                    <li><a href="https://www.facebook.com/Pathumlankatours/" target="new"><span class="iq-facebook-2"></span></a></li>
                    <li><a href="https://twitter.com/pathumlankatour?lang=en" target="new"><span class="iq-symbol"></span></a></li>
                    <li><a href="https://plus.google.com/100896337862160819225" target="new"><span class="iq-google-plus"></span></a></li>
                    <li><a href="https://www.youtube.com/channel/UC0OWaJ8fCj531AHJzIzI2tA" target="new"><span class="iq-youtube"></span></a></li>
                    <li><a href="https://www.instagram.com/pathum.lanka.tours.77/" target="new"><span class="iq-instagram-1"></span></a></li>

                </ul>
            </div>
        </div>
</footer>
<!--Footer 1 End-->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133542589-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133542589-1');
</script>