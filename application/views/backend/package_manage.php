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
    <?php $this->load->view('backend/_menu'); ?>
        <div class="row mt-5">
            <div class="col-11 mx-auto">
                <h2>แพ็คเกจ</h2>
                <div class="row mb-2">
                    <div class="col d-flex justify-content-end">
                        <a href="<?=base_url()?>admin/package_manage_"><button class="btn btn-info">เพิ่มแพ็คเกจ</button></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>แพ็คเกจ</th>
                                    <th>รายละเอียด</th>
                                    <th>ราคา (บาท)</th>
                                    <th>จำนวนวัน</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($list as $key => $value) { ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $value['name'] ?></td>
                                        <td><?= $value['detail'] ?></td>
                                        <td><?= number_format($value['price']) ?></td>
                                        <td><?= $value['type'] ?></td>
                                        <td>
                                            <a href="<?= base_url() ?>admin/package_manage_edit/<?= $value['id'] ?>"><button class="btn btn-warning">แก้ไข</button></a>
                                            <button class="btn btn-danger" onclick="del(<?= $value['id'] ?>)">ลบ</button>
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
    function del(id){
        Swal.fire({
            title: 'ต้องการทำการลบ?',
            text: "เมื่อทำรายการแล้วไม่สามารถแก้ไขได้!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'ใช่, ต้องการลบ!',
            cancelButtonText: 'ไม่, ยกเลิกการทำรายการ!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                        url: base_url + 'admin/del_package',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            id: id,
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
                                'แพ็คเกจได้ถูกลบเรียบร้อย',
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