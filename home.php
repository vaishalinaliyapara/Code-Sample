<?php
get_header();
?>
<main >
	<section class="bg-black">
		<div class="container flex flex-col text-center px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16 pt-20 lg:pt-24 pb-8 lg:pb-12">
			<h1 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl text-white font-black text-yellow">Blogs</h1>
		</div>
	</section>
	<section>
		<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16 py-8 lg:py-12 lg:h-full">
			<?php
			$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
			$args  = array(
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'orderby'        => 'date',
				'order'          => 'DESC',
				'posts_per_page' => 9,
				'paged'          => $paged,
				'tag__not_in'    => array( 4 ),
			);
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) {
				?>
				<div class="grid lg:grid-cols-3 gap-6"> 
					<?php
					$count = 1;
					while ( $query->have_posts() ) {
						$query->the_post();
						$current_post_id = get_the_ID();
						$image           = wp_get_attachment_image_src( get_post_thumbnail_id( $current_post_id ), 'full' );
						$post_title      = get_the_title();
						$excerpt         = get_the_excerpt();
						$post_link       = get_the_permalink();
						?>
							<div class="group bg-black rounded-lg p-8">
								<?php if ( ! empty( $post_title ) ) { ?>
									<p class="font-bold text-white text-md lg:text-lg mb-3"> <?php esc_html_e( $post_title ); ?> </p>
								<?php } ?>
								<div class="flex flex-col">
									<?php if ( ! empty( $excerpt ) ) { ?>
										<p class="text-white mb-6"> <?php esc_html_e( substr( $excerpt, 0, 100 ) ); ?>...</p>
									<?php } ?>
									<?php if ( ! empty( $post_link ) ) { ?>
										<a href="<?php echo esc_url( $post_link ); ?>" class="font-medium text-yellow">
											Find Out More >
										</a>
									<?php } ?>
								</div>
							</div>
						<?php
						$count++;
					}
					?>
				</div>
				<?php
			}
			wp_reset_query();
			?>
			<div class="flex justify-center space-x-6 mt-8">
				<?php
				$big = 999999999;
				echo paginate_links(
					array(
						'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format'  => '?paged=%#%',
						'current' => max( 1, get_query_var( 'paged' ) ),
						'total'   => $query->max_num_pages,
						'prev_text' => '<span class="pagination prev"></span>',
						'next_text' => '<span class="pagination next"></span>'
					)
				);
				?>
			</div>
		</div>
	</section>            
</main>
<?php
get_footer();
