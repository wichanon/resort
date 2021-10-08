<?php $sess = 'xx';
    if(isset($_SESSION['firstname'])){
        $sess = $_SESSION['firstname'];
    }
?>
<div class="row menu p-0">
    <div class="col p-0">
        <div class="bar">
            <div class="logo">
                <img src="" alt="">
            </div>
            <div class="list_menu">
                <div class="menu">
                    <div class="name_menu">
                        <a href="<?=base_url()?>"><p>หน้าแรก</p></a>
                    </div>
                    <div class="name_menu">
                        <a href="<?=base_url()?>Welcome/package"><p>แพ็คเกจ</p></a>
                    </div>
                    <div class="name_menu">
                        <p>รีวิว</p>
                    </div>
                    <div class="name_menu">
                        <p>ติดต่อ</p>
                    </div>
                </div>
                <div class="user">
                    <?php if (isset($_SESSION['username'])) { ?>
                        <div class="box_user">
                            <?=$_SESSION['firstname'];?> <?=$_SESSION['lastname'];?> 
                        </div>
                        <div class="logout">
                            logout
                        </div>
                    <?php }else{ ?>
                    <div class="btn btn_login">เข้าสู่ระบบ</div>
                    <div class="register">
                        <p>สมัครสมาชิก</p>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>