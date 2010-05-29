<?php get_header(); ?>
		<div class="leftcontent">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : $postnum = $postnum + 1; the_post(); ?>
            <?php 
                if ( in_category('2') && 
                     count(get_the_category()) == 1 &&
                     !is_single() ) continue; 
            ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="posthead">
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<span class="postmeta"><?php the_time('j F Y'); ?> - by <?php the_author(); ?></span>
				</div>
				<div class="postcontent">
					<?php the_content('Read the rest...'); ?>
				</div>
				<div class="postmeta2">
					<span class="alignleft" id="Categories"><?php the_category(','); ?></span>
					<span class="alignright" id="Comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
					<span class="clear"></span>
				</div>
			</div>
			<?php endwhile; else : ?>
			<div class="post">
				<div class="posthead">
					<h2>404 - Not Found</h2>
				</div>
				<div class="postcontent">
					<p>The page you are looking for is not here.</a>
				</div>
			</div>
			<?php endif; ?>
		</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
