<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.png" />
	<title>RTECH For Tech Materials</title>

	<link rel="stylesheet" href="css/general.css" />
	<link rel="stylesheet" href="css/aside.css">
	<link rel="stylesheet" href="css/article.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/footer.css">
	<style>
		.thankyou-container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 80vh;
			width: 100%;
			background-color: var(--color-1);
		}

		.thankyou-container h1 {
			font-size: 3rem;
			font-weight: 300;
			margin-bottom: 100px;
			text-align: center;
		}

		.thankyou-container a {
			width: 50%;
		}
	</style>
</head>

<body>
	<!-- Header -->
	<?php include('common/header.php') ?>

	<main>
		<div id="main-container">
			<aside>
				<?php include 'common/aside.php' ?>
			</aside>
			<div>
				<section class="thankyou-container">
					<?php if ($_GET['result']) : ?>
						<h1>Cảm ơn bạn đã đặt hàng của chúng tôi</h1>
					<?php else : ?>
						<h1>
						Đánh giá của bạn không được gửi vì những lý do không mong muốn 😞
							<br>
							Thử lại sau
						</h1>
					<?php endif ?>
					<a href="./" class="styled-btn">
						Quay Lại Trang Chủ
					</a>
					<a href="article?article_id=<?= $_GET['article_id'] ?>" class="styled-btn">
						Quay Lại Sản Phẩm
					</a>
				</section>
				<!-- airpods special offer -->
				<section id="airpods-special-offer" class="special-offer">
					<div class="special-offer-text">
						<h2>AirPods Pro</h2>
						<p>
							AirPods deliver effortless, all-day audio on the go.
						</p>
						<a href="article?article_id=1" class="styled-btn">
							ORDER NOW
						</a>
					</div>
					<div class="special-offer-img">
						<img src="img/special_offers/airpods_special_offer.png" alt="">
					</div>
				</section>
				<!-- galaxy s9 special offer -->
				<section id="s9-special-offer" class="special-offer">
					<div class="special-offer-img">
						<img src="img/special_offers/s9_special_offer.png" alt="">
					</div>
					<div class="special-offer-text">
						<h2>Galaxy S9</h2>
						<p>
							With a camera that works like your eye.
						</p>
						<a href="article?article_id=51" class="styled-btn">
							ORDER NOW
						</a>
					</div>
				</section>
			</div>
		</div>
	</main>

	<!-- Footer -->
	<?php include('common/footer.php') ?>
</body>

</html>
