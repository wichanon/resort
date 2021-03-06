<div class="row footer p-0">
    <div class="col p-0">
        <div class="box">
            <div class="row">
                <div class="col" style="display: flex;flex-flow:column;align-items: center;">
                    <div class="logo">
                        <img src="<?= base_url() ?>../images/logomain.png" alt="">
                    </div>
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
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg_login" style="display:none">
    <div class="box login ">
        <div class="logo">
            <img src="<?= base_url() ?>../images/logo_new.png" alt="">
        </div>
        <div class="box_input mt-4">
            <form id="form_login">
                <input type="text" class="form-control my-1 username" required name="username_login" placeholder="ํUsername">
                <input type="password" class="form-control my-1 password" required name="password_login" placeholder="Password">
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
        <div class="logo register">
            <img src="<?= base_url() ?>../images/logo_new.png" alt="">
        </div>
        <div class="box_input mt-4">
            <form id="form_regis">
                <div class="row">
                    <div class="col-6 mx-auto">
                        <span>* ภาษาอังกฤษเท่านั้น ไม่ต่ำกว่า 4 ตัวอักษร </span>
                        <input type="text" class="form-control my-1 regis username" required name="username" value="" placeholder="ํUsername">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>* ห้ามกรอกอักษรพิเศษ</span>
                        <input type="text" class="form-control my-1 regis firstname" required name="firstname" value="" placeholder="ชื่อจริง">
                    </div>
                    <div class="col">
                        <span>* ห้ามกรอกอักษรพิเศษ</span>
                        <input type="text" class="form-control my-1 regis lastname" required name="lastname" value="" placeholder="นามสกุล">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span></span>
                        <input type="text" maxlength="10" class="form-control my-1 regis tel" title="เบอร์โทรศัพท์ต้องมี 10 ตัว" required value="" minlength="10" name="tel" placeholder="เบอร์โทรศัพท์">
                    </div>
                    <div class="col">
                        <span></span>
                        <input type="email" class="form-control my-1 regis email" required name="email" value="" placeholder="อีเมล์" title="อีเมล์ไม่ถูกต้อง">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mx-auto">
                        <span>* ไม่ต่ำกว่า 4 ตัวอักษร ห้ามมีสัญลักษณ์ </span>
                        <input type="password" class="form-control my-1 regis password" required value="" title="รหัสผ่านต้องมีมากกว่าหรือเท่ากับ 4 ตัวอักษร" minlength="4" name="password" placeholder="Password">
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
    let s = 0;

    $(".regis.firstname,.regis.lastname").keypress(function(event) {
        // var ew = event.which;
        // if (ew == 32)
        //     return false;
        // if (48 <= ew && ew <= 57)
        //     return false;
        // if (65 <= ew && ew <= 90)
        //     return false;
        // if (97 <= ew && ew <= 122)
        //     return false;

        var regex = new RegExp("^([A-Z]|[a-z]|[ๅภถุึคตจขชๆไำพะัีรนยบลฃฟหกดเ้่าสวงผปแอิืทมใฝ๑๒๓๔ู฿๕๖๗๘๙๐ฎฑธํ๊ณฯญฐฅฤฆฏโฌ็๋ษศซฉฮฺ์ฒฬฦ])+$", "g");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            console.log('d')
            return false;
        }
        return true;
    });
    $('.regis.tel').keypress(function(e) {

        var charCode = (e.which) ? e.which : event.keyCode

        if (String.fromCharCode(charCode).match(/[^0-9]/g))

            return false;

    });
    $(function() {
        $("#form_regis").validate()
        $("#form_login").validate();
    });
    $('.user .btn_login').click(function() {
        $('.box.register').addClass('d-none')
        $('.box.login').removeClass('d-none')
        $('.bg_login').fadeIn('fast')
    })
    $('.bg_login .btn_close').click(function() {
        $('.bg_login').fadeOut('fast')
    })
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
                            '',
                            'success'
                        )
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    }
                });
        }
    })
    $('.btn_login.register_sent').click(function() {
        if ($('#form_regis').valid()) {
            let total_tel = $('.regis.tel').val();
            if (total_tel.length > 10) {
                Swal.fire(
                    'เกิดข้อผิดพลาด !',
                    'ตรวจสอบข้อมูลอีกครั้ง',
                    'warning'
                )
                return;
            }
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
                            '',
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
                        '',
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