<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<link rel="stylesheet"
	href="<?php echo get_template_directory_uri(); ?>/css/jquery.mobile-1.4.5.min.css">
<link rel="stylesheet"
	href="<?php echo get_template_directory_uri(); ?>/css/dill.min.css">
<link rel="stylesheet"
	href="<?php echo get_template_directory_uri(); ?>/css/drawer.min.css">
<link rel="stylesheet"
	href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
<link rel="stylesheet"
	href="<?php echo get_template_directory_uri(); ?>/css/style.css">
</head>
<?php wp_head(); ?>
<body class="drawer drawer--left">
	<div data-role="page" id="home">
		<nav class="drawer-nav">
			<ul class="drawer-menu" data-role="listview" data-fileter="true">
				<li></li>
				<li><a href="home.html">ホーム</a></li>
				<li><a href="cart.html">買い物かご</a></li>
				<li><a href="menu.html">メニュー</a></li>
				<li><a href="news.html">お知らせ</a></li>
				<li>マイページ</li>
				<li><a href="user.html">ユーザー情報</a></li>
				<li><a href="coupon.html">クーポン</a></li>
				<li>Help</li>
				<li><a href="help_faq.html">よくあるご質問</a></li>
				<li><a href="help_allergy.html">カロリー・アレルギー</a></li>
				<li><a href="help_use.html">ご利用方法</a></li>
				<li><a href="help_inquiry.html">お問い合わせ</a></li>
				<li>About</li>
				<li><a href="about_privacy.html">個人情報保護方針 </a></li>
				<li><a href="about_policy.html">サイトポリシー</a></li>
				<li><a href="about_law.html">特定商取引法に基づく表示</a></li>
				<li><a href="about_corporate.html">コーポレート情報</a></li>
				<li><a href="about_rule.html">ご利用規約</a></li>
			</ul>
		</nav>
		<header data-role="header" data-position="fixed"
			data-tap-toggle="false">
			<button type="button" class="drawer-toggle drawer-hamburger">
				<span class="sr-only">toggle navigation</span> <span
					class="drawer-hamburger-icon"> </span>
			</button>
			<h1>Dill Delivery</h1>
		</header>
		<main data-role="content" role="main">
		<div class="jumbotron" id="main-top">
			<h1>Dill Delivery</h1>
		</div>
		<div class="jumbotron" id="main-about">
			<h1>時をわすれる食</h1>
			<p>パーティやちょっとした贅沢のための料理、素材にこだわった料理を提供します。</p>
		</div>
		<div class="jumbotron" id="main-stuff">
			<h1>本物の食材を愛する方へ</h1>
			<p>旬にこだわった国産野菜を中心に、厳選素材を使用しております。</p>
		</div>
		<div class="jumbotron" id="main-health">
			<h1>幸せをもたらす健康</h1>
			<p>菜食を中心とした、健康的な食事を提案させていただきます。</p>
		</div>
		</main>
		<footer data-role="footer" data-position="fixed"
			data-tap-toggle="false">
			<div data-role="navbar">
				<ul>
					<li><a href="home.html">Home</a></li>
					<li><a href="cart.html">Cart</a></li>
					<li><a href="menu.html">Menu</a></li>
					<li><a href="news.html">News</a></li>
					<li><a href="user.html">Dill</a></li>
				</ul>
			</div>
		</footer>
	</div>
	<script
		src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script>
	<script
		src="<?php echo get_template_directory_uri(); ?>/js/jquery.mobile-1.4.5.min.js"></script>
	<script
		src="<?php echo get_template_directory_uri(); ?>/js/iscroll.min.js"></script>
	<script
		src="<?php echo get_template_directory_uri(); ?>/js/drawer.min.js"></script>
	<script
		src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
	<?php wp_footer(); ?>
</body>

</html>
