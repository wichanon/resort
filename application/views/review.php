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
    <div class="container-fluid review">
        <?php $this->load->view('_menu'); ?>
        <div class="row mt-5">
            <div class="col-8 mx-auto">
                <div class="row">
                    <div class="col">
                        <h2 style="color:#936C46"><b>รีวิวแพ็คเกจ</b> </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="box_review">
                            <?php foreach ($list as $key => $value) { ?>
                                <div class="review_list my-3">
                                    <div class="package" style="background-image: url(<?= base_url() ?>../<?= $value['cover'] ?>);">
                                        <div class="text_name">
                                            <h5><?= $value['name'] ?></h5>
                                            <p><?= number_format($value['price']) ?> บาท</p>
                                        </div>
                                        <!-- <div class="box">
                                            <div class="image">
                                                <img src="<?= base_url() ?>../<?= $value['cover'] ?>" alt="">
                                            </div>
                                            <div class="detail">
                                                <h3><?= $value['name'] ?></h3>
                                                <p><?= $value['package_detail'] ?></p>
                                            </div>
                                            <div class="detail_2">
                                                <div class="box1">
                                                    <h6><?= $value['type'] ?></h6>
                                                </div>
                                                <div class="box2">
                                                    <img src="<?= base_url() ?>../images/mock/image3.png" alt="">
                                                </div>
                                                <div class="box3">
                                                    <div class="price">
                                                        <div class="old">
                                                            <?= number_format($value['price_full']) ?>
                                                        </div>
                                                        <div class="new">
                                                        <?= number_format($value['price']) ?> <last>บาท</last>
                                                        </div>
                                                    </div>
                                                    <div class="start_pack">
                                                        ราคาเริ่มต้น (ต่อแพ็คเกจ)
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                    </div>
                                    <div class="review_">
                                        <div class="box">
                                            <div class="row">
                                                <div class="col">
                                                    <?php $date = explode(" ", $value['date_time']); ?>
                                                    <span><?= $value['firstname'] ?> <?= $value['lastname'] ?> โพสเมื่อ <?= $date[0] ?> เวลา <?= $date[1] ?> น.</span>
                                                    <div class="text_review">
                                                        <?= $value['detail'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid submit_news">
        <div class="row my-4">
            <div class="col-5 mx-auto">
                <div class="line">
                    <img src="<?= base_url() ?>../images/mock/line2.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col p-0">
                <div class="box_sub_news">
                    <div class="box">
                        <div class="text">
                            <h3>ติดตามข่าวสาร โปรโมชั่น </h3>
                            <p>เพียงคุณกรอกอีเมลแล้วกดส่ง พร้อมรับโปรโมชั่นดีๆ</p>
                        </div>
                        <div class="input_email">
                            <div class="box_input">
                                <input type="text" class="input" placeholder="ใส่อีเมล์ของคุณ">
                                <div class="btn_submit">ส่ง</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-5 mx-auto">
                <div class="line">
                    <img src="<?= base_url() ?>../images/mock/line2.png" alt="">
                </div>
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
</script>

</html>