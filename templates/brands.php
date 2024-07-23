<?php
/**
 * Page template for Brands
 *
 * @package lolly
 */

get_header();

?>
	<main id="brands">
		<section id="hero" data-scroll-index="1" class="">
			<div class="bg-black lg:min-h-[100vh]">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
					<div
						class="wrap text-center lg:h-full lg:text-left lg:grid lg:grid-cols-[9fr,11fr] pt-24 lg:pt-28 pb-12 lg:pb-20 xl:pb-24 lg:min-h-[100vh]">
						<div
							class="content text-white lg:self-center flex flex-col items-start items-center lg:items-start max-lg:mb-4">
							<h1
								class="font-extrabold text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl pb-5 lg:pb-10 text-purple">
								Where Creators Become Your No.1 Revenue Stream
							</h1>
							<p class="text-md lg:text-lg xl:text-xl font-medium pb-6 lg:pb-12">
								Connect with vetted creators to drive sales and accelerate brand growth
							</p>
							<button
								class="max-lg:hidden bg-white border-white hover:bg-black border-2 text-black hover:text-white text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
								<a href="/get-started/">Get Started</a>
							</button>
						</div>
						<?php /*
						<div class="media lg:self-center flex flex-col items-center lg:items-end">
							<video preload="metadata" autoplay loop muted playsinline fetchpriority="high" poster="<?php echo LY_ASSET_URI; ?>/images/brands-hero.webp" class="lg:max-h-[600px]">
								<source src="<?php echo LY_ASSET_URI; ?>/videos/brands-hero.mov" type='video/mp4;codecs=hvc1'>
								<source src="<?php echo LY_ASSET_URI; ?>/videos/brands-hero.webm" type="video/webm">
							</video>
						</div> */ ?>

						<div id="video" class="media lg:self-center flex flex-col items-center lg:items-end" style="position: relative;">
							<?php /* <video preload="none" poster="<?php echo LY_ASSET_URI; ?>/images/brands-hero.webp"
								class="video rounded-2xl m-auto h-[200px] lg:h-[500px]" height="400">
								<source src="<?php echo LY_ASSET_URI; ?>/videos/brands-hero.mov" type='video/mp4;codecs=hvc1'>
								<source src="<?php echo LY_ASSET_URI; ?>/videos/brands-hero.webm" type="video/webm">
							</video> */ ?>
							<video preload="metadata" autoplay loop muted playsinline fetchpriority="high" poster="<?php echo LY_ASSET_URI; ?>/images/brands-hero.webp" class="lg:max-h-[600px] rounded-2xl m-auto h-[200px] lg:h-[500px]">
								<source src="<?php echo LY_ASSET_URI; ?>/videos/brands-hero.mov" type='video/mp4;codecs=hvc1'>
								<source src="<?php echo LY_ASSET_URI; ?>/videos/brands-hero.webm" type="video/webm">
							</video>
							<img id="ly-play1"
								class="absolute w-[40px] lg:h-[100px] lg:w-[100px] top-[50%] left-[50%] -translate-x-1/2 -translate-y-1/2 rounded-full bg-trans-black"
								src="<?php echo LY_ASSET_URI; ?>/images/play.svg" alt="">
							<img style="display: none;" class="absolute ly-pause h-[100px] w-[100px]" src="" alt="">
							<img style="display: none;" class="absolute ly-close h-[100px] w-[100px]" src="" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
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
		</section>
		<section id="influencer-carousel" data-scroll-index="3" class="overflow-x-hidden relative">
			<div class="bg-yellow lg:min-h-[100vh]">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16 lg:min-h-[100vh] flex items-center">
					<div class="wrap py-12 lg:py-20 xl:py-24 h-full min-w-0">
						<h2
							class="font-black text-2xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl pb-16 text-center">
							Access to the world's best creators for authentic product promotion
						</h2>
						<div id="carousel" class="swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide text-white text-center">
									<img src="<?php echo LY_ASSET_URI; ?>/images/influencer-carousel-1.webp" alt="" class="">
									<div
										class="absolute top-[70%] left-[35%] lg:top-[75%] lg:left-[40%] flex flex-col items-center">
										<p class="text-l font-medium">@Leylahsunny</p>
										<div class="flex justify-center items-center">
											<p class="text-l font-medium">2.2M</p><img src="<?php echo LY_ASSET_URI; ?>/images/tiktok-icon.svg"
												alt="" class="px-2 w-auto h-4 ">
										</div>
									</div>
								</div>
								<div class="swiper-slide text-white text-center">
									<img src="<?php echo LY_ASSET_URI; ?>/images/influencer-carousel-2.webp" alt="" class="">
									<div
										class="absolute top-[70%] left-[35%] lg:top-[75%] lg:left-[40%] flex flex-col items-center">
										<p class="text-l font-medium">@SkateSundays</p>
										<div class="flex justify-center items-center">
											<p class="text-l font-medium">900K</p><img src="<?php echo LY_ASSET_URI; ?>/images/youtube-icon.svg"
												alt="" class="px-2 w-auto h-4 ">
										</div>
									</div>
								</div>
								<div class="swiper-slide text-white text-center">
									<img src="<?php echo LY_ASSET_URI; ?>/images/influencer-carousel-3.webp" alt="" class="">
									<div
										class="absolute top-[70%] left-[35%] lg:top-[75%] lg:left-[40%] flex flex-col items-center">
										<p class="text-l font-medium">@MollyMaycer</p>
										<div class="flex justify-center items-center">
											<p class="text-l font-medium">2.8M</p><img src="<?php echo LY_ASSET_URI; ?>/images/instagram-icon.svg"
												alt="" class="px-2 w-auto h-4 ">
										</div>
									</div>
								</div>
								<div class="swiper-slide text-white text-center">
									<img src="<?php echo LY_ASSET_URI; ?>/images/influencer-carousel-4.webp" alt="" class="">
									<div
										class="absolute top-[70%] left-[35%] lg:top-[75%] lg:left-[40%] flex flex-col items-center">
										<p class="text-l font-medium">@jaybrigger</p>
										<div class="flex justify-center items-center">
											<p class="text-l font-medium">280K</p><img src="<?php echo LY_ASSET_URI; ?>/images/instagram-icon.svg"
												alt="" class="px-2 w-auto h-4 ">
										</div>
									</div>
								</div>
								<div class="swiper-slide text-white text-center">
									<img src="<?php echo LY_ASSET_URI; ?>/images/influencer-carousel-5.webp" alt="" class="">
									<div
										class="absolute top-[70%] left-[35%] lg:top-[75%] lg:left-[40%] flex flex-col items-center">
										<p class="text-l font-medium">@chloesimpson</p>
										<div class="flex justify-center items-center">
											<p class="text-l font-medium">1.8M</p>
											<img src="<?php echo LY_ASSET_URI; ?>/images/tiktok-icon.svg" alt="" class="px-2 w-auto h-4 ">
										</div>
									</div>
								</div>
								<div class="swiper-slide text-white text-center">
									<img src="<?php echo LY_ASSET_URI; ?>/images/influencer-carousel-6.webp" alt="" class="">
									<div
										class="absolute top-[70%] left-[35%] lg:top-[75%] lg:left-[40%] flex flex-col items-center">
										<p class="text-l font-medium">@XiounGamer</p>
										<div class="flex justify-center items-center">
											<p class="text-l font-medium">760K</p><img src="<?php echo LY_ASSET_URI; ?>/images/instagram-icon.svg"
												alt="" class="px-2 w-auto h-4 ">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="fullscreen-image" class="relative">
			<div class="relative bg-yellow">
				<div id="fullscreen-image-1" data-scroll-index="4"
					class="bg-cover max-lg:bg-center sticky max-lg:top-[60px] top-0">
					<div class="bg-gradient-to-t from-gray-light via-transparent to-transparent h-[101vh]">
						<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
							<div class="wrap text-white absolute top-[45%] lg:top-[50%]">
								<h2
									class="text-2xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-black w-[90%] lg:w-[85%] mb-8">
									Choose the data that matters most and drive campaign optimization</h2>
								<!-- <p class="text-base md:text-lg xl:text-xl xl:text-2xl font-medium w-[95%] lg:w-[85%]">
									Lolly has been built as your total in-house solution on one platform. Manage
									payments, Review Analytics or collaborate with creators in a few clicks. </p> -->
							</div>
						</div>
					</div>
				</div>
				<div id="fullscreen-image-2" data-scroll-index="5"
					class="bg-cover max-lg:bg-center sticky max-lg:top-[60px] top-0">
					<div class="bg-gradient-to-t from-gray-light via-transparent to-transparent h-[101vh]">
						<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
							<div class="wrap text-white absolute top-[45%] lg:top-[50%]">
								<h2
									class="text-2xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-black w-[90%] lg:w-[85%] mb-8">
									Set your campaign live and watch inbound creator requests roll in</h2>
								<!-- <p class="text-base md:text-lg xl:text-xl xl:text-2xl font-medium w-[95%] lg:w-[75%]">
									Create campaigns that put your budget to work. Select which metrics you would like
									to pay your creators out on or add incentivised bonuses to drive further value. </p> -->
							</div>
						</div>
					</div>
				</div>
				<div id="fullscreen-image-3" data-scroll-index="6"
					class="bg-cover max-lg:center sticky max-lg:top-[60px] top-0">
					<div class="bg-gradient-to-t from-gray-light via-transparent to-transparent h-[101vh]">
						<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
							<div class="wrap text-white absolute top-[45%] lg:top-[50%]">
								<h2
									class="text-2xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-black w-[90%] lg:w-[85%] mb-8">
									Make influencer marketing your most successful performance channel </h2>
								<!-- <p class="text-base md:text-lg xl:text-xl xl:text-2xl font-medium w-[90%] lg:w-[75%]">
									Select which pre-vetted creators you would like to work with. Share brand and
									creative guidelines to ensure your products are authentically and correctly
									represented. </p> -->
							</div>
						</div>
					</div>
				</div>
				<div id="fullscreen-image-4" data-scroll-index="7"
					class="bg-cover max-lg:bg-center sticky max-lg:top-[60px] top-0">
					<div class="bg-gradient-to-t from-gray-light via-transparent to-transparent h-[101vh]">
						<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
							<div class="wrap text-white absolute top-[45%] lg:top-[50%]">
								<h2
									class="text-2xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-black w-[90%] lg:w-[85%] mb-8">
									Add Lolly pixel to see where creators are driving superior value </h2>
								<!-- <p class="text-base md:text-lg xl:text-xl xl:text-2xl font-medium w-[90%] lg:w-[90%]">
									Add your Lolly attribution Pixel to to analyse and optimise and see what creators
									are driving superior value. </p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="feature-accordian" data-scroll-index="8" class="relative">
			<div class="bg-yellow">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16 h-full relative">
					<div class="wrap max-lg:py-12 h-full sticky top-0">
						<h2
							class="lg:absolute top-0 lg:w-[50%] lg:pl-16 lg:pb-24 lg:h-[50vh] lg:flex lg:items-end font-black max-lg:pb-12 text-3xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl w-full max-lg:text-center">
							Get started <br class="max-lg:hidden">with Lolly.
						</h2>
						<div id="accordian" class="relative max-sm:max-w-[320px] m-auto h-full lg:grid lg:grid-cols-2">
							<div id="accodian-items" class="lg:py-[50vh] xl:pl-16">
								<div class="accordian-item mb-16 lg:mb-20 xl:mb-24 2xl:mb-32 opacity-50" data-index="1">
									<div
										class="accoridan-content lg:pr-6 flex flex-col justify-center max-lg:items-center max-lg:pb-4">
										<h3 class="font-bold text-xl lg:text-2xl xl:text-3xl max-lg:text-center">
											Choose your preferred <br class="max-lg:hidden">campaign
										</h3>
									</div>
									<div
										class="accordian-media lg:absolute lg:left-[75%] lg:top-[50%] lg:-translate-x-1/2  lg:-translate-y-1/2 flex justify-center lg:w-max lg:h-max lg:hidden">
											<dotlottie-player
												loop
												mode="normal"
												src="<?php echo LY_ASSET_URI; ?>/lottie/brand-carousel-1.lottie"
												class="h-[300px] md:h-[350px] lg:h-[400px] xl:h-[500px] w-[300px] md:w-[350px] lg:w-[400px] xl:w-[500px]">
											</dotlottie-player>	
									</div>
								</div>
								<div class="accordian-item my-16 lg:my-20 xl:my-24 2xl:my-32 opacity-50" data-index="2">
									<div
										class="accoridan-content lg:pr-6 flex flex-col justify-center max-lg:items-center max-lg:pb-4">
										<h3 class="font-bold text-xl lg:text-2xl xl:text-3xl max-lg:text-center">
											Select your type of <br class="max-lg:hidden">payment
										</h3>

									</div>
									<div
										class="accordian-media lg:absolute lg:left-[75%] lg:top-[50%] lg:-translate-x-1/2  lg:-translate-y-1/2 flex justify-center lg:w-max lg:h-max lg:hidden">
											<dotlottie-player
												loop
												mode="normal"
												src="<?php echo LY_ASSET_URI; ?>/lottie/brand-carousel-2.lottie"
												class="h-[300px] md:h-[350px] lg:h-[400px] xl:h-[500px] w-[300px] md:w-[350px] lg:w-[400px] xl:w-[500px]">
											</dotlottie-player>	
									</div>
								</div>
								<div class="accordian-item my-16 lg:my-20 xl:my-24 2xl:my-32 opacity-50" data-index="3">
									<div
										class="accoridan-content lg:pr-6 flex flex-col justify-center max-lg:items-center max-lg:pb-4">
										<h3 class="font-bold text-xl lg:text-2xl xl:text-3xl max-lg:text-center">
											Choose your platform <br class="max-lg:hidden">and type of post
										</h3>

									</div>
									<div
										class="accordian-media lg:absolute lg:left-[75%] lg:top-[50%] lg:-translate-x-1/2  lg:-translate-y-1/2 flex justify-center lg:w-max lg:h-max lg:hidden">
											<dotlottie-player
												loop
												mode="normal"
												src="<?php echo LY_ASSET_URI; ?>/lottie/brand-carousel-3.lottie"
												class="h-[300px] md:h-[350px] lg:h-[400px] xl:h-[500px] w-[300px] md:w-[350px] lg:w-[400px] xl:w-[500px]">
											</dotlottie-player>	
									</div>
								</div>
								<div class="accordian-item my-16 lg:my-20 xl:my-24 2xl:my-32 opacity-50" data-index="4">
									<div
										class="accoridan-content lg:pr-6 flex flex-col justify-center max-lg:items-center max-lg:pb-4">
										<h3 class="font-bold text-xl lg:text-2xl xl:text-3xl max-lg:text-center">
											Select your budget
										</h3>

									</div>
									<div
										class="accordian-media lg:absolute lg:left-[75%] lg:top-[50%] lg:-translate-x-1/2  lg:-translate-y-1/2 flex justify-center lg:w-max lg:h-max lg:hidden">
											<dotlottie-player
												loop
												mode="normal"
												src="<?php echo LY_ASSET_URI; ?>/lottie/brand-carousel-4.lottie"
												class="h-[300px] md:h-[350px] lg:h-[400px] xl:h-[500px] w-[300px] md:w-[350px] lg:w-[400px] xl:w-[500px]">
											</dotlottie-player>	
									</div>
								</div>
								<div class="accordian-item my-16 lg:my-20 xl:my-24 2xl:my-32 opacity-50" data-index="5">
									<div
										class="accoridan-content lg:pr-6 flex flex-col justify-center max-lg:items-center max-lg:pb-4">
										<h3 class="font-bold text-xl lg:text-2xl xl:text-3xl max-lg:text-center">
											Access our creator <br class="max-lg:hidden">community
										</h3>

									</div>
									<div
										class="accordian-media lg:absolute lg:left-[75%] lg:top-[50%] lg:-translate-x-1/2  lg:-translate-y-1/2 flex justify-center lg:w-max lg:h-max lg:hidden">
											<dotlottie-player
												loop
												mode="normal"
												src="<?php echo LY_ASSET_URI; ?>/lottie/brand-carousel-5.lottie"
												class="h-[300px] md:h-[350px] lg:h-[400px] xl:h-[500px] w-[300px] md:w-[350px] lg:w-[400px] xl:w-[500px]">
											</dotlottie-player>	
									</div>
								</div>
								<div class="accordian-item mt-16 lg:mt-20 xl:mt-2 2xl:mt-32 opacity-50" data-index="6">
									<div
										class="accoridan-content lg:pr-6 flex flex-col justify-center max-lg:items-center max-lg:pb-4">
										<h3 class="font-bold text-xl lg:text-2xl xl:text-3xl max-lg:text-center">
											Analyze and optimize <br class="max-lg:hidden">your data in real time
										</h3>

									</div>
									<div
										class="accordian-media lg:absolute lg:left-[75%] lg:top-[50%] lg:-translate-x-1/2  lg:-translate-y-1/2 flex justify-center lg:w-max lg:h-max lg:hidden">
											<dotlottie-player
												loop
												mode="normal"
												src="<?php echo LY_ASSET_URI; ?>/lottie/brand-carousel-6.lottie"
												class="h-[300px] md:h-[350px] lg:h-[400px] xl:h-[500px] w-[300px] md:w-[350px] lg:w-[400px] xl:w-[500px]">
											</dotlottie-player>
									</div>
								</div>
							</div>
							<div id="accordian-desktop-media"
								class="max-lg:hidden h-[100vh] sticky top-0 flex justify-center items-center">
								<div class=" relative lg:w-max lg:h-max rounded-lg">
									<dotlottie-player
										loop
										mode="normal"
										src="<?php echo LY_ASSET_URI; ?>/lottie/accordion-desktop-media-placeholder.lottie"
										class="h-[300px] md:h-[350px] lg:h-[400px] xl:h-[500px] w-[300px] md:w-[350px] lg:w-[400px] xl:w-[500px]">
									</dotlottie-player>
									<div id="accordian-desktop-media-target" class="absolute top-0 bottom-0 left-0 right-0 h-full w-full" >

									</div>
								</div>
							</div>
						</div>
						<div
							class="lg:absolute bottom-0 lg:w-[50%] lg:pl-16 lg:pt-24 lg:h-[50vh] flex lg:items-start max-lg:justify-center max-lg:pt-12 ">
							<button
								class="text-black hover:text-white hover:bg-black border-black border-2 text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
								<a href="/get-started/">Get Started</a>
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="brand-video" data-scroll-index="9" class="relative">
			<div class="bg-purple">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
					<div class="wrap py-12 lg:py-20 xl:py-24 flex flex-col items-center">
						<h1
							class="font-black text-3xl md:text-4xl xl:text-5xl xl:text-6xl 2xl:text-7xl pb-5 lg:pb-10 text-center">
							Want to get started?
						</h1>
						<p
							class="text-md md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl pb-6 lg:pb-12 text-center font-medium lg:font-semibold">
							We’ve simplified the process, so even the CFO can get going!
						</p>
						<div id="video" class="relative mb-12 lg:mb-24">
							<video preload="none" poster="<?php echo LY_ASSET_URI; ?>/images/Lolly_overview_brands.webp"
								class="video rounded-2xl m-auto h-[200px] lg:h-[500px]" height="400">
								<source src="<?php echo LY_ASSET_URI; ?>/videos/lolly-overview-v2.mp4" type="video/mp4">
							</video>
							<img id="ly-play"
								class="absolute ly-play w-[40px] lg:h-[100px] lg:w-[100px] top-[50%] left-[50%] -translate-x-1/2 -translate-y-1/2 rounded-full bg-trans-black"
								src="<?php echo LY_ASSET_URI; ?>/images/play.svg" alt="">
							<img style="display: none;" class="absolute ly-pause h-[100px] w-[100px]" src="" alt="">
							<img style="display: none;" class="absolute ly-close h-[100px] w-[100px]" src="" alt="">
						</div>
						<button
							class="bg-black hover:bg-white text-white hover:text-black border-black hover:border-white border-2 text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
							<a href="/get-started/">Get Started</a>
						</button>
					</div>
				</div>
			</div>
		</section>
		<aside id="scroll-down"
			class="hidden fixed z-50 w-max cursor-pointer mx-auto left-0 right-0 bottom-[20px] bg-[#2B2A357a] backdrop-blur-2xl rounded-full">
			<img src="<?php echo LY_ASSET_URI; ?>/images/scroll-down.svg" width="40" height="40" alt="" srcset="">
		</aside>
	</main>

