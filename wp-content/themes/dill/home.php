<?php get_header();?>
<?php if (have_posts()):?>
<?php $more=1;?>
<?php while (have_posts()):the_post();?>
<div class="jumbotron" id="main-top"
	style="background-image: url(<?php header_image()?>);">
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
<?php endwhile;?>
<?php endif;?>
<?php get_footer();?>
