<?php
/**
 *
 */

get_header();

// post data
$current_post_id = get_the_ID();
$image           = wp_get_attachment_image_src( get_post_thumbnail_id( $current_post_id ), 'full' );
$post_title      = get_the_title();
$content         = get_the_content();
$post_link       = get_the_permalink();

?>

<main id="page" class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16 lg:h-full my-[100px]">
	<article class="max-w-[900px] m-auto">
		<section>
			<div> 
				<img class="w-full" src="<?php echo esc_url( $image[0] ); ?>" alt="Cover Image">
				<div>
					<h1><?php esc_html_e( $post_title ); ?></h1>
				</div>
			</div>
		</section>
		<section>
			<?php echo wp_kses_post( $content ); ?>
		</section>
	</article>
</main>

<?php
get_footer();