<script>


function lollyAboutVideo1() {

let brandVideo = document.querySelector('.video');
let brandPlayButton = document.getElementById('ly-play1');
let brandVideoOverlay = document.getElementById('ly-play1');

if (null !== brandVideo) {
	brandPlayButton.addEventListener('click', function () {
		brandVideo.style.display = 'block';
		brandVideo.play();
		// brandPlayButton.style.display = 'none';
		//brandVideoOverlay.style.display = 'none';
		if (brandVideo.requestFullscreen) brandVideo.requestFullscreen();
		else if (brandVideo.ebkitRequestFullscreen) brandVideo.webkitRequestFullscreen();
		else if (brandVideo.mozRequestFullScreen) brandVideo.mozRequestFullScreen();
		else if (brandVideo.msRequestFullscreen) brandVideo.msRequestFullscreen();
		else if (brandVideo.webkitEnterFullscreen) brandVideo.webkitEnterFullscreen();

	});
	// brandVideo.addEventListener('pause', function () {
	// 	brandVideo.pause();
	// 	brandVideoOverlay.style.display = 'block';
		
	// });
	// brandVideo.addEventListener('ended', function () {
	// 	brandVideoOverlay.style.display = 'block';
	// 	brandPlayButton.style.display = 'block';
		
	// });
	// brandVideo.addEventListener('click', function (event) {
	// 	brandVideo.style.display = 'none';
	// 	event.preventDefault();
	// 	if (brandVideo.paused) {
	// 		brandVideo.play();
	// 		brandVideoOverlay.style.display = 'none';
	// 	} else {
	// 		brandVideo.pause();
	// 		brandVideoOverlay.style.display = 'block';
	// 	}
	// });
}


}

document.addEventListener("DOMContentLoaded", () => {

lollyAboutVideo1();
});

document.body.addEventListener('keydown', function(e) {
	if (e.key == "Escape") {
		
		document.exitFullscreen();
	}
});

function isFullScreen() {
	
}

function notFullScreen() {

	let brandVideo = document.querySelector('.video');
	brandVideo.pause();
	brandVideo.load();

	let brandPlayButton = document.getElementById('ly-play');
	brandPlayButton.style.display = 'block';
	// brandVideo.currentTime = 0;
	
}

document.addEventListener("fullscreenchange", function () {
if (document.fullscreen) {
    isFullScreen();
} else {
    notFullScreen();
}
}, false);

document.addEventListener("mozfullscreenchange", function () {
if (document.mozFullScreen) {
    isFullScreen();
} else {
    notFullScreen();
}
}, false);

document.addEventListener("webkitfullscreenchange", function () {
if (document.webkitIsFullScreen) {
    isFullScreen();
} else {
    notFullScreen();
}
}, false);
</script>
<?php

get_footer(); 


