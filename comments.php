<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}
	
		$oddcomment = ' alt';
?>

<!-- You can start editing here. -->
<?php if ($post->comment_status == 'open') : ?>
<div class="comments">
	<h2><?php comments_number('0 Comments', '1 Comment', '% Comments' );?> until now</h2>

	<?php if ($comments) : ?>
		<?php foreach ($comments as $comment) : ?>
			<div class="comentariu<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>"  >
				<div class="comment-meta">
					<span><?php comment_author_link() ?></span> <?php comment_date('F jS, Y') ?> (<a href="#comment-<?php comment_ID() ?>" title="">#</a>):
				</div>
				<?php if ($comment->comment_approved == '0') : ?>
				<p><strong>Comentariul tau se afla sub moderare!</strong></p>
				<?php endif; ?>
				<?php comment_text() ?>
			</div>
			<?php
			/* Changes every other comment to a different class */
			$oddcomment = ( empty( $oddcomment ) ) ? ' alt' : '';
			?>
		<?php endforeach; /* end for each comment */ ?>

	<?php else : // this is displayed if there are no comments so far ?>
		<p class="nocomments">Be the first commenter!</p>
		<?php if ('open' == $post->comment_status) : ?>
			<!-- If comments are open, but there are no comments. -->
		<?php else : // comments are closed ?>
			<!-- If comments are closed. -->
			<p class="nocomments">Comments are closed.</p>
		<?php endif; ?>
	<?php endif; ?>

	
	<?php if ('open' == $post->comment_status) : ?>
		<h2>Add your Comment!</h2>
		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
		<?php else : ?>

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

			<?php if ( $user_ID ) : ?>
			<?php else : ?><?php endif; ?>
			<div class="commentform">
				<span>Name*:</span>
				<input class="input" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="2" />
				
				<span>Mail Adress*:</span>
				<input class="input" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="3" />
				
				<span>Blog:</span>
				<input class="input" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="4" />

				<span>Comment*:</span>
				<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="1"></textarea>

				<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment!" class="subscribe_button" />
				<input type="hidden" name="comment_post_ID" style="display: none; height: 0; width: 0;" value="<?php echo $id; ?>" />
			</div>
			<?php do_action('comment_form', $post->ID); ?>
		</form>
		<?php endif; // If registration required and not logged in ?>
	<?php endif; // if you delete this the sky will fall on your head ?>
	
</div>
<?php endif; // only display comment stuff if commenting is allowed on this post/page ?>

