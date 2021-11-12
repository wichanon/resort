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
    <div class="container-fluid back_package">

        <div class="row mt-5">
            <div class="col-8 mx-auto">
                <h2>รอทำรายการ(ยืนยันการจอง)</h2>
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>แพ็คเกจ</th>
                                    <th>ชื่อ-นามสกุล</th>
                                    <th>อีเมล</th>
                                    <th>เบอร์ติดต่อ</th>
                                    <th>วันที่เข้าพัก</th>
                                    <th>ยอดทั้งหมด</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($list as $key => $value) {
                                    $checkin = new DateTime($value['checkin']);
                                    $checkin = $checkin->format('Y-m-d');
                                    $checkin = explode('-', $checkin);
                                    $checkin = $checkin[2] . '/' . $checkin[1] . '/' . $checkin[0];

                                    $checkout = new DateTime($value['checkout']);
                                    $checkout = $checkout->format('Y-m-d');
                                    $checkout = explode('-', $checkout);
                                    $checkout = $checkout[2] . '/' . $checkout[1] . '/' . $checkout[0];
                                ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $value['name'] ?> | <?= $value['type'] ?></td>
                                        <td><?= $value['name_booking'] ?></td>
                                        <td><?= $value['email_booking'] ?></td>
                                        <td><?= $value['tel_booking'] ?></td>
                                        <td><?= $checkin ?> - <?= $checkout ?></td>
                                        <td><?= number_format($value['price']) ?></td>
                                        <td>
                                            <button class="btn btn-success" onclick="pay(<?= $value['id'] ?>,1)">ยืนยันการโอน</button>
                                            <button class="btn btn-danger" onclick="pay(<?= $value['id'] ?>,2)">ยกเลิก</button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">

    </div>
</body>
<script>
    $(document).ready(function() {
        $('.table').DataTable()
    });

    function pay(id, status) {
        Swal.fire({
            title: 'ต้องการทำรายการ?',
            text: "เมื่อทำรายการแล้วไม่สามารถแก้ไขได้!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ใช่, ต้องการทำรายการ!',
            cancelButtonText: 'ไม่, ยกเลิกการทำรายการ!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                        url: base_url + 'package/pay',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            id: id,
                            status: status
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
                                'ทำรายการสำเร็จ',
                                'ข้อมูลจะถูกส่งไปยังผู้จอง',
                                'success'
                            )
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                    });
            }
        })

    }
</script>

</html>