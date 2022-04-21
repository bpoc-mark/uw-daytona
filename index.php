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
			<section class="news-sect">
				<div class="container">
					<h3>
						NEWS
						<span>お知らせ</span>
					</h3>
					<ul class="news">
						<li class="news--item">
							<a href="https://daytona50th.com/senryuu/" target="_blank" class="news--content">
								<span class="news--content--date">2022.4.26</span>
								<p class="news--content--title">50周年記念「バイク＆カスタムあるある川柳コンテスト」結果発表。 ></p>
							</a>
						</li>
					</ul>
				</div>
			</section>
			<section class="sect-3">
				<div class="wrapper">
					<a class="row" href="/greetings/"> 
						<div class="col">
							<div class="content">
								<h3>GREETING</h3>
								<p>ご挨拶</p>
								<span>read more…</span>
							</div>
						</div>
						<div class="col">
							<img src="/images/top/sect-3/img-1.jpg" alt="ご挨拶">
						</div>
					</a>
				</div>
				<div class="wrapper wrapper--reverse wrapper--reverse--pl50">
					<a class="row" href="/anniversary/">
						<div class="col">
							<div class="content">
								<h3>50th ANNIVERSARY<br>MOVIE</h3>
								<p>50周年記念ムービー</p>
								<span>read more…</span>
							</div>
						</div>
						<div class="col">
							<img src="/images/top/sect-3/img-2.jpg" alt="ご挨拶">
						</div>
					</a>
				</div>
				<div class="wrapper wrapper--pl50">
					<a class="row" href="/message/">
						<div class="col">
							<div class="content">
								<h3>CONGRATULATIONS<br>MESSAGE</h3>
								<p>デイトナと私</p>
								<span>read more…</span>
							</div>
						</div>
						<div class="col">
							<img src="/images/top/sect-3/img-3.jpg" alt="デイトナと私">
						</div>
					</a>
				</div>
				<div class="wrapper wrapper--reverse  wrapper--reverse--pl50-1">
					<a class="row" href="/history/">
						<div class="col">
							<div class="content">
								<h3>DAYTONA<br>50th HISTORY</h3>
								<p>ヒストリー</p>
								<span>read more…</span>
							</div>
						</div>
						<div class="col">
							<img src="/images/top/sect-3/img-4.jpg" alt="ヒストリー">
						</div>
					</a>
				</div>
				<div class="wrapper">
					<a class="row" href="/story/">
						<div class="col">
							<div class="content">
								<h3>DAYTONA<br>50th STORY</h3>
								<p>デイトナ50年の物語</p>
								<span>read more…</span>
							</div>
						</div>
						<div class="col">
							<img src="/images/top/sect-3/img-5.jpg" alt="デイトナ50年の物語">
						</div>
					</a>
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
