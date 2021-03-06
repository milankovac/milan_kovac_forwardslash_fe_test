<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Forwardslash_Test
 */
acf_form_head();
get_header();

?>
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
           
			get_template_part( 'template-parts/content', get_post_type() );
        
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'forwardslash-test' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'forwardslash-test' ) . '</span> <span class="nav-title">%title</span>',
				)
            );
        if( current_user_can( 'edit_post', $post->ID )|| current_user_can('administrator')):
         ?>
         <div class="form-update">
		 <form method="post" action="<?php echo  get_permalink($page_id); ?>">
			<label>Title:</label><br>
			<input  class='form-control' type="text" name="title" value="<?php echo $post->post_title?>">
			<br>
		    <label>Subtitle:</label><br>
			<input class='form-control' type="text" name="subtitle" value="<?php the_field('subtitle'); ?>">
			<br><br>
			<?php wp_nonce_field()?>
			<input type="submit" value="Submit" name='submit-edit-post' class='btnUpdate'>
		</form> 

        <?php
        endif;
	
        ?>

        </div>

        <?php
           

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
	if(isset($_POST['submit-edit-post']))
	{
		$title=$_POST['title'];
		$subtile=$_POST['subtitle'];
		
		$date=array(
			'ID'=>$post->ID,
			'post_title'=>$title,
		);
		wp_update_post( $date );
		update_field('subtitle', $subtile, $post->ID);
		echo "<meta http-equiv='refresh' content='0'>";
		
	}
	if(!isset($_POST['_wpnonce'])||!wp_verify_nonce($_POST['_wpnonce']))
	{
		die('Error');
	}
get_sidebar();
get_footer();
?>