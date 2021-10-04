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
                            <h2>แพ็คเกจ 1 </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="col text-end">
                            <h2>10,900บาท</h2>
                            <p>ราคาปกติ <cut>15,259</cut> บาท </p>
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
                                        <li class="splide__slide"><img src="<?= base_url() ?>../images/mock/cover.png" alt=""></li>
                                        <li class="splide__slide"><img src="<?= base_url() ?>../images/mock/cover.png" alt=""></li>
                                        <li class="splide__slide"><img src="<?= base_url() ?>../images/mock/cover.png" alt=""></li>
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
                                        <li class="splide__slide"><img src="<?= base_url() ?>../images/mock/cover.png" alt=""></li>
                                        <li class="splide__slide"><img src="<?= base_url() ?>../images/mock/cover.png" alt=""></li>
                                        <li class="splide__slide"><img src="<?= base_url() ?>../images/mock/cover.png" alt=""></li>
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
            </div>
            <div class="col-4"></div>
        </div>
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
    });
</script>

</html>