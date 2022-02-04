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
                                                    <color style=""><?= $value['name'] ?></color>
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
                                                    <color style=""><?= $value['name'] ?></color>
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
                                                    <color style=""><?= $value['name'] ?></color>
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
                                                    <color style=""><?= $value['name'] ?></color>
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
                                            <h5 class="activity_change_day">วันที่ 1</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="activity_change day_1">
                                            <?php foreach ($activity['day1'] as $key => $value) {
                                                if ($value['canchange'] == 1) { ?>
                                                    <div class="row row_<?= $key ?> mb-5">
                                                        <div class="col-3">
                                                            <div class="box_activity df df_<?= $key ?>" data-id_activity_new="<?= $value['id'] ?>" data-id_activity="<?= $value['id'] ?>" data-image="<?= $value['image'] ?>" data-price="<?= $value['price'] ?>" data-name="<?= $value['name_short'] ?>" data-detail="<?= $value['detail'] ?>">
                                                                <div class="image" style="background-image: url(<?= base_url() ?>../<?= $value['image'] ?>);"></div>
                                                                <div class="title" title="<?= $value['name_short'] ?>">
                                                                    <p><?= $value['name_short'] ?></p>
                                                                </div>
                                                                <div class="tools">
                                                                    <p>กิจกรรมเดิม</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col" style="width: 75%; display:flex">
                                                            <div class="activty_cha">

                                                                <?php
                                                                foreach ($value['activity_change'] as $k => $v) { ?>
                                                                    <div class="box_activity change change_<?= $k ?>">
                                                                        <div class="image" style="background-image: url(<?= base_url() ?>../<?= $v['image'] ?>);"></div>
                                                                        <div class="title">
                                                                            <p><?= $v['name_short'] ?><br>+<?= $v['price'] ?> บาท</p>
                                                                        </div>
                                                                        <div class="tools" data-row="<?= $key ?>" data-image="<?= $v['image'] ?>" data-id_activity_new="<?= $v['id'] ?>" data-id_activity="<?= $v['id'] ?>" data-day="1" key="<?= $key ?>" key_me="<?= $k ?>" data-name="<?= $v['name_short'] ?>" data-price="<?= $v['price'] ?>" data-detail="<?= $v['detail'] ?>">
                                                                            <img src="<?= base_url() ?>../images/icons/re.png" alt="">
                                                                        </div>
                                                                        <div class="box_detail" style="display: none;">
                                                                            <div class="title"><?= $v['name_short'] ?></div>
                                                                            <div class="detail"><?= $v['detail'] ?></div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>


                                            <?php }
                                            } ?>
                                        </div>
                                        <div class="activity_change day_2 d-none">
                                            <?php foreach ($activity['day2'] as $key => $value) {

                                                if ($value['canchange'] == 1) { ?>
                                                    <div class="row row_<?= $key ?> mb-5">
                                                        <div class="col-3">
                                                            <div class="box_activity df df_<?= $key ?>" data-id_activity_new="<?= $value['id'] ?>" data-id_activity="<?= $value['id'] ?>" data-image="<?= $value['image'] ?>" data-price="<?= $value['price'] ?>" data-name="<?= $value['name_short'] ?>" data-detail="<?= $value['detail'] ?>">
                                                                <div class="image" style="background-image: url(<?= base_url() ?>../<?= $value['image'] ?>);"></div>
                                                                <div class="title" title="<?= $value['name_short'] ?>">
                                                                    <p><?= $value['name_short'] ?></p>
                                                                </div>
                                                                <div class="tools">
                                                                    <p>กิจกรรมเดิม</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col" style="width: 75%; display:flex">
                                                            <div class="activty_cha">
                                                                <?php
                                                                foreach ($value['activity_change'] as $k => $v) { ?>
                                                                    <div class="box_activity change change_<?= $k ?>">
                                                                        <div class="image" style="background-image: url(<?= base_url() ?>../<?= $v['image'] ?>);"></div>
                                                                        <div class="title">
                                                                            <p><?= $v['name_short'] ?><br>+<?= $v['price'] ?> บาท</p>
                                                                        </div>
                                                                        <div class="tools" data-row="<?= $key ?>" data-image="<?= $v['image'] ?>" data-id_activity_new="<?= $v['id'] ?>" data-id_activity="<?= $v['id'] ?>" data-day="2" key="<?= $key ?>" key_me="<?= $k ?>" data-name="<?= $v['name_short'] ?>" data-price="<?= $v['price'] ?>" data-detail="<?= $v['detail'] ?>">
                                                                            <img src="<?= base_url() ?>../images/icons/re.png" alt="">
                                                                        </div>
                                                                        <div class="box_detail" style="display: none;">
                                                                            <div class="title"><?= $v['name_short'] ?></div>
                                                                            <div class="detail"><?= $v['detail'] ?></div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>


                                            <?php }
                                            } ?>
                                        </div>
                                        <div class="activity_change day_3 d-none">
                                            <?php foreach ($activity['day3'] as $key => $value) {
                                                if ($value['canchange'] == 1) { ?>
                                                    <div class="row row_<?= $key ?> mb-5">
                                                        <div class="col-3">
                                                            <div class="box_activity df df_<?= $key ?>" data-id_activity="<?= $value['id'] ?>" data-id_activity_new="<?= $value['id'] ?>" data-image="<?= $value['image'] ?>" data-price="<?= $value['price'] ?>" data-name="<?= $value['name_short'] ?>" data-detail="<?= $value['detail'] ?>">
                                                                <div class="image" style="background-image: url(<?= base_url() ?>../<?= $value['image'] ?>);"></div>
                                                                <div class="title" title="<?= $value['name_short'] ?>">
                                                                    <p><?= $value['name_short'] ?></p>
                                                                </div>
                                                                <div class="tools">
                                                                    <p>กิจกรรมเดิม</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col" style="width: 75%; display:flex">
                                                            <div class="activty_cha">
                                                                <?php
                                                                foreach ($value['activity_change'] as $k => $v) { ?>
                                                                    <div class="box_activity change change_<?= $k ?>">
                                                                        <div class="image" style="background-image: url(<?= base_url() ?>../<?= $v['image'] ?>);"></div>
                                                                        <div class="title">
                                                                            <p><?= $v['name_short'] ?><br>+<?= $v['price'] ?> บาท</p>
                                                                        </div>
                                                                        <div class="tools" data-row="<?= $key ?>" data-image="<?= $v['image'] ?>" data-id_activity_new="<?= $v['id'] ?>" data-id_activity="<?= $v['id'] ?>" data-day="3" key="<?= $key ?>" key_me="<?= $k ?>" data-name="<?= $v['name_short'] ?>" data-price="<?= $v['price'] ?>" data-detail="<?= $v['detail'] ?>">
                                                                            <img src="<?= base_url() ?>../images/icons/re.png" alt="">
                                                                        </div>
                                                                        <div class="box_detail" style="display: none;">
                                                                            <div class="title"><?= $v['name_short'] ?></div>
                                                                            <div class="detail"><?= $v['detail'] ?></div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>


                                            <?php }
                                            } ?>
                                        </div>
                                        <div class="activity_change day_4 d-none">
                                            <?php foreach ($activity['day4'] as $key => $value) {
                                                if ($value['canchange'] == 1) { ?>
                                                    <div class="row row_<?= $key ?> mb-5">
                                                        <div class="col-3">
                                                            <div class="box_activity df df_<?= $key ?>" data-id_activity_new="<?= $value['id'] ?>" data-id_activity="<?= $value['id'] ?>" data-image="<?= $value['image'] ?>" data-price="<?= $value['price'] ?>" data-name="<?= $value['name_short'] ?>" data-detail="<?= $value['detail'] ?>">
                                                                <div class="image" style="background-image: url(<?= base_url() ?>../<?= $value['image'] ?>);"></div>
                                                                <div class="title" title="<?= $value['name_short'] ?>">
                                                                    <p><?= $value['name_short'] ?></p>
                                                                </div>
                                                                <div class="tools">
                                                                    <p>กิจกรรมเดิม</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col" style="width: 75%; display:flex">
                                                            <div class="activty_cha">

                                                                <?php
                                                                foreach ($value['activity_change'] as $k => $v) { ?>
                                                                    <div class="box_activity change change_<?= $k ?>">
                                                                        <div class="image" style="background-image: url(<?= base_url() ?>../<?= $v['image'] ?>);"></div>
                                                                        <div class="title">
                                                                            <p><?= $v['name_short'] ?><br>+<?= $v['price'] ?> บาท</p>
                                                                        </div>
                                                                        <div class="tools" data-row="<?= $key ?>" data-image="<?= $v['image'] ?>" data-id_activity_new="<?= $v['id'] ?>" data-id_activity="<?= $v['id'] ?>" data-day="4" key="<?= $key ?>" key_me="<?= $k ?>" data-name="<?= $v['name_short'] ?>" data-price="<?= $v['price'] ?>" data-detail="<?= $v['detail'] ?>">
                                                                            <img src="<?= base_url() ?>../images/icons/re.png" alt="">
                                                                        </div>
                                                                        <div class="box_detail" style="display: none;">
                                                                            <div class="title"><?= $v['name_short'] ?></div>
                                                                            <div class="detail"><?= $v['detail'] ?></div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>


                                            <?php }
                                            } ?>
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
                    <?php if (isset($_SESSION['id'])) { ?>
                        <div class="box_check_me">
                            <span class="mx-2">เข้าพักเอง</span>
                            <input type="checkbox" class="form-check-input checkin_me">
                        </div>
                    <?php } ?>
                    <input class="form-control date_checkin my-1">
                    <input class="form-control date_checkout my-1 no_event" readonly>
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
                                <input type="text" class="package_price" value="<?= $list['price'] ?>" hidden>
                                <div class="col text-end"><?= number_format($list['price']); ?></div>
                            </div>
                            <div class="row add_price_activity">
                                <div class="col px-5">เปลี่ยนกิจกรรม</div>
                                <input type="text" class="package_price_activity" value="0" hidden>
                                <div class="col text-end price_show">0</div>
                            </div>
                        </div>
                        <div class="row mt-4 price_package_all">
                            <div class="col"><b>ราคารวม</b></div>
                            <input type="text" class="price_show_val" value="<?= $list['price'] ?>" name="" id="" hidden>
                            <div class="col text-end price_show"><b><?= number_format($list['price']); ?></b></div>
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
                                                        <div class="image" style="background-image: url(<?= base_url() ?>../<?= $value['cover'] ?>);">
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
    let pagkage_id = '<?= $list['id'] ?>';
    let date_start = '<?= $date_start ?>';
    let date_end = '<?= $date_end ?>';
    let sess_user = '';
    $('.date_checkin').change(function() {
        let date = $(this).val();
        let end_date = incr_date(date, day_all);
        $('.date_checkout').datepicker("setDate", end_date);
        $.ajax({
                url: base_url + 'package/check_date_checkin',
                type: 'post',
                dataType: 'json',
                data: {
                    id: pagkage_id,
                    in: date,
                    out: end_date
                },
            })
            .done(function() {
                console.log("success");
            })
            .fail(function() {
                // console.log("error");
                // Swal.fire(
                //     'เกิดข้อผิดพลาด !',
                //     'ตรวจสอบข้อมูลอีกครั้ง',
                //     'warning'
                // )
            })
            .always(function(data) {
                if (data != true) {
                    $('.btn_checkin').html('แพ็คเกจนี้เต็มแล้ว')
                    $('.btn_checkin').addClass('no_event')
                } else {
                    $('.btn_checkin').html('จองแพ็คเกจ')
                    $('.btn_checkin').removeClass('no_event')
                }
            });
    })

    function incr_date(date_str, day) {
        var parts = date_str.split("-");
        var dt = new Date(
            parseInt(parts[2], 10), // year
            parseInt(parts[1], 10) - 1, // month (starts with 0)
            parseInt(parts[0], 10) // date
        );
        dt.setDate(dt.getDate() + (parseInt(day) - 1));
        parts[2] = "" + dt.getFullYear();
        parts[1] = "" + (dt.getMonth() + 1);
        if (parts[1].length < 2) {
            parts[1] = "0" + parts[1];
        }
        parts[0] = "" + dt.getDate();
        if (parts[0].length < 2) {
            parts[0] = "0" + parts[0];
        }
        return parts.join("-");
    }
    $(document).ready(function() {
        let he_top = 0;
        setTimeout(function() {
            $('.box .detail').each(function(key, e) {
                if ($(e).outerHeight() > he_top) {
                    he_top = $(e).outerHeight()
                    console.log(he_top)
                    $('.box .detail').css('height', he_top + 'px')
                }
            })
        }, 500)
        $('.box_activity.df').each(function(key, e) {
            console.log($(e).attr('data-id_activity'))
        })
        console.log(sess)
        if (sess != '' && sess != null) {
            sess_user = jQuery.parseJSON('<?= $sess_user ?>');
        }
        $('.date_checkin').datepicker({
            format: 'dd-mm-yyyy',
        })
        $('.date_checkout').datepicker({
            format: 'dd-mm-yyyy',
        })
        $('.date_checkin').datepicker("setDate", date_start);
        if (date_end != '' && date_end != null && date_end != '0') {

            $('.date_checkout').datepicker("setDate", date_end);
        } else {
            let d = new Date();

            let month = d.getMonth() + 1;
            let day = d.getDate();

            let output = d.getFullYear() + '/' +
                (month < 10 ? '0' : '') + month + '/' +
                (day < 10 ? '0' : '') + day;
            output = output.split('/')
            output = output[2] + '-' + output[1] + '-' + output[0]
            let end_date = incr_date(output, day_all);
            $('.date_checkout').datepicker("setDate", end_date);
        }


        console.log(date_start)
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
            breakpoints: {
                1700: {
                    perPage: 3,
                },
                1200: {
                    perPage: 3,
                },
                800: {
                    perPage: 2,
                },
            }
        }).mount();
    });
    $('.btn_day.next').click(function() {
        let day = $('.change_day').attr('data_day')
        $('.activity_group.day_' + day).css('display', 'none')
        $('.activity_change.day_' + day).addClass('d-none')
        if (day <= day_all - 1) {
            day++;
        }
        $('.change_day').attr('data_day', day)
        $('.activity_group.day_' + day).fadeIn('fast')
        $('.activity_change.day_' + day).removeClass('d-none')
        $('.change_day h5').html('วันที่ ' + day)
        $('.activity_change_day').html('วันที่ ' + day)
    })
    $('.btn_day.back').click(function() {
        let day = $('.change_day').attr('data_day')
        $('.activity_group.day_' + day).css('display', 'none')
        $('.activity_change.day_' + day).addClass('d-none')
        if (day >= 2) {
            day--;
        }
        $('.activity_group.day_' + day).fadeIn('fast')
        $('.change_day').attr('data_day', day)
        $('.activity_change.day_' + day).removeClass('d-none')
        $('.change_day h5').html('วันที่ ' + day)
        $('.activity_change_day').html('วันที่ ' + day)
    })
    $('.btn_checkin').click(function() {
        if (sess == '' || sess == null) {
            $('.box.register').addClass('d-none')
            $('.box.login').removeClass('d-none')
            $('.bg_login').fadeIn('fast')
        } else {
            if ($('.checkin .name').val() == '' && $('.checkin .tel').val() == '' && $('.checkin .email').val() == '') {
                Swal.fire(
                    'เกิดข้อผิดพลาด !',
                    'กรุณากรอกข้อมูลให้ครบถ้วน',
                    'warning'
                )
                return;
            }
            Swal.fire({
                title: 'ต้องการจอง?',
                text: "เมื่อทำการจองแล้วไม่สามารถแก้ไขข้อมูลได้อีก!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ใช่, ต้องการจอง!',
                cancelButtonText: 'ไม่, ยังก่อน!'
            }).then((result) => {
                if (result.isConfirmed) {
                    let arr_change_activity = []
                    $('.box_activity.df').each(function(key, e) {
                        let activity_old = $(e).attr('data-id_activity')
                        let activity_new = $(e).attr('data-id_activity_new')
                        if (activity_old != activity_new) {
                            let arr = {};
                            arr = {
                                activity_old: activity_old,
                                activity_new: activity_new
                            }
                            arr_change_activity.push(arr)
                        }
                    })
                    console.log(arr_change_activity)
                    $.ajax({
                            url: base_url + 'package/booking',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                name: $('.checkin .name').val(),
                                tel: $('.checkin .tel').val(),
                                email: $('.checkin .email').val(),
                                member_id: sess,
                                package_id: pagkage_id,
                                checkin: $('.checkin .date_checkin').val(),
                                checkout: $('.checkin .date_checkout').val(),
                                activity_change: arr_change_activity,
                                price_totle: $('.price_package_all .price_show_val').val(),
                                price_add: $('.package_price_activity').val()
                            },
                        })
                        .done(function() {
                            console.log("success");
                        })
                        .fail(function() {
                            console.log("error");
                            Swal.fire(
                                'เกิดข้อผิดพลาด !',
                                'ตรวจสอบข้อมูลอีกครั้ง',
                                'warning'
                            )
                        })
                        .always(function(data) {
                            if (data == true) {
                                Swal.fire(
                                    'จองแพ็คเกจสำเร็จ',
                                    'กรุณาเช็คอีเมลเพื่อชำระค่าใช้จ่าย',
                                    'success'
                                )
                                setTimeout(function() {
                                    window.location.href = base_url + "Welcome/my_package";
                                }, 2000);
                            }
                        });
                }
            })

        }
    })
    $('.checkin_me').change(function() {
        let status_check = $(this).is(":checked")
        if (sess != '' || sess == null) {
            if (status_check) {
                $('.checkin .name').val(sess_user.firstname + ' ' + sess_user.lastname)
                $('.checkin .tel').val(sess_user.tel)
                $('.checkin .email').val(sess_user.email)
                $('.checkin .name ,.checkin .tel ,.checkin .email').attr('readonly', 'readonly')
            } else {
                $('.checkin .name').val('')
                $('.checkin .tel').val('')
                $('.checkin .email').val('')
                $('.checkin .name ,.checkin .tel ,.checkin .email').removeAttr('readonly')
            }
        }

    })
    $('.box_activity.change').click(function() {
        $('.box_detail', this).fadeIn('fast')
    }).mouseout(function() {
        $('.box_detail', this).fadeOut('fast')
    })
    $('.box_activity .tools').click(function(e) {
        let name = $(this).attr('data-name')
        let detail = $(this).attr('data-detail')
        let price = $(this).attr('data-price')
        let image = $(this).attr('data-image')
        let key = $(this).attr('key')
        let row = $(this).attr('data-row')
        let day = $(this).attr('data-day')
        let id_activity = $(this).attr('data-id_activity_new')
        let key_me = $(this).attr('key_me')
        let df_name = $('.day_' + day + ' .row_' + row + ' .df_' + key).attr('data-name')
        let df_detail = $('.day_' + day + ' .row_' + row + ' .df_' + key).attr('data-detail')
        let df_price = $('.day_' + day + ' .row_' + row + ' .df_' + key).attr('data-price')
        let df_image = $('.day_' + day + ' .row_' + row + ' .df_' + key).attr('data-image')
        let df_id_activity = $('.day_' + day + ' .row_' + row + ' .df_' + key).attr('data-id_activity_new')

        $('.day_' + day + ' .row_' + row + ' .df_' + key + ' .title p').html(name)
        $('.day_' + day + ' .row_' + row + ' .df_' + key + ' .image').css('background-image', 'url(' + base_url + '../' + image + ')')
        $('.day_' + day + ' .row_' + row + ' .df_' + key).attr('data-name', name)
        $('.day_' + day + ' .row_' + row + ' .df_' + key).attr('data-detail', detail)
        $('.day_' + day + ' .row_' + row + ' .df_' + key).attr('data-price', price)
        $('.day_' + day + ' .row_' + row + ' .df_' + key).attr('data-image', image)
        $('.day_' + day + ' .row_' + row + ' .df_' + key).attr('data-id_activity_new', id_activity)

        $('.day_' + day + ' .row_' + row + ' .change_' + key_me + ' .title p').html(df_name + '<br>+' + df_price + ' บาท')
        $('.day_' + day + ' .row_' + row + ' .change_' + key_me + ' .image').css('background-image', 'url(' + base_url + '../' + df_image + ')')
        $('.day_' + day + ' .row_' + row + ' .change_' + key_me + ' .box_detail .title').html(df_name)
        $('.day_' + day + ' .row_' + row + ' .change_' + key_me + ' .box_detail .detail').html(df_detail)
        $(this).attr('data-name', df_name)
        $(this).attr('data-detail', df_detail)
        $(this).attr('data-price', df_price)
        $(this).attr('data-image', df_image)
        $(this).attr('data-id_activity_new', df_id_activity)

        if (df_price == 0 && price != 0) {
            let price_add = $('.add_price_activity .package_price_activity').val();
            price_add = parseInt(price_add) + parseInt(price)
            $('.package_price_activity').attr('value', price_add)
            $('.add_price_activity .price_show').html(addCommas(price_add))
        } else if (price == 0 && df_price != 0) {
            let price_add = $('.add_price_activity .package_price_activity').val();
            price_add = parseInt(price_add) - parseInt(df_price)
            $('.package_price_activity').attr('value', price_add)
            $('.add_price_activity .price_show').html(addCommas(price_add))
        } else {
            let price_add = $('.add_price_activity .package_price_activity').val();
            price_add = parseInt(price_add) - parseInt(df_price)
            price_add = parseInt(price_add) + parseInt(price)
            $('.package_price_activity').attr('value', price_add)
            $('.add_price_activity .price_show').html(addCommas(price_add))
        }

        sum_price()

    })

    function sum_price() {
        let price_package = $('.package_price').val();
        let price_package_add = $('.package_price_activity').val();
        console.log(price_package, price_package_add)
        price_package = parseInt(price_package) + parseInt(price_package_add)

        $('.price_package_all .price_show_val').attr('value', price_package)
        $('.price_package_all .price_show').html(addCommas(price_package))
    }

    function addCommas(nStr) {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }
</script>

</html>