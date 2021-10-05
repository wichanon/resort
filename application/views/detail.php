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
                                        <li class="splide__slide"><img src="<?= base_url() ?>../<?= $list['cover'] ?>" alt=""></li>
                                        <li class="splide__slide"><img src="<?= base_url() ?>../<?= $list['cover'] ?>" alt=""></li>
                                        <li class="splide__slide"><img src="<?= base_url() ?>../<?= $list['cover'] ?>" alt=""></li>
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
                                        <li class="splide__slide"><img src="<?= base_url() ?>../<?= $list['cover'] ?>" alt=""></li>
                                        <li class="splide__slide"><img src="<?= base_url() ?>../<?= $list['cover'] ?>" alt=""></li>
                                        <li class="splide__slide"><img src="<?= base_url() ?>../<?= $list['cover'] ?>" alt=""></li>
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
                                    <h2>Peemvana 10</h2>
                                    <p>ห้องพักกว้างขวาง 2 หลังตั้งอยู่ริมแม่น้ำแควที่มีเสน่ห์ มีห้องนอน 3 ห้อง ห้องนั่งเล่นและสามารถสวนเขตร้อนอันเขียวชอุ่มในแบบส่วนตัว</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col p-0">
                                    <div class="box_home_service">
                                        <div class="box_service">
                                            <img src="<?= base_url() ?>../images/icons/services/wifi.png" alt="">
                                            <p>Free Wifi</p>
                                        </div>
                                        <div class="box_service">
                                            <img src="<?= base_url() ?>../images/icons/services/living.png" alt="">
                                            <p>1 Living Room</p>
                                        </div>
                                        <div class="box_service">
                                            <img src="<?= base_url() ?>../images/icons/services/minibar.png" alt="">
                                            <p>Mini Bar</p>
                                        </div>
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
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <h5>วันที่ 1</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            07.00 น.
                                        </div>
                                        <div class="col">
                                            รับประทานอาหารเช้า ที่ทาง รอยัล ริเวอร์แคว รีสอร์ท แอนด์ สปา จัดเตรียมไว้ให้
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            08.00 น.
                                        </div>
                                        <div class="col">
                                            รับประทานอาหารเช้า
                                        </div>
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
                                                        <div class="btn_day">
                                                            <img src="<?= base_url() ?>../images/icons/back.png" alt="">
                                                        </div>
                                                        <div class="btn_day">
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
    $(document).ready(function() {
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
</script>

</html>