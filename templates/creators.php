<?php
/**
 * Page template for Brands
 *
 * @package lolly
 */

get_header();

?>
	<main id="creators" >
		<section id="hero" data-scroll-index="1" class="">
			<div class="bg-purple lg:min-h-[100vh]">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
					<div
						class="wrap text-center lg:h-full lg:text-left lg:grid lg:grid-cols-[2fr,3fr] pt-24 lg:pt-32 pb-12 lg:pb-20 xl:pb-24 lg:min-h-[100vh]">
						<div
							class="content text-black lg:self-center flex flex-col items-start items-center lg:items-start max-lg:mb-4">
							<h1
								class="font-extrabold text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl pb-5 lg:pb-10">
								Where creators come to make money
							</h1>
							<p class="max-sm:max-w-[250px] text-md lg:text-lg xl:text-xl font-medium pb-6 lg:pb-12">
								Work with brands that your audience loves
							</p>
							<button
								class="max-lg:hidden bg-black border-black hover:bg-white hover:border-white border-2 text-white hover:text-black text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
								<a target="_blank" href="https://creator.lolly.com/authentication/sign-up/">Get Started</a>
							</button>
						</div>
						<div class="media lg:self-center flex flex-col items-center lg:items-end">
							<video preload="metadata" autoplay loop muted playsinline fetchpriority="high" poster="<?php echo LY_ASSET_URI; ?>/images/creators-hero.webp" class="lg:max-h-[500px]">
								<source src="<?php echo LY_ASSET_URI; ?>/videos/creators-hero.mov" type='video/mp4;codecs=hvc1'>
								<source src="<?php echo LY_ASSET_URI; ?>/videos/creators-hero.webm" type="video/webm">
							</video>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="influencer-carousel" data-scroll-index="2" class="overflow-x-hidden relative">
			<div class="bg-black lg:min-h-[100vh]">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16 lg:min-h-[100vh] flex items-center">
					<div class="wrap py-12 lg:py-20 xl:py-24 h-full min-w-0">
						<h2
							class="text-white lg:max-w-[60%] m-auto font-black text-2xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl pb-16 text-center">
							Showcase your talent and be discovered
						</h2>
						<div id="carousel" data-video-carousel="true" class="swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide text-white text-center h-[320px] w-[180px] mx-4">
									<video muted playsinline height="320" class="h-[320px] rounded-lg" poster="<?php echo LY_ASSET_URI; ?>/images/creator-carousel/clip-1.webp">
										<source src="<?php echo LY_ASSET_URI; ?>/videos/creator-carousel/clip-1.mp4" type="video/mp4 ">
									</video>
								</div>
								<div class="swiper-slide text-white text-center h-[320px] w-[180px] mx-4">
									<video muted playsinline height="320" class="h-[320px] rounded-lg" poster="<?php echo LY_ASSET_URI; ?>/images/creator-carousel/clip-2.webp">
										<source src="<?php echo LY_ASSET_URI; ?>/videos/creator-carousel/clip-2.mp4" type="video/mp4 ">
									</video>
								</div>
								<div class="swiper-slide text-white text-center h-[320px] w-[180px] mx-4">
									<video muted playsinline height="320" class="h-[320px] rounded-lg" poster="<?php echo LY_ASSET_URI; ?>/images/creator-carousel/clip-3.webp">
										<source src="<?php echo LY_ASSET_URI; ?>/videos/creator-carousel/clip-3.mp4" type="video/mp4 ">
									</video>
								</div>
								<div class="swiper-slide text-white text-center h-[320px] w-[180px] mx-4">
									<video muted playsinline height="320" class="h-[320px] rounded-lg" poster="<?php echo LY_ASSET_URI; ?>/images/creator-carousel/clip-4.webp">
										<source src="<?php echo LY_ASSET_URI; ?>/videos/creator-carousel/clip-4.mp4" type="video/mp4 ">
									</video>
								</div>
								<div class="swiper-slide text-white text-center h-[320px] w-[180px] mx-4">
									<video muted playsinline height="320" class="h-[320px] rounded-lg" poster="<?php echo LY_ASSET_URI; ?>/images/creator-carousel/clip-5.webp">
										<source src="<?php echo LY_ASSET_URI; ?>/videos/creator-carousel/clip-5.mp4" type="video/mp4 ">
									</video>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="post-hero" data-scroll-index="3" class="relative">
			<div class="bg-yellow lg:min-h-[100vh]">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16 lg:h-full">
					<div
						class="wrap max-sm:flex max-sm:flex-col-reverse text-center lg:h-full lg:text-left lg:grid lg:grid-cols-2 py-12 lg:py-20 xl:py-24 lg:min-h-[100vh]">
						<div class="media lg:self-center lg:pr-16 flex flex-col items-center">
							<video preload="metadata" autoplay loop muted playsinline poster="<?php echo LY_ASSET_URI; ?>/images/creators-post-hero.webp"class="lg:max-h-[500px]">
								<source src="<?php echo LY_ASSET_URI; ?>/videos/creators-post-hero.mov" type='video/mp4;codecs=hvc1'>
								<source src="<?php echo LY_ASSET_URI; ?>/videos/creators-post-hero.webm" type="video/webm">
							</video>
						</div>
						<div
							class="content lg:self-center lg:pl-16 max-lg:mb-6 flex flex-col items-center lg:items-start">
							<h2 class="font-black text-xl lg:text-3xl xl:text-4xl 2xl:text-5xl pb-5 lg:pb-10">
								Connect, collaborate and create content for the brands you love
							</h2>
							<p class="text-md lg:text-lg xl:text-xl pb-6 lg:pb-12 font-medium">
								Lolly is built, so you can manage your full creator ecosystem in one place, hassle-free.
							</p>
							<button
								class="text-black hover:text-white hover:bg-black border-black border-2 text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
								<a target="_blank" href="https://creator.lolly.com/authentication/sign-up/">Get Started</a>
							</button>
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
									class="text-2xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-black w-[80%] lg:w-[75%] mb-8">
									Discover brands that want to work with you</h2>
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
									class="text-2xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-black w-[80%] lg:w-[75%] mb-8">
									Analyze which content works best for your audience</h2>
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
									class="text-2xl md:text-3xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-black w-[80%] lg:w-[75%] mb-8">
									Be at ease with Lolly Payment protection</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="feature-accordian" data-scroll-index="7" class="relative">
			<div class="bg-yellow">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16 h-full relative">
					<div class="wrap max-lg:py-12 h-full sticky top-0">
						<h2
							class="lg:absolute top-0 lg:w-[50%] lg:pl-40 lg:pb-24 lg:h-[50vh] lg:flex lg:items-end font-black max-lg:pb-12 text-3xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl w-full max-lg:text-center">
							Get started <br class="max-lg:hidden">with Lolly.
						</h2>
						<div id="accordian" class="relative max-sm:max-w-[320px] m-auto h-full lg:grid lg:grid-cols-2">
							<div id="accodian-items" class="lg:py-[50vh] xl:pl-40">
								<div class="accordian-item mb-16 lg:mb-20 xl:mb-24 2xl:mb-32 opacity-50" data-index="1">
									<div
										class="accoridan-content lg:pr-6 flex flex-col justify-center max-lg:items-center max-lg:pb-4">
										<h3 class="font-bold text-xl lg:text-2xl xl:text-3xl max-lg:text-center">
											Sign Up in Minutes
										</h3>
									</div>
									<div
										class="accordian-media lg:absolute lg:left-[75%] lg:top-[50%] lg:-translate-x-1/2  lg:-translate-y-1/2 flex justify-center lg:w-max lg:h-max lg:hidden">
											<dotlottie-player
												loop
												mode="normal"
												src="<?php echo LY_ASSET_URI; ?>/lottie/creator-carousel-1.lottie"
												class="h-[300px] md:h-[350px] lg:h-[400px] xl:h-[500px] w-[300px] md:w-[350px] lg:w-[400px] xl:w-[500px]">
											</dotlottie-player>	
									</div>
								</div>
								<div class="accordian-item my-16 lg:my-20 xl:my-24 2xl:my-32 opacity-50" data-index="2">
									<div
										class="accoridan-content lg:pr-6 flex flex-col justify-center max-lg:items-center max-lg:pb-4">
										<h3 class="font-bold text-xl lg:text-2xl xl:text-3xl max-lg:text-center">
											Collaborate with <br class="max-lg:hidden">Brands
										</h3>

									</div>
									<div
										class="accordian-media lg:absolute lg:left-[75%] lg:top-[50%] lg:-translate-x-1/2  lg:-translate-y-1/2 flex justify-center lg:w-max lg:h-max lg:hidden">
											<dotlottie-player
												loop
												mode="normal"
												src="<?php echo LY_ASSET_URI; ?>/lottie/creator-carousel-2.lottie"
												class="h-[300px] md:h-[350px] lg:h-[400px] xl:h-[500px] w-[300px] md:w-[350px] lg:w-[400px] xl:w-[500px]">
											</dotlottie-player>	
									</div>
								</div>
								<div class="accordian-item mt-16 lg:mt-20 xl:mt-24 2xl:mt-32 opacity-50" data-index="3">
									<div
										class="accoridan-content lg:pr-6 flex flex-col justify-center max-lg:items-center max-lg:pb-4">
										<h3 class="font-bold text-xl lg:text-2xl xl:text-3xl max-lg:text-center">
											Get Paid in Seconds
										</h3>

									</div>
									<div
										class="accordian-media lg:absolute lg:left-[75%] lg:top-[50%] lg:-translate-x-1/2  lg:-translate-y-1/2 flex justify-center lg:w-max lg:h-max lg:hidden">
											<dotlottie-player
												loop
												mode="normal"
												src="<?php echo LY_ASSET_URI; ?>/lottie/creator-carousel-3.lottie"
												class="h-[300px] md:h-[350px] lg:h-[400px] xl:h-[500px] w-[300px] md:w-[350px] lg:w-[400px] xl:w-[500px]">
											</dotlottie-player>	
									</div>
								</div>
							</div>
							<div id="accordian-desktop-media"
								class="max-lg:hidden h-[100vh] sticky top-0 flex justify-center items-center">
								<div class=" relative lg:w-max lg:h-max rounded-lg ">
									<dotlottie-player
										loop
										mode="normal"
										src="<?php echo LY_ASSET_URI; ?>/lottie/accordion-desktop-media-placeholder-creator.lottie"
										class="h-[300px] md:h-[350px] lg:h-[400px] xl:h-[500px] w-[300px] md:w-[350px] lg:w-[400px] xl:w-[500px]">
									</dotlottie-player>	
									<div id="accordian-desktop-media-target" class="absolute top-0 bottom-0 left-0 right-0 h-full w-full" >

									</div>
								</div>
							</div>
						</div>
						<div
							class="lg:absolute bottom-0 lg:w-[50%] lg:pl-40 lg:pt-24 lg:h-[50vh] flex lg:items-start max-lg:justify-center max-lg:pt-12">
							<button
								class="text-black hover:text-white hover:bg-black border-black border-2 text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
								<a target="_blank" href="https://creator.lolly.com/authentication/sign-up/">Get Started</a>
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="brand-video" data-scroll-index="8" class="relative">
			<div class="bg-purple">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
					<div class="wrap py-12 lg:py-20 xl:py-24 flex flex-col items-center">
						<h1
							class="font-black text-3xl md:text-4xl xl:text-5xl xl:text-6xl 2xl:text-7xl pb-5 lg:pb-10 text-center">
							Want to get started?
						</h1>
						<p
							class="text-md md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl pb-6 lg:pb-12 text-center font-medium lg:font-semibold">
							Start growing your income today with Lolly!
						</p>
						<div id="video" class="relative mb-12 lg:mb-24">
							<video poster="<?php echo LY_ASSET_URI; ?>/images/Lolly_overview_creators.webp"
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
							<a target="_blank" href="https://creator.lolly.com/authentication/sign-up/">Get Started</a>
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
<?php

get_footer();
