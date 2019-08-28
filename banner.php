<div class="main-banner">
    <!-- Home Slider Wrapper Start-->
    <ul class="home-slider triangle-arrow">
        <?php
        $SLIDER = Slider::all();
        foreach ($SLIDER as $key => $slider) {
            if ($key == 9) {
                break;
            }
            ?>
            <li class="">
                <!--Banner Thumb START-->
                <img src="upload/slider/<?php echo $slider["image_name"]; ?>" alt="Pathum Lanka Tours">
                <!--Banner Thumb End-->
            </li>
            <?php
        }
        ?>

    </ul>
    <!-- Home Slider Wrapper End-->

    <!-- iqoniq Search Wrapper Start-->
    <div class="search_wraper ">
        <div class="container ">
            <div class="search_one absolute">
                <!-- Tab panes Start -->
                <div class="tab-content">
                    <!-- Tabs Pane Start -->
                   
                        <!-- Search Start -->
                        <div class="banner-search_tab">
                            <img src="images/exce-logo.png">
                        </div>
                        <!-- Search End -->
                   
                    <!-- Tabs Pane End -->

                </div>
                <!-- Tab panes End -->
            </div>
        </div>
    </div>
    <!-- iqoniq Search Wrapper End-->
</div>