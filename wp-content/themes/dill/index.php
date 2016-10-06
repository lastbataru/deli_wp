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
	<div data-role="page" id="menu">
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
			<h1>
				<a href="<?php echo home_url();?>"></a><?php bloginfo("name");?></h1>
		</header>
		<main data-role="content" role="main">
		<?php if (have_posts()):?>
		<?php $more=1;?>
		<?php while (have_posts()):the_post();?>
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>
						<h1><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></h1>
					</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<div class="col-xs-4">
							<?php the_post_thumbnail("news",array("title"=>""));?>
						</div>
						<div class="col-xs-8">
							<div>
								<h2><?php the_title();?></h2>
							</div>
							<div>
								<time><?php get_the_date();?></time>
							</div>
							<div><?php the_content();?>
							</div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<?php endwhile;?>
		<?php endif;?>
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
