<?php
/**
 * Page template for Brands
 *
 * @package lolly
 */

get_header();

?>
	<main id="lottie" class="w-screen h-screen">
		<section class="h-full w-full">
			<div class="container h-full w-full flex justify-center items-center">
			<dotlottie-player
				autoplay
				loop
				mode="normal"
				class="h-[300px] md:h-[350px] lg:h-[450px] xl:h-[550px] w-[300px] md:w-[350px] lg:w-[450px] xl:w-[550px]">
			</dotlottie-player>		
		</div>
		</section>
	</main>

<?php
get_footer();
