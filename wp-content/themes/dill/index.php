<?php get_header();?>
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
<?php get_footer();?>