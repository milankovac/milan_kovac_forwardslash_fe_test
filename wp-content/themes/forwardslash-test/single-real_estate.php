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
         <?php
             $nonce_field=wp_nonce_field();
            acf_form(array(
                'id'              =>  'acf-form',
                'post_id'		  => $post->ID,
                'post_title'	  => true,
				'fields'          =>array('subtitle'),
				'html_after_fields' =>$nonce_field,
                 
                
                
            ));
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
//Check Nonce
  if(!isset($_POST['_wpnonce'])||!wp_verify_nonce($_POST['_wpnonce']))
  {
	die('Erorr');
  };

get_sidebar();
get_footer();
