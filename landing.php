<?php
/*
 * Template Name: Landing Page
 * Description: A Page Template with a darker design.
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
        $v = "1.0.1";
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;
        wp_title( '|', true, 'right' );
        // Add the blog name.
        bloginfo( 'name' );
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', TEXT_DOMAIN ), max( $paged, $page ) );
        ?></title>
<!--    <link rel="stylesheet" type="text/css" href="--><?php //echo plugin_dir_url( __FILE__ ) ?><!--fonts/utmavo/font.css">-->
<!--    <link rel="stylesheet" type="text/css" href="--><?php //echo plugin_dir_url( __FILE__ ) ?><!--css/bootstrap.css">-->
<!--    <link rel="stylesheet" type="text/css" href="--><?php //echo plugin_dir_url( __FILE__ ) ?><!--css/jquery-ui-1.10.1.css">-->
<!--    <link rel="stylesheet" type="text/css" href="--><?php //echo plugin_dir_url( __FILE__ ) ?><!--css/vigo.datepicker.css">-->



    <link href="<?php echo plugin_dir_url( __FILE__ ) ?>css/bootstrap.min.css?<?php echo $v ?>" rel="stylesheet">
    <link href="<?php echo plugin_dir_url( __FILE__ ) ?>css/col-customize.css?<?php echo $v ?>" rel="stylesheet">
    <link href="<?php echo plugin_dir_url( __FILE__ ) ?>css/font-awesome.min.css?<?php echo $v ?>" rel="stylesheet">
    <link href="<?php echo plugin_dir_url( __FILE__ ) ?>css/roboto.css?<?php echo $v ?>" rel="stylesheet">
    <link href="<?php echo plugin_dir_url( __FILE__ ) ?>css/slick-theme.css?<?php echo $v ?>" rel="stylesheet">
    <link href="<?php echo plugin_dir_url( __FILE__ ) ?>css/slick.css?<?php echo $v ?>" rel="stylesheet">
    <link href="<?php echo plugin_dir_url( __FILE__ ) ?>css/select2.css?<?php echo $v ?>" rel="stylesheet">

<!--    <link rel="stylesheet" type="text/css" href="--><?php //echo plugin_dir_url( __FILE__ ) ?><!--css/style.css">-->
    <link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url( __FILE__ ) ?>css/styles.css">
</head>

<body>

<div class="full_page">
    <div class="box-1">
        <div id="header" class="header clearfix">
            <div class="container">
                <div class="logo-wr">
                    <a class="logo" data-track="ga" track-action="Click_logo" href="<?php $CFG->wwwroot ?>/"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>images/logo.png" class="img-responsive"    alt=""/></a>
                </div>

            </div>
        </div>

        <div id="highlight" class="highlight">
            <div class="container">
                <div class="wrapper">
                    <div class="img-box-1">
                        <img src="<?php echo plugin_dir_url( __FILE__ ) ?>images/img-p.png" alt="" class="img-responsive mauto">
                        <div class="hl-address">
                            <img src="<?php echo plugin_dir_url( __FILE__ ) ?>images/address.png" alt="" class="img-responsive mauto">
<!--                            <span>7h30 ngày 27/05/2018</span>-->
<!--                            <span>Tại Nhà Thi Đấu Quận Lorem ipsum</span>-->
                        </div>
                        <div class="hl-bgradius">
                            <img src="<?php echo plugin_dir_url( __FILE__ ) ?>images/bg-bgradius.png" alt="" class="img-responsive mauto">
                        </div>
                    </div>
                    <div class="bg-radius">
                        <div class="row m5">
                            <div class="col-sm-4 p5">
                                <div class="bg-radius-item bg-radius-item-1">
                                    <div>
                                        <div class="title">
                                            <span>SỜ TẬN TAY</span>
                                            <span>CÁC THẦN TƯỢNG</span>
                                        </div>
                                        <div class="des">
                                            Được thầy cô tư vấn các thông tin hữu ích cho kỳ thi THPT quốc gia; Giải câu đố và nhận chìa khóa vàng từ thầy cô; Chụp ảnh cùng thần tượng và xin chữ ký
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 p5">
                                <div class="bg-radius-item bg-radius-item-middle">
                                    <div>
                                        <div class="title">
                                            <span>Hàng ngàn</span>
                                            <span>kho báu hấp dẫn</span>
                                        </div>
                                        <div class="des">
                                            Nhận hàng ngàn kho báu tri thức và quà tặng hấp dẫn....
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-4 p5">
                                <div class="bg-radius-item bg-radius-item-3">
                                    <div>
                                        <div class="title">
                                            <span>Teambuiding</span>
                                            <span>sôi động</span>
                                        </div>
                                        <div class="des">
                                            Cùng thầy cô tham gia game chiến thuật "Truy tìm chiếc chìa khóa cuối cùng" vô cùng hấp dẫn
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cta cta-1 button">
                        <a class="hvr-float-shadow back_down bgcta" href="#back_down" title="">
                            <span class="span1">CHỈ 350 VÉ</span> <br>
                            <span class="span2">ĐĂNG KÍ NGAY</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box-2">
        <div class="container">
            <div class="title">
<!--                <span><img src="--><?php //echo plugin_dir_url( __FILE__ ) ?><!--images/pin.png" class="img-responsive" alt=""/></span>-->
                <div class="bg-title-re">
                    <span class="">ĐĂNG KÍ TRỞ THÀNH CHIẾN BINH </span>
                </div>
<!--                <span class="hidden-480"><img src="--><?php //echo plugin_dir_url( __FILE__ ) ?><!--images/sao.png" class="img-responsive" alt=""/></span>-->
            </div>
        </div>
    </div>
    <div class="register" id="back_down">
        <div class="container">
            <div class="row max-width m20">
                <div class="col-md-6 col-md-push-6 p20">
                    <?php echo do_shortcode('[contact-form-7 id="9" title="Contact form 1"]'); ?>

                    <!--<form id="form-landingpage" class="js-validation-bootstrap form-horizontal" action="" method="post">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input class="form-control fullname" type="text" name="fullname" placeholder="Họ và Tên (*)" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Email nhận vé (*)" name="email" role="button" data-toggle="popover" data-trigger="focus" data-content="Vé mời tham dự chương trình sẽ được gửi đến email của bạn. Vui lòng điền chính xác thông tin để nhận được vé">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <select id="class-form" class="js-select2 form-control" name="class" style="width: 100%;" data-placeholder="Chọn lớp (*)">
                                    <option></option>
                                    <option value="11">Lớp 11</option>
                                    <option value="12">Lớp 12</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Trường" name="school">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control phone" name="phone" placeholder="Số điện thoại (*)" required>
                            </div>
                        </div>
                        <div class="form-group form-group-last">
                            <div class="col-sm-12">
                                <select id="city-form" class="js-select2 form-control" name="city" style="width: 100%;" data-placeholder="Chọn Tỉnh/Tp (*)">
                                    <option></option>
                                    <?php
/*                                    $getCity = getCity(-1);
                                    foreach ($getCity as $item){
                                        echo '<option value="'.$item->id.'">'.$item->name.'</option>';
                                    } */?>
                                </select>
                            </div>
                        </div>
                        <div class="button">
                            <div class="col-sm-12  cta-1">
                                <button  class="hvr-float-shadow modal_open bgcta" type="submit" name="submit">
                                    <span class="span2">ĐĂNG KÍ NGAY</span>
                                </button>
                                <!--                                <div class="cta cta-1 button">-->
                                <!--                                    <a class="hvr-float-shadow back_down" data-toggle="modal" data-target="#myModal-thong-bao" title="">-->
                                <!--                                        <span class="span1">CHỈ 350 SUẤT</span> <br>-->
                                <!--                                        <span class="span2">ĐĂNG KÍ NGAY</span>-->
                                <!--                                    </a>-->
                                <!--                                </div>-->

                            </div>
                        </div>
                    </form>-->
                </div>
                <div class="col-md-6 col-md-pull-6 p20">
                    <div class="table-responsive">
                        <div class="register-img">
                            <img src="<?php echo plugin_dir_url( __FILE__ ) ?>images/agenda.png" alt="" class="img-responsive mauto">
                        </div>
                        <div class="title">
                            Hành trình PEN<br>
                            TRUY TÌM KHO BÁU KIẾN THỨC
                        </div>
                        <div class="des" style="color: #6e2f17;font-weight: 500;">
                            Thời gian: 7h30 -12h00 chủ nhật ngày 27/5 <br>
                            Tại: Nhà Văn Hóa quận Thanh Xuân, Hà Nội
                        </div>
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>7h30 - 8h00:</td>
                                <td>Ghi danh sự kiện</td>
                            </tr>
                            <tr>
                                <td>8h00 - 08h45:</td>
                                <td>Khởi động chương trình</td>
                            </tr>
                            <tr>
                                <td>8h45 - 09h15:</td>
                                <td>Tư vấn lộ trình học tập tại 4 trại chiến binh</td>
                            </tr>
                            <tr>
                                <td>9h15 - 9h45:</td>
                                <td>Trả lời câu đố & nhận chìa khóa vàng</td>
                            </tr>
                            <tr>
                                <td>09h45 - 10h00:</td>
                                <td>Lắng nghe lời dặn dò từ các thầy cô</td>
                            </tr>
                            <tr>
                                <td>10h00 - 11h00:</td>
                                <td>Teambuilding & nhận kho báu</td>
                            </tr>
                            <tr>
                                <td>11h00 - 11h30</td>
                                <td>Chụp hình cùng thần tượng</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="gioi-thieu-thay-co">
        <div class="container">
            <div class="row title">
                <div class="col-sm-12">
                    <div class="bg-title-re">
                        <div>
                            <span class="">BẠN SẼ LÀ CHIẾN BINH</span>
                            <span class="">CỦA TRẠI NÀO?</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row max-width">
                <div class="">
                    <div class="col-sm-6 col-md-3">
                        <div class="box-thay-co">
                            <div class="text">
                                <a href="#" class="back_down" data-toggle="modal" data-target="#trai-chien-binh" title=""><h3>trại chiến binh 1</h3></a>
                            </div>
                            <div class="avatar">
                                <a href="#" data-toggle="modal" data-target="#trai-chien-binh" class="back_down" title=""><img src="<?php echo plugin_dir_url( __FILE__ ) ?>images/trai-cb-1.png" class="img-responsive mauto" alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="box-thay-co">
                            <div class="text">
                                <a href="#back_down" class="back_down" title=""><h3>trại chiến binh 2</h3></a>
                            </div>
                            <div class="avatar">
                                <a href="#back_down" class="back_down" title=""><img src="<?php echo plugin_dir_url( __FILE__ ) ?>images/trai-cb-2.png" class="img-responsive mauto" alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="box-thay-co">
                            <div class="text">
                                <a href="#back_down" class="back_down" title=""><h3>trại chiến binh 3</h3></a>
                            </div>
                            <div class="avatar">
                                <a href="#back_down" class="back_down" title=""><img src="<?php echo plugin_dir_url( __FILE__ ) ?>images/trai-cb-3.png" class="img-responsive mauto" alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="box-thay-co">
                            <div class="text">
                                <a href="#back_down" class="back_down" title=""><h3>trại chiến binh 4</h3></a>
                            </div>
                            <div class="avatar">
                                <a href="#back_down" class="back_down" title=""><img src="<?php echo plugin_dir_url( __FILE__ ) ?>images/trai-cb-4.png" class="img-responsive mauto" alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cta cta-1 button">
                    <a class="hvr-float-shadow back_down bgcta" href="#back_down">
                        <span class="span2">ĐĂNG KÍ NGAY</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php
    //    require_once("process.php");
    ?>

    <div class="comments">
        <div class="container">
            <div class="map">
