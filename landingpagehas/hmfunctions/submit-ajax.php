<?php
function submitAjax() {
    global $wpdb;
    $pattern1 = '#^01[0-9]{2}[0-9]{7}$#';
    $pattern2 = '#^09[0-9]{1}[0-9]{7}$#';
    $pattern3 = '#^0[2-8][0-9]{8}$#';
    $status["status"] = "error";
    $error = array();

    if($_POST["phone"]){
        $phone = $_POST['phone'];
        if(!preg_match($pattern1, $phone, $match) && !preg_match($pattern2, $phone, $match) && !preg_match($pattern3, $phone, $match)){
            $error['phone']['status'] = "Số điện thoại không hợp lệ";
            $error['phone']['index'] = "phone";
        }
    }else{
        $error['phone']['status'] = "Chưa nhập số điện thoại";
        $error['phone']['index'] = "phone";
    }

    if($_POST['email']){
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error['email']['status'] = "Định dạng email không hợp lệ";
            $error['email']['index'] = "email";
        }

    }else{
        $error['email']['status'] = "Chưa nhập email";
        $error['email']['index'] = "email";
    }

    if($_POST['fullname']){
        $fullname = $_POST['fullname'];
    }else{
        $error['fullname']['status'] = "Chưa nhập tên";
        $error['fullname']['index'] = "fullname";
    }


    if($_POST['class'] != 0){
        $class = $_POST['class'];
    }else{
        $error['class']['status'] = "Chưa chọn lớp";
        $error['class']['index'] = "class";
    }

    if($_POST['city'] != 0){
        $city = $_POST['city'];
    }else{
        $error['class']['status'] = "Chưa chọn thành phố";
        $error['class']['index'] = "city";
    }

    if($_POST['school']){
        $school = $_POST['school'];
    }else{
        $error['school']['status'] = "Chưa chọn trường";
        $error['school']['index'] = "school";
    }

    if(!empty($error)){
        $status["status"] = "error";
        $status["mess"] = $error;
        echo json_encode($status);
        die();
    }else{
        $table_name = "wp_contact";
        $wpdb->insert( $table_name,
            array(
                'phone' => $phone,
                'email'=>$email,
                'fullname'=>$fullname,
                'class' => $class,
                'city' => $city,
                'school' => $school,
                'created' => time(),
            )
        );
        $status["status"] = "success";
        $status["mess"] = "Thành công";
        echo json_encode($status);
        die();
    }

}
add_action('wp_ajax_submit_form', 'submitAjax');
add_action('wp_ajax_nopriv_submit_form', 'submitAjax');

function pagenaviAjax(){
    global $wpdb;
    $limit = LIMIT;
    if($_POST['current']){
        $start = ((int)$_POST['current'] - 1) * $limit;
    }
    $sqlCount = "SELECT COUNT(id) FROM wp_contact";
    $totalRecord = (int)$wpdb->get_var($sqlCount);

    $totalPage = ceil($totalRecord / $limit);

    $sql = "SELECT * FROM wp_contact ORDER BY created DESC LIMIT $start, $limit";
    $result = $wpdb->get_results($sql);

    if(!empty($result)){
        $dataTable = $result;
    }
    $data["table"] = $dataTable;
    $data["totalpage"] = $totalPage;
    echo json_encode($data);
    die();
}
add_action('wp_ajax_ajaxpagenavi', 'pagenaviAjax');
