<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $OFFER = new Offer(NULL);
    $VALID = new Validator();

    $OFFER->title = $_POST['title'];
    $OFFER->short_description = $_POST['short_description'];
    $OFFER->description = $_POST['description'];
    $OFFER->price = $_POST['price'];
    $OFFER->price2 = $_POST['price2'];
    $OFFER->discount = $_POST['discount'];
    $OFFER->accommodation1 = $_POST['accommodation1'];
    $OFFER->accommodation2 = $_POST['accommodation2'];
    $OFFER->accommodation_h1 = $_POST['accommodation_h1'];
    $OFFER->accommodation_h2 = $_POST['accommodation_h2'];
    $OFFER->include = $_POST['include'];
    $OFFER->notinclude = $_POST['notinclude'];

    $dir_dest = '../../upload/offer/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 570;
        $handle->image_y = 540;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $OFFER->image_name = $imgName;

    $VALID->check($OFFER, [
        'title' => ['required' => TRUE],
        'short_description' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'price' => ['required' => TRUE],
        'price2' => ['required' => TRUE],
        'discount' => ['required' => TRUE],
        'accommodation1' => ['required' => TRUE],
        'accommodation2' => ['required' => TRUE],
        'accommodation_h1' => ['required' => TRUE],
        'accommodation_h2' => ['required' => TRUE],
        'include' => ['required' => TRUE],
        'notinclude' => ['required' => TRUE],
        'image_name' => ['required' => TRUE]
    ]);


    if ($VALID->passed()) {
        $OFFER->create();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
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

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/offer/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 570;
        $handle->image_y = 540;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $OFFER = new Offer($_POST['id']);

    $OFFER->image_name = $_POST['oldImageName'];
    $OFFER->title = $_POST['title'];
    $OFFER->short_description =$_POST['short_description'];
    $OFFER->description = $_POST['description'];
    $OFFER->price = $_POST['price'];
    $OFFER->price2 = $_POST['price2'];
    $OFFER->discount = $_POST['discount'];
    $OFFER->accommodation1 = $_POST['accommodation1'];
    $OFFER->accommodation2 = $_POST['accommodation2'];
    $OFFER->accommodation_h1 = $_POST['accommodation_h1'];
    $OFFER->accommodation_h2 = $_POST['accommodation_h2'];
    $OFFER->include = $_POST['include'];
    $OFFER->notinclude = $_POST['notinclude'];

    $VALID = new Validator();

    $VALID->check($OFFER, [
        'title' => ['required' => TRUE],
        'short_description' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'price' => ['required' => TRUE],
        'price2' => ['required' => TRUE],
        'discount' => ['required' => TRUE],
        'accommodation1' => ['required' => TRUE],
        'accommodation2' => ['required' => TRUE],
        'accommodation_h1' => ['required' => TRUE],
        'accommodation_h2' => ['required' => TRUE],
        'include' => ['required' => TRUE],
        'notinclude' => ['required' => TRUE],
        'image_name' => ['required' => TRUE]
    ]);


    if ($VALID->passed()) {
        $OFFER->update();

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

        $OFFER = Offer::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}