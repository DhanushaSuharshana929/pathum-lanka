<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
?>
<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Offer</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="plugins/node-waves/waves.css" rel="stylesheet" />
        <link href="plugins/animate-css/animate.css" rel="stylesheet" />
        <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet">
        <link href="css/themes/all-themes.css" rel="stylesheet" />
    </head>

    <body class="theme-red">
        <?php
        include './navigation-and-header.php';
        ?>

        <section class="content">
            <div class="container-fluid">  
                <?php
                $vali = new Validator();
                $vali->show_message();
                ?>
                <!-- Vertical Layout -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>Create Offer</h2>
                                <ul class="header-dropdown">
                                    <li class="">
                                        <a href="manage-offer.php">
                                            <i class="material-icons">list</i> 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <form class="form-horizontal"  method="post" action="post-and-get/offer.php" enctype="multipart/form-data"> 

                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="title" class="form-control"  autocomplete="off" name="title" required="true">
                                                <label class="form-label">Title</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="price" class="form-control" autocomplete="off" name="price" required="true">
                                                <label class="form-label">Price</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 hidden" >
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="price2" class="form-control" autocomplete="off" value="100" name="price2" required="true">
                                                <label class="form-label">Price 2</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="discount" class="form-control" autocomplete="off" name="discount" required="true">
                                                <label class="form-label">Discount</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">                                       
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="file" id="image" class="form-control" name="image"  required="true">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                                 <label class="form-label">Short Description</label>
                                            <div class="form-line">
                                                <textarea  id="short_description" class="form-control long-text"  name="short_description" row="5"></textarea>
                                           
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="description">Price List 1</label>
                                        <div class="form-line">
                                            <textarea id="accommodation1" name="accommodation1" class="form-control long-text" rows="5"></textarea> 
                                        </div>

                                    </div>
                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="description">Price List 1- Hotels</label>
                                        <div class="form-line">
                                            <textarea id="accommodation_h1" name="accommodation_h1" class="form-control long-text" rows="5"></textarea> 
                                        </div>

                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden">
                                        <label for="description">Price List 2</label>
                                        <div class="form-line">
                                            <textarea id="accommodation2" name="accommodation2" class="form-control long-text" rows="5">-</textarea> 
                                        </div>

                                    </div>
                               
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden">
                                        <label for="description">Price List 2- Hotels</label>
                                        <div class="form-line">
                                            <textarea id="accommodation_h2" name="accommodation_h2" class="form-control long-text" rows="5">-</textarea> 
                                        </div>

                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="description">What to Expect</label>
                                        <div class="form-line">
                                            <textarea id="description" name="description" class="form-control long-text" rows="5"></textarea> 
                                        </div>

                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="description">Include</label>
                                        <div class="form-line">
                                            <textarea id="include" name="include" class="form-control long-text" rows="5"></textarea> 
                                        </div>

                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="description">Not Include</label>
                                        <div class="form-line">
                                            <textarea id="notinclude" name="notinclude" class="form-control long-text" rows="5"></textarea> 
                                        </div>

                                    </div>
                                    <div class="col-md-12"> 
                                        <input type="submit" name="create" class="btn btn-primary m-t-15 waves-effect" value="create"/>
                                    </div>
                                    <div class="row clearfix">  </div>
                                    <hr/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- #END# Vertical Layout -->

            </div>
        </section>

        <!-- Jquery Core Js -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.js"></script> 
        <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="plugins/node-waves/waves.js"></script>
        <script src="js/admin.js"></script>
        <script src="js/demo.js"></script>


        <script src="tinymce/js/tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: ".long-text",
                // ===========================================
                // INCLUDE THE PLUGIN
                // ===========================================

                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================

                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                // ===========================================
                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                // ===========================================

                relative_urls: false

            });


        </script>
    </body>

</html>