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
    <div class="bg_back">
        <div class="popup">
            <div class="row my-2">
                <div class="col d-flex justify-content-center">
                    <div class="image">
                        <img src="<?= base_url() ?>../images/logo_new.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <span>Username</span>
                    <input type="text" class="form-control username">
                </div>
                <div class="col-12 mt-3">
                    <span>Password</span>
                    <input type="password" class="form-control password">
                </div>
                <div class="col-12 mt-4">
                    <button class="btn btn-primary form-control btn_login">เข้าสู่ระบบ</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $('.btn_login').click(function() {
        $.ajax({
                url: base_url + 'admin/login',
                type: 'post',
                dataType: 'json',
                data: {
                    username: $('.username').val(),
                    password: $('.password').val(),
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
                        'ลงชื่อเข้าใช้สำเร็จ',
                        '',
                        'success'
                    )
                    setTimeout(function() {
                        window.location.href = base_url+'admin/package_manage';
                    }, 2000);
                }
            });
    })
</script>

</html>