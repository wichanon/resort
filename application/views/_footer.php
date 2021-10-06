<div class="row footer p-0">
    <div class="col p-0">
        <div class="box">
            <div class="row">
                <div class="col">
                    <div class="logo"></div>
                    <div class="social">
                        <div class="icon">
                            <img src="<?= base_url() ?>../images/icons/facebook.png" alt="">
                        </div>
                        <div class="icon">
                            <img src="<?= base_url() ?>../images/icons/twitter.png" alt="">
                        </div>
                        <div class="icon">
                            <img src="<?= base_url() ?>../images/icons/instagram.png" alt="">
                        </div>
                    </div>
                    <div class="contact">
                        <p>ที่อยู่ : xx/xxx Lorem ipsum dolor sit amet <br>consectetur adipiscing elit 12345<br>
                            เบอร์โทรศัพท์ : 08x-xxx-xxx <br>
                            อีเมล์ : xxx@hotmail.com<br>
                            เว็บไซต์ : www.xxxxx.com</p>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="sub_menu">
                                <div class="title">เกี่ยวกับเรา</div>
                                <div class="sub">
                                    <p>ข้อมูลเกี่ยวกับเรา</p>
                                    <p>ติดต่อ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="sub_menu">
                                <div class="title">แพ็คเกจ</div>
                                <div class="sub">
                                    <p>แพ็คเกจ 1 แบบ 3 วัน 2 คืน</p>
                                    <p>แพ็คเกจ 2 แบบ 3 วัน 2 คืน</p>
                                    <p>แพ็คเกจ 3 แบบ 3 วัน 2 คืน</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="sub_menu">
                                <div class="title">รีวิว</div>
                                <div class="sub">
                                    <p>แพ็คเกจ 1 แบบ 3 วัน 2 คืน</p>
                                    <p>แพ็คเกจ 2 แบบ 3 วัน 2 คืน</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col contact_box">
                            <div class="box">
                                <h4>ติดต่อสอบถาม</h4>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="ชื่อ-นามสกุล">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <textarea name="" id="" cols="30" class="form-control" rows="5" placeholder="รายละเอียด"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-end">
                                        <div class="btn_submit">ส่ง</div>
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
<div class="bg_login" style="display:none">
    <div class="box login">
        <div class="logo">
            <img src="<?= base_url() ?>../images/logo.png" alt="">
        </div>
        <div class="box_input mt-4">
            <form id="form_login">
                <input type="text" class="form-control my-1 username" required name="username" placeholder="ํUsername">
                <input type="password" class="form-control my-1 password" required name="password" placeholder="Password">
            </form>
        </div>
        <div class="btn btn_login sent mt-4">เข้าสู่ระบบ</div>
        <div class="register btn_register_ mt-2">
            <p>สมัครสมาชิก</p>
        </div>
        <div class="btn_close">
            <img src="<?= base_url() ?>../images/icons/cancel.png" alt="">
        </div>
    </div>
    <div class="box register d-none">
        <div class="logo">
            <img src="<?= base_url() ?>../images/logo.png" alt="">
        </div>
        <div class="box_input mt-4">
            <form id="form">
                <div class="row">
                    <div class="col-6 mx-auto">
                        <span>* ภาษาอังกฤษเท่านั้น ไม่ต่ำกว่า 4 ตัวอักษร </span>
                        <input type="text" class="form-control my-1 regis username" name="username" required placeholder="ํUsername">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>* ภาษาไทยเท่านั้น</span>
                        <input type="text" class="form-control my-1 regis firstname" name="firstname" required placeholder="ชื่อจริง">
                    </div>
                    <div class="col">
                        <span>* ภาษาไทยเท่านั้น</span>
                        <input type="text" class="form-control my-1 regis lastname" name="lastname" required placeholder="นามสกุล">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span></span>
                        <input type="text" class="form-control my-1 regis tel" title="เบอร์โทรศัพท์ต้องมี 10 ตัว" minlength="10" name="tel" required placeholder="เบอร์โทรศัพท์">
                    </div>
                    <div class="col">
                        <span></span>
                        <input type="text" class="form-control my-1 regis email" name="email" required placeholder="อีเมล์">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mx-auto">
                        <span>* ไม่ต่ำกว่า 8 ตัวอักษร ห้ามมีสัญลักษณ์ </span>
                        <input type="password" class="form-control my-1 regis password" title="รหัสผ่านต้องมีมากกว่าหรือเท่ากับ 8 ตัวอักษร" minlength="8" name="password" required placeholder="Password">
                    </div>
                </div>
            </form>
        </div>
        <div class="btn btn_login register_sent mt-4">สมัครสมาชิก</div>
        <div class="register btn_login_ mt-2">
            <p>เข้าสู่ระบบ</p>
        </div>
        <div class="btn_close">
            <img src="<?= base_url() ?>../images/icons/cancel.png" alt="">
        </div>
    </div>
</div>


<script>
    let base_url = '<?= base_url() ?>';
    $('.btn_login').click(function() {
        $('.box.register').addClass('d-none')
        $('.box.login').removeClass('d-none')
        $('.bg_login').fadeIn('fast')
    })
    $('.bg_login .btn_close').click(function() {
        $('.bg_login').fadeOut('fast')
    })
    $("#form_login").validate();
    $('.btn_login.sent').click(function() {
        if ($('#form_login').valid()) {
        $.ajax({
                url: base_url + 'user/login',
                type: 'post',
                dataType: 'json',
                data: {
                    username: $('.username').val(),
                    password: $('.password').val()
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
                console.log(data);
                if (data == true) {
                    $('.bg_login').fadeOut();
                    Swal.fire(
                        'เข้าสู่ระบบสำเร็จ',
                        'เก่งมาก',
                        'success'
                    )
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                }
            });
        }
    })
    $("#form").validate();
    $('.btn_login.register_sent').click(function() {
        if ($('#form').valid()) {
            $.ajax({
                    url: base_url + 'user/register',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        username: $('.regis.username').val(),
                        firstname: $('.regis.firstname').val(),
                        lastname: $('.regis.lastname').val(),
                        tel: $('.regis.tel').val(),
                        email: $('.regis.email').val(),
                        password: $('.regis.password').val()
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
                    console.log(data);
                    if (data == true) {
                        Swal.fire(
                            'สมัครสมาชิกสำเร็จ',
                            'เก่งมาก',
                            'success'
                        )
                        $('.box.register').addClass('d-none')
                        $('.box.login').removeClass('d-none')
                    }
                });
        }

    })
    $('.box .btn_login_').click(function() {
        $('.box.register').addClass('d-none')
        $('.box.login').removeClass('d-none')
    })
    $('.box .btn_register_').click(function() {
        $('.box.login').addClass('d-none')
        $('.box.register').removeClass('d-none')
    })
    $('.logout').click(function() {
        $.ajax({
                url: base_url + 'user/logout',
                type: 'post',
                dataType: 'json',
                data: {},
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
                console.log(data);
                if (data == true) {
                    Swal.fire(
                        'ออกจากระบบสำเร็จ',
                        'เก่งมาก',
                        'success'
                    )
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                }
            });
    })
    $('.user .register').click(function() {
        $('.box.login').addClass('d-none')
        $('.box.register').removeClass('d-none')
        $('.bg_login').fadeIn('fast')
    })
</script>