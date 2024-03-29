<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $TOUR_PACKAGE = new TourPackage(NULL);
    $VALID = new Validator();

    $TOUR_PACKAGE->title = $_POST['title'];
    $TOUR_PACKAGE->type = $_POST['type'];
    $TOUR_PACKAGE->day = $_POST['day'];
    $TOUR_PACKAGE->start_price = $_POST['start_price'];
    $TOUR_PACKAGE->short_description = $_POST['short_description'];
    $TOUR_PACKAGE->description = $_POST['description'];
    $TOUR_PACKAGE->highlights = $_POST['highlights'];
    $TOUR_PACKAGE->price_list = $_POST['price_list'];

    $dir_dest = '../../upload/tour-package/';
  

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 400;
        $handle->image_y = 600;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
        
       
    }
    $dir_dest2 = '../../upload/tour-package/2/';
  

    $handle2 = new Upload($_FILES['image2']);

    $imgName2 = null;

    if ($handle2->uploaded) {
        $handle2->image_resize = true;
        $handle2->file_new_name_ext = 'jpg';
        $handle2->image_ratio_crop = 'C';
        $handle2->file_new_name_body = Helper::randamId();
        $handle2->image_x = 223;
        $handle2->image_y = 105;

        $handle->Process($dir_dest2);

        if ($handle2->processed) {
            $info2 = getimagesize($handle2->file_dst_pathname);
            $imgName2 = $handle2->file_dst_name;
        }
        
       
    }

    $TOUR_PACKAGE->image_name = $imgName;

    $VALID->check($TOUR_PACKAGE, [
        'title' => ['required' => TRUE],
        'type' => ['required' => TRUE],
        'day' => ['required' => TRUE],
        'start_price' => ['required' => TRUE],
        'short_description' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'highlights' => ['required' => TRUE],
        'price_list' => ['required' => TRUE],
        'image_name' => ['required' => TRUE],
    ]);


    if ($VALID->passed()) {
        $TOUR_PACKAGE->create();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header("location: ../view-tour-date.php?id=" . $TOUR_PACKAGE->id);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
//    $result = $TOUR_PACKAGE->create();
//    if ($result) {
//        header("location: ../create-tour-package.php?id=" . $TOUR_PACKAGE->id . "&&message=10");
//    } else {
//        
//    }
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/tour-package/';
  

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 400;
        $handle->image_y = 600;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
     
    }
    
     $dir_dest2 = '../../upload/tour-package/2/';
  

    $handle2 = new Upload($_FILES['image2']);

    $imgName2 = null;

    if ($handle2->uploaded) {
        $handle2->image_resize = true;
        $handle2->file_new_name_body = TRUE;
        $handle2->file_overwrite = TRUE;
        $handle2->file_new_name_ext = FALSE;
        $handle2->image_ratio_crop = 'C';
        $handle2->file_new_name_body = $_POST ["oldImageName"];
        $handle2->image_x = 223;
        $handle2->image_y = 105;

        $handle2->Process($dir_dest2);

        if ($handle2->processed) {
            $info2 = getimagesize($handle2->file_dst_pathname);
            $imgName2 = $handle2->file_dst_name;
        }
     
    }
    
    
    
    
    

    $TOUR_PACKAGE = new TourPackage($_POST['id']);

    $TOUR_PACKAGE->image_name = $_POST['oldImageName'];
    $TOUR_PACKAGE->type = $_POST['type'];
    $TOUR_PACKAGE->title = $_POST['title'];
    $TOUR_PACKAGE->day = $_POST['day'];
    $TOUR_PACKAGE->start_price = $_POST['start_price'];
    $TOUR_PACKAGE->short_description = $_POST['short_description'];
    $TOUR_PACKAGE->description = $_POST['description'];
    $TOUR_PACKAGE->highlights = $_POST['highlights'];
    $TOUR_PACKAGE->price_list = $_POST['price_list'];


    $VALID = new Validator();

    $VALID->check($TOUR_PACKAGE, [
        'type' => ['required' => TRUE],
        'title' => ['required' => TRUE],
        'day' => ['required' => TRUE],
        'start_price' => ['required' => TRUE],
        'short_description' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'highlights' => ['required' => TRUE],
        'price_list' => ['required' => TRUE],
        'image_name' => ['required' => TRUE],
    ]);


    if ($VALID->passed()) {
        $TOUR_PACKAGE->update();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your changes saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $TOUR_PACKAGE = TourPackage::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}