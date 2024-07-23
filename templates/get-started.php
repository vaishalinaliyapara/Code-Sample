<?php
/**
 * Landing page template
 *
 * @package lolly
 */

get_header();

?>

<main id="lp" >
	<section id="hero">
		<div class="bg-black ">
			<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
				<div
					class="wrap text-center lg:h-full lg:text-left lg:grid lg:grid-cols-2 pt-24 lg:pt-32 pb-12 lg:pb-20 xl:pb-24">
					<div
						class="content text-white lg:self-center lg:pr-12 flex flex-col items-start items-center lg:items-start max-lg:mb-4">
						<h1
							class="font-extrabold text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl pb-5 lg:pb-10 text-[#A597FF]">
							The #1 Influencer Marketing Solution
						</h1>
						<p class="max-lg:hidden text-md lg:text-lg xl:text-xl font-medium pb-6 lg:pb-12">
							Discover over 20M+ creators across Instagram, TikTok and YouTube to launch campaigns at scale.
						</p>
					</div>
					<div class=" relative lg:self-center flex flex-col items-center lg:items-end justify-center">
						<div id="form-wrap" class="flex flex-col items-center bg-white p-8 pb-4 lg:p-12 lg:pb-8 rounded-lg">
							<div id="form">
								<?php
								echo do_shortcode( '[gravityform id="5" title="false" description="false" ajax="true"]' );
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="bg-yellow">
			<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16 py-12 lg:py-20 xl:py-24 flex flex-col items-center">
				<h2 class="font-black text-center text-xl lg:text-3xl xl:text-4xl 2xl:text-5xl pb-8 lg:pb-16 max-w-[900px] m-auto">Improvise your ROI with the Best Influencer Marketing Platform</h2>
				<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-8 pb-8 lg:pb-16">
					<div class="bg-black px-12 py-16 rounded-2xl">
						<h3 class="text-white font-bold text-md lg:text-lg xl:text-xl 2xl:text-2xl mb-3 lg:mb-6">Your Search Expert</h2>
						<p class="text-white text-medium text-base lg:text-md">Accelerate your influencer search process by using our easy filtering system to search our comprehensive database of over 20 Million+ influencers and get your ideal influencers in no time. 
						</p>
					</div>
					<div class="bg-black px-12 py-16 rounded-2xl">
						<h3 class="text-white font-bold text-md lg:text-lg xl:text-xl 2xl:text-2xl mb-3 lg:mb-6">Integrated CRM</h2>
						<p class="text-white text-medium text-base lg:text-md ">Our easy-to-use platform with automated workflows and a built-in CRM solution allows you to seamlessly connect, manage, and hire influencers at scale for executing your Influencer marketing campaign.
						</p>
					</div>
					<div class="bg-black px-12 py-16 rounded-2xl">
						<h3 class="text-white font-bold text-md lg:text-lg xl:text-xl 2xl:text-2xl mb-3 lg:mb-6">Achieve Precision</h2>
						<p class="text-white text-medium text-base lg:text-md">Our solution enables you to audit campaign performance in detail, providing valuable insight into the effectiveness of each post and allowing you to track your total spend, CPM, impressions, engagement rate, and other relevant metrics.
						</p>
					</div>				
				</div>
				<button
					class="bg-black hover:bg-white text-white hover:text-black border-black border-2 text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
					<a href="#hero">Get Started</a>
				</button>
			</div>
		</div>
	</section>
	<section>
		<div class="bg-purple">
			<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16 py-12 lg:py-20 xl:py-24 flex flex-col items-center">
				<h2 class="font-black text-center text-xl lg:text-3xl xl:text-4xl 2xl:text-5xl pb-8 lg:pb-16 max-w-[900px] m-auto">We Can Help You</h2>
				<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-8 pb-8 lg:pb-16">
					<div class="rounded-2xl overflow-hidden shadow-lg bg-black text-white p-12">

							<h3 class="text-white font-bold text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl mb-3 lg:mb-6">70%</h3>
							<p class="text-white text-medium text-base lg:text-md">
								The Newer Generation Trusts Influencers More Than Traditional Celebrities
							</p>

					</div>
					<div class="rounded-2xl overflow-hidden shadow-lg bg-black text-white p-12">

							<h3 class="text-white font-bold text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl mb-3 lg:mb-6">6x</h3>
							<p class="text-white text-medium text-base lg:text-md">
								Businesses earn 6x for each dollar spent on influencers, with some seeing as much as 18x
							</p>

					</div>
					<div class="rounded-2xl overflow-hidden shadow-lg bg-black text-white p-12">

							<h3 class="text-white font-bold text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl mb-3 lg:mb-6">82%</h3>
							<p class="text-white text-medium text-base lg:text-md">
								People Trust Social Networks to Guide Purchasing Decisions
							</p>

					</div>
				</div>
				<button
					class="bg-black hover:bg-white text-white hover:text-black border-black border-2 text-md lg:text-lg px-8 lg:px-10 py-2 rounded-lg font-semibold">
					<a href="#hero">Get Started</a>
				</button>
			</div>
		</div>
	</section>
</main>

<?php
get_template_part( 'template-parts/gform' );

get_template_part( 'template-parts/calendly' );

get_footer();
