<?php
/**
 * Analytics
 *
 * @package lolly
 */

// Web Analytics.
if ( isset( $_SERVER['HTTP_HOST'] ) && 'www.lolly.com' === $_SERVER['HTTP_HOST'] ) {
	add_action( 'wp_head', 'ly_google_tag_script' );
	add_action( 'wp_head', 'ly_google_optimize' );
	add_action( 'wp_head', 'ly_fb_domain_verification' );
	add_action( 'wp_body_open', 'ly_google_tag_no_script' );
}

/**
 * GTM
 */
function ly_google_tag_script() {
	?>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-834756789"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'AW-834756789');
	</script>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TNFTXLB6');</script>
	<!-- End Google Tag Manager -->	

	<!-- Google tag (gtag.js) --> 
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q332CQ79PQ"></script> -->
<!-- <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'G-Q332CQ79PQ'); </script> -->
	<!-- Google tag (gtag.js) -->
<!-- 	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q332CQ79PQ"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-Q332CQ79PQ');
	</script> -->
	<!-- Google Tag Manager -->
	<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5MBWHNG');</script> -->
	<!-- End Google Tag Manager -->
	<?php
}

/**
 * GTM
 */
function ly_google_tag_no_script() {
	?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TNFTXLB6"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<!-- Google Tag Manager (noscript) -->
	<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5MBWHNG"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
	<!-- End Google Tag Manager (noscript) -->
	<?php
}

/**
 * Google Optimize
 */
function ly_google_optimize() {
	// phpcs:disable
	?>
<!-- 	<script src="https://www.googleoptimize.com/optimize.js?id=OPT-K4XSQM5"></script> -->
	<?php
	// phpcs:enable
}

/**
 * FB
 */
function ly_fb_domain_verification() {
	?>
	<meta name="facebook-domain-verification" content="yw65c69onz343937674hlilxqvkpc8" />
	<?php
}

/**
 * []
 */
function ad_lolly_tracking_app() {
	//phpcs:disable
    ?>
	<!-- <script src="https://app.lolly.com/assets/load.js" async></script> -->
	<?php
    //phpcs:enable
}
add_action( 'wp_footer', 'ad_lolly_tracking_app' );
