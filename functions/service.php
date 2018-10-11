<?php

function getFirstId(){
    $db = new DB();
    $services = $db->query("all_services");
    $categoriesQuery = $db->query("our_services");

    while($category = $categoriesQuery -> fetch()){
        while($service = $services -> fetch()){
            if($service['cat_id'] == $category['id']){
                return $service['id'];
            }
        }
    }
}

function getService($id = null){
    $db = new DB();
    $dbQuery = $db->query("all_services");
    if(!$id){
        $id = getFirstId();
    }

    while($service = $dbQuery -> fetch()){
        if($service['id'] == $id){
            $title = $service['title'];
            $details = $service['description'];
            $hash = $service['image_hash'];
            $images = array();
            $rotated = array();

            $imagesQuery = $db->query("images");
            while($img = $imagesQuery -> fetch()){
                if($img['hash'] == $service['image_hash']){
                    array_push($images, $img['title']);
                    array_push($rotated, $img['rotate']);
                }
            }

            return $details = array('title' => $title, 'details' => $details, 'images' => $images, 'rotate' => $rotated, 'hash' => $hash);
        }
    }
}

?>
