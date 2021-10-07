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
    <!-- <?php echo "<pre>";
            print_r($activity);
            echo "</pre>"; ?> -->
    <div class="container-fluid">
        <?php $this->load->view('_menu'); ?>
    </div>
    <div class="container detail">
        <div class="row my-4">
            <div class="col">
                <div class="box">
                    <div class="row title">
                        <div class="col">
                            <h2><?= $list['name'] ?></h2>
                            <p><?= $list['detail'] ?></p>
                        </div>
                        <div class="col text-end">
                            <h2><?= number_format($list['price']); ?>บาท</h2>
                            <p>ราคาปกติ <cut><?= number_format($list['price_full']); ?></cut> บาท </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col">
                        <div class="box">
                            <div id="primary-slider" class="splide">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <?php foreach ($list['image_cover'] as $key => $value) { ?>
                                            <li class="splide__slide"><img src="<?= base_url() ?>../<?= $value['image'] ?>" alt=""></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                        <div class="box">
                            <div id="secondary-slider" class="splide">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <?php foreach ($list['image_cover'] as $key => $value) { ?>
                                            <li class="splide__slide"><img src="<?= base_url() ?>../<?= $value['image'] ?>" alt=""></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-4 home_detail">
                    <div class="col-12">
                        <div class="box">
                            <div class="row">
                                <div class="col">
                                    <h2><?= $list['house_id']['name'] ?></h2>
                                    <p><?= $list['house_id']['detail'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col p-0">
                                    <div class="box_home_service">
                                        <?php if ($list['house_id']['FreeWifi'] == '1') { ?>
                                            <div class="box_service">
                                                <img src="<?= base_url() ?>../images/icons/services/FreeWifi.png" alt="">
                                                <p>Free Wifi</p>
                                            </div>
                                        <?php } ?>
                                        <?php if ($list['house_id']['1LivingRoom'] == '1') { ?>
                                            <div class="box_service">
                                                <img src="<?= base_url() ?>../images/icons/services/1LivingRoom.png" alt="">
                                                <p>1 Living Room</p>
                                            </div>
                                        <?php } ?>
                                        <?php if ($list['house_id']['MiniBar'] == '1') { ?>
                                            <div class="box_service">
                                                <img src="<?= base_url() ?>../images/icons/services/MiniBar.png" alt="">
                                                <p>Mini Bar</p>
                                            </div>
                                        <?php } ?>
                                        <?php if ($list['house_id']['Pantry'] == '1') { ?>
                                            <div class="box_service">
                                                <img src="<?= base_url() ?>../images/icons/services/Pantry.png" alt="">
                                                <p>Pantry</p>
                                            </div>
                                        <?php } ?>
                                        <?php if ($list['house_id']['MicrowaveOvens'] == '1') { ?>
                                            <div class="box_service">
                                                <img src="<?= base_url() ?>../images/icons/services/MicrowaveOvens.png" alt="">
                                                <p>Microwave Ovens</p>
                                            </div>
                                        <?php } ?>
                                        <?php if ($list['house_id']['Television'] == '1') { ?>
                                            <div class="box_service">
                                                <img src="<?= base_url() ?>../images/icons/services/Television.png" alt="">
                                                <p>Television</p>
                                            </div>
                                        <?php } ?>
                                        <?php if ($list['house_id']['Hairdryer'] == '1') { ?>
                                            <div class="box_service">
                                                <img src="<?= base_url() ?>../images/icons/services/Hairdryer.png" alt="">
                                                <p>Hair dryer</p>
                                            </div>
                                        <?php } ?>
                                        <?php if ($list['house_id']['HotColdShower'] == '1') { ?>
                                            <div class="box_service">
                                                <img src="<?= base_url() ?>../images/icons/services/HotColdShower.png" alt="">
                                                <p>Hot & Cold Shower</p>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row activity">
                    <div class="col">
                        <div class="box">
                            <div class="row">
                                <div class="col">
                                    <h2>โปรแกรมท่องเที่ยว</h2>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row my-4">
                                <input type="text" hidden class="day_all" value="<?= $list['day_all'] ?>">
                                <div class="col">
                                    <div class="row">
                                        <div class="col change_day" data_day="1">
                                            <h5>วันที่ 1</h5>
                                        </div>
                                    </div>
                                    <div class="activity_group day_1">
                                        <?php foreach ($activity['day1'] as $key => $value) { ?>
                                            <div class="row">
                                                <div class="col-3">
                                                    <?= $value['time'] ?> น.
                                                </div>
                                                <div class="col">
                                                    <?= $value['name'] ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="activity_group day_2" style="display: none;">
                                        <?php foreach ($activity['day2'] as $key => $value) { ?>
                                            <div class="row">
                                                <div class="col-3">
                                                    <?= $value['time'] ?> น.
                                                </div>
                                                <div class="col">
                                                    <?= $value['name'] ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="activity_group day_3" style="display: none;">
                                        <?php foreach ($activity['day3'] as $key => $value) { ?>
                                            <div class="row">
                                                <div class="col-3">
                                                    <?= $value['time'] ?> น.
                                                </div>
                                                <div class="col">
                                                    <?= $value['name'] ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="activity_group day_4" style="display: none;">
                                        <?php foreach ($activity['day4'] as $key => $value) { ?>
                                            <div class="row">
                                                <div class="col-3">
                                                    <?= $value['time'] ?> น.
                                                </div>
                                                <div class="col">
                                                    <?= $value['name'] ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row my-4">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-3"></div>
                                                <div class="col">
                                                    <div class="config">
                                                        <div class="circle red"></div>
                                                        <span class="red">ไม่สามารถเปลี่ยนกิจกรรมได้</span>
                                                    </div>
                                                    <div class="config">
                                                        <div class="circle blue"></div>
                                                        <span class="blue">กิจกรรมที่สามารถเปลี่ยนได้</span>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="btn_chenge">
                                                        <div class="btn_day back">
                                                            <img src="<?= base_url() ?>../images/icons/back.png" alt="">
                                                        </div>
                                                        <div class="btn_day next">
                                                            <img src="<?= base_url() ?>../images/icons/next.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  activity activity_change my-4">
                    <div class="col">
                        <div class="box">
                            <div class="row">
                                <div class="col">
                                    <h2>กิจกรรมที่สามาถปรับเปลี่ยนได้</h2>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row my-4">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <h5>วันที่ 1</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="box_activity">
                                                <div class="image"></div>
                                                <div class="title">
                                                    <p>ปั่นจักรยาน</p>
                                                </div>
                                                <div class="tools">
                                                    <p>กิจกรรมเดิม</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="activty_cha">
                                                <div class="box_activity">
                                                    <div class="image"></div>
                                                    <div class="title">
                                                        <p>รถบักกี้ <br>+1600 : 1 ชั่วโมง </p>
                                                    </div>
                                                    <div class="tools">
                                                        <img src="<?= base_url() ?>../images/icons/re.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="box_activity">
                                                    <div class="image"></div>
                                                    <div class="title">
                                                        <p>ปั่นจักรยาน</p>
                                                    </div>
                                                    <div class="tools">
                                                        <img src="<?= base_url() ?>../images/icons/re.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 checkin">
                <div class="box">
                    <span>วันที่เข้าใช้บริการ</span>
                    <input type="date" class="form-control date_checkin my-1">
                    <input type="text" class="form-control name my-2" placeholder="ชื่อ-นามสกุล">
                    <input type="text" class="form-control tel my-2" placeholder="เบอร์โทรศัพท์">
                    <input type="text" class="form-control email my-2" placeholder="อีเมล์">
                    <div class="detail_checkin">
                        <div class="row">
                            <div class="col"><b>ทั้งหมด</b></div>
                            <div class="col text-end"><b>ราคา</b></div>
                        </div>
                        <div class="list">
                            <div class="row">
                                <div class="col px-5">แพ็คเกจ</div>
                                <div class="col text-end"><?= number_format($list['price']); ?></div>
                            </div>
                            <div class="row">
                                <div class="col px-5">เปลี่ยนกิจกรรม</div>
                                <div class="col text-end">0</div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col"><b>ราคารวม</b></div>
                            <div class="col text-end"><b><?= number_format($list['price']); ?></b></div>
                        </div>
                    </div>
                    <div class="btn_checkin">
                        จองแพ็คเกจ
                    </div>
                    <div class="note mt-2">
                        <p>** เงื่อนไขการจอง **</p>
                        <p>1. เมื่อตรวจสอบเสร็จสิ้น ให้ทำการกดตกลง <br>
                            2. หลังจากตกลงจองโปรแกรมทัวร์<br>
                            3. ทางเราจะส่งอีเมล “ยืนยันการจอง”<br>
                            4. เมื่อได้รับอีเมล์ยืนยันการจองแล้ว สามารถโอนเงินตามธนาคารที่ได้รับทางอีเมล์<br>
                            5. หลังจากโอนเงินแล้ว สามารถส่งหลักฐานการโอนเงินได้ที่เบอร์ : 08x-xxx-xxxx<br>อีเมล์ : xxx@hotmail.com (พร้อม ชื่อ–สกุล และเบอร์ติดต่อกลับ)<br>
                            6. เมื่อทางเราได้รับการการชำระเงินแล้ว จะส่ง Tour Voucher สำหรับการเดินทาง ไปยังเมล์ของท่าน<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid list_pack px-5">
        <div class="row mt-5">
            <div class="col">
                <div class="line">
                    <img src="<?= base_url() ?>../images/mock/line.png" alt="">
                </div>
                <h2>แพ็คเกจท่องเที่ยวยอดนิยม</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="slide_pack">
                    <div id="pack" class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php foreach ($package as $key => $value) { ?>
                                    <li class="splide__slide">
                                        <div class="box_pack">
                                            <div class="box_2_row">
                                                <a style="text-decoration: none; color:unset" href="<?= base_url() ?>Welcome/detail/<?= $value['id'] ?>">
                                                    <div class="box">
                                                        <div class="image">
                                                            <img src="<?= base_url() ?>../<?= $value['cover'] ?>" alt="">
                                                        </div>
                                                        <div class="detail">
                                                            <h3><?= $value['name'] ?></h3>
                                                            <p><?= $value['detail'] ?></p>
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
                                                                        <?= number_format($value['price_full']); ?>
                                                                    </div>
                                                                    <div class="new">
                                                                        <?= number_format($value['price']); ?> <last>บาท</last>
                                                                    </div>
                                                                </div>
                                                                <div class="start_pack">
                                                                    ราคาเริ่มต้น (ต่อแพ็คเกจ)
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <?php $this->load->view('_footer') ?>
    </div>
</body>
<script>
    let day_all = '<?= $list['day_all'] ?>';
    let sess = '<?= $sess ?>';
    $(document).ready(function() {
        console.log(sess)
        var secondarySlider = new Splide('#secondary-slider', {
            rewind: true,
            fixedWidth: 100,
            fixedHeight: 64,
            isNavigation: true,
            gap: 10,
            focus: 'left',
            pagination: false,
            cover: true,
            breakpoints: {
                '600': {
                    fixedWidth: 66,
                    fixedHeight: 40,
                }
            }
        }).mount();

        // Create the main slider.
        var primarySlider = new Splide('#primary-slider', {
            type: 'fade',
            heightRatio: 0.5,
            pagination: false,
            arrows: false,
            cover: true,
        });

        // Set the thumbnails slider as a sync target and then call mount.
        primarySlider.sync(secondarySlider).mount();
        // let x = new Splide('#cover', {
        // 	type: 'loop',
        // 	autoplay: true
        // }).mount();

        // let y = new Splide('#pack', {
        // 	perPage: 3,
        // 	perMove: 1,
        // }).mount();

        let y = new Splide('#pack', {
            perPage: 5,
            perMove: 1,
            focus: 'left',
        }).mount();
    });
    $('.btn_day.next').click(function() {
        let day = $('.change_day').attr('data_day')
        $('.activity_group.day_' + day).css('display', 'none')
        if (day <= day_all - 1) {
            day++;
        }
        $('.change_day').attr('data_day', day)
        $('.activity_group.day_' + day).fadeIn('fast')
        $('.change_day h5').html('วันที่ ' + day)
    })
    $('.btn_day.back').click(function() {
        let day = $('.change_day').attr('data_day')
        $('.activity_group.day_' + day).css('display', 'none')
        if (day >= 2) {
            day--;
        }
        $('.activity_group.day_' + day).fadeIn('fast')
        $('.change_day').attr('data_day', day)
        $('.change_day h5').html('วันที่ ' + day)
    })
    $('.btn_checkin').click(function() {
        if (sess == '' || session == null) {
            $('.box.register').addClass('d-none')
            $('.box.login').removeClass('d-none')
            $('.bg_login').fadeIn('fast')
        }
    })
</script>

</html>