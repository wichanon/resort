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
    <div class="container package">
        <div class="row mt-5">
            <div class="col mx-auto">
                <div class="box">
                    <div class="row">
                        <div class="col">
                            <span>ค้นหาแพ็คเกจที่ต้องการ</span>
                            <input type="text" class="form-control keyword" placeholder="แพ็คเกจ 1">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <span>วันที่เข้าพัก</span>
                            <input class="form-control start_date" name="" id="">
                        </div>
                        <div class="col">
                            <span>วันที่ออกจากที่พัก</span>
                            <input class="form-control end_date" name="" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <span>ขนาดห้อง (จำนวนคน)</span>
                            <select name="" id="" class="form-select total_menber">
                                <option value="5" data-min='1'>1-5</option>
                                <option value="10" data-min='6'>6-10</option>
                            </select>
                        </div>
                        <div class="col">
                            <span>จำนวนผู้ใหญ่</span>
                            <select name="" id="" class="form-select total_adult">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="col">
                            <span>จำนวนเด็ก <sss style="font-size: .6rem;">*อายุต่ำกว่า 13ปี</sss></span>
                            <select name="" id="" class="form-select total_kid">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col d-flex justify-content-center">
                            <div class="btn_search">ค้นหา</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="list_search">

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
        let dateToday = new Date();
        console.log(dateToday)
        $('.start_date').datepicker({
            format: 'dd-mm-yyyy',
            startDate: new Date()
        })
        $('.start_date').datepicker("setDate", new Date())
        $('.end_date').datepicker({
            format: 'dd-mm-yyyy',
            startDate: new Date()
        })
        $('.end_date').datepicker("setDate", new Date());
    });

    $('.btn_search').click(function() {
        let min = $('.total_menber option:selected').attr('data-min');
        console.log(min)
        let start_date = $('.start_date').val()
        let end_date = $('.end_date').val()
        // start_date = start_date.split('-')
        // start_date = start_date[2] + start_date[1] + start_date[0]
        // end_date = end_date.split('-')
        // end_date = end_date[2] + end_date[1] + end_date[0]
        //let total_date = end_date - start_date;

        $.ajax({
                url: base_url + 'package/search_package',
                type: 'post',
                dataType: 'json',
                data: {
                    keyword: $('.keyword').val(),
                    total_member: $('.total_menber').val(),
                    total_min: min,
                    total_adult: $('.total_adult').val(),
                    total_kid: $('.total_kid').val(),
                    start_date: start_date,
                    end_date: end_date
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
                let list = data.list;
                console.log(list)
                $('.list_search').empty()
                if (list == '') {
                    $('.list_search').append('<div class="no_list text-center mt-5"><h2>ไม่มีแพ็คเกจที่ตามหา</h2></div>')
                } else {
                    $(list).each(function(key, e) {
                        let new_member_checkin = $('.start_date').val().split('-')
                        new_member_checkin = new_member_checkin[2] + '-' + new_member_checkin[1] + '-' + new_member_checkin[0];
                        // let check_in = list[key].booking_member_pay.checkin.split('-')
                        // check_in = check_in[2] + '-' + check_in[1] + '-' + check_in[0];
                        // let check_out = incr_date(check_in, e.day_all)
                        // console.log(check_out, new_member_checkin)
                        // let status_check = {};
                        // $(list[key].booking_member_pay).each(function(key, ee) {
                        //     console.log(ee.checkin)
                        //     let check_in = ee.checkin.split('-')
                        //     check_in = check_in[2] + '-' + check_in[1] + '-' + check_in[0];
                        //     let check_out = incr_date(check_in, e.day_all)
                        //     if (new Date(new_member_checkin) >= new Date(check_out) && new Date(new_member_checkin)) {
                        //         console.log('ได้ๆ')
                        //         status_check = true;
                        //     } else {
                        //         console.log('ไม่ได้ๆ')
                        //         status_check = false;
                        //     }
                        // })
                        console.log(e)
                        if (e.can_booking == 'true') {
                            $('.list_search').append('<div class="box_search my-4"><div class="image" style="background-image: url(<?= base_url() ?>../' + list[key].cover + ');"></div><div class="detail"><div class="title"><h2>' + list[key].name + '<ss>' + list[key].type + '</ss></h2></div><div class="sub"><p>' + list[key].detail + '</p></div><div class="total_room"><p>จำนวนห้องที่เหลือ <sx>' + list[key].house_id['total_room'] + '</sx> ห้อง</p></div><div class="sub_2"><div class="total_activity"> <p>10 กิจกรรม (รวมทั้ง ' + list[key].type + ') </p><p>บ้านพัก ' + list[key].house_id['name'] + '</p><p>' + list[key].total_adult + ' ผู้ใหญ่</p><p>' + list[key].total_kid + ' เด็ก</p></div></div><div class="box_bottom"><div class="box_price"><p>' + addCommas(list[key].price_full) + '</p><h2>' + addCommas(list[key].price) + ' บาท</h2></div><a style="text-decoration: none; color:unset" href="<?= base_url() ?>Welcome/detail/' + list[key].id + '/' + start_date + '/' + end_date + '"><div class="btn_see_detail">ดูรายละเอียด</div></a></div></div></div>')
                            //$('.list_search').append('<div class="box_search my-4"><div class="image" style="background-image: url(<?= base_url() ?>../' + list[key].cover + ');"></div><div class="detail"><div class="title"><h2>' + list[key].name + '<ss>' + list[key].type + '</ss></h2></div><div class="sub"><p>' + list[key].detail + '</p></div><div class="total_room"><p>จำนวนห้องที่เหลือ <sx>' + list[key].house_id['total_room'] + '</sx> ห้อง</p><p>จำนวนผู้จอง(ยังไม่ได้ชำระ) <sx>' + list[key].booking_member + '</sx> คน</p><p>จองตอนนี้จะได้ คิวที่ <sx>' + (parseInt(list[key].booking_member) + 1) + '</sx></p></div><div class="sub_2"><div class="total_activity"> <p>10 กิจกรรม (รวมทั้ง ' + list[key].type + ') </p><p>บ้านพัก ' + list[key].house_id['name'] + '</p><p>' + list[key].total_adult + ' ผู้ใหญ่</p><p>' + list[key].total_kid + ' เด็ก</p></div></div><div class="box_bottom"><div class="box_price"><p>' + addCommas(list[key].price_full) + '</p><h2>' + addCommas(list[key].price) + ' บาท</h2></div><a style="text-decoration: none; color:unset" href="<?= base_url() ?>Welcome/detail/' + list[key].id + '/' + start_date + '/' + end_date + '"><div class="btn_see_detail">ดูรายละเอียด</div></a></div></div></div>')

                        } else {
                            $('.list_search').append('<div class="box_search my-4 no_event"><div class="sold_out">เต็ม</div><div class="image" style="background-image: url(<?= base_url() ?>../' + list[key].cover + ');"></div><div class="detail"><div class="title"><h2>' + list[key].name + '<ss>' + list[key].type + '</ss></h2></div><div class="sub"><p>' + list[key].detail + '</p></div><div class="sub_2"><div class="total_activity"> <p>10 กิจกรรม (รวมทั้ง ' + list[key].type + ') </p><p>บ้านพัก ' + list[key].house_id['name'] + '</p><p>' + list[key].total_adult + ' ผู้ใหญ่</p><p>' + list[key].total_kid + ' เด็ก</p></div></div><div class="box_bottom"><div class="box_price"><p>' + addCommas(list[key].price_full) + '</p><h2>' + addCommas(list[key].price) + ' บาท</h2></div><a style="text-decoration: none; color:unset" href="<?= base_url() ?>Welcome/detail/' + list[key].id + '/' + start_date + '/' + end_date + '"><div class="btn_see_detail">ดูรายละเอียด</div></a></div></div></div>')

                        }

                        // if (list[key].booking_member_pay.booking_member_pay < list[key].house_id['total_room'] || status_check == true) {
                        //     $('.list_search').append('<div class="box_search my-4"><div class="image" style="background-image: url(<?= base_url() ?>../' + list[key].cover + ');"></div><div class="detail"><div class="title"><h2>' + list[key].name + '<ss>' + list[key].type + '</ss></h2></div><div class="sub"><p>' + list[key].detail + '</p></div><div class="total_room"><p>จำนวนห้องที่เหลือ <sx>' + list[key].house_id['total_room'] + '</sx> ห้อง</p><p>จำนวนผู้จอง(ยังไม่ได้ชำระ) <sx>' + list[key].booking_member + '</sx> คน</p><p>จองตอนนี้จะได้ คิวที่ <sx>' + (parseInt(list[key].booking_member) + 1) + '</sx></p></div><div class="sub_2"><div class="total_activity"> <p>10 กิจกรรม (รวมทั้ง ' + list[key].type + ') </p><p>บ้านพัก ' + list[key].house_id['name'] + '</p><p>' + list[key].total_adult + ' ผู้ใหญ่</p><p>' + list[key].total_kid + ' เด็ก</p></div></div><div class="box_bottom"><div class="box_price"><p>' + addCommas(list[key].price_full) + '</p><h2>' + addCommas(list[key].price) + ' บาท</h2></div><a style="text-decoration: none; color:unset" href="<?= base_url() ?>Welcome/detail/' + list[key].id + '/' + start_date + '/' + end_date + '"><div class="btn_see_detail">ดูรายละเอียด</div></a></div></div></div>')
                        // } else {
                        //     $('.list_search').append('<div class="box_search my-4 no_event"><div class="sold_out">เต็ม</div><div class="image" style="background-image: url(<?= base_url() ?>../' + list[key].cover + ');"></div><div class="detail"><div class="title"><h2>' + list[key].name + '<ss>' + list[key].type + '</ss></h2></div><div class="sub"><p>' + list[key].detail + '</p></div><div class="sub_2"><div class="total_activity"> <p>10 กิจกรรม (รวมทั้ง ' + list[key].type + ') </p><p>บ้านพัก ' + list[key].house_id['name'] + '</p><p>' + list[key].total_adult + ' ผู้ใหญ่</p><p>' + list[key].total_kid + ' เด็ก</p></div></div><div class="box_bottom"><div class="box_price"><p>' + addCommas(list[key].price_full) + '</p><h2>' + addCommas(list[key].price) + ' บาท</h2></div><a style="text-decoration: none; color:unset" href="<?= base_url() ?>Welcome/detail/' + list[key].id + '/' + start_date + '/' + end_date + '"><div class="btn_see_detail">ดูรายละเอียด</div></a></div></div></div>')
                        // }
                    })
                }

            });
    })

    function incr_date(date_str, plus) {
        var parts = date_str.split("-");
        var dt = new Date(
            parseInt(parts[0], 10), // year
            parseInt(parts[1], 10) - 1, // month (starts with 0)
            parseInt(parts[2], 10) // date
        );
        dt.setDate(dt.getDate() + parseInt(plus) - 1);
        parts[0] = "" + dt.getFullYear();
        parts[1] = "" + (dt.getMonth() + 1);
        if (parts[1].length < 2) {
            parts[1] = "0" + parts[1];
        }
        parts[2] = "" + dt.getDate();
        if (parts[2].length < 2) {
            parts[2] = "0" + parts[2];
        }
        return parts.join("-");
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