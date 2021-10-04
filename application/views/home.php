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
	<div class="container-fluid home">
		<?php $this->load->view('_menu'); ?>
		<div class="row">
			<div class="col p-0">
				<div class="cover">
					<div id="cover" class="splide">
						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide"><img src="<?= base_url() ?>../images/mock/cover.png" alt=""></li>
								<li class="splide__slide"><img src="<?= base_url() ?>../images/mock/cover.png" alt=""></li>
								<li class="splide__slide"><img src="<?= base_url() ?>../images/mock/cover.png" alt=""></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col d-flex justify-content-end">
				<div class="text_title">
					<h1>เว็บไซต์เพื่อการจัดโปรแกรมสำหรับการท่องเที่ยว<br>
						เหมาะสำหรับครอบครัว
					</h1>
				</div>
			</div>
		</div>
		<div class="row about">
			<div class="col-6 p-0">
				<div class="image_about">
					<img src="<?= base_url() ?>../images/mock/about.png" alt="">
				</div>
			</div>
			<div class="col-1"></div>
			<div class="col-4 p-5 d-flex align-items-center">
				<div class="">
					<div class="line">
						<img src="<?= base_url() ?>../images/mock/line.png" alt="">
					</div>
					<div class="box_text">
						<h1>เกี่ยวกับเรา</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu in dictumst sodales senectus vestibulum ipsum luctus. Consequat turpis ac, nisl habitasse viverra. Lacus, erat aliquam venenatis quisque nisi, risus orci. Consectetur risus morbi facilisis lacus, fermentum. Ultrices eu eu, at suspendisse orci, euismod volutpat, eros. Sit placerat convallis viverra tellus facilisis nunc, convallis suscipit at. Mus sem vulputate justo, tincidunt. Risus congue eu nunc, nibh quis ipsum amet vel nibh. Non mauris aliquam neque nam nisl tristique pellentesque. Consectetur egestas adipiscing blandit dictumst quam. Neque egestas augue risus integer blandit donec. Enim, semper varius porttitor cras ante mauris, pretium.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container list_pack">
		<div class="row mt-5">
			<div class="col">
				<div class="line">
					<img src="<?= base_url() ?>../images/mock/line.png" alt="">
				</div>
				<h2>แพ็คเกจท่องเที่ยวยอดนิยม</h2>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="slide_pack">
					<div id="pack" class="splide">
						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide">
									<div class="box_pack">
										<div class="box_2_row">
											<div class="box">
												<div class="image">
													<img src="<?= base_url() ?>../images/mock/pack_1.png" alt="">
												</div>
												<div class="detail">
													<h3>แพ็คเกจ 1</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus eget viverra turpis id id feugiat vulputate. Sit dictum nulla quis ultrices dolor lectus.</p>
												</div>
												<div class="detail_2">
													<div class="box1">
														<h6>3 วัน 2 คืน</h6>
													</div>
													<div class="box2">
														<img src="<?= base_url() ?>../images/mock/image3.png" alt="">
													</div>
													<div class="box3">
														<div class="price">
															<div class="old">
																15,000
															</div>
															<div class="new">
																9,999 <last>บาท</last>
															</div>
														</div>
														<div class="start_pack">
															ราคาเริ่มต้น (ต่อแพ็คเกจ)
														</div>
													</div>
												</div>
											</div>
											<div class="box mt-5">
												<div class="image">
													<img src="<?= base_url() ?>../images/mock/pack_1.png" alt="">
												</div>
												<div class="detail">
													<h3>แพ็คเกจ 1</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus eget viverra turpis id id feugiat vulputate. Sit dictum nulla quis ultrices dolor lectus.</p>
												</div>
												<div class="detail_2">
													<div class="box1">
														<h6>3 วัน 2 คืน</h6>
													</div>
													<div class="box2">
														<img src="<?= base_url() ?>../images/mock/image3.png" alt="">
													</div>
													<div class="box3">
														<div class="price">
															<div class="old">
																15,000
															</div>
															<div class="new">
																9,999 <last>บาท</last>
															</div>
														</div>
														<div class="start_pack">
															ราคาเริ่มต้น (ต่อแพ็คเกจ)
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
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
		<?php $this->load->view('_footer') ?>
	</div>
</body>
<script>
	$(document).ready(function() {
		let x = new Splide('#cover', {
			type: 'loop',
			autoplay: true
		}).mount();

		let y = new Splide('#pack', {
			type: 'loop',
			perPage: 3,
			perMove: 1,
		}).mount();
	});
</script>

</html>