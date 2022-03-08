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
  <meta property="og:type" content="article" /> <!-- 下層では「article」にしてください -->
  <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
  <meta property="og:url" content="<?php echo CANONICAL ?>" />

  <title><?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Anniversary">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-head p-head--anniversary">
        <div class="p-head--wrap">
          <div class="p-head--content">
            <h1 class="p-head--content--en">50th ANNIVERSARY<br>MOVIE</h1>
            <p class="p-head--content--jp">50周年記念ムービー</p>
          </div>
        </div>
      </section>
      <section class="anniversary-sect">
        <div class="container">
          <div class="content">
            <h2>DAYTONA <br>KEEP GOING</h2>
            <h3> 〜デイトナはずっと⾛り続ける〜</h3>
            <p>
              50年間ずっと⾛り続けてきたデイトナ。<br>
              その過程では晴れていたり、⾬が降ったり、いろんなことがありました。<br class="pc">
              いろんな状況を経験し、それでも⾛り続けてきたのは何故か。<br class="pc">
              それは、<br class="pc">
              「バイクが好きだから」<br class="pc">
              「バイク⽂化を創造したいから」<br class="pc">
              「バイクでしか味わえない楽しさがあるから」<br class="pc">
              「バイクを好きな⼈にもっと楽しんでもらいたいから」<br>
              50周年を迎えたデイトナは、<br  class="pc">
              これからもバイクを愛するライダーとともに⾛り続けます。
            </p>
          </div>
          <div class="yt-wrap">
            <iframe src="https://www.youtube.com/embed/rV7QvUhsmW4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
