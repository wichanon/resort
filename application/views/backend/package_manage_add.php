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
                <h2>แก้ไขแพ็คเกจ</h2>
                <div class="row">
                    <div class="col">
                        <span>ชื่อแพ็คเกจ</span>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <span>คำอธิบาย</span>
                        <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <span>จำนวนวัน</span>
                        <select class="form-select" name="" id="">
                            <option value="">2 วัน 1 คืน</option>
                            <option value="">3 วัน 2 คืน</option>
                            <option value="">4 วัน 3 คืน</option>
                        </select>
                    </div>
                    <div class="col">
                        <span>ราคาเต็ม (บาท)</span>
                        <input type="text" class="form-control" placeholder="9xxx">
                    </div>
                    <div class="col">
                        <span>ราคาลด (บาท)</span>
                        <input type="text" class="form-control" placeholder="5xxx">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <span>จำนวนคนเข้าพักทั้งหมด</span>
                        <select class="form-select" name="" id="">
                            <option value="">1-5</option>
                            <option value="">6-10</option>
                            <option value="">11-15</option>
                        </select>
                    </div>
                    <div class="col">
                        <span>จำนวนผู้ใหญ่ที่รองรับ</span>
                        <input type="number" class="form-control" value="1">
                    </div>
                    <div class="col">
                        <span>จำนวนเด็กที่รองรับ</span>
                        <input type="number" class="form-control" value="1">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <span>บ้านพัก</span>
                        <select class="form-select" name="" id="">
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <span>กิจกรรม</span>
                    <div class="col">
                        <button class="btn btn-dark">วันที่ 1</button>
                        <button class="btn btn-dark">วันที่ 2</button>
                        <button class="btn btn-dark">วันที่ 3</button>
                        <button class="btn btn-dark">วันที่ 4</button>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="row list_activity">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col">
                                        <span>ชื่อกิจกรรม</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col">
                                        <span>ราคาจ่ายเพิ่ม</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col">
                                        <span>เวลา</span>
                                        <input type="time" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="col-12">
                                <span>คำอธิบาย</span>
                                <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        สามารถเปลี่ยนกิจกรรมได้
                                    </label>
                                </div>
                            </div>
                            <!-- <div class="col-10">
                                <div class="row">
                                    <div class="col">
                                        <span>ชื่อกิจกรรม</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col">
                                        <span>ราคาจ่ายเพิ่ม</span>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span>คำอธิบาย</span>
                                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                            </div> -->
                        </div>
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