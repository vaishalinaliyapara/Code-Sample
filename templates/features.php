<?php
/**
 * Page template for Brands
 *
 * @package lolly
 */

get_header();

?>
	<main id="brands" class="featureed">
		<section id="hero" data-scroll-index="1" class="bg_blc">
			<div class="bg-black lg:min-h-[100vh]">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
					<div
						class="wrap text-center custom_dlflex top_cus_section lg:min-h-[100vh]">
						<div
							class="content left_flex text-white lg:self-center flex flex-col items-start items-center lg:items-start max-lg:mb-4">
							<h1
								class="font-extrabold">
								Discover the perfect Influencers for your Brand
							</h1>
							<p class="text-md lg:text-lg xl:text-xl font-medium pb-6 lg:pb-12">
							Lolly can help you find Creators for your campaigns across Instagram, TikTok and YouTube and start building those relationships in one platform.
							</p>
							<div class="row">
								<button
									class="bg-white border-white hover:bg-black border-2 text-black hover:text-white text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
									<a href="https://app.lolly.com/authentication/register-email" target="_blank">Discover Creaters</a>
								</button>
								<button style="color: rgb(255 255 255 / var(--tw-text-opacity)) !important;border: 2px solid !important;"
									class="get_demo_btn text-black hover:text-white hover:bg-black border-black border-2 text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
									<a href="/get-started/">Get a Demo</a>
								</button>
							</div>
							<div class="row">
								<p class="mt-am">7 Days free trial</p>
							</div>
						</div>
						<div class="media right_flex lg:self-center flex flex-col items-center lg:items-end">
							<div class="flwidth-right">
							<?php /*
							<video preload="metadata" autoplay loop muted playsinline fetchpriority="high" poster="<?php echo LY_ASSET_URI; ?>/images/brands-hero.webp" class="lg:max-h-[600px]">
								<source src="<?php echo LY_ASSET_URI; ?>/videos/brands-hero.mov" type='video/mp4;codecs=hvc1'>
								<source src="<?php echo LY_ASSET_URI; ?>/videos/brands-hero.webm" type="video/webm">
							</video>
							*/ ?>
							<img src="<?php echo LY_ASSET_URI; ?>/images/features-hero.png" alt="" class="">
						</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php /*
		<section id="post-hero" data-scroll-index="2" class="relative">
			<div class="bg-purple lg:min-h-[100vh]">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16 lg:h-full">
					<div
						class="wrap max-sm:flex max-sm:flex-col-reverse text-center lg:h-full lg:text-left lg:grid lg:grid-cols-2 py-12 lg:py-20 xl:py-24 lg:min-h-[100vh]">
						<div class="media lg:self-center lg:pr-16 flex flex-col items-center">
							<video preload="metadata" autoplay loop muted playsinline poster="<?php echo LY_ASSET_URI; ?>/images/brands-post-hero.webp" class="lg:max-h-[500px]">
								<source src="<?php echo LY_ASSET_URI; ?>/videos/brands-post-hero.mov" type='video/mp4;codecs=hvc1'>
								<source src="<?php echo LY_ASSET_URI; ?>/videos/brands-post-hero.webm" type="video/webm">
							</video>
						</div>
						<div
							class="content lg:self-center lg:pl-16 max-lg:mb-6 flex flex-col items-center lg:items-start">
							<h2 class="font-black text-xl lg:text-3xl xl:text-4xl 2xl:text-5xl pb-5 lg:pb-10">
								One platform to bring your creator marketing in-house and scale your commerce
							</h2>
							<p class="text-md lg:text-lg xl:text-xl pb-6 lg:pb-12 font-medium">
							Lolly is built with one purpose in mind: to drive <b>performance</b> and <b>revenue</b> for your organization.
							</p>
							<button
								class="text-black hover:text-white hover:bg-black border-black border-2 text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
								<a href="/get-started/">Get Started</a>
							</button>
						</div>
					</div>
				</div>
			</div>
		</section> */ ?>

		<section id="influencer-carousel" data-scroll-index="3" class="overflow-x-hidden relative">
			<div class="bg-purple ">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16  flex items-center">
					<div class="wrap py-12 lg:py-20 xl:py-24 h-full min-w-0">
						<h2
							class="font-black text-2xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl pb-16 text-center">
							Used by people working at
						</h2>
						<div id="carousel" class="swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide text-white text-center">
									<img src="<?php  echo LY_ASSET_URI; ?>/images/feature-i1.png" alt="" class="">
								</div>
								<div class="swiper-slide text-white text-center">
									<img src="<?php  echo LY_ASSET_URI; ?>/images/feature-i2.png" alt="" class="">
								</div>
								<div class="swiper-slide text-white text-center">
									<img src="<?php  echo LY_ASSET_URI; ?>/images/feature-i3.png" alt="" class="">
								</div>
								<div class="swiper-slide text-white text-center">
									<img src="<?php  echo LY_ASSET_URI; ?>/images/feature-i4.png" alt="" class="">
								</div>
								<div class="swiper-slide text-white text-center">
									<img src="<?php  echo LY_ASSET_URI; ?>/images/feature-i5.png" alt="" class="">
								</div>
								<div class="swiper-slide text-white text-center">
									<img src="<?php  echo LY_ASSET_URI; ?>/images/feature-i6.png" alt="" class="">
								</div>
								<div class="swiper-slide text-white text-center">
									<img src="<?php  echo LY_ASSET_URI; ?>/images/feature-i7.png" alt="" class="">
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
		<!-- <section class="image_slide">
			<div class="bg-purple ">
				<div class="wrap py-12 lg:py-20 xl:py-24 h-full min-w-0">
					
				<h2
					class="font-black text-2xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl pb-16 text-center">
					Used by people working at
				</h2>
				
				<div class="one-time">
					<div class="text-white text-center">
						<img src="<?php echo LY_ASSET_URI; ?>/images/feature-i1.png" alt="" class="">
					</div>
					<div class="text-white text-center">
						<img src="<?php echo LY_ASSET_URI; ?>/images/feature-i2.png" alt="" class="">
					</div>
					<div class="text-white text-center">
						<img src="<?php echo LY_ASSET_URI; ?>/images/feature-i3.png" alt="" class="">
					</div>
					<div class="text-white text-center">
						<img src="<?php echo LY_ASSET_URI; ?>/images/feature-i4.png" alt="" class="">
					</div>
					<div class="text-white text-center">
						<img src="<?php echo LY_ASSET_URI; ?>/images/feature-i5.png" alt="" class="">
					</div>
					<div class="text-white text-center">
						<img src="<?php echo LY_ASSET_URI; ?>/images/feature-i6.png" alt="" class="">
					</div>
					<div class="text-white text-center">
						<img src="<?php echo LY_ASSET_URI; ?>/images/feature-i7.png" alt="" class="">
					</div>
					</div>
				</div>

				<div class="one-time-mobile">
					<div class="text-white text-center">
						<img src="<?php echo LY_ASSET_URI; ?>/images/feature-i1.png" alt="" class="">
					</div>
					<div class="text-white text-center">
						<img src="<?php echo LY_ASSET_URI; ?>/images/feature-i2.png" alt="" class="">
					</div>
					<div class="text-white text-center">
						<img src="<?php echo LY_ASSET_URI; ?>/images/feature-i3.png" alt="" class="">
					</div>
				</div>

				<div class="one-time-mobile-sec">
					
					<div class="text-white text-center">
						<img src="<?php echo LY_ASSET_URI; ?>/images/feature-i4.png" alt="" class="">
					</div>
					<div class="text-white text-center">
						<img src="<?php echo LY_ASSET_URI; ?>/images/feature-i5.png" alt="" class="">
					</div>
					<div class="text-white text-center">
						<img src="<?php echo LY_ASSET_URI; ?>/images/feature-i6.png" alt="" class="">
					</div>
					<div class="text-white text-center">
						<img src="<?php echo LY_ASSET_URI; ?>/images/feature-i7.png" alt="" class="">
					</div>
				</div>
			</div>
		</section> -->

		<section id="hero" data-scroll-index="1" class="txt_blc">
			<div class="bg-yellow lg:min-h-[100vh]">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
					<div class="wrap custom_dlflex serchfromour swap_mobile lg:min-h-[100vh]">
						<div class="content right_flex   text-white lg:self-center flex flex-col items-start items-center lg:items-start max-lg:mb-4">
						<div class="flwidth-left">
							<img src="<?php echo LY_ASSET_URI; ?>/images/active-filter1.png" alt="" class="">
						</div>

						</div>
						<div class="media left_flex lg:self-center flex flex-col items-center lg:items-end">
							<h2
								class="font-extrabold text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl pb-5 lg:pb-10 text-purple">
								Search from over 50 Million profiles to discover the ideal influencers.
							</h2>
							<p class="text-md lg:text-lg xl:text-xl font-medium pb-6 lg:pb-12">
							Never have the problem of running out of options. With trusty filters, Lolly will serve you up 1,000's of options within a flash. Whatever location or niche you can find them effortlessly.
							</p>
							<div class="btn_gp">
								<button
									class="btn_ft  bg-white  hover:bg-black border-2 text-black hover:text-white text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
									<a href="https://app.lolly.com/authentication/register-email" target="_blank">Discover Creaters</a>
								</button>
								<button style="color:#2B2A35 !important;border: 2px solid #2B2A35 !important;"
									class="btn_sec text-black hover:text-white hover:bg-black border-black border-2 text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
									<a href="/get-started/">Get a Demo</a>
								</button>
							</div>
							<div class="btn_bottom">
								<p>7 Days free trial</p>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="hero" data-scroll-index="1" class="clrfff">
			<div class="bg-black lg:min-h-[100vh]">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
					<div
						class="wrap text-center lg:h-full lg:text-left lg:grid lg:grid-cols-[9fr,11fr] pt-24 lg:pt-28 pb-12 lg:pb-20 xl:pb-24 lg:min-h-[100vh]">
						<div
							class="content text-white lg:self-center flex flex-col items-start items-center lg:items-start max-lg:mb-4">
							<h2
								class="font-extrabold text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl pb-5 lg:pb-10 text-purple">
								Evaluate the performance and audience of any content creator.
							</h2>
							<p class="text-md lg:text-lg xl:text-xl font-medium pb-6 lg:pb-12">
							Ditch the guesswork. Instead, uncover the secrets behind the profile and make savvy decisions when it comes to your influencer partnerships.
							</p>
							<div class="row btn_last">
								<button
									class="ft_mr  bg-white border-white hover:bg-black border-2 text-black hover:text-white text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
									<a href="https://app.lolly.com/authentication/register-email" target="_blank">Discover Creaters</a>
								</button>
								<button style="color: rgb(255 255 255 / var(--tw-text-opacity)) !important;border: 2px solid !important;"
									class="text-black hover:text-white hover:bg-black border-black border-2 text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
									<a href="/get-started/">Get a Demo</a>
								</button>
							</div>
							<div class="btn_bottom">
								<p>7 Days free trial</p>
							</div>
						</div>
						<div class="media lg:self-center flex flex-col items-center lg:items-end">
							<?php /*
							<video preload="metadata" autoplay loop muted playsinline fetchpriority="high" poster="<?php echo LY_ASSET_URI; ?>/images/brands-hero.webp" class="lg:max-h-[600px]">
								<source src="<?php echo LY_ASSET_URI; ?>/videos/brands-hero.mov" type='video/mp4;codecs=hvc1'>
								<source src="<?php echo LY_ASSET_URI; ?>/videos/brands-hero.webm" type="video/webm">
							</video>
							*/ ?>
							<img src="<?php echo LY_ASSET_URI; ?>/images/evaluate.png" alt="" class="">

							
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- <section id="hero" data-scroll-index="1" class="">
			<div class="bg-yellow lg:min-h-[100vh]">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
					<div
						class="wrap text-center lg:h-full lg:text-left lg:grid lg:grid-cols-[9fr,11fr] pt-24 lg:pt-28 pb-12 lg:pb-20 xl:pb-24 lg:min-h-[100vh]">
						<div class="content text-white lg:self-center flex flex-col items-start items-center lg:items-start max-lg:mb-4">
							
						</div>
						<div class="media lg:self-center flex flex-col items-center lg:items-end">
							<?php /*
							<video preload="metadata" autoplay loop muted playsinline fetchpriority="high" poster="<?php echo LY_ASSET_URI; ?>/images/brands-hero.webp" class="lg:max-h-[600px]">
								<source src="<?php echo LY_ASSET_URI; ?>/videos/brands-hero.mov" type='video/mp4;codecs=hvc1'>
								<source src="<?php echo LY_ASSET_URI; ?>/videos/brands-hero.webm" type="video/webm">
							</video>
							*/ ?>
							

							
						</div>
					</div>
				</div>
			</div>
		</section> -->

		<section id="brand-video" data-scroll-index="9" class="relative whylolly">
			<div class="bg-purple">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
					<div class="wrap pt-10 flex flex-col items-center">
						<h2
							class="font-black text-3xl md:text-4xl xl:text-5xl xl:text-6xl 2xl:text-7xl pb-5 text-center">
							Why Lolly?
						</h2>
					</div>
					<div
						class="wrap text-center custom_dlflex_cus">
						<div
							class="content left_flex_cus  text-white lg:self-center flex flex-col items-start items-center lg:items-start max-lg:mb-4">
							<ul class="dtl_ul">
								<li>
									<div class="lft">
										<p>1</p>						
									</div>
									<div class="rgt">
										<p><strong>Find your perfect influencers!</strong></p>
										<p>Invite creators to work directly with your brand at scale from the world’s most comprehensive database.</p>
									</div>
								</li>
								<li>
									<div class="lft">
										<p>2</p>						
									</div>
									<div class="rgt">
										<p><strong>Engage and Communicate</strong></p>
										<p>Use Lolly CRM to communicate with your creators using full automation to eliminate that manual work.</p>
									</div>
								</li>
								<li>
									<div class="lft">
										<p>3</p>						
									</div>
									<div class="rgt">
										<p><strong>Manage Campaigns</strong></p>
										<p>Centralise all your campaign management and reporting in one solution.</p>
									</div>
								</li>
							</ul>
							<div class="btn_gp">
								<button
									class="btn_ft bg-white  hover:bg-black border-2 text-black hover:text-white text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
									<a href="https://app.lolly.com/authentication/register-email" target="_blank">Discover Creaters</a>
								</button>
								<button style="color:#2B2A35 !important; border: 2px solid #fff !important;"
									class="btn_sec bg-white  text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
									<a style="color:#2B2A35 !important;" href="/get-started/">Get a Demo</a>
								</button>
							</div>
							<div class="btn_bottom clr_bl">
								<p>7 Days free trial</p>
							</div>
						</div>
						<div class="media right_flex_cus  lg:self-center flex flex-col items-center lg:items-end">
							<?php /*
							<video preload="metadata" autoplay loop muted playsinline fetchpriority="high" poster="<?php echo LY_ASSET_URI; ?>/images/brands-hero.webp" class="lg:max-h-[600px]">
								<source src="<?php echo LY_ASSET_URI; ?>/videos/brands-hero.mov" type='video/mp4;codecs=hvc1'>
								<source src="<?php echo LY_ASSET_URI; ?>/videos/brands-hero.webm" type="video/webm">
							</video>
							*/ ?>
							<img src="<?php echo LY_ASSET_URI; ?>/images/why-lolly.png" alt="" class="">

							
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="hero" data-scroll-index="1" class="dw_blc">
			<div class="bg-yellow">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
					<div class="wrap custom_dlflex  lg:min-h-[100vh]">
						<div class="content left_flex  text-white lg:self-center flex flex-col items-start items-center lg:items-start max-lg:mb-4">
							<h2
								class="font-extrabold text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl pb-5 lg:pb-10 text-purple">
								Why wait?
							</h2>
							<p class="text-md lg:text-lg xl:text-xl font-medium pb-6 lg:pb-12">
							On average, businesses that engage in influencer marketing witness a return on investment (ROl) of $6.50 for every $1 spent on influencer campaigns, highlighting its potential for significant revenue generation.
							</p>
							<div class="btn_gp">
								<button
									class="btn_ft bg-white  hover:bg-black border-2 text-black hover:text-white text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
									<a href="https://app.lolly.com/authentication/register-email" target="_blank">Discover Creaters</a>
								</button>
								<button style="color:#2B2A35 !important;border: 2px solid #2B2A35 !important;"
									class="btn_sec text-black hover:text-white hover:bg-black border-black border-2 text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
									<a href="/get-started/">Get a Demo</a>
								</button>
							</div>
							<div class="btn_bottom clr_bl">
								<p>7 Days free trial</p>
							</div>

						</div>
						<div class="media right_flex  lg:self-center flex flex-col items-center lg:items-end ">
							<div class="flwidth-right">
							<img src="<?php echo LY_ASSET_URI; ?>/images/why-wait.png" alt="" class="">
