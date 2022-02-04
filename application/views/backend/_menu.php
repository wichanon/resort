<?php $sess = 'xx';
if (isset($_SESSION['firstname'])) {
    $sess = $_SESSION['firstname'];
}
?>
<div class="row menu p-0">
    <div class="col p-0">
        <div class="bar">
            <div class="logo">
                <img src="<?= base_url() ?>../images/logomain.png" alt="">
            </div>
            <div class="list_menu">
                <div class="menu">
                    <div class="name_menu">
                        <a href="<?= base_url() ?>admin/package_manage">
                            <p>จัดการแพ็คเกจ</p>
                        </a>
                        <?php if ($menu == 'managepackage') { ?>
                            <div style="bottom: -10px" class="active"></div>
                        <?php } ?>
                    </div>
                    <div class="name_menu">
                        <a href="<?= base_url() ?>admin/packlist">
                            <p>ยืนยันการโอน</p>
                        </a>
                        <?php if ($menu == 'confirm_payment') { ?>
                            <div style="bottom: -10px" class="active"></div>
                        <?php } ?>
                    </div>
                    <div class="name_menu">
                        <a href="<?= base_url() ?>admin/packlist_booking_end">
                            <p>ยืนยันการเข้าพักสำเร็จ</p>
                        </a>
                        <?php if ($menu == 'confirm_booking_end') { ?>
                            <div style="bottom: -10px" class="active"></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>