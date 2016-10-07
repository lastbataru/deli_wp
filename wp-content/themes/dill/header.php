<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="shortcut icon" type="image/x-icon"
	href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
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
	<div data-role="page">
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
				<li>About</li>
				<li><a href="faq.html">よくあるご質問</a></li>
				<li><a href="use.html">ご利用方法</a></li>
				<li><a href="inquiry.html">お問い合わせ</a></li>
				<li><a href="policy.html">サイトポリシー</a></li>
			</ul>
		</nav>
		<header data-role="header" data-position="fixed"
			data-tap-toggle="false">
			<button type="button" class="drawer-toggle drawer-hamburger">
				<span class="sr-only">toggle navigation</span> <span
					class="drawer-hamburger-icon"> </span>
			</button>
			<h1>
				<a href="<?php echo home_url();?>"></a><?php bloginfo("name");?></h1>
		</header>
		<main data-role="content" role="main">