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
    <div class="container-fluid contact">
        <?php $this->load->view('_menu'); ?>
        <div class="row">
            <div class="col p-0">
                <div class="cover">
                    <img src="<?= base_url() ?>../images/contact/contact.png" alt="">
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-8 mx-auto">
                <div class="row">
                    <div class="col">
                        <div class="text">
                            <p>ที่อยู่ : 88 ถนน หมู่ 2 ตำบลแก่งเสี้ยน </p>
                            <p>อำเภอเมืองกาญจนบุรี กาญจนบุรี 71000</p>
                            <p>เบอร์โทรศัพท์ : 094-670-6212</p>
                            <p>อีเมล์ : pft.forfamily@hotmail.com</p>
                            <p>เว็บไซต์ : http://localhost/resort</p>
                        </div>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.348807625575!2d99.45465941483394!3d14.056568390150812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e375d576753e7f%3A0xc0e64c616c7d2229!2sRoyal%20Riverkwaii%20Resort%20and%20Spa!5e0!3m2!1sth!2sth!4v1634972337740!5m2!1sth!2sth" width="100%" height="100%" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col">
                        <div class="contact_me">
                            <h3>ติดต่อสอบถาม</h3>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="ชื่อ-นามสกุล">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์">
                                </div>
                                <div class="col-12 mt-2">
                                    <textarea name="" class="form-control" id="" cols="30" rows="6" placeholder="รายละเอียด"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <button class="btn btn_sent">ส่ง</button>
                                </div>
                            </div>
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