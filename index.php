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
					2022年、株式会社デイトナは創業50周年を迎えました。<br class="pc">
					1972年、阿部久夫が大阪で創立した阿部商事。<br class="pc">
					二輪パーツの輸出業から始まった小さな会社は、<br class="pc">
					「日本にバイク文化を創造する」ことを目標に掲げ、<br class="pc">
					その時代に合ったカスタムパーツを世に送り出し、<br class="pc">
					ライダーの幸せなバイクライフを支えてきました。<br class="pc">
					これまでデイトナを支えてくれたすべての方に、<br class="pc">
					そしてバイクを愛するすべての人に、感謝の気持ちをこめて。<br class="pc">
					これからも私たちデイトナは、バイクを通じて、<br class="pc">
					人生をより楽しく、より豊かにサポートしていきます。
					</p>
				</div>
			</section>
			<section class="sect-3">
				<div class="wrapper">
					<div class="container">
						<h3 class="tll">
						デイトナ <span>50</span>周年を<br>
						みんなで祝おう！
						</h3>
						<p class="desc">
						あなたのデイトナパーツにまつわる思い出を投稿してみませんか。<br>
						「#デイトナ50周年」をつけてSNSでシェアして、50周年をともに盛り上げましょう。
						</p>
						<div class="row">
							<div class="col">
								<h3 class="col-ttl">STEP 01</h3>
								<p class="col-desc">ふだんお使いのSNSをお選びください。</p>
							</div>
							<div class="col">
								<h3 class="col-ttl">STEP 02</h3>
								<p class="col-desc">各SNSの投稿ルールに従って、あなたとデイトナパーツの思い出を語ってください。</p>
							</div>
							<div class="col">
								<h3 class="col-ttl">STEP 03</h3>
								<p class="col-desc">投稿にはぜひ写真・動画をつけてください。</p>
							</div>
							<div class="col">
								<h3 class="col-ttl">STEP 04</h3>
								<p class="col-desc">必ずハッシュタグ「#デイトナ50周年」をつけて投稿してください。</p>
							</div>
						</div>
						<p class="desc2">※投稿の中からデイトナ50周年サイトに掲載させていただく場合がございます。</p>
						<div class="cta">
							<h3 class="cta-ttl">#デイトナ50周年 の<br class="sp">投稿を見る</h3>
							<div class="cta-row">
								<a href="">Twitter</a>
								<a href="">Instagram</a>
								<a href="">Facebook</a>
							</div>
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
