<?php if((!is_single()) ): ?>
<h1>Recent Projects</h1>
<div class="contentdark">
	<?php $recentpost = new WP_Query("showposts=1"); while($recentpost->have_posts()) : $recentpost->the_post(); ?>
    
	<?php
		if ( has_post_thumbnail() ) { 
			echo '<div id="slideshow">';
			the_post_thumbnail();
			echo '</div>';
		} 
	?>
    
        <h2><?php the_title();?></h2>
        <p><?php 
			$my_excerpt = get_the_excerpt();
			echo $my_excerpt;
		?>
        </p>
        <?php echo '<a href="'. get_permalink( $id ).'" class="more" title="Read More about Bozeman, MT Remodel services">Read More</a>';?>
    <?php endwhile; ?>
</div>
<?php endif; ?>

<?php if(!is_home() ): ?>
    <h1>Contact Us</h1>
    <div class="contentdark">
    	<h2>Contact Information</h2>
    	<p><strong>Phone: </strong> 406.788.5614</p>
    	<p><strong>Email: </strong> <a href="mailto:ryan@deermountainconstruction.com" title="Email us about Bozeman, MT Remodel services">Email Us</a></p>
    </div>
<?php endif; ?>
