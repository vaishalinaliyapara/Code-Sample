<?php
/**
 * Functions
 *
 * @package RawConscious
 */

define( 'LY_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'LY_PREFIX', 'ly' );
define( 'LY_PATH', get_stylesheet_directory( __FILE__ ) );
define( 'LY_URI', get_stylesheet_directory_uri( __FILE__ ) );
define(
	'LY_ASSET_URI',
	wp_upload_dir()['baseurl']
);

/**
 * Theme support
 */
add_theme_support( 'custom-logo' );

add_theme_support( 'post-thumbnails', array( 'post' ) );
remove_filter('the_excerpt', 'wpautop');
/**
 * SVG Support
 *
 * @param array $mimes mime types.
 */
function ly_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'ly_mime_types' );

/**
 * Include
 */
require_once LY_PATH . '/includes/templates.php';
require_once LY_PATH . '/includes/cpt-content-block.php';
require_once LY_PATH . '/includes/cpt-landing-page.php';
require_once LY_PATH . '/includes/cpt-meetings.php';
require_once LY_PATH . '/includes/enqueue.php';
require_once LY_PATH . '/includes/hooks.php';
require_once LY_PATH . '/includes/hooks-gform.php';
require_once LY_PATH . '/includes/helpers.php';
require_once LY_PATH . '/includes/analytics.php';
// require cmb2.
require_once LY_PATH . '/dependencies/vendor/cmb2/cmb2/init.php';
require_once LY_PATH . '/includes/cmb2.php';

add_action('wp_ajax_load_more_post_data' , 'load_more_post_data');
add_action('wp_ajax_nopriv_load_more_post_data','load_more_post_data');
function load_more_post_data() {
ob_start();
$paged = (isset($_POST["page"])) ? $_POST["page"] : 2;
	
global $post;

if($_POST["catID"] != ""){
	$args = array(
		'posts_per_page' => 6,
		'post_type'     => 'post',
		'post_status'  => 'publish',
		'paged' => $paged,
		'tax_query' => array(
			array(
				'taxonomy'  => 'category',
				'field'     => 'term_id', //change to name or slug if necessary
				'terms'     => $_POST["catID"],
			)
			),
		);
}else if($_POST["keyword"] != ""){
	$args = array(
		's'	=> $_POST["keyword"],
		'posts_per_page' => 6,
		'post_type'     => 'post',
		'post_status'  => 'publish',
		'paged' => $paged,
		);
}else if($_POST["catID"] != "" && $_POST["keyword"] != ""){
	$args = array(
		's'	=> $_POST["keyword"],
		'posts_per_page' => 6,
		'post_type'     => 'post',
		'post_status'  => 'publish',
		'paged' => $paged,
		'tax_query' => array(
			array(
				'taxonomy'  => 'category',
				'field'     => 'term_id', //change to name or slug if necessary
				'terms'     => $_POST["catID"],
			)
			),
		);
}
else{
	$args = array(
		'posts_per_page' => 6,
		'post_type'     => 'post',
		'post_status'  => 'publish',
		'paged' => $paged,
		);
}

	
$wp_query = new WP_Query(); $wp_query->query($args);
$count = $wp_query->post_count;
	if ($wp_query->have_posts()): ?>
		<?php while ($wp_query->have_posts()) : $wp_query->the_post();
		$post_date = get_the_date( 'F j, Y' );
		$timed = get_field('time_duration',get_the_ID());
		?>
		<div class="w-dyn-item">
			<a href="<?php the_permalink(); ?>"
				class="bloglist_item w-inline-block">
				<div class="bloglist_image-link">
					<div class="bloglist_image-wrapper"><img
							src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>"
							loading="lazy" alt=""
							sizes="(max-width: 479px) 100vw, (max-width: 767px) 96vw, 244px"
							class="blog16_image"></div>
				</div>
				<div class="blog_item-content">
					<div class="blog_readtime-block main">
						<div><?php echo ($timed != "")  ? $timed : 2 ;?></div>
						<div>min read</div>
					</div>
					<div class="blog_main-title-link">
						<h3 class="c-heading-3"><?php the_title(); ?></h3>
					</div>
					<p class="c-paragraph">
					<?php the_excerpt(); ?></p>
					<div class="blog16_button-wrapper">
						<div class="l-link__read-more">
							<div class="c-text-block">Read more</div>
							<div class="arrow-embed w-embed"><svg width="24" height="24"
									viewBox="0 0 24 24" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M11.6484 18.8746C11.5318 18.7746 11.4734 18.6579 11.4734 18.5246C11.4734 18.3913 11.5318 18.2746 11.6484 18.1746L17.2984 12.4996H5.27344C5.12344 12.4996 5.00277 12.4539 4.91144 12.3626C4.81944 12.2706 4.77344 12.1496 4.77344 11.9996C4.77344 11.8496 4.81944 11.7286 4.91144 11.6366C5.00277 11.5453 5.12344 11.4996 5.27344 11.4996H17.2984L11.6484 5.82461C11.5318 5.72461 11.4734 5.60794 11.4734 5.47461C11.4734 5.34128 11.5318 5.22461 11.6484 5.12461C11.7484 5.02461 11.8651 4.97461 11.9984 4.97461C12.1318 4.97461 12.2484 5.02461 12.3484 5.12461L18.6734 11.4246C18.7568 11.5079 18.8151 11.5996 18.8484 11.6996C18.8818 11.7996 18.8984 11.8996 18.8984 11.9996C18.8984 12.0996 18.8818 12.1953 18.8484 12.2866C18.8151 12.3786 18.7568 12.4746 18.6734 12.5746L12.3484 18.8746C12.2484 18.9746 12.1318 19.0246 11.9984 19.0246C11.8651 19.0246 11.7484 18.9746 11.6484 18.8746V18.8746Z"
										fill="currentcolor"></path>
								</svg></div>
						</div>
					</div>
				</div>
			</a>
			<div class="w-embed"><input type="hidden" class="jetboost-list-item"
					value="tiktok-creative-best-practice-the-unboxing-videos"></div>
		</div>
		<?php endwhile;?>	
	<?php endif;?>    
<?php wp_reset_postdata();
$data = ob_get_contents();
ob_end_clean();
echo json_encode(array(
	"status" => 1,
	'data' => $data,
	'count' => $count,
	'page_number' => $paged + 1
));
exit;
}


