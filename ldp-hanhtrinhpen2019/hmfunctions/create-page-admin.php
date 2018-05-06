<?php
function styleAdminPage(){
    $style = "<style>
        .wapper-page-form{
            background: #ffffff;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        input{
            margin: 0;
        }
        #nav-table{
            margin-top: 10px;
        }
        .nav-number{
            display: inline-block;
            width: 20px;
            line-height: 20px;
            background: #fff;
            margin-right: 5px;
            text-align: center;
            text-decoration: none;
        }
        .child-tr{
            background: #EEEEEE;
        }
        .plus{
            color: #ffffff;
            background: #0073aa;
            display: inline-block;
            width: 20px;
            line-height: 20px;
            height: 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .utm-list span{
            display: inline-block;
            width: 100px;
        }
    </style>";
    return $style;
}

function installDatabase(){
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();

    $sqlContact = "CREATE TABLE `wp_contact` (
          `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          `guardian` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
          `relationship` int(3) DEFAULT '0',
          `phone` varchar(20) DEFAULT NULL,
          `email` varchar(100) DEFAULT NULL,
          `address` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
          `fullname` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
          `birthday` int(12) DEFAULT '0',
          `class` int(3) DEFAULT '0',
          `created` int(15) NOT NULL DEFAULT '0'
      ) ENGINE=MyISAM  $charset_collate";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sqlContact );
}

function hm_adminpage_data(){
    ?>
    <div class="wrap">
        <h2>Hocmai Manager</h2>
        <a href="admin.php?page=hocmai-install">Install database</a>
    </div>
    <?php
}

function hm_adminpage_data1(){
    global $wpdb;
    $limit = LIMIT;
    $start = 0;
    $sqlCount = "SELECT COUNT(id) FROM wp_contact";

    $totalRecord = (int)$wpdb->get_var($sqlCount);

    $totalPage = ceil($totalRecord / $limit);

    $sql = "SELECT * FROM wp_contact ORDER BY created DESC LIMIT $start, $limit";
    $result = $wpdb->get_results($sql);
    echo styleAdminPage();
    ?>

    <div class="wrap">
        <h2>Contact</h2>
        <div id="dvjson"></div>
        <div class="wapper-page-form">
            <table>
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ và Tên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Trường</th>
                    <th>Lớp</th>
                    <th>Thành phố</th>
                    <th>Ngày tạo</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $count = 0;
                foreach ($result as $item){ ?>
                    <tr id="item-tr-<?php echo $item->id; ?>" data-id="<?php echo $item->id; ?>" class="item-tr">
                        <td><?php echo $item->id;?></td>
                        <td><?php echo $item->fullname;?></td>
                        <td><?php echo $item->phone;?></td>
                        <td><?php echo $item->email;?></td>
                        <td><?php echo $item->school;?></td>
                        <td><?php echo hmLandingClass($item->class);?></td>
                        <td><?php echo getCity($item->city)[0]->name;?></td>
                        <td><?php echo date("d/m/Y", $item->created);?></td>
                    </tr>
                <?php } ?>
                </tbody>

            </table>
        </div>
        <div id="nav-table" class="nav-table">
            <?php
            for ($i=1;$i<=$totalPage;$i++){
                echo '<a class="nav-number" data-current="'.$i.'" href="javascript:void(0)">'.$i.'</a>';
            } ?>
        </div>
    </div>
    <script>
        var CITY = <?php $getCity = getCity(-1);echo json_encode($getCity); ?>
    </script>
    <?php
}