<!--                <div class="date_map">-->
<!--                    <h2 style="opacity: 0; visibility: hidden">Địa điểm diễn ra sự kiện</h2>-->
<!--                </div>-->
                <!--            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4492.1732200586075!2d105.84339471076161!3d21.016055727346675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6293631a8d0cf764!2zR-G7rWkgeGUgQ8O0bmcgdmnDqm4gLSBOZ3V54buFbiDEkMOsbmggQ2hp4buDdQ!5e0!3m2!1sen!2s!4v1495167948466" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>-->
            </div>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=600873143331099";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-comments" data-href="<?php print curPageURL(); ?>" data-width="100%" data-numposts="5"></div>
        </div>
    </div>

    <footer>
    </footer>
    <!--<div id="lof_go_top">-->
    <!--    <span class="ico_up"></span>-->
    <!--</div>-->
    <!-- Modal -->

    <div class="modal fade trai-chien-binh" id="trai-chien-binh" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="tcb-pd">
                        <div class="tcb-title">TRẠI CHIẾN BINH 1</div>
                        <div class="tcb-des">
                            <div class="tcb-item">
                                <div class="tcb-item-avatar">
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) ?>images/lbtp.png" alt="" class="img-responsive">
                                </div>
                                <div class="tcb-right">
                                    <div class="tcb-item-title">Thầy Lê Bá Trần Phương</div>
                                    <div class="tcb-item-des">
                                        Thủ lĩnh nổi tiếng với bí quyết "chỉ cần thay số là được 8 điểm" và 3 tuyệt chiêu đặc biệt: "Chậm - Kĩ - Chắc" trong môn Toán.
                                    </div>
                                </div>
                            </div>
                            <div class="tcb-item">
                                <div class="tcb-item-avatar">
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) ?>images/nnh.png" alt="" class="img-responsive">
                                </div>
                                <div class="tcb-right">
                                    <div class="tcb-item-title">Thầy Nguyễn Ngọc Hải</div>
                                    <div class="tcb-item-des">
                                        Thủ lĩnh "khó tính" với vũ khí vi diệu: Tư duy toán học trong giải các bài toán Vật lí cùng tuyệt kĩ giảng "nhanh nhưng không lướt".
                                    </div>
                                </div>
                            </div>
                            <div class="tcb-item">
                                <div class="tcb-item-avatar">
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) ?>images/nna.png" alt="" class="img-responsive">
                                </div>
                                <div class="tcb-right">
                                    <div class="tcb-item-title">Thầy Nguyễn Ngọc Anh</div>
                                    <div class="tcb-item-des">
                                        Thủ lĩnh Xman tiên phong trong phương pháp "Mạng Nhện" thần chưởng, có khả năng xử gọn mọi logic Hóa học.
                                    </div>
                                </div>
                            </div>
                            <div class="tcb-item">
                                <div class="tcb-item-avatar">
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) ?>images/ntc.png" alt="" class="img-responsive">
                                </div>
                                <div class="tcb-right">
                                    <div class="tcb-item-title">Thầy Nguyễn Thành Công</div>
                                    <div class="tcb-item-des">
                                        Thủ lĩnh "soái ca vui tính" cực hài hước, hóm hỉnh nhưng chi tiết, tỉ mỉ khiến đối phương dễ phải lòng môn Sinh học.
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="cta-1">
                        <button class="hvr-float-shadow modal_open bgcta" data-dismiss="modal">
                            <span class="span2">Đóng</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bg-gach" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup">
                        <div class="title">Chúc mừng <br/> bạn đã đăng kí thành công</div>
                        <div class="text"><p>Chúc mừng bạn đã trở thành chiến binh dũng cảm tại hành trình PEN</p>
                            <p>Hẹn gặp lại vào sự kiện "truy tìm kho báu kiến thức" vào 7h30 ngày 27/5
                                tại Nhà Văn Hóa quận Thanh Xuân (Hà Nội).</p>
                            Bạn vui lòng kiểm tra email của mình để nhận mã xác nhận tham gia chương trình. Khi đến tham gia chương trình, bạn vui lòng đọc mã xác nhận tham gia của mình để được vào cửa miễn phí</div>

                    </div>
                    <div class="cta-1">
                        <button class="hvr-float-shadow modal_open bgcta" data-dismiss="modal">
                            <span class="span2">Đóng</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal-thong-bao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-thong-bao">
        <div class="modal-dialog" style="margin: 30px auto;max-width: 600px;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="myModalLabel-thong-bao">THÔNG BÁO</h4>
                </div>
                <div class="modal-body">
                    <div class="text-center" style="color: red;    font-size: 20px;">
                        Cổng đăng ký đã đóng. <br>
                        Hẹn gặp các bạn tại chương trình vào 7h30 sáng ngày 27/08 tại Nhà thi đấu đa năng ĐH Bách Khoa tp HCM.
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>


