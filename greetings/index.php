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

  <title>ご挨拶 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Greetings">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-head p-head--greetings">
        <div class="p-head--wrap">
          <div class="p-head--content">
            <h1 class="p-head--content--en">GREETING</h1>
            <p class="p-head--content--jp">ご挨拶</p>
          </div>
        </div>
      </section>
      <section class="greetings-sect">
        <div class="container">
          <p class="desc">
            弊社は、2022年4月に50周年を迎える運びとなりました。<br class="pc">
            ひとえにライダーの皆様をはじめとし、弊社が関係するすべて皆様のお陰であり、改めて感謝を申し上げます。<br class="pc">
            昨年、この50年の振り返りをしてみましたが、弊社が創業した1972年当時は第一次バイクブームと言われ、<br class="pc">
            私が入社した1983年は第二次バイクブームとされ、<br class="pc">
            新店オープンするバイク販売店が数キロメートル毎にあったと記憶しております。<br class="pc">
            当時、既にアフターパーツメーカーとしてブランドを確立されていたメーカー様や二輪車部品用品卸販売業様、<br class="pc">
            二輪車用品店様も多数存在していましたから、弊社が50周年といっても業者各社様の先輩方々と比較したら、<br class="pc">
            まだまだ「途上」レベルだなあと感じております。<br class="pc">
            また、直近の10年を振り返ると、ライダーの皆様の趣向はすごく変化しており、<br class="pc">
            その変化に合わせて私共が対応させて頂けていることも、社員一同が楽しく仕事できる要因のひとつだと思っております。<br class="pc">
            現在「第三次バイクブーム」が到来し、車輌の販売台数や二輪免許取得者も増加しておりますが、<br class="pc">
            これまでも、この先も、ライダーの皆様が「バイクが趣味で良かった」と思って頂けるよう、<br class="pc">
            ライダーの皆様への新しい価値の創造と提供をし続けて参ります。
          </p>
          <div class="corporation">
            <h3>株式会社デイトナ</h3>
            <div class="row">
              <div class="col">
                <p>代表取締役社長</p>
                <img src="/images/greetings/img-1.png" alt="代表取締役社長">
              </div>
              <div class="col">
                <p>相談役</p>
                <img src="/images/greetings/img-2.png" alt="相談役">
              </div>
              <div class="col">
                <p>代表取締役会長</p>
                <img src="/images/greetings/img-3.png" alt="代表取締役会長">
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
