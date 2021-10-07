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
                            <input type="text" class="form-control keyword">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <span>จำนวนคน</span>
                            <select name="" id="" class="form-select total_menber">
                                <option value="">ทั้งหมด</option>
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
                            <span>จำนวนผู้ใหญ่</span>
                            <select name="" id="" class="form-select total_adult">
                                <option value="">ทั้งหมด</option>
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
                            <span>จำนวนเด็ก</span>
                            <select name="" id="" class="form-select total_kid">
                                <option value="">ทั้งหมด</option>
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
                    <!-- <div class="box_search">
                        <div class="image" style="background-image: url(<?= base_url() ?>../images/mock/pack_1.png);"></div>
                        <div class="detail">
                            <div class="title">
                                <h2>แพ็คเกจ 1 <ss>3 วัน 2 คืน</ss>
                                </h2>
                            </div>
                            <div class="sub">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl, volutpat pretium montes, pharetra. Eu faucibus ut augue et purus, feugiat.</p>
                            </div>
                            <div class="sub_2">
                                <div class="total_activity">
                                    <p>10 กิจกรรม (รวมทั้ง 3 วัน) </p>
                                    <p>5-6 x ผู้ใหญ่</p>
                                </div>
                            </div>
                            <div class="box_bottom">
                                <div class="box_price">
                                    <p>29535</p>
                                    <h2>4000 บาท</h2>
                                </div>
                                <div class="btn_see_detail">
                                    ดูรายละเอียด
                                </div>
                            </div>
                        </div>
                    </div> -->
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
        let y = new Splide('#pack', {
            perPage: 5,
            perMove: 1,
            focus: 'left',
        }).mount();
    });

    $('.btn_search').click(function() {
        $.ajax({
                url: base_url + 'package/search_package',
                type: 'post',
                dataType: 'json',
                data: {
                    keyword: $('.keyword').val(),
                    total_member: $('.total_menber').val(),
                    total_adult: $('.total_adult').val(),
                    total_kid: $('.total_kid').val()
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
                $('.list_search').empty()
                console.log(list)
                $(list).each(function(key, e) {
                    $('.list_search').append('<div class="box_search my-4"><div class="image" style="background-image: url(<?= base_url() ?>../' + list[key].cover + ');"></div><div class="detail"><div class="title"><h2>' + list[key].name + '<ss>' + list[key].type + '</ss></h2></div><div class="sub"><p>' + list[key].detail + '</p></div><div class="sub_2"><div class="total_activity"> <p>10 กิจกรรม (รวมทั้ง ' + list[key].type + ') </p><p>บ้านพัก ' + list[key].house_id['name'] + '</p><p>' + list[key].total_adult + ' ผู้ใหญ่</p><p>' + list[key].total_kid + ' เด็ก</p></div></div><div class="box_bottom"><div class="box_price"><p>' + addCommas(list[key].price_full) + '</p><h2>' + addCommas(list[key].price) + ' บาท</h2></div><a style="text-decoration: none; color:unset" href="<?= base_url() ?>Welcome/detail/'+list[key].id+'"><div class="btn_see_detail">ดูรายละเอียด</div></a></div></div></div>')
                })
            });
    })

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