</div>

<script type="text/javascript">
    var ajax_url = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>


<script src="<?php echo plugin_dir_url( __FILE__ ) ?>js/jquery.min.js?<?php echo $v ?>"></script>
<script src="<?php echo plugin_dir_url( __FILE__ ) ?>js/bootstrap.min.js?<?php echo $v ?>"></script>
<script src="<?php echo plugin_dir_url( __FILE__ ) ?>js/slick.min.js?<?php echo $v ?>"></script>
<script src="<?php echo plugin_dir_url( __FILE__ ) ?>js/jquery.scrollLock.min.js?<?php echo $v ?>"></script>
<script src="<?php echo plugin_dir_url( __FILE__ ) ?>js/jquery.placeholder.min.js?<?php echo $v ?>"></script>
<script src="<?php echo plugin_dir_url( __FILE__ ) ?>js/app.js?<?php echo $v ?>"></script>
<script src="<?php echo plugin_dir_url( __FILE__ ) ?>js/select2.full.min.js?<?php echo $v ?>"></script>
<script src="<?php echo plugin_dir_url( __FILE__ ) ?>js/jquery.validate.min.js?<?php echo $v ?>"></script>
<script src="<?php echo plugin_dir_url( __FILE__ ) ?>js/additional-methods.min.js?<?php echo $v ?>"></script>
<script src="<?php echo plugin_dir_url( __FILE__ ) ?>js/base_forms_validation.js?<?php echo $v ?>"></script>
<script >
    jQuery(function () {
        App.initHelpers('select2');
    });
</script>
<script src="<?php echo plugin_dir_url( __FILE__ ) ?>js/main.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="<?php echo plugin_dir_url( __FILE__ ) ?>js/html5shiv.min.js"></script>
<script src="<?php echo plugin_dir_url( __FILE__ ) ?>js/respond.min.js"></script>
<![endif]-->


<!--<script src="--><?php //echo plugin_dir_url( __FILE__ ) ?><!--js/jquery-2.1.4.min.js"></script>-->
<!--<script src="--><?php //echo plugin_dir_url( __FILE__ ) ?><!--js/bootstrap.min.js"></script>-->
<!--<script src="--><?php //echo plugin_dir_url( __FILE__ ) ?><!--js/jquery-ui-1.10.1.min.js"></script>-->
<!--<script src="--><?php //echo plugin_dir_url( __FILE__ ) ?><!--js/javascript.js"></script>-->
</body>

</html>
