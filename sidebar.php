		<div class="rightcontent">
        <div class="sidebar" id="Welcome">
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Welcome_Sidebar') ) : else : ?>
			<div class="item">
            </div>
            <?php endif; ?>
        </div>
		<div class="sidebar" id="Blue">
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Blue_Sidebar') ) : else : ?>
			<div class="item">
			</div>
            <?php endif; ?>
		</div>
		<div class="sidebar" id="Orange">
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Orange_Sidebar') ) : else : ?>
			<div class="item">
			</div>
			<?php endif; ?>
		</div>
		<div class="sidebar" id="Red">
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Red_Sidebar') ) : else : ?>
			<div class="item">
			</div>
			<?php endif; ?>
		</div>
		</div>