</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="faqs_main">
			<div class="bg-black lg:min-h-[100vh]">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
					<h2>Commonly asked questions</h2>
					<div class="accordion-wrapper">
						<div class="acc-head card p-3 rounded-0">
							Can I discover the perfect influencers on Lolly?
						</div>
						<div class="acc-body rounded-0">
							<p>Absolutely! Lolly's comprehensive database includes influencers from Instagram, TikTok, and YouTube, all boasting over 1K followers.</p>
							
							<p>Within these criteria, you'll find exactly what suits your needs, such as: </br>
							- Influencers in any location, be it a specific city or country. </br>
							- Influencers in diverse niches or categories. </br>
							- Influencers of various audience sizes. </p>
							<p>However, for a truly successful influencer marketing strategy, ask yourself: Will I connect with creators who resonate with my target audience? To that, we confidently say: Yes, that's the Lolly approach! Instead of solely concentrating on your niche, shift your focus towards the influencer's audience – that's where the real magic happens."</p>
						</div>
					  </div>
					  <div class="accordion-wrapper">
						<div class="acc-head card p-3 rounded-0">
							How do you acquire your data, and how reliable is it?
						</div>
						<div class="acc-body rounded-0">
							<p>Much like Google, Lolly gathers and scrutinizes publicly accessible content to create insightful data. </p>
							<p>Our data boasts remarkable accuracy. Several of the fastest-growing B2C companies worldwide have chosen Lolly over competing options after rigorously assessing our data quality. We update it several times each month, guaranteeing you access to the most current and trustworthy information available."</p>
						</div>
					  </div>
					  <div class="accordion-wrapper">
						<div class="acc-head card p-3 rounded-0">
							Can I access influencer analytics and performance metrics on your platform?
						</div>
						<div class="acc-body rounded-0">
							<p>Absolutely. We strive to provide comprehensive insights into influencer profiles, including their audience composition. </p>
							<p>In Lolly, you can explore a wide array of metrics, including but not limited to: ‍ </br>
							- Audience demographics (Age, Gender, Location by city, interests) </br>
							- Influencer performance (Follower count, Average likes, Engagement rate, Past Paid Post Performance) </br>
							- Vetting (Popular posts, fake followers) ‍ To unlock the full spectrum of analytics, give Lolly a try for free."</p>
						</div>
					  </div>
					  <div class="accordion-wrapper">
						<div class="acc-head card p-3 rounded-0">
							Do you offer any advanced search options for more specific influencer discovery?
						</div>
						<div class="acc-body rounded-0">
							<p>Yes, we offer advanced search options for those looking for influencers with highly specialized criteria. Contact our support team to access these advanced features.</p>
						</div>
					  </div>
					  <div class="accordion-wrapper">
						<div class="acc-head card p-3 rounded-0">
							How do I save and organize my favorite influencers for future reference?
						</div>
						<div class="acc-body rounded-0">
							<p>You can save influencers to your favorites list or create custom lists to organize them based on different campaigns or criteria. It's a handy feature for efficient influencer management.</p>
						</div>
					  </div>
					  <div class="accordion-wrapper">
						<div class="acc-head card p-3 rounded-0">
							Do you impose any restrictions?
						</div>
						<div class="acc-body rounded-0">
							<p>While our search capabilities are extensive, we do have limits in place for detailed profiles, emails, and monitoring. You can find detailed information about these limits on our pricing page."</p>
						</div>
					  </div>
				</div>
			</div>

		</section>
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
	jQuery(document).ready(function(){
  jQuery('.acc-head').click(function(){
    jQuery(this).next().slideToggle(500);
    jQuery(this).toggleClass('active');
  })
})
</script>
<script>
	jQuery(document).ready(function(){
		jQuery('.one-time').slick({
    	dots: false,
		slidesToShow: 6.9,
		infinite: true,
		autoplay: true,
		slidesToScroll: 1,
		arrows: false,
		autoplaySpeed: 0,
		speed: 3000,
	
		pauseOnHover: false,
		cssEase: 'linear',
		adaptiveHeight: true
		})
	})
	</script>
	<script>

	jQuery(document).ready(function(){
		jQuery('.one-time-mobile').slick({
    	dots: false,
		slidesToShow: 2.9,
		infinite: true,
		autoplay: true,
		slidesToScroll: 1,
		arrows: false,
		autoplaySpeed: 0,
		speed: 3000,
		pauseOnHover: false,
		cssEase: 'linear',
		adaptiveHeight: true
		})
	})
	</script>
	<script>

jQuery(document).ready(function(){
	jQuery('.one-time-mobile-sec').slick({
	dots: false,
	slidesToShow: 2.9,
	rtl: true,
	infinite: true,
	autoplay: true,
	slidesToScroll: 1,
	arrows: false,
	autoplaySpeed: 0,
	speed: 3000,
	pauseOnHover: false,
	cssEase: 'linear',
	adaptiveHeight: true,
	rtl: true
	})
})
</script>
		<aside id="scroll-down"
			class="hidden fixed z-50 w-max cursor-pointer mx-auto left-0 right-0 bottom-[20px] bg-[#2B2A357a] backdrop-blur-2xl rounded-full">
			<img src="<?php echo LY_ASSET_URI; ?>/images/scroll-down.svg" width="40" height="40" alt="" srcset="">
		</aside>
	</main>
<?php

get_footer();

