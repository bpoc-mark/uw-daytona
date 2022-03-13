<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/tag_manager.php"); ?>
	<meta charset="UTF-8" />
	<meta name="robots" content="index,follow">
	<link rel="canonical" href="<?php echo CANONICAL ?>">
	<meta name="keywords" content="<?php echo KEY_WORD ?>">
	<meta name="description" content="<?php echo DESCRIPTION ?>">
	<meta property="og:title" content="<?php echo SITE_NAME ?>">
	<meta property="og:type" content="website" /> <!-- 下層では「article」にしてください -->
	<meta property="og:description" content="<?php echo DESCRIPTION ?>" />
	<meta property="og:url" content="<?php echo CANONICAL ?>" />

	<title><?php echo SITE_NAME ?></title>

	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Top">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
	<div id="AllBox">
		<header>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
		</header>

		<main>
			<section class="sect-1">
				<div class="wrapper">
					<p class="main_video pc">
						<video src="/images/top/sect_1/mv_pc.mp4" loop="" autoplay="" muted="" playsinline=""></video>
					</p>
					<p class="main_video sp">
						<video src="/images/top/sect_1/sp/mv_sp.mp4" loop="" autoplay="" muted="" playsinline=""></video>
					</p>
					<h2 class="daytona-logo">
						<img src="/images/top/sect_1/img_1.svg" alt="Daytona 50th Anniversary Since 1972">
					</h2>
				</div>
			</section>
			<section class="sect-2">
				<div class="container">
					<p class="desc">
						2022年、<br class="sp">株式会社デイトナは創業50周年を迎えました。<br>
						これまでデイトナを支えてくれたすべての方に、<br>
						そしてバイクを愛するすべての人に、<br class="sp">感謝の気持ちをこめて。<br>
						これからも私たちデイトナは、<br class="sp">バイクを通じて、<br class="pc">
						人生をより楽しく、<br class="sp">より豊かにサポートしていきます。
					</p>
				</div>
			</section>
			<section class="sect-3">
				<div class="wrapper">
					<div class="row">
						<div class="col">
							<div class="content">
								<h3>GREETING</h3>
								<p>ご挨拶</p>
								<a href="/greetings/">read more…</a>
							</div>
						</div>
						<div class="col">
							<img src="/images/top/sect-3/img-1.jpg" alt="ご挨拶">
						</div>
					</div>
				</div>
				<div class="wrapper wrapper--reverse wrapper--reverse--pl50">
					<div class="row">
						<div class="col">
							<div class="content">
								<h3>50th ANNIVERSARY<br>MOVIE</h3>
								<p>50周年記念ムービー</p>
								<a href="/anniversary/">read more…</a>
							</div>
						</div>
						<div class="col">
							<img src="/images/top/sect-3/img-2.jpg" alt="ご挨拶">
						</div>
					</div>
				</div>
				<div class="wrapper wrapper--pl50">
					<div class="row">
						<div class="col">
							<div class="content">
								<h3>CONGRATULATIONS<br>MESSAGE</h3>
								<p>デイトナと私</p>
								<a href="/message/">read more…</a>
							</div>
						</div>
						<div class="col">
							<img src="/images/top/sect-3/img-3.jpg" alt="デイトナと私">
						</div>
					</div>
				</div>
				<div class="wrapper wrapper--reverse  wrapper--reverse--pl50-1">
					<div class="row">
						<div class="col">
							<div class="content">
								<h3>DAYTONA<br>50th HISTORY</h3>
								<p>ヒストリー</p>
								<a href="/history/">read more…</a>
							</div>
						</div>
						<div class="col">
							<img src="/images/top/sect-3/img-4.jpg" alt="ヒストリー">
						</div>
					</div>
				</div>
				<div class="wrapper">
					<div class="row">
						<div class="col">
							<div class="content">
								<h3>DAYTONA<br>50th STORY</h3>
								<p>デイトナ50年の物語</p>
								<a href="/story/">read more…</a>
							</div>
						</div>
						<div class="col">
							<img src="/images/top/sect-3/img-5.jpg" alt="デイトナ50年の物語">
						</div>
					</div>
				</div>
			</section>
		</main>

		<footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer>
	</div><!-- //AllBox -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
