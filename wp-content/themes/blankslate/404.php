<?php get_header(); ?>
    <div class="container" id="innercontent">
		<div id="contentleft">
            <h1>Recent Projects</h1>
            <div class="contentdark">
            	<section id="content" role="main">
				<article id="post-0" class="post not-found">
				<header class="header">
				<h1 class="entry-title"><?php _e( 'Not Found', 'blankslate' ); ?></h1>
				</header>
				<section class="entry-content">
				<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?></p>
				<?php get_search_form(); ?>
				</section>
				</article>
				</section>
            </div>
        </div>
        <div id="sidebar">
        	<?php get_sidebar(); ?>
        </div>
        <div class="clear"></div>
    </div>
<? get_footer(); ?>