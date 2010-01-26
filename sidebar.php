		<div class="rightcontent">
        <?php if (current_user_can('read_private_pages')) : ?>
            <!--
            <div class="sidebar" id="Private">
                <h3>Private Pages</h3>
                <p>These links are visible only to logged in site admins</p>
                <ul>
                <?php
                $postpages = get_pages('meta_key=sidebar_private&meta_value=1');
                foreach ($postpages as $post) :
                setup_postdata($post); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endforeach; ?>
                </ul>
            </div>
            -->
        <?php endif ?>
        <!--
        <div class="sidebar" id="upcoming">
            <h3><a href="http://lexfarm.org/archives/424">Upcoming Event</a></h3>
            <h4>LexFarm Candidate's Night</h4>
            Hear what the Selectman candidates<br/>
            have to say & ask your own questions!<br/>
            <a href="http://lexfarm.org/archives/424">more info...</a>
        </div>
        -->
        <?php if (!is_page('farm-petition')) : ?>
        <div class="sidebar" id="petition">
            <h3><a href="http://lexfarm.org/farm-petition">Sign The Petition!</a></h3>
            <h4>Support Community Farming in Lexington</h4>
        </div>
        <?php endif; ?>
        <?php if (is_home()) : ?> 
        <div class="sidebar" id="Welcome">
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Welcome_Sidebar') ) : else : ?>
			<div class="item">
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
		<div class="sidebar" id="Blue">
			<?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('Blue_Sidebar'); ?>
			<div class="item">
				<h3>Latest News</h3>
					 <ul class="full">
					 <?php
					 global $post;
					 $myposts = get_posts('numberposts=5');
					 foreach($myposts as $post) :
					 setup_postdata($post);
					 ?>
					    <li>
						<span class="alignleft">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?>
							<p><?php 
							$text = get_the_excerpt(); 
							if(strlen($text ) > 50) { $text = substr($text , 0, 50); } 
							echo "$text"; 
							?>...</p></a>
						</span>
						<span class="alignright">
							<p><?php the_time('j F Y'); ?><br />
							<?php the_author(); ?><br />
							<?php the_category(','); ?>
							</p>
						</span>
												<span class="clear"></span>

						</li>
					 <?php endforeach; ?>
					 </ul>
			</div>
		</div>
		<div class="sidebar" id="Orange">
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Orange_Sidebar') ) : else : ?>
			<div class="item">
				<h3>Categories</h3>
					 <ul class="half">
					 <?php wp_list_categories('show_count=1&title_li='); ?>
					 <span class="clear"></span>
					 </ul>
				<h3>About This Blog</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin tincidunt. Suspendisse eget ligula sit amet purus suscipit adipiscing. In diam. Sed convallis, risus eget feugiat tempus, elit erat molestie lorem, id mollis est sapien id tellus. Morbi venenatis faucibus eros. Vivamus et eros. Proin mattis eros et quam. Mauris eget metus sit amet massa volutpat volutpat.</p>
			</div>
			<?php endif; ?>
		</div>
		<div class="sidebar" id="Red">
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Red_Sidebar') ) : else : ?>
			<div class="item">
				<h3>Categories</h3>
					 <ul class="half">
					 <?php wp_list_categories('show_count=1&title_li='); ?>
					 
					 </ul><div class="clear"></div>
			</div>
			<?php endif; ?>
		</div>
		</div>
