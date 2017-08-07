<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
	<?php 
        if ( is_singular() ) { 
            echo '<h2 class="entry-title">'; 
        } else { 
            echo '<h2 class="entry-title">';
        } 
    ?>
		<?php the_title(); ?>
	<?php 
		if ( is_singular() ) { 
			echo '</h2>'; 
		} else { 
			echo '</h2>'; 
		} 
	?> 
	<?php edit_post_link(); ?>
	<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
</header>
	<div class="entry-content">
		<?php 
			if ( is_singular() ) { 
				the_content();
			} else { 
				$my_excerpt = get_the_excerpt();
				echo $my_excerpt;
			}
		?>
    </div>
    <?php 
		if ( !is_singular() ) {
    		echo '<a href="'. get_permalink( $id ).'" class="more">Read More</a>';
		}
	?>
    <div class="clear"></div>
</article>