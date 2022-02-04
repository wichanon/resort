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
                            <?php $itemlist = 0;
                            $page = 0;
                            foreach ($list as $key => $value) { ?>
                                <?php if ($itemlist < 5) { ?>
                                    <div class="page page_1">
                                        <div class="review_list my-3">
                                            <div class="package" style="background-image: url(<?= base_url() ?>../<?= $value['cover'] ?>);">
                                                <div class="text_name">
                                                    <h5><?= $value['name'] ?></h5>
                                                    <p><?= number_format($value['price']) ?> บาท</p>
                                                </div>
                                            </div>
                                            <div class="review_">
                                                <div class="box">
                                                    <div class="row">
                                                        <div class="col">
                                                            <?php $date = explode(" ", $value['date_time']); ?>
                                                            <span><?= $value['firstname'] ?> <?= $value['lastname'] ?> โพสเมื่อ <?= $date[0] ?> เวลา <?= $date[1] ?> น.</span>
                                                            <div class="box_star">
                                                                <?php for ($i = 0; $i < 5; $i++) {
                                                                    if ($value['star'] > $i) { ?>
                                                                        <div class="star" data-star="1">
                                                                            <img src="<?= base_url() ?>../images/icons/star_2.png" alt="">
                                                                        </div>
                                                                    <?php } else { ?>
                                                                        <div class="star" data-star="2">
                                                                            <img src="<?= base_url() ?>../images/icons/star.png" alt="">
                                                                        </div>
                                                                <?php }
                                                                } ?>
                                                            </div>
                                                            <div class="text_review">
                                                                <?= $value['detail'] ?>
                                                            </div>
                                                            <div class="box_image">
                                                                <?php if (isset($value['images'])) {
                                                                    foreach ($value['images'] as $ke => $va) { ?>
                                                                        <div class="image" path="<?= $va['image'] ?>" onclick="preview_image(this)" style="background-image: url(<?= base_url() ?>../<?= $va['image'] ?>);"></div>
                                                                <?php }
                                                                } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php $page = 1;
                                } else if ($itemlist < 10) { ?>
                                    <div class="page page_2 d-none">
                                        <div class="review_list my-3">
                                            <div class="package" style="background-image: url(<?= base_url() ?>../<?= $value['cover'] ?>);">
                                                <div class="text_name">
                                                    <h5><?= $value['name'] ?></h5>
                                                    <p><?= number_format($value['price']) ?> บาท</p>
                                                </div>
                                            </div>
                                            <div class="review_">
                                                <div class="box">
                                                    <div class="row">
                                                        <div class="col">
                                                            <?php $date = explode(" ", $value['date_time']); ?>
                                                            <span><?= $value['firstname'] ?> <?= $value['lastname'] ?> โพสเมื่อ <?= $date[0] ?> เวลา <?= $date[1] ?> น.</span>
                                                            <div class="box_star">
                                                                <?php for ($i = 0; $i < 5; $i++) {
                                                                    if ($value['star'] > $i) { ?>
                                                                        <div class="star" data-star="1">
                                                                            <img src="<?= base_url() ?>../images/icons/star_2.png" alt="">
                                                                        </div>
                                                                    <?php } else { ?>
                                                                        <div class="star" data-star="2">
                                                                            <img src="<?= base_url() ?>../images/icons/star.png" alt="">
                                                                        </div>
                                                                <?php }
                                                                } ?>
                                                            </div>
                                                            <div class="text_review">
                                                                <?= $value['detail'] ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php $page = 2;
                                } else if ($itemlist < 15) { ?>
                                    <div class="page page_3 d-none">
                                        <div class="review_list my-3">
                                            <div class="package" style="background-image: url(<?= base_url() ?>../<?= $value['cover'] ?>);">
                                                <div class="text_name">
                                                    <h5><?= $value['name'] ?></h5>
                                                    <p><?= number_format($value['price']) ?> บาท</p>
                                                </div>
                                            </div>
                                            <div class="review_">
                                                <div class="box">
                                                    <div class="row">
                                                        <div class="col">
                                                            <?php $date = explode(" ", $value['date_time']); ?>
                                                            <span><?= $value['firstname'] ?> <?= $value['lastname'] ?> โพสเมื่อ <?= $date[0] ?> เวลา <?= $date[1] ?> น.</span>
                                                            <div class="box_star">
                                                                <?php for ($i = 0; $i < 5; $i++) {
                                                                    if ($value['star'] > $i) { ?>
                                                                        <div class="star" data-star="1">
                                                                            <img src="<?= base_url() ?>../images/icons/star_2.png" alt="">
                                                                        </div>
                                                                    <?php } else { ?>
                                                                        <div class="star" data-star="2">
                                                                            <img src="<?= base_url() ?>../images/icons/star.png" alt="">
                                                                        </div>
                                                                <?php }
                                                                } ?>
                                                            </div>
                                                            <div class="text_review">
                                                                <?= $value['detail'] ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php $page = 3;
                                } else if ($itemlist < 20) { ?>
                                    <div class="page page_4 d-none">
                                        <div class="review_list my-3">
                                            <div class="package" style="background-image: url(<?= base_url() ?>../<?= $value['cover'] ?>);">
                                                <div class="text_name">
                                                    <h5><?= $value['name'] ?></h5>
                                                    <p><?= number_format($value['price']) ?> บาท</p>
                                                </div>
                                            </div>
                                            <div class="review_">
                                                <div class="box">
                                                    <div class="row">
                                                        <div class="col">
                                                            <?php $date = explode(" ", $value['date_time']); ?>
                                                            <span><?= $value['firstname'] ?> <?= $value['lastname'] ?> โพสเมื่อ <?= $date[0] ?> เวลา <?= $date[1] ?> น.</span>
                                                            <div class="box_star">
                                                                <?php for ($i = 0; $i < 5; $i++) {
                                                                    if ($value['star'] > $i) { ?>
                                                                        <div class="star" data-star="1">
                                                                            <img src="<?= base_url() ?>../images/icons/star_2.png" alt="">
                                                                        </div>
                                                                    <?php } else { ?>
                                                                        <div class="star" data-star="2">
                                                                            <img src="<?= base_url() ?>../images/icons/star.png" alt="">
                                                                        </div>
                                                                <?php }
                                                                } ?>
                                                            </div>
                                                            <div class="text_review">
                                                                <?= $value['detail'] ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php $page = 4;
                                }
                                $itemlist++;
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="row btn_page">
                    <div class="col">
                        <!-- <div class="box_page" onclick="select_page(1,this)">1</div> -->
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
    <div class="bg_black" style="display:none">
        <div class="close">
            <img src="<?=base_url()?>../images/icons/cancel_w.png" alt="">
        </div>
        <div class="image_review">
            <img src="" alt="">
        </div>
    </div>
</body>
<script>
    function preview_image(data) {
        let image = $(data).attr('path')
        $('.bg_black .image_review img').attr('src', base_url + '../' + image)
        const img = new Image();
        img.onload = function() {
            //alert(this.width + 'x' + this.height);
            if(this.width< this.height){
                $('.bg_black .image_review').css({
                    width : 'unset',
                    height : '65%'
                })
                $('.bg_black .image_review img').css({
                    width : 'unset',
                    height : '100%'
                })
            }else{
                $('.bg_black .image_review').css({
                    width : '65%',
                    height : 'unset'
                })
                $('.bg_black .image_review img').css({
                    width : '100%',
                    height : 'unset'
                })
            }
        }
        img.src = base_url + '../' + image;
        $('.bg_black').fadeIn('fast')
        //console.log(image)
    }
    $('.bg_black .close').click(function(){
        $('.bg_black').fadeOut('fast')
    })
    $(document).ready(function() {
        let page_ = '<?= $page; ?>'
        for (let i = 0; i < page_; i++) {
            if (i == 0) {
                $('.review .btn_page .col').append('<div class="box_page active" onclick="select_page(' + (i + 1) + ',this)">' + (i + 1) + '</div>')
            } else {
                $('.review .btn_page .col').append('<div class="box_page" onclick="select_page(' + (i + 1) + ',this)">' + (i + 1) + '</div>')
            }

        }
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

    function select_page(page, e) {
        $('.btn_page .box_page').removeClass('active')
        $(e).addClass('active')
        $('.box_review .page').addClass('d-none')
        $('.box_review .page.page_' + page).removeClass('d-none')
    }
</script>

</html>