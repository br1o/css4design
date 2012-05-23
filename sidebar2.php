		<div id="sidebar2-1">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar21') ) : ?>
		sidebar2-1
		<?php endif; ?>
		</div>
		
		<div id="sidebar2-2">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar22') ) : ?>
		sidebar2-2
		<?php endif; ?>
		<?php if ( is_front_page() ) : ?>
			<!--div class="widget-sidebar2-2 widget widget_links">
				<ul>
					<li><a href="http://webhostinggeeks.com">Best Web Hosts</a><!-- // jusqu'au 15/10/2012 \\ --></li>
				</ul>
			</div-->
			<?php endif; ?>
		</div>