<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/common.php");

/*=====================================================

	サイト情報

=====================================================*/

//サイトURL統一
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
	$PROTOCOL = "https://";
} else {
	$PROTOCOL = "http://";
}
define("CANONICAL", htmlspecialchars($PROTOCOL . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']));


//サイト名
define("SITE_NAME", "DAYTONA 50th ANNIVERSARY");

//キーワード
define("KEY_WORD", "DAYTONA,デイトナ,株式会社デイトナ,バイク,オートバイ,用品");

//ディスクリプション
define("DESCRIPTION", "2022年、株式会社デイトナは創業50周年を迎えました。");

//H1文言
define("SEO_WORDS", "");
