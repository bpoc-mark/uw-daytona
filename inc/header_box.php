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

</div>
