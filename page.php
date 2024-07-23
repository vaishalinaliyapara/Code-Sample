<?php
/**
 * Page template
 *
 * @package lolly
 */

get_header();

?>

<main id="page" class="my-24">
	<article>
		<section class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16 lg:h-full">
			<div class="max-w-[900px] m-auto">
				<?php
				echo wpautop( get_post_meta( get_the_ID(), 'default_content_box', true ) );
				?>
			</div>
		</section>
	</article>
</main>

<?php
get_footer();
