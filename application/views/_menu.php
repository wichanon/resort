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
                        <a href="<?= base_url() ?>">
                            <p>หน้าแรก</p>
                        </a>
                        <?php if ($menu == 'home') { ?>
                            <div class="active"></div>
                        <?php } ?>
                    </div>
                    <div class="name_menu">
                        <a href="<?= base_url() ?>Welcome/package">
                            <p>แพ็คเกจ</p>
                        </a>
                        <?php if ($menu == 'package') { ?>
                            <div class="active"></div>
                        <?php } ?>
                    </div>
                    <div class="name_menu">
                        <a href="<?= base_url() ?>Welcome/review">
                            <p>รีวิว</p>
                        </a>
                        <?php if ($menu == 'review') { ?>
                            <div class="active"></div>
                        <?php } ?>
                    </div>
                    <?php if(isset($_SESSION['id'])){ ?>
                    <div class="name_menu">
                        <a href="<?= base_url() ?>Welcome/my_package">
                            <p>แพ็คเกจของฉัน</p>
                        </a>
                        <?php if ($menu == 'mypackage') { ?>
                            <div class="active"></div>
                        <?php } ?>
                    </div>
                    <?php }?>
                    <div class="name_menu">
                        <a href="<?= base_url() ?>Welcome/contact">
                            <p>ติดต่อ</p>
                        </a>
                        <?php if ($menu == 'contact') { ?>
                            <div class="active"></div>
                        <?php } ?>
                    </div>
                </div>
                <div class="user">
                    <?php if (isset($_SESSION['username'])) { ?>
                        <div class="box_user">
                            <?= $_SESSION['firstname']; ?> <?= $_SESSION['lastname']; ?>
                        </div>
                        <div class="logout">
                            logout
                        </div>
                    <?php } else { ?>
                        <div class="btn btn_login">เข้าสู่ระบบ</div>
                        <div class="register">
                            <p>สมัครสมาชิก</p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>