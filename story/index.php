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

  <title>デイトナ50年の物語 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Story">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-head p-head--story">
        <div class="p-head--wrap">
          <div class="p-head--content">
            <h1 class="p-head--content--en">DAYTONA<br>50th STORY</h1>
            <p class="p-head--content--jp">デイトナ50年の物語</p>
          </div>
        </div>
      </section>
      <section class="story-sect">
        <div class="desc-wrap">
          <h2 class="sp">デイトナが走り続けられる理由</h2>
          <p>
            創業から50年、株式会社デイトナを牽引してきた3人のリーダーたち。<br class="pc">
            創業者として常に挑戦を続けた初代社長・阿部久夫。<br class="pc">
            2代目社長として激動の時代を乗り越えた鈴木紳一郎、<br class="pc">
            3代目として次の50年を見据える現社長・織田哲司。<br>
            50年の節目に当たり、これまでのデイトナの歩みとともに<br class="pc">
            3人の経営哲学を紐解いてみる。
          </p>
        </div>
        <div class="wrapper">
          <div class="wrapper--item wrapper--item--bg1">
            <div class="container">
              <div class="img-wrap sp">
                <img src="/images/story/img-1.jpg" alt="Henly Abe">
              </div>
              <div class="content">
                <p class="year">1972-2004</p>
                <h3 class="name">Henly Abe</h3>
                <p class="position">初代・代表取締役社長</p>
                <p class="newpos"><span>阿部久夫</span>（現・相談役）</p>
                <a href="/story/1972/"><img src="/images/story/arrow-icon.svg" alt=""></a>
              </div>
            </div>
          </div>
          <div class="wrapper--item wrapper--item--bg2">
            <div class="container">
              <div class="img-wrap sp">
                <img src="/images/story/img-2.jpg" alt="Shinichiro Suzuki">
              </div>
              <div class="content">
                <p class="year">2005-2015</p>
                <h3 class="name">Shinichiro<br>Suzuki</h3>
                <p class="position">前・代表取締役社長</p>
                <p class="newpos"><span>鈴木紳一郎</span>（現・会長）</p>
                <a href="/story/2005/"><img src="/images/story/arrow-icon.svg" alt=""></a>
              </div>
            </div>
          </div>
          <div class="wrapper--item wrapper--item--bg3">
            <div class="container">
              <div class="img-wrap sp">
                <img src="/images/story/img-3.jpg" alt="Tetsuji Oda">
              </div>
              <div class="content">
                <p class="year">2016-</p>
                <h3 class="name">Tetsuji<br>Oda</h3>
                <p class="position">現・代表取締役社長</p>
                <p class="newpos"><span>織田哲司</span></p>
                <a href="/story/2016/"><img src="/images/story/arrow-icon.svg" alt=""></a>
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
