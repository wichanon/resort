<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Resort</title>
    <?php $this->load->view('_config'); ?>
</head>

<body>
    <div class="container-fluid listpackage">
        <?php $this->load->view('_menu'); ?>
        <div class="row mt-5">
            <div class="col-8 mx-auto">
                <div class="row">
                    <div class="col">
                        <h2 style="color:#936C46"><b>แพ็คเกจของฉัน</b> </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="box_package">
                            <?php foreach ($list as $k => $v) { ?>
                                <div class="box_search my-2">
                                    <div class="image" style="background-image: url(<?= base_url() ?>../<?= $v['cover'] ?>"></div>
                                    <div class="detail">
                                        <div class="title">
                                            <h2><?= $v['name'] ?> <ss>3 วัน 2 คืน</ss>
                                            </h2>
                                        </div>
                                        <div class="sub">
                                            <p><?= $v['detail'] ?></p>
                                        </div>
                                        <div class="sub_2">
                                            <div class="total_activity">
                                                <p>10 กิจกรรม (รวมทั้ง <?= $v['type'] ?>) </p>
                                                <p>บ้านพัก <?= $v['house_name'] ?></p>
                                                <p><?= $v['total_adult'] ?> ผู้ใหญ่</p>
                                                <p><?= $v['total_kid'] ?> เด็ก</p>
                                            </div>
                                        </div>
                                        <div class="box_bottom">
                                            <div class="box_price">
                                                <h2>ราคา <?= number_format($v['price']) ?> บาท</h2>
                                            </div>
                                            <div class="box_btn d-flex">
                                                <?php if ($v['status'] == 10) {
                                                    if ($v['review'] == 1) { ?>
                                                        <div class="btn_review no_event mx-2" data-id_package="<?= $v['id_package'] ?>" data-id_booking="<?= $v['id'] ?>">
                                                            รีวิวแล้ว
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="btn_review mx-2" data-id_package="<?= $v['id_package'] ?>" data-id_booking="<?= $v['id'] ?>">
                                                            รีวิว
                                                        </div>
                                                <?php }
                                                } ?>
                                                <a href="<?= base_url() ?>Welcome/mydetail/<?= $v['id'] ?>">
                                                    <div class="btn_see_detail">
                                                        ดูรายละเอียด
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="status">
                                        <?php if ($v['status'] == 0) { ?>
                                            <h4 style="color: red;">ยังไม่ได้ชำระเงิน</h4>
                                        <?php } else if ($v['status'] == 1) { ?>
                                            <h4 style="color: green;">ชำระเงินเรียบร้อย</h4>
                                        <?php } else { ?>
                                            <h4 style="color: #333;">เข้าพักเรียบร้อย</h4>
                                        <?php } ?>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg_black" style="display:none">
        <div class="popup">
            <div class="row">
                <div class="col-12">
                    <h2>รีวิว</h2>
                    <span>รายละเอียด</span>
                    <textarea name="" class="form-control review_" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="col-12 d-flex justify-content-end mt-2">
                    <div class="btn_send_review">
                        ส่งรีวิว
                    </div>
                </div>
            </div>
            <div class="btn_close">
                <img src="<?= base_url() ?>../images/icons/cancel.png" alt="">
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <?php $this->load->view('_footer') ?>
    </div>
</body>
<script>
    $(document).ready(function() {
        let x = new Splide('#cover', {
            type: 'loop',
            autoplay: true
        }).mount();

        let y = new Splide('#pack', {
            perPage: 3,
            perMove: 1,
            focus: 'left'
        }).mount();
    });
    $('.btn_review').click(function() {
        $('.bg_black').fadeIn('fast')
        $('.btn_send_review').attr('data-id_package', $(this).attr('data-id_package'))
        $('.btn_send_review').attr('data-id_booking', $(this).attr('data-id_booking'))
    })
    $('.popup .btn_close').click(function() {
        $('.bg_black').fadeOut('fast')
    })
    $('.btn_send_review').click(function() {
        Swal.fire({
            title: 'ต้องการส่งรีวิว?',
            text: "การส่งรีวิว จะไม่สามารถแก้ไขข้อมูลได้อีก!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ใช่, ต้องการส่งรีวิว!',
            cancelButtonText: 'ยังก่อน'
        }).then((result) => {
            if (result.isConfirmed) {
                let text = $('.review_').val()
                let package_id = $(this).attr('data-id_package')
                let booking_id = $(this).attr('data-id_booking')
                if (text != '') {
                    $.ajax({
                            url: base_url + 'package/review',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                review: text,
                                package_id: package_id,
                                booking_id: booking_id
                            },
                        })
                        .done(function() {
                            console.log("success");
                        })
                        .fail(function() {
                            console.log("error");
                            Swal.fire(
                                'เกิดข้อผิดพลาด !',
                                'โปรดลองอีกครั้ง',
                                'warning'
                            )
                        })
                        .always(function(data) {
                            if (data == true) {
                                Swal.fire(
                                    'รีวิวสำเร็จ',
                                    'ขอบคุณสำหรับการรีวิวของท่าน!',
                                    'success'
                                )
                                setTimeout(function() {
                                    location.reload();
                                }, 3000);
                            }
                        });
                } else {
                    Swal.fire(
                        'ข้อความยังว่างอยู่!',
                        'กรุณาเขียนรีวิว.',
                        'warning'
                    )
                }

            }
        })
    })
</script>

</html>