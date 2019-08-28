<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of box_section
 *
 * @author Suharshana DsW
 */
class IndexBoxSection {

    public $id;
    public $title;
    public $image_name;
    public $link;
    public $description;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`title`,`image_name`,`link`,`description`,`queue` FROM `box_section` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title'];
            $this->image_name = $result['image_name'];
            $this->link = $result['link'];
            $this->description = $result['description'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `box_section` (`title`,`image_name`,`link`,`description`,`queue`) VALUES  ('"
                . $this->title . "','"
                . $this->image_name . "', '"
                . $this->link . "', '"
                . $this->description . "', '"
                . $this->queue . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysql_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `box_section` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `box_section` SET "
                . "`title` ='" . $this->title . "', "
                . "`image_name` ='" . $this->image_name . "', "
                . "`link` ='" . $this->link . "', "
                . "`description` ='" . $this->description . "', "
                . "`queue` ='" . $this->queue . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $this->deletePhotos();

        unlink(Helper::getSitePath() . "upload/box-section/" . $this->image_name);

        $query = 'DELETE FROM `box_section` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function deletePhotos() {

        $ACTIVITY_PHOTO = new IndexBoxSectionPhoto(NULL);

        $allPhotos = $ACTIVITY_PHOTO->getIndexBoxSectionPhotosById($this->id);

        foreach ($allPhotos as $photo) {

            $IMG = $ACTIVITY_PHOTO->image_name = $photo["image_name"];
            unlink(Helper::getSitePath() . "upload/box-section/gallery/" . $IMG);
            unlink(Helper::getSitePath() . "upload/box-section/gallery/thumb/" . $IMG);

            $ACTIVITY_PHOTO->id = $photo["id"];
            $ACTIVITY_PHOTO->delete();
        }
    }

    public function arrange($key, $img) {
        $query = "UPDATE `box_section` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
