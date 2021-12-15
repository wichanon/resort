<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Resort</title>
    <?php $this->load->view('_config'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <div class="container-fluid back_package_manage">
        <div class="row mt-5">
            <div class="col-5 mx-auto">
                <h2>เพิ่มแพ็คเกจ</h2>
                <div class="row">
                    <div class="col box_image_cover">
                        <div class="row image_cover cover_1 d-flex align-items-end my-2">
                            <div class="col">
                                <div class="preview"></div>
                            </div>
                            <div class="col-9">
                                <input type="file" class="form-control imagecover image_upload" onchange="uploadFile('cover_1','cover')">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>ชื่อแพ็คเกจ</span>
                        <input type="text" class="form-control name_pack">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <span>คำอธิบาย</span>
                        <textarea name="" class="form-control detail_pack" id="" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <span>จำนวนวัน</span>
                        <select class="form-select type" name="" id="">
                            <option value="2">2 วัน 1 คืน</option>
                            <option value="3">3 วัน 2 คืน</option>
                            <option value="4">4 วัน 3 คืน</option>
                        </select>
                    </div>
                    <div class="col">
                        <span>ราคาเต็ม (บาท)</span>
                        <input type="number" class="form-control price_full" placeholder="9xxx">
                    </div>
                    <div class="col">
                        <span>ราคาลด (บาท)</span>
                        <input type="number" class="form-control price_sell" placeholder="5xxx">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <span>จำนวนคนเข้าพักทั้งหมด</span>
                        <select class="form-select total_member" name="" id="">
                            <option value="5">1-5</option>
                            <option value="10">6-10</option>
                            <option value="15">11-15</option>
                        </select>
                    </div>
                    <div class="col">
                        <span>จำนวนผู้ใหญ่ที่รองรับ</span>
                        <input type="number" class="form-control total_adult" value="1">
                    </div>
                    <div class="col">
                        <span>จำนวนเด็กที่รองรับ</span>
                        <input type="number" class="form-control total_kid" value="1">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <span>บ้านพัก</span>
                        <select class="form-select house" name="" id="">
                            <?php foreach ($house as $key => $value) { ?>
                                <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <span>กิจกรรม</span>
                    <div class="col ">
                        <button class="btn btn-dark day_btn day1" data-day="1">วันที่ 1</button>
                        <button class="btn btn-dark day_btn day2 no_active" data-day="2">วันที่ 2</button>
                        <button class="btn btn-dark day_btn day3 no_active d-none" data-day="3">วันที่ 3</button>
                        <button class="btn btn-dark day_btn day4 no_active d-none" data-day="4">วันที่ 4</button>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 box_actity box_1">
                        <div class="row list_activity list_1_1">
                            <h5>กิจกรรมที่ 1</h5>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col box_image_activty">
                                        <div class="row image_activty d-flex align-items-end">
                                            <div class="col">
                                                <div class="preview"></div>
                                            </div>
                                            <div class="col-9">
                                                <input type="file" class="form-control imagecover image_upload main" onchange="uploadFile('list_1_1','image')">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span>ชื่อกิจกรรม</span>
                                        <input type="text" class="form-control name">
                                    </div>
                                    <div class="col">
                                        <span>ราคาจ่ายเพิ่ม</span>
                                        <input type="number" class="form-control price_add">
                                    </div>
                                    <div class="col">
                                        <span>เวลา</span>
                                        <input type="time" class="form-control time">
                                    </div>
                                </div>

                            </div>
                            <div class="col-12">
                                <span>คำอธิบาย</span>
                                <textarea name="" class="form-control detail" id="" cols="30" rows="3"></textarea>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" onchange="check_activity_change(1,1,this)" type="checkbox" value="">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        สามารถเปลี่ยนกิจกรรมได้
                                    </label>
                                </div>
                            </div>
                            <div class="box_activity_change d-none">
                                <div class="col-12 activity_change_box">
                                    <!-- <div class="row my-2 d-flex justify-content-end list">
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col">
                                                    <span>ชื่อกิจกรรม</span>
                                                    <input type="text" class="form-control name_">
                                                </div>
                                                <div class="col">
                                                    <span>ราคาจ่ายเพิ่ม</span>
                                                    <input type="number" class="form-control add_price_">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span>คำอธิบาย</span>
                                                    <textarea name="" class="form-control detail_" id="" cols="30" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="col-12 mt-3">
                                    <button class="form-control btn_add_activity" onclick="add_activty_change(1,1)">เพิ่มช่อง</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 box_actity box_2 d-none">
                    </div>
                    <div class="col-12 box_actity box_3 d-none">
                    </div>
                    <div class="col-12 box_actity box_4 d-none">
                    </div>


                    <div class="col-12 mt-3">
                        <button class="form-control btn_add_activity" onclick="add_activty(1)">เพิ่มช่อง</button>
                    </div>
                </div>
            </div>

        </div>
        <button class="btn btn-success btn_add_pack">เพิ่มแพ็คเกจ</button>
    </div>
    <div class="container-fluid mt-5">

    </div>
</body>
<script>
    $(document).ready(function() {

    });
    let day_active = 1;
    let ac_day = [1, 0, 0, 0];

    function add_activty(day) {
        ac_day[day - 1]++;
        $('.box_actity.box_' + day).append('<div class="row list_activity list_' + day + '_' + ac_day[day - 1] + '"><h5>กิจกรรมที่ ' + (ac_day[day - 1]) + '</h5><div class="col-12"><div class="row"><div class="col box_image_activty"><div class="row image_activty d-flex align-items-end"><div class="col"><div class="preview"></div></div><div class="col-9"><input type="file" class="form-control imagecover image_upload main" onchange="uploadFile(\'list_' + day + '_' + ac_day[day - 1] + '\',\'image\')"></div></div></div></div><div class="row"><div class="col"><span>ชื่อกิจกรรม</span><input type="text" class="form-control name"></div><div class="col"><span>ราคาจ่ายเพิ่ม</span><input type="number" class="form-control price_add"></div><div class="col"><span>เวลา</span><input type="time" class="form-control time"></div></div></div><div class="col-12"><span>คำอธิบาย</span><textarea name="" class="form-control detail" id="" cols="30" rows="3"></textarea></div><div class="col-12 mt-2"><div class="form-check"><input onchange="check_activity_change(' + day + ',' + ac_day[day - 1] + ',this)" class="form-check-input" type="checkbox" value=""><label class="form-check-label" for="flexCheckDefault">สามารถเปลี่ยนกิจกรรมได้</label></div></div> <div class="box_activity_change d-none"><div class="col-12 activity_change_box"></div><div class="col-12 mt-3"><button class="form-control btn_add_activity" onclick="add_activty_change(' + day + ',' + ac_day[day - 1] + ')">เพิ่มช่อง</button></div></div></div>')
        //$('.box_actity.box_' + day).append('<div class="row list_activity list_' + day + '_' + ac_day[day - 1] + '"><h5>กิจกรรมที่ ' + (ac_day[day - 1]) + '</h5><div class="col-12"><div class="row"><div class="col"><span>ชื่อกิจกรรม</span><input type="text" class="form-control name"></div><div class="col"><span>ราคาจ่ายเพิ่ม</span><input type="number" class="form-control price_add"></div><div class="col"><span>เวลา</span><input type="time" class="form-control time"></div></div></div><div class="col-12"><span>คำอธิบาย</span><textarea name="" class="form-control detail" id="" cols="30" rows="3"></textarea></div><div class="col-12 mt-2"><div class="form-check"><input onchange="check_activity_change('+day+','+ac_day[day - 1]+',this)" class="form-check-input" type="checkbox" value=""><label class="form-check-label" for="flexCheckDefault">สามารถเปลี่ยนกิจกรรมได้</label></div></div></div>')
        $("html, body").animate({
            scrollTop: $(document).height()
        }, 50);
    }
    $('.day_btn').click(function() {

        let day_ac = $(this).attr('data-day')
        $('.day_btn').addClass('no_active')
        $(this).removeClass('no_active')
        $('.box_actity').addClass('d-none')
        $('.box_actity.box_' + day_ac).removeClass('d-none')
        $('.btn_add_activity').attr('onclick', 'add_activty(' + day_ac + ')')
    })
    $('.btn_add_pack').click(function() {
        let name = $('.name_pack').val();
        let detail = $('.detail_pack').val();
        let type = $('.type ').find(':selected').html();
        let day_all = $('.type').val();
        let price_full = $('.price_full').val();
        let price_sell = $('.price_sell').val();
        let total_member = $('.total_member').val();
        let total_adult = $('.total_adult').val();
        let total_kid = $('.total_kid').val();
        let house_id = $('.house').val();
        let image_cover = [];
        $('.box_image_cover .imagecover.image_upload').each(function() {
            image_cover.push($(this).attr('path'));
        })
        //console.log(name,detail,type,price_full,price_sell,total_member,total_adult,total_kid,house_id,day_all)

        let data_activity = {};
        data_activity['day_1'] = [];
        data_activity['day_2'] = [];
        data_activity['day_3'] = [];
        data_activity['day_4'] = [];
        $(ac_day).each(function(key, e) {

            for (let i = 0; i < e; i++) {
                let ac = {};
                ac['name'] = $('.list_activity.list_' + (key + 1) + '_' + (i + 1) + ' .name').val();
                ac['price_add'] = $('.list_activity.list_' + (key + 1) + '_' + (i + 1) + ' .price_add').val();
                ac['time'] = $('.list_activity.list_' + (key + 1) + '_' + (i + 1) + ' .time').val();
                ac['detail'] = $('.list_activity.list_' + (key + 1) + '_' + (i + 1) + ' .detail').val();
                ac['image'] = $('.list_activity.list_' + (key + 1) + '_' + (i + 1) + ' .image_upload.main').attr('path')
                ac['day'] = (key + 1);
                ac['change'] = [];
                let change_length = $('.list_activity.list_' + (key + 1) + '_' + (i + 1) + ' .activity_change_box .list').length
                console.log(change_length)
                $('.list_activity.list_' + (key + 1) + '_' + (i + 1) + ' .activity_change_box .list').each(function() {
                    //array.push($(this).data("val"));
                    let cac = {}
                    cac['name'] = $('.name_', this).val();
                    cac['price_add'] = $('.add_price_', this).val();
                    cac['detail'] = $('.detail_', this).val();
                    cac['image'] = $('.image_upload', this).attr('path');
                    ac['change'].push(cac)
                });
                data_activity['day_' + (key + 1)].push(ac)
            }

        })
        //console.log(data_activity)
        $.ajax({
                url: base_url + 'package/add_package',
                type: 'post',
                dataType: 'json',
                data: {
                    name: name,
                    detail: detail,
                    type: type,
                    day_all: day_all,
                    price_full: price_full,
                    price_sell: price_sell,
                    total_member: total_member,
                    total_adult: total_adult,
                    total_kid: total_kid,
                    house_id: house_id,
                    activity: data_activity,
                    image_cover: image_cover
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
                        'เพิ่มแพ็คเกจสำเร็จ',
                        '',
                        'success'
                    )
                    setTimeout(function() {
                        window.location.href = base_url + "admin/package_manage";
                    }, 2000);
                }
            });
    })

    function check_activity_change(day, activity, e) {
        let status = $(e).is(":checked")
        if (status) {
            $('.list_activity.list_' + day + '_' + activity + ' .box_activity_change').removeClass('d-none')
        } else {
            $('.list_activity.list_' + day + '_' + activity + ' .box_activity_change').addClass('d-none')
        }
    }
    $('.type').change(function() {
        let val = $(this).val()
        $('.day_btn').removeClass('d-none')
        if (val == 2) {
            $('.day_btn.day3').addClass('d-none')
            $('.day_btn.day4').addClass('d-none')
        } else if (val == 3) {
            $('.day_btn.day4').addClass('d-none')
        }
    })

    function Generator() {};

    Generator.prototype.rand = Math.floor(Math.random() * 26) + Date.now();

    Generator.prototype.getId = function() {
        return this.rand++;
    };
    var idGen = new Generator();

    function add_activty_change(day, activty) {
        let uuid = idGen.getId();
        $('.list_activity.list_' + day + '_' + activty + ' .activity_change_box').append('<div class="row my-2 d-flex justify-content-end list uuid_' + uuid + '"><div class="col-10"><div class="row"><div class="col box_image_activty"><div class="row image_activty d-flex align-items-end"><div class="col"><div class="preview"></div></div><div class="col-9"><input type="file" class="form-control imagecover image_upload" onchange="uploadFile(\'list_' + day + '_' + activty + '\',\'image\',\'' + uuid + '\')"> </div></div></div></div><div class="row"><div class="col"><span>ชื่อกิจกรรม</span><input type="text" class="form-control name_"></div><div class="col"><span>ราคาจ่ายเพิ่ม</span><input type="number" class="form-control add_price_"></div></div><div class="row"><div class="col"><span>คำอธิบาย</span><textarea name="" class="form-control detail_" id="" cols="30" rows="3"></textarea> </div></div> </div></div>')
        $("html, body").animate({
            scrollTop: $(document).height()
        }, 50);
    }
</script>

</html>