<?php

function curPageURL() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .=
            $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].dirname($_SERVER['SCRIPT_NAME']);
    }
    else {
        $pageURL .= $_SERVER["SERVER_NAME"].dirname($_SERVER['SCRIPT_NAME']);
    }
    $pageURL .= '/';
    return $pageURL;
}


function hmLandingClass($id = null){
    $array = array(
        '10' => 'Lớp 10',
        '11' => 'Lớp 11',
        '12' => 'Lớp 12',
        '13' => 'Đại học',
    );
    if ($id){
        return $array[$id];
    }else{
        return $array;
    }
}

function hmLandingRelationship($id = null){
    $array = array(
        '1' => 'Bố',
        '2' => 'Mẹ',
        '3' => 'Anh/Chị/Em',
        '4' => 'Khác',
    );
    if ($id){
        return $array[$id];
    }else{
        return $array;
    }
}

function getCity($id = null){
    global $wpdb;
    if($id || $id == 0){
        $sql = "SELECT name,id FROM wp_city WHERE id = ".$id;
    }
    if($id == -1){
        $sql = "SELECT name,id FROM wp_city";
    }
    $result = $wpdb->get_results($sql);
    return $result;
}
