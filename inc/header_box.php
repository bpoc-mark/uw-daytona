<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner container">
	
	<div class="logo-wrap">
		<?php
			if ($str[1] == "") {
				echo '<h1 class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt="'. SITE_NAME .'"></a></h1>';
			} else {
				echo '<p class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt="'. SITE_NAME .'"></a></p>';
			}
		?>
	</div>

	<div class="logo-center pc">
		<p><a href="/"><img src="/images/common/header_logo-1.svg" alt=""></a></p>
	</div>

	<div class="menu" id="menu-toggle">
		<span class="line line-t"></span>
		<span class="line line-m"></span>
		<span class="line line-b"></span>
		<p></p>
	</div>

	<nav class="nav">
		<div class="nav--overlay"></div>
		<ul class="nav--list">
			<li class="nav--item">
				<a href="/" class="nav--link"><img src="/images/common/bg-menu-logo.svg" alt=""></a>
			</li>
			<li class="nav--item">
				<a href="/" class="nav--link"><span class="nav--link--en">TOP</span><span class="nav--link--jp">トップページ</span></a>
			</li>
			<li class="nav--item">
				<a href="/greetings/" class="nav--link"><span class="nav--link--en">GREETING</span><span class="nav--link--jp">ご挨拶</span></a>
			</li>
			<li class="nav--item">
				<a href="/anniversary/" class="nav--link"><span class="nav--link--en">50th ANNIVERSARY<br>MOVIE</span><span class="nav--link--jp">50周年記念ムービー</span></a>
			</li>
			<li class="nav--item">
				<a href="/message/" class="nav--link"><span class="nav--link--en">CONGRATULATIONS<br>MESSAGE</span><span class="nav--link--jp">デイトナと私</span></a>
			</li>
			<li class="nav--item">
				<a href="/history/" class="nav--link"><span class="nav--link--en">DAYTONA<br>50th HISTORY</span><span class="nav--link--jp">ヒストリー</span></a>
			</li>
			<li class="nav--item">
				<a href="/story/" class="nav--link"><span class="nav--link--en">DAYTONA<br>50th STORY</span><span class="nav--link--jp">デイトナ50年の物語</span></a>
			</li>
		</ul>
	</nav>

</div>
