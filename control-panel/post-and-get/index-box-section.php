<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $BOX_SECTION = new IndexBoxSection(NULL);
    $VALID = new Validator();

    $BOX_SECTION->title = $_POST['title'];
    $BOX_SECTION->link =$_POST['link'];
    $BOX_SECTION->description = $_POST['description'];

    $dir_dest = '../../upload/box-section/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 350;
        $handle->image_y = 400;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $BOX_SECTION->image_name = $imgName;

    $VALID->check($BOX_SECTION, [
        'title' => ['required' => TRUE],
        'link' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'image_name' => ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
        $BOX_SECTION->create();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header("location: ../create-index-box-section.php?id=" . $BOX_SECTION->id);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/box-section/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 350;
        $handle->image_y = 400;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $BOX_SECTION = new IndexBoxSection($_POST['id']);

    $BOX_SECTION->image_name = $_POST['oldImageName'];
    $BOX_SECTION->title = $_POST['title'];
    $BOX_SECTION->link = $_POST['link'];
    $BOX_SECTION->description =$_POST['description'];

    $VALID = new Validator();
    $VALID->check($BOX_SECTION, [
        'title' => ['required' => TRUE],
        'link' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'image_name' => ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
        $BOX_SECTION->update();

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

        $BOX_SECTION = IndexBoxSection::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}