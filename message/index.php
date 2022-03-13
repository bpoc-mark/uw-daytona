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

  <title>デイトナと私 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Message">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-head p-head--message">
        <div class="p-head--wrap">s
          <div class="p-head--content">
            <h1 class="p-head--content--en">CONGRATURLATIONS<br>MESSAGE</h1>
            <p class="p-head--content--jp">デイトナと私</p>
          </div>
        </div>
      </section>
      <section class="message-sect">
        <div class="container">
          <div class="row">
            <div class="col">
              <a class="modal-click" data-target="modal01">
                <img src="/images/message/img-1.jpg" alt="">
                <div class="content pc">
                  <p>TEAM DAYTONA<br>ライダー</p>
                  <h3>宮崎 敦</h3>
                  <span>#01</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal02">
                <img src="/images/message/img-2.jpg" alt="">
                <div class="content pc">
                  <p>モーター<br>ジャーナリスト</p>
                  <h3>カズ中西</h3>
                  <span>#02</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal03">
                <img src="/images/message/img-3.jpg" alt="">
                <div class="content pc">
                  <p>モデル・タレント<br>レーサー</p>
                  <h3>梅本まどか</h3>
                  <span>#03</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal04">
                <img src="/images/message/img-4.jpg" alt="">
                <div class="content pc">
                  <p>モーターサイクル<br>ジャーナリスト</p>
                  <h3>太田 安治</h3>
                  <span>#04</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal05">
                <img src="/images/message/img-4.jpg" alt="">
                <div class="content pc">
                  <p>株式会社 内外出版社<br>「ヤングマシン」<br>編集長</p>
                  <h3>松田 大樹</h3>
                  <span>#05</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal06">
                <img src="/images/message/img-4.jpg" alt="">
                <div class="content pc">
                  <p>株式会社 H&L PLANNING<br>「ヘリテイジ＆レジェンズ」<br>編集長</p>
                  <h3>月岡 洋一</h3>
                  <span>#06</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal07">
                <img src="/images/message/img-7.jpg" alt="">
                <div class="content pc">
                  <p>株式会社 クレタ<br>コミュニケーション局<br>副局長</p>
                  <h3>桜井 大輔</h3>
                  <span>#07</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal08">
                <img src="/images/message/img-4.jpg" alt="">
                <div class="content pc">
                  <p>株式会社 三栄<br>「モトチャンプ」<br>編集長</p>
                  <h3>成島 義人</h3>
                  <span>#08</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal09">
                <img src="/images/message/img-9.jpg" alt="">
                <div class="content pc">
                  <p>株式会社 造形社<br>「モトモト」<br>編集長</p>
                  <h3>山ノ井 敦司</h3>
                  <span>#09</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal10">
                <img src="/images/message/img-10.jpg" alt="">
                <div class="content pc">
                  <p>モーターサイクル<br>ジャーナリスト</p>
                  <h3>埜邑 博道</h3>
                  <span>#10</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal11">
                <img src="/images/message/img-11.jpg" alt="">
                <div class="content pc">
                  <p>株式会社 KAHMZ<br>編集者</p>
                  <h3>善田 圭二</h3>
                  <span>#11</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal12">
                <img src="/images/message/img-12.jpg" alt="">
                <div class="content pc">
                  <p>モトメカニック<br>編集者</p>
                  <h3>たぐち かつみ</h3>
                  <span>#12</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal13">
                <img src="/images/message/img-13.jpg" alt="">
                <div class="content pc">
                  <p>漫画家<br>イラストレーター</p>
                  <h3>世太郎</h3>
                  <span>#13</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal14">
                <img src="/images/message/img-4.jpg" alt="">
                <div class="content pc">
                  <p>株式会社デイトナ<br>M&A推進部 部長</p>
                  <h3>竹内 一</h3>
                  <span>#14</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal15">
                <img src="/images/message/img-4.jpg" alt="">
                <div class="content pc">
                  <p>株式会社デイトナ<br>コンプライアンス</p>
                  <h3>岩崎 秀揚</h3>
                  <span>#15</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal16">
                <img src="/images/message/img-4.jpg" alt="">
                <div class="content pc">
                  <p>株式会社デイトナ<br>カスタマーサポート</p>
                  <h3>高橋 里枝</h3>
                  <span>#16</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal17">
                <img src="/images/message/img-4.jpg" alt="">
                <div class="content pc">
                  <p>株式会社デイトナ<br>GMDG GL</p>
                  <h3>伊藤 博之</h3>
                  <span>#17</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal18">
                <img src="/images/message/img-4.jpg" alt="">
                <div class="content pc">
                  <p>株式会社デイトナ<br>経営企画室 室長</p>
                  <h3>木田 光彦</h3>
                  <span>#18</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal19">
                <img src="/images/message/img-4.jpg" alt="">
                <div class="content pc">
                  <p>株式会社デイトナ<br>プロモーション</p>
                  <h3>熊坂 多加史</h3>
                  <span>#19</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal20">
                <img src="/images/message/img-4.jpg" alt="">
                <div class="content pc">
                  <p>株式会社デイトナ<br>プロモーション</p>
                  <h3>鈴木 清子</h3>
                  <span>#20</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal21">
                <img src="/images/message/img-4.jpg" alt="">
                <div class="content pc">
                  <p>株式会社デイトナ<br>経理</p>
                  <h3>鈴木 由里子</h3>
                  <span>#21</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal22">
                <img src="/images/message/img-4.jpg" alt="">
                <div class="content pc">
                  <p>PT. DAYTONA AZIA<br>代表取締役社長</p>
                  <h3>今頭 憲治</h3>
                  <span>#22</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal23">
                <img src="/images/message/img-4.jpg" alt="">
                <div class="content pc">
                  <p>株式会社デイトナ<br>コンプライアンス室<br>室長</p>
                  <h3>袴田 良</h3>
                  <span>#23</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal24">
                <img src="/images/message/img-4.jpg" alt="">
                <div class="content pc">
                  <p>株式会社デイトナ<br>管理部 部長</p>
                  <h3>杉村 靖彦</h3>
                  <span>#24</span>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="modal-click" data-target="modal25">
                <img src="/images/message/img-4.jpg" alt="">
                <div class="content pc">
                  <p>株式会社デイトナ<br>二輪事業部付</p>
                  <h3>木田 裕</h3>
                  <span>#25</span>
                </div>
              </a>
            </div>
          </div>
          <div class="modal" id="modal01">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal01"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>TEAM DAYTONA ライダー</p>
                    <h3>宮崎 敦</h3>
                    <span>#01</span>
                  </div>
                  <p>デイトナ創立50周年、おめでとうございます。僕が17歳でレースを始めたジュニア時代、所属したチームはバイクのメンテナンス作業に追われる日々で、理想とするレース活動ができませんでした。このままではダメだと思い、先のアテもなくチームを飛び出しました。「来年走れなければ、レースをやめて地元に戻るしかないな」と思っていた時、ブリヂストンの金井さんが声をかけてくれ「デイトナに手紙を書きなさい」と言われました。その言葉を信じて自分の思いの丈を文章にして手紙を書きました。それで阿部（当時、社長）さんに思いが通じ、TEAM DAYTONAに所属することができました。それまでレース参戦は全て自己資金でしたが、デイトナでは給料とメカニックまでつけていただき、走ることに専念できました。最初の年はデイトナ社員として雇ってもらい、給料をいただいても余ってしまって。どう使ったらいいかわからなかったぐらい（笑）。僕のレーサー人生、29年のうち20年をデイトナとともに走ってきました。初めてプロレーサーとして扱ってくれたデイトナには感謝の言葉しかありません。</p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal02">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal02"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>モータージャーナリスト</p>
                    <h3>カズ中西</h3>
                    <span>#02</span>
                  </div>
                  <p>創業50周年を迎えるデイトナ、おめでとうございます。今回、改めてデイトナとの接点を話すと、高校2年（1984年）の頃、RZ250RRを新車で購入して、初めのうちはノーマルで満足していました。そのうち信号待ちで同じバイクと並んだ時にカスタム意欲が湧きました。とは言え、当時流行していたバックステップやレーシングチャンバーを買うのは予算的に厳しい。二輪専門誌の広告ページを見て、アルバイト収入で購入できそうだったのが、デイトナのフロントフォークスタビライザーでした。取り付けはボルトオンで簡単、フロントサスペンションの剛性が上がったか否かは体感できなかったけれど、量産型から俺専用機にアップグレードした満足感は十二分でした。 DAYTONAに所属することができました。それまでレース参戦は全て自己資金でしたが、デイトナでは給料とメカニックまでつけていただき、走ることに専念できました。最初の年はデイトナ社員として雇ってもらい、給料をいただいても余ってしまって。どう使ったらいいかわからなかったぐらい（笑）。僕のレーサー人生、29年のうち20年をデイトナとともに走ってきました。初めてプロレーサーとして扱ってくれたデイトナには感謝の言葉しかありません。</p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal03">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal03"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>モデル・タレント・レーサー</p>
                    <h3>梅本まどか</h3>
                    <span>#03</span>
                  </div>
                  <p>
                    名古屋からバイクで通える距離感<br>
                    <br>
                    デイトナ創立50周年おめでとうございます。<br>
                    2017年に初めてデイトナさんを訪問した時、家からちょっと走ったら着いてしまう距離にこんなバイクの会社があるなんて！！ と驚きました。私は東海エリアを拠点にタレント活動しているので、親近感もあり、茶ミーティングの時はそのまま森町を楽しくツーリングしたり、下道で行っても程よい距離感。デイトナさんのような沢山のパーツを開発していろんな会社と協力して販売したり、テストコースも持っていたり、何よりバイク愛に溢れた方が沢山いる素敵な会社が身近にある事が、私にはすごく心強く感じました。<br>
                    <br>
                    バイクの楽しみ方の幅が増えた<br>
                    <br>
                    実は私が初めて愛車をカスタムしたのはデイトナさんのパーツ。バーエンドやキャップなどをゴールドにして、今までより少し華やかに。大きく変えた訳ではないけど、私にとって、こうしたちょっとしたオシャレを教えてくれたのがデイトナさんでした。<br>
                    バイクにはいろんな楽しみがあると今は思っているのですが、乗り始めた頃、家族や友達を含めて周りにバイク乗りがいなかった私にとって、初めてのカスタムは、バイクへの考え方を変えたり、楽しみ方の幅が増えた瞬間でした。茶ミーティングのイベントで警察の方から安全運転についてお話しを聞いて、バイクに関する事故を知ることで、長くバイクライフを楽しみたいな、と考えたり、デイトナさんは寒
                  </p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal04">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal04"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>モーターサイクルジャーナリスト</p>
                    <h3>太田 安治</h3>
                    <span>#04</span>
                  </div>
                  <p>
                  　オートバイが「移動の道具」から「趣味性の高い乗り物」へと変化したのは60年代後半。同時に走りの機能やルックスを自分好みに変えるカスタマイズも広がり始めたが、その頃のカスタムパーツはイギリス、イタリア、アメリカなどの欧米ブランドが主流で、高価なうえに装着に加工が必要な製品が多く、一部のマニアや富裕層の愉しみと捉えられていた。<br>
                  　だから75年にデイトナが市販した『セブンスターキャストホイール』は衝撃的だった。当時メーカー純正キャストホイールは国内認可待ちで、欧米ブランドのホイールに憧れながらも手が届かなかったユーザーには最高のプレゼント。この製品の高品質、低価格でデイトナブランドは一気に認知されたと思う。<br>
                  　僕は80年代にオートバイ誌でカスタム車紹介企画を担当していたが、デイトナ製パーツの装着率は着実に高まっていたし、自分のＣＢＸ４００ＦやＣＢ７５０Ｆにデイトナのスタビライザーやバックステップ、ステアリングダンパー、ブレーキパッドを装着して、カスタムによって走りが大きく変わることを体で感じた。こうした機能パーツだけを見ても、デイトナ製品が走る楽しさを広げ、日本のカスタム文化確立に貢献したことは間違いない。
                  </p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal05">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal04"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>株式会社 内外出版社<br>「ヤングマシン」編集長</p>
                    <h3>松田 大樹</h3>
                    <span>#05</span>
                  </div>
                  <p>ダミーです。デイトナ創立50周年、おめでとうございます。僕が17歳でレースを始めたジュニア時代、所属したチームはバイクのメンテナンス作業に追われる日々で、理想とするレース活動ができませんでした。このままではダメだと思い、先のアテもなくチームを飛び出しました。「来年走れなければ、レースをやめて地元に戻るしかないな」と思っていた時、ブリヂストンの金井さんが声をかけてくれ「デイトナに手紙を書きなさい」と言われました。その言葉を信じて自分の思いの丈を文章にして手紙を書きました。それで阿部（当時、社長）さんに思いが通じ、TEAM DAYTONAに所属することができました。それまでレース参戦は全て自己資金でしたが、デイトナでは給料とメカニックまでつけていただき、走ることに専念できました。最初の年はデイトナ社員として雇ってもらい、給料をいただいても余ってしまって。どう使ったらいいかわからなかったぐらい（笑）。僕のレーサー人生、29年のうち20年をデイトナとともに走ってきました。初めてプロレーサーとして扱ってくれたデイトナには感謝の言葉しかありません。</p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal06">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal04"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>株式会社 H&L PLANNING<br>「ヘリテイジ＆レジェンズ」編集長</p>
                    <h3>月岡 洋一</h3>
                    <span>#06</span>
                  </div>
                  <p>ダミーです。デイトナ創立50周年、おめでとうございます。僕が17歳でレースを始めたジュニア時代、所属したチームはバイクのメンテナンス作業に追われる日々で、理想とするレース活動ができませんでした。このままではダメだと思い、先のアテもなくチームを飛び出しました。「来年走れなければ、レースをやめて地元に戻るしかないな」と思っていた時、ブリヂストンの金井さんが声をかけてくれ「デイトナに手紙を書きなさい」と言われました。その言葉を信じて自分の思いの丈を文章にして手紙を書きました。それで阿部（当時、社長）さんに思いが通じ、TEAM DAYTONAに所属することができました。それまでレース参戦は全て自己資金でしたが、デイトナでは給料とメカニックまでつけていただき、走ることに専念できました。最初の年はデイトナ社員として雇ってもらい、給料をいただいても余ってしまって。どう使ったらいいかわからなかったぐらい（笑）。僕のレーサー人生、29年のうち20年をデイトナとともに走ってきました。初めてプロレーサーとして扱ってくれたデイトナには感謝の言葉しかありません。</p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal07">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal07"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>株式会社 クレタ<br>コミュニケーション局 副局長</p>
                    <h3>桜井 大輔</h3>
                    <span>#07</span>
                  </div>
                  <p>
                    この度は「株式会社デイトナ」創業50周年、心よりお祝い申し上げます。<br>
                    ビギナー、ベテラン問わずライダーのバイクライフをトータルでサポートして頂いていることは一業界人として非常に感謝しております。今後とも、さらなる発展を心よりお祈り申し上げます。<br>
                    かくいう私も恩恵を受けた一人であり、バイクに乗り始めた十代の頃より御社の各種ギアを使用させて頂いております。十代の頃は国産のアメリカンブームやトラッカーなどストリートカスタムが全盛でした。“DIYカスタム”や“ボルトオンパーツ”という言葉もその辺りから広がっていった記憶があります。そのブームの一端を担っていた御社のパーツも非常に活用させて頂いた記憶があります。用品店に置かれたカタログを吟味しつつ…。<br>
                    また、その時期に横行していた違法カスタムをなくすためにJMCAが制作したカスタムの手引き書に多大な協力したというのは素晴らしいことだと思っております。<br>
                    現在改めてTW200を手に入れたため、原点回帰と共に今の時代や年齢にあったカスタムに勤しみ始めました。ちょうどその世代の人がリターンし始めている時期でもあるので、また新しいストリートカスタムのブームを興しましょう！
                  </p>
                  <div class="row-img">
                    <img src="/images/message/m-7-img-1.jpg" alt="">
                    <img src="/images/message/m-7-img-2.jpg" alt="">
                    <img src="/images/message/m-7-img-3.jpg" alt="">
                  </div>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal08">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal04"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>株式会社 三栄<br>「モトチャンプ」編集長</p>
                    <h3>成島 義人</h3>
                    <span>#08</span>
                  </div>
                  <p>ダミーです。デイトナ創立50周年、おめでとうございます。僕が17歳でレースを始めたジュニア時代、所属したチームはバイクのメンテナンス作業に追われる日々で、理想とするレース活動ができませんでした。このままではダメだと思い、先のアテもなくチームを飛び出しました。「来年走れなければ、レースをやめて地元に戻るしかないな」と思っていた時、ブリヂストンの金井さんが声をかけてくれ「デイトナに手紙を書きなさい」と言われました。その言葉を信じて自分の思いの丈を文章にして手紙を書きました。それで阿部（当時、社長）さんに思いが通じ、TEAM DAYTONAに所属することができました。それまでレース参戦は全て自己資金でしたが、デイトナでは給料とメカニックまでつけていただき、走ることに専念できました。最初の年はデイトナ社員として雇ってもらい、給料をいただいても余ってしまって。どう使ったらいいかわからなかったぐらい（笑）。僕のレーサー人生、29年のうち20年をデイトナとともに走ってきました。初めてプロレーサーとして扱ってくれたデイトナには感謝の言葉しかありません。</p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal09">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal09"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>株式会社 造形社<br>「モトモト」編集長</p>
                    <h3>山ノ井 敦司</h3>
                    <span>#09</span>
                  </div>
                  <p>
                    デイトナ様50周年おめでとうございます!!<br>
                    <br>
                    　株式会社造形社で発行しております、モトモト編集部山ノ井と申します。デイトナ様50周年おめでとうございます!!　<br>
                    　デイトナ様とは編集部に入ってすぐにお付き合いさせていただき、早17年。17年もの間の思い出はここではまとめきれないほどありますが、その中でも4ミニ専門誌となった2005年5月号に掲載させていただいたモタード外装キットに、119ccのツインカムヘッドを組み込んだモンキーは今だに忘れられない、これからも記憶に残しておきたい１台となっております。その他にもバーチャルステアフレーム、スーパーチャージャー、縦型エンジン用４バルブヘッド、セブンスターホイールなど、他にはないアイデアを具現化し、４ミニ業界を盛り上げていただいたデイトナ様には編集部としてはもちろん、イチ４ミニユーザーとしても御礼申し上げます。<br>
                    　当時は新東名高速がなく、編集部から４時間近くかかる道のりを毎月、多い時は月に２回は走り（この時に長距離運転のノウハウを学びました!!）、エンジンをバラバラにして組んだり、MCペインターで自家塗装させていただいたり、スタッフの皆様と取材といいつつツーリングさせていただいたり、テストコースを何時間も走らせていただいたり、朝から晩まで取材にご対応いただきありがとうございました。取材後には袋井IC手前の「餃子の丸福本店」でご飯がルーティンとなっていたのが懐かしい話です。<br>
                    話が盛大にズレてしまったような気もしますが、デイトナ様には自分自身も誌面も共に成長させていただきました。これからもミニバイク、二輪業界を一緒に盛り上げていければ光栄です。目指せ100周年!!
                  </p>
                  <div class="row-img">
                    <img src="/images/message/m-9-img-1.jpg" alt="">
                  </div>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal10">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal10"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>モーターサイクルジャーナリスト</p>
                    <h3>埜邑 博道</h3>
                    <span>#10</span>
                  </div>
                  <p>デイトナさんとのお付き合いは、もう30数年になるでしょうか。いろいろな思い出がありますが、とても印象に残っているのが、創業者で初代社長のヘンリー阿部さんが、ボクが勤めていた会社を訪問されたときのこと。当時は新米編集者で、知識も見識も薄っぺらだったボクの話を、阿部さんは真剣にお聞きになり、一生懸命メモを取られていました。社長さんなのにメモなんて取るんだ、という意外な思いと同時に、何でも吸収しようとする真摯な姿勢に感銘を受けました。20年以上の企業生存率は50%と言われる中、ずっと成長を続けてきたデイトナさんの成功のひとつの要因は、そんな初代社長の姿勢が息づいているからかもしれません。<br>もうひとつ、2005年に始まり2019年まで連続開催してきた「DAYTONA・森町・静岡茶ミーティング」、通称・茶ミーティング。このイベントが始まったきっかけは、BikeJIN（現：実業之日本社発行）主催のイベント「BikeJIN祭り」の開催前夜（2009年9月4日）の酒席での会話でした。前泊のホテルがボクと同じだった、当時、デイトナさんの営業のグループリーダーだった石田敬一郎さん（現ダートフリーク代表取締役）と話をしていると、石田さんが「静岡県には大きなバイクイベントがないんで、我々でやりたい」とお話しになりました。酒の勢いもあって、「BikeJINも協力するからやればいいじゃん（筆者）」、「じゃあ、来年やろうか」（石）、「そんな先の話じゃなくて、すぐやろう！」（筆者）みたいなノリになり、わずか2カ月後にプレ開催の形で第１回が開催されました。初回から500人を集める盛況となり、以来、毎回満員大入りになるほどのイベントに成長したのは周知のとおり。CMじゃないけど、やっぱりノリと「えいや！」は大切ですよね！</p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal11">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal11"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>株式会社 KAHMZ 編集者</p>
                    <h3>善田 圭二</h3>
                    <span>#11</span>
                  </div>
                  <p>
                  　デイトナ50周年おめでとうございます。自分が造形社発行の「カスタムスクーター」編集部に入ったのは2010年ぐらいだったと思います。その名の通り、スクーターカスタムを専門に扱う雑誌で、主に250ccクラスのビッグスクーターがメインでした。そのブーム到来は2000年代前半から中盤にかけてではないでしょうか。フュージョンのカスタムがカッコイイと認知され、フォルツァやマジェスティが登場し、マグザムやジェンマと言った個性的なモデルが発表された頃が一般的なブームの最高潮だと思います。各メーカーから新型やモデルチェンジが短いスパンで発表され、見かけない日はないぐらい街に溢れていたと思います。以降はエアロやオールペン、電飾にオーディオなどなど、カスタムが熟成していったと思います。カスタム嗜好向けのマジェCやフォルツァのオーディオシステムなど、純正車両にもカスタムが反映されていたのが面白かったですね。<br>
                  　カスタムスクーターはそんなビッグスクーターの流れと一緒に育ったと思います。ユーザーさんも若くて勢いがあり、イベントやミーティングなどとても楽しかったです。カスタムされた車両は日本が世界に誇れるひとつの文化だったと思います。エアサスや4輪ホイール、他車種のエアロをワンオフで取り付けたり、スクーターならではの車体全面をキャンバスとしたオールペンは、SNSが今ぐらいに流行っていたら世界中に発信されて、当時とは違った捉えられ方がされていたのでは、と思います。<br>
                  　当時は撮影会やイベントを開催すれば1000人近くのユーザーさんが参加し、日没までに撮影が終わらない、なんて事も…（2006年のデイトナサーキットでは溢れるビッグスクーターでご迷惑をおかけしました笑）。カスタムコンテストに100台以上がエントリーし、ショップさんなどのブース出展も多数あり、まさにお祭り騒ぎになっていました。<br>
                  　デイトナ製パーツで思い出深いのはメッキのスイッチボックスとマスターシリンダーですね。ハンドル周りのドレスアップには欠かせないアイテムとなっていて、多くのユーザーさんが選んでいました。あとはステップボードかな、ドレスアップ効果抜群のデザインで、ペイントで塗り分けするなど足元のオシャレを楽しんでいましたね。<br>
                  　自分は残念ながら新型がバンバン発表されていたバブル（？）の頃は編集部として体験できなかったのですが、カスタムをユーザーさんが思い思いに楽しんでいた“ビッグスクーターカルチャー”を共有できたのはとても良い思い出になっています。
                  </p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal12">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal12"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>モトメカニック編集者</p>
                    <h3>たぐち かつみ</h3>
                    <span>#12</span>
                  </div>
                  <p>
                    一味違った「何か」を気が付かせてくれて、ありがとう!!<br>
                    <br>
                    趣味のバイクいじりが嵩じて、某自動車メーカーの技術屋からバイク雑誌業界へ転職。これまでには無かったバイク雑誌と言うか「パイクいじり雑誌」を作ってみたい想いが強くあり、後にモトメンテナンス誌を創刊。そして現在は、モトメカニック誌編集長として、デイトナさんから発売される商品を楽しみにしている、ひとりのファンでもあります。<br>
                    独自の目線で開発される商品には興味深いものが多いです。例えば、ロックタイト(パーマテックス)のようなプロ用ケミカルを一般ユーザーでも購入できる位置付けにしたり、純正部品と同じ電装ハーネス用カプラやギボシ端子をユーザーが欲していると知れば、そんな小物部品でも商品化してしまうなど、ぼくらサンデーメカニックにとっては「小回りが効くメーカー」としてのデイトナにも、大きな期待を寄せています。<br>
                    デイトナ創業50周年、おめでとうございます。これからも「ユーザー目線に立った商品づくり」を忘れることなく、一味違ったもの作りから新しい「何か」を、気が付かせて頂ければと思います。そして〝デイトナスピリッツ〟を後世に伝え続けて頂きたいと思います。応援します!!
                  </p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal13">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal13"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>漫画家<br>イラストレーター</p>
                    <h3>世太郎</h3>
                    <span>#13</span>
                  </div>
                  <p>
                    「デイトナ50周年」おめでとうございます。今回のメモリアルに立ち会えて、こうしてコメントを残せるのは嬉しい限りです。私も長くフリーランスで活動してきて思うのは、半世紀に渡り継続していく難しさは並大抵の事ではありません。<br>
                    その内の11冊分となるデイトナカタログの表紙イラストに携わり、10年を経てようやく馴染んできた気がします。そこで現在はデジタル原画が主流の為、この機会に制作過程を少し紹介できればと思います。<br>
                    まず資料画像を元に下絵となる線画を描きますが、液晶タブレットに直接描くデジタル原画では、作画面を拡大しながら細部まで描き込めるのでアナログより手間が掛かる分、仕上がりの見栄えが格段に違います。その際、修正やレイアウトしやすいように背景も別で描いて、後で重ねたり入れ替えられるのもデジタルの良い所で、最後に着色して完成となります。<br>
                    当初と比べて試行錯誤しながらスキルアップできたのは、これまで長い目で見て頂いたおかげと感謝しています。またこの先も、ライフワークとして続けていければ理想的です。
                  </p>
                  <div class="row-img">
                    <img src="/images/message/m-13-img-1.jpg" alt="">
                  </div>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal14">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal04"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>株式会社デイトナ<br>M&A推進部 部長</p>
                    <h3>世太郎</h3>
                    <span>#14</span>
                  </div>
                  <p>
                    ダミー。「デイトナ50周年」おめでとうございます。今回のメモリアルに立ち会えて、こうしてコメントを残せるのは嬉しい限りです。私も長くフリーランスで活動してきて思うのは、半世紀に渡り継続していく難しさは並大抵の事ではありません。<br>
                    その内の11冊分となるデイトナカタログの表紙イラストに携わり、10年を経てようやく馴染んできた気がします。そこで現在はデジタル原画が主流の為、この機会に制作過程を少し紹介できればと思います。<br>
                    まず資料画像を元に下絵となる線画を描きますが、液晶タブレットに直接描くデジタル原画では、作画面を拡大しながら細部まで描き込めるのでアナログより手間が掛かる分、仕上がりの見栄えが格段に違います。その際、修正やレイアウトしやすいように背景も別で描いて、後で重ねたり入れ替えられるのもデジタルの良い所で、最後に着色して完成となります。<br>
                    当初と比べて試行錯誤しながらスキルアップできたのは、これまで長い目で見て頂いたおかげと感謝しています。またこの先も、ライフワークとして続けていければ理想的です。
                  </p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal15">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal04"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>株式会社デイトナ<br>コンプライアンス</p>
                    <h3>岩崎 秀揚</h3>
                    <span>#15</span>
                  </div>
                  <p>
                    ダミー。「デイトナ50周年」おめでとうございます。今回のメモリアルに立ち会えて、こうしてコメントを残せるのは嬉しい限りです。私も長くフリーランスで活動してきて思うのは、半世紀に渡り継続していく難しさは並大抵の事ではありません。<br>
                    その内の11冊分となるデイトナカタログの表紙イラストに携わり、10年を経てようやく馴染んできた気がします。そこで現在はデジタル原画が主流の為、この機会に制作過程を少し紹介できればと思います。<br>
                    まず資料画像を元に下絵となる線画を描きますが、液晶タブレットに直接描くデジタル原画では、作画面を拡大しながら細部まで描き込めるのでアナログより手間が掛かる分、仕上がりの見栄えが格段に違います。その際、修正やレイアウトしやすいように背景も別で描いて、後で重ねたり入れ替えられるのもデジタルの良い所で、最後に着色して完成となります。<br>
                    当初と比べて試行錯誤しながらスキルアップできたのは、これまで長い目で見て頂いたおかげと感謝しています。またこの先も、ライフワークとして続けていければ理想的です。
                  </p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal16">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal04"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>株式会社デイトナ<br>カスタマーサポート</p>
                    <h3>高橋 里枝</h3>
                    <span>#16</span>
                  </div>
                  <p>
                    ダミー。「デイトナ50周年」おめでとうございます。今回のメモリアルに立ち会えて、こうしてコメントを残せるのは嬉しい限りです。私も長くフリーランスで活動してきて思うのは、半世紀に渡り継続していく難しさは並大抵の事ではありません。<br>
                    その内の11冊分となるデイトナカタログの表紙イラストに携わり、10年を経てようやく馴染んできた気がします。そこで現在はデジタル原画が主流の為、この機会に制作過程を少し紹介できればと思います。<br>
                    まず資料画像を元に下絵となる線画を描きますが、液晶タブレットに直接描くデジタル原画では、作画面を拡大しながら細部まで描き込めるのでアナログより手間が掛かる分、仕上がりの見栄えが格段に違います。その際、修正やレイアウトしやすいように背景も別で描いて、後で重ねたり入れ替えられるのもデジタルの良い所で、最後に着色して完成となります。<br>
                    当初と比べて試行錯誤しながらスキルアップできたのは、これまで長い目で見て頂いたおかげと感謝しています。またこの先も、ライフワークとして続けていければ理想的です。
                  </p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal17">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal04"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>株式会社デイトナ<br>GMDG GL</p>
                    <h3>伊藤 博之</h3>
                    <span>#17</span>
                  </div>
                  <p>
                    ダミー。「デイトナ50周年」おめでとうございます。今回のメモリアルに立ち会えて、こうしてコメントを残せるのは嬉しい限りです。私も長くフリーランスで活動してきて思うのは、半世紀に渡り継続していく難しさは並大抵の事ではありません。<br>
                    その内の11冊分となるデイトナカタログの表紙イラストに携わり、10年を経てようやく馴染んできた気がします。そこで現在はデジタル原画が主流の為、この機会に制作過程を少し紹介できればと思います。<br>
                    まず資料画像を元に下絵となる線画を描きますが、液晶タブレットに直接描くデジタル原画では、作画面を拡大しながら細部まで描き込めるのでアナログより手間が掛かる分、仕上がりの見栄えが格段に違います。その際、修正やレイアウトしやすいように背景も別で描いて、後で重ねたり入れ替えられるのもデジタルの良い所で、最後に着色して完成となります。<br>
                    当初と比べて試行錯誤しながらスキルアップできたのは、これまで長い目で見て頂いたおかげと感謝しています。またこの先も、ライフワークとして続けていければ理想的です。
                  </p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal18">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal04"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>株式会社デイトナ<br>経営企画室 室長</p>
                    <h3>木田 光彦</h3>
                    <span>#18</span>
                  </div>
                  <p>
                    ダミー。「デイトナ50周年」おめでとうございます。今回のメモリアルに立ち会えて、こうしてコメントを残せるのは嬉しい限りです。私も長くフリーランスで活動してきて思うのは、半世紀に渡り継続していく難しさは並大抵の事ではありません。<br>
                    その内の11冊分となるデイトナカタログの表紙イラストに携わり、10年を経てようやく馴染んできた気がします。そこで現在はデジタル原画が主流の為、この機会に制作過程を少し紹介できればと思います。<br>
                    まず資料画像を元に下絵となる線画を描きますが、液晶タブレットに直接描くデジタル原画では、作画面を拡大しながら細部まで描き込めるのでアナログより手間が掛かる分、仕上がりの見栄えが格段に違います。その際、修正やレイアウトしやすいように背景も別で描いて、後で重ねたり入れ替えられるのもデジタルの良い所で、最後に着色して完成となります。<br>
                    当初と比べて試行錯誤しながらスキルアップできたのは、これまで長い目で見て頂いたおかげと感謝しています。またこの先も、ライフワークとして続けていければ理想的です。
                  </p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal19">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal04"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>株式会社デイトナ<br>プロモーション</p>
                    <h3>熊坂 多加史</h3>
                    <span>#19</span>
                  </div>
                  <p>
                    ダミー。「デイトナ50周年」おめでとうございます。今回のメモリアルに立ち会えて、こうしてコメントを残せるのは嬉しい限りです。私も長くフリーランスで活動してきて思うのは、半世紀に渡り継続していく難しさは並大抵の事ではありません。<br>
                    その内の11冊分となるデイトナカタログの表紙イラストに携わり、10年を経てようやく馴染んできた気がします。そこで現在はデジタル原画が主流の為、この機会に制作過程を少し紹介できればと思います。<br>
                    まず資料画像を元に下絵となる線画を描きますが、液晶タブレットに直接描くデジタル原画では、作画面を拡大しながら細部まで描き込めるのでアナログより手間が掛かる分、仕上がりの見栄えが格段に違います。その際、修正やレイアウトしやすいように背景も別で描いて、後で重ねたり入れ替えられるのもデジタルの良い所で、最後に着色して完成となります。<br>
                    当初と比べて試行錯誤しながらスキルアップできたのは、これまで長い目で見て頂いたおかげと感謝しています。またこの先も、ライフワークとして続けていければ理想的です。
                  </p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal20">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal04"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>株式会社デイトナ<br>プロモーション</p>
                    <h3>鈴木 清子</h3>
                    <span>#20</span>
                  </div>
                  <p>
                    ダミー。「デイトナ50周年」おめでとうございます。今回のメモリアルに立ち会えて、こうしてコメントを残せるのは嬉しい限りです。私も長くフリーランスで活動してきて思うのは、半世紀に渡り継続していく難しさは並大抵の事ではありません。<br>
                    その内の11冊分となるデイトナカタログの表紙イラストに携わり、10年を経てようやく馴染んできた気がします。そこで現在はデジタル原画が主流の為、この機会に制作過程を少し紹介できればと思います。<br>
                    まず資料画像を元に下絵となる線画を描きますが、液晶タブレットに直接描くデジタル原画では、作画面を拡大しながら細部まで描き込めるのでアナログより手間が掛かる分、仕上がりの見栄えが格段に違います。その際、修正やレイアウトしやすいように背景も別で描いて、後で重ねたり入れ替えられるのもデジタルの良い所で、最後に着色して完成となります。<br>
                    当初と比べて試行錯誤しながらスキルアップできたのは、これまで長い目で見て頂いたおかげと感謝しています。またこの先も、ライフワークとして続けていければ理想的です。
                  </p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal21">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal04"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>株式会社デイトナ<br>経理</p>
                    <h3>鈴木 由里子</h3>
                    <span>#21</span>
                  </div>
                  <p>
                    ダミー。「デイトナ50周年」おめでとうございます。今回のメモリアルに立ち会えて、こうしてコメントを残せるのは嬉しい限りです。私も長くフリーランスで活動してきて思うのは、半世紀に渡り継続していく難しさは並大抵の事ではありません。<br>
                    その内の11冊分となるデイトナカタログの表紙イラストに携わり、10年を経てようやく馴染んできた気がします。そこで現在はデジタル原画が主流の為、この機会に制作過程を少し紹介できればと思います。<br>
                    まず資料画像を元に下絵となる線画を描きますが、液晶タブレットに直接描くデジタル原画では、作画面を拡大しながら細部まで描き込めるのでアナログより手間が掛かる分、仕上がりの見栄えが格段に違います。その際、修正やレイアウトしやすいように背景も別で描いて、後で重ねたり入れ替えられるのもデジタルの良い所で、最後に着色して完成となります。<br>
                    当初と比べて試行錯誤しながらスキルアップできたのは、これまで長い目で見て頂いたおかげと感謝しています。またこの先も、ライフワークとして続けていければ理想的です。
                  </p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal22">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal04"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>PT. DAYTONA AZIA<br>代表取締役社長</p>
                    <h3>今頭 憲治</h3>
                    <span>#22</span>
                  </div>
                  <p>
                    ダミー。「デイトナ50周年」おめでとうございます。今回のメモリアルに立ち会えて、こうしてコメントを残せるのは嬉しい限りです。私も長くフリーランスで活動してきて思うのは、半世紀に渡り継続していく難しさは並大抵の事ではありません。<br>
                    その内の11冊分となるデイトナカタログの表紙イラストに携わり、10年を経てようやく馴染んできた気がします。そこで現在はデジタル原画が主流の為、この機会に制作過程を少し紹介できればと思います。<br>
                    まず資料画像を元に下絵となる線画を描きますが、液晶タブレットに直接描くデジタル原画では、作画面を拡大しながら細部まで描き込めるのでアナログより手間が掛かる分、仕上がりの見栄えが格段に違います。その際、修正やレイアウトしやすいように背景も別で描いて、後で重ねたり入れ替えられるのもデジタルの良い所で、最後に着色して完成となります。<br>
                    当初と比べて試行錯誤しながらスキルアップできたのは、これまで長い目で見て頂いたおかげと感謝しています。またこの先も、ライフワークとして続けていければ理想的です。
                  </p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal23">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal04"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>株式会社デイトナ<br>コンプライアンス 室長</p>
                    <h3>袴田 良</h3>
                    <span>#23</span>
                  </div>
                  <p>
                    ダミー。「デイトナ50周年」おめでとうございます。今回のメモリアルに立ち会えて、こうしてコメントを残せるのは嬉しい限りです。私も長くフリーランスで活動してきて思うのは、半世紀に渡り継続していく難しさは並大抵の事ではありません。<br>
                    その内の11冊分となるデイトナカタログの表紙イラストに携わり、10年を経てようやく馴染んできた気がします。そこで現在はデジタル原画が主流の為、この機会に制作過程を少し紹介できればと思います。<br>
                    まず資料画像を元に下絵となる線画を描きますが、液晶タブレットに直接描くデジタル原画では、作画面を拡大しながら細部まで描き込めるのでアナログより手間が掛かる分、仕上がりの見栄えが格段に違います。その際、修正やレイアウトしやすいように背景も別で描いて、後で重ねたり入れ替えられるのもデジタルの良い所で、最後に着色して完成となります。<br>
                    当初と比べて試行錯誤しながらスキルアップできたのは、これまで長い目で見て頂いたおかげと感謝しています。またこの先も、ライフワークとして続けていければ理想的です。
                  </p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal24">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal04"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>株式会社デイトナ<br>管理部 部長</p>
                    <h3>杉村 靖彦</h3>
                    <span>#24</span>
                  </div>
                  <p>
                    ダミー。「デイトナ50周年」おめでとうございます。今回のメモリアルに立ち会えて、こうしてコメントを残せるのは嬉しい限りです。私も長くフリーランスで活動してきて思うのは、半世紀に渡り継続していく難しさは並大抵の事ではありません。<br>
                    その内の11冊分となるデイトナカタログの表紙イラストに携わり、10年を経てようやく馴染んできた気がします。そこで現在はデジタル原画が主流の為、この機会に制作過程を少し紹介できればと思います。<br>
                    まず資料画像を元に下絵となる線画を描きますが、液晶タブレットに直接描くデジタル原画では、作画面を拡大しながら細部まで描き込めるのでアナログより手間が掛かる分、仕上がりの見栄えが格段に違います。その際、修正やレイアウトしやすいように背景も別で描いて、後で重ねたり入れ替えられるのもデジタルの良い所で、最後に着色して完成となります。<br>
                    当初と比べて試行錯誤しながらスキルアップできたのは、これまで長い目で見て頂いたおかげと感謝しています。またこの先も、ライフワークとして続けていければ理想的です。
                  </p>
                </div>
              </div>
              <span class="close"></span>
            </div>
          </div>
          <div class="modal" id="modal25">
            <div class="modal--dialog">
              <div class="modal--content">
                <div class="modal--content--left modal--content--left--modal04"></div>
                <div class="modal--content--right">
                  <div class="ttl">
                    <p>株式会社デイトナ<br>二輪事業部付</p>
                    <h3>木田 裕</h3>
                    <span>#25</span>
                  </div>
                  <p>
                    ダミー。「デイトナ50周年」おめでとうございます。今回のメモリアルに立ち会えて、こうしてコメントを残せるのは嬉しい限りです。私も長くフリーランスで活動してきて思うのは、半世紀に渡り継続していく難しさは並大抵の事ではありません。<br>
                    その内の11冊分となるデイトナカタログの表紙イラストに携わり、10年を経てようやく馴染んできた気がします。そこで現在はデジタル原画が主流の為、この機会に制作過程を少し紹介できればと思います。<br>
                    まず資料画像を元に下絵となる線画を描きますが、液晶タブレットに直接描くデジタル原画では、作画面を拡大しながら細部まで描き込めるのでアナログより手間が掛かる分、仕上がりの見栄えが格段に違います。その際、修正やレイアウトしやすいように背景も別で描いて、後で重ねたり入れ替えられるのもデジタルの良い所で、最後に着色して完成となります。<br>
                    当初と比べて試行錯誤しながらスキルアップできたのは、これまで長い目で見て頂いたおかげと感謝しています。またこの先も、ライフワークとして続けていければ理想的です。
                  </p>
                </div>
              </div>
              <span class="close"></span>
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
  <script>
    $('.modal-click').click(function(){
      var target = $(this).attr('data-target');
      $('#'+target).addClass('modal--active');
    })
    $('.modal .close').click(function(){
      $('.modal').removeClass('modal--active');
    });
  </script>
</body>

</html>
