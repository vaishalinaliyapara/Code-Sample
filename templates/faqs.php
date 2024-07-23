<?php
/**
 * Page template for Brands
 *
 * @package lolly
 */

get_header();

?>
	<main id="faq">
		<section id="faq-header" class="bg-black">
			<div 
				class="container flex flex-col text-center px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16 pt-20 lg:pt-24 pb-8 lg:pb-12">
				<h1 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl text-white font-black pb-4"> Frequently Asked Questions </h1>
				<div>
					<button
						class="bg-yellow border-white text-black text-md lg:text-lg px-8 lg:px-10 py-2 mt-8 rounded-lg font-bold faq-selector" data-target="faq-brands">
						I am a brand
					</button>
					<button
						class="bg-purple border-white text-black text-md lg:text-lg px-8 lg:px-10 py-2 m-4 rounded-lg font-bold faq-selector" data-target="faq-creators">
						I am a creator
					</button>
				</div>
			</div>
		</section>
		<section id="faq-brands" class="z-[2] bg-yellow">
			<div
				class="container flex flex-col text-center px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16 py-8 lg:py-12">
				<div id="brand-faq-items" class="max-w-[900px] w-full m-auto">
					<div class="border-2 border-black text-left px-8 py-4 rounded-2xl my-4 lg:my-8">
						<div id="faq-question" class="flex items-center">
							<h2 class="text-md  lg:text-lg xl:text-xl font-semibold"> How can Lolly help you with your Influencer Marketing? </h2>
							<div id="faq-toggle-icon" class="relative w-[20px] h-[100%] ml-auto">
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black"></span>
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black rotate-90"></span>
							</div>
						</div>
						<div class="faq-answer hidden">
							<p class="mt-4 text-base  lg:text-lg font-medium">Lolly’s platform will help you discover Creators from our Database of over 10 million people across TikTok, YouTube and Instagram. You can filter by audience demographics, follower count, and engagement rates. You can then communicate to Creators either 1 by 1 or 1,000’s at once using our advanced CRM. </p>
						</div>
					</div>
					<div class="border-2 border-black text-left px-8 py-4 rounded-2xl my-4 lg:my-8">
						<div id="faq-question" class="flex items-center">
							<h2 class="text-md  lg:text-lg xl:text-xl font-semibold"> Why Lolly? </h2>
							<div id="faq-toggle-icon" class="relative w-[20px] h-[100%] ml-auto">
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black"></span>
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black rotate-90"></span>
							</div>
						</div>
						<div class="faq-answer hidden">
							<p class="mt-4 text-base  lg:text-lg font-medium"> Lolly is an influencer marketing platform built to measure performance for influencer marketing campaigns. </p>
						</div>
					</div>
					<div class="border-2 border-black text-left px-8 py-4 rounded-2xl my-4 lg:my-8">
						<div id="faq-question" class="flex items-center">
							<h2 class="text-md  lg:text-lg xl:text-xl font-semibold">What features does Lolly offer? </h2>
							<div id="faq-toggle-icon" class="relative w-[20px] h-[100%] ml-auto">
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black"></span>
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black rotate-90"></span>
							</div>
						</div>
						<div class="faq-answer hidden">
							<p class="mt-4 text-base  lg:text-lg font-medium"> Lolly offers a discovery tool where you’re able to search any influencer based on followers, engagement rate, location, and the category they are identified as. Other advanced tools include, CRM – helps automate messages to influencers, performance-based dashboards – shows analytics for influencers and the campaigns they participated in. </p>
						</div>
					</div>
					<div class="border-2 border-black text-left px-8 py-4 rounded-2xl my-4 lg:my-8">
						<div id="faq-question" class="flex items-center">
							<h2 class="text-md  lg:text-lg xl:text-xl font-semibold">Can I pay influencers within Lolly? </h2>
							<div id="faq-toggle-icon" class="relative w-[20px] h-[100%] ml-auto">
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black"></span>
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black rotate-90"></span>
							</div>
						</div>
						<div class="faq-answer hidden">
							<p class="mt-4 text-base  lg:text-lg font-medium"> YES, Lolly is able to directly pay influencers for the campaigns they participated in. </p>
						</div>
					</div>
					<div class="border-2 border-black text-left px-8 py-4 rounded-2xl my-4 lg:my-8">
						<div id="faq-question" class="flex items-center">
							<h2 class="text-md  lg:text-lg xl:text-xl font-semibold">Who uses Lolly? </h2>
							<div id="faq-toggle-icon" class="relative w-[20px] h-[100%] ml-auto">
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black"></span>
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black rotate-90"></span>
							</div>
						</div>
						<div class="faq-answer hidden">
							<p class="mt-4 text-base  lg:text-lg font-medium"> Lolly is open to any business that sells a product or service, whether you are DTC ecommerce brand or a tech company providing services. Feel free to set up a demo and talk to one of our brilliant sales reps to see if your brand would be a great fit on Lolly. </p>
						</div>
					</div>
					<div class="border-2 border-black text-left px-8 py-4 rounded-2xl my-4 lg:my-8">
						<div id="faq-question" class="flex items-center">
							<h2 class="text-md  lg:text-lg xl:text-xl font-semibold">How much does Lolly cost? </h2>
							<div id="faq-toggle-icon" class="relative w-[20px] h-[100%] ml-auto">
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black"></span>
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black rotate-90"></span>
							</div>
						</div>
						<div class="faq-answer hidden">
							<p class="mt-4 text-base  lg:text-lg font-medium"> We create bespoke packages that are competitive in pricing. We ensure our clients have the best experience using the platform and are always here to provide recommendations for campaigns. </p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="faq-creators" class="z-[2] bg-purple hidden">
			<div
				class="container flex flex-col text-center px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16 py-8 lg:py-12">
				<div id="creators-faq-items" class="max-w-[900px] w-full m-auto">
					<div class="border-2 border-black text-left px-8 py-4 rounded-2xl my-4 lg:my-8">
						<div id="faq-question" class="flex items-center">
							<h2 class="text-md  lg:text-lg xl:text-xl font-semibold"> What is Lolly?  </h2>
							<div id="faq-toggle-icon" class="relative w-[20px] h-[100%] ml-auto">
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black"></span>
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black rotate-90"></span>
							</div>
						</div>
						<div class="faq-answer hidden">
							<p class="mt-4 text-base  lg:text-lg font-medium"> Lolly is an influencer marketing platform helping Creators connect with brands to increase following and engagement rate by partaking in campaigns including but not limited to, User Generated Content, Performance Based Pay, and Pay Per Post campaigns. </p>
						</div>
					</div>
					<div class="border-2 border-black text-left px-8 py-4 rounded-2xl my-4 lg:my-8">
						<div id="faq-question" class="flex items-center">
							<h2 class="text-md  lg:text-lg xl:text-xl font-semibold"> How does Lolly work? </h2>
							<div id="faq-toggle-icon" class="relative w-[20px] h-[100%] ml-auto">
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black"></span>
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black rotate-90"></span>
							</div>
						</div>
						<div class="faq-answer hidden">
							<p class="mt-4 text-base  lg:text-lg font-medium"> We have created a simple and seamless way to to create an account with Lolly. All you have to do is sign up, connect your socials, and fill out your personal profile. Once you have done that, what we call “Jobs” will start appearing for you to apply and work with our amazing brands. </p>
						</div>
					</div>
					<div class="border-2 border-black text-left px-8 py-4 rounded-2xl my-4 lg:my-8">
						<div id="faq-question" class="flex items-center">
							<h2 class="text-md  lg:text-lg xl:text-xl font-semibold">Are there any requirements to join? </h2>
							<div id="faq-toggle-icon" class="relative w-[20px] h-[100%] ml-auto">
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black"></span>
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black rotate-90"></span>
							</div>
						</div>
						<div class="faq-answer hidden">
							<p class="mt-4 text-base  lg:text-lg font-medium"> The only criteria for our creators is to have over 1,000 followers </p>
						</div>
					</div>
					<div class="border-2 border-black text-left px-8 py-4 rounded-2xl my-4 lg:my-8">
						<div id="faq-question" class="flex items-center">
							<h2 class="text-md  lg:text-lg xl:text-xl font-semibold">What socials can I connect to Lolly? </h2>
							<div id="faq-toggle-icon" class="relative w-[20px] h-[100%] ml-auto">
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black"></span>
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black rotate-90"></span>
							</div>
						</div>
						<div class="faq-answer hidden">
							<p class="mt-4 text-base  lg:text-lg font-medium"> You can connect your Instagram, TikTok and YouTube accounts </p>
						</div>
					</div>
					<div class="border-2 border-black text-left px-8 py-4 rounded-2xl my-4 lg:my-8">
						<div id="faq-question" class="flex items-center">
							<h2 class="text-md  lg:text-lg xl:text-xl font-semibold">Why should I join Lolly as a Creator? </h2>
							<div id="faq-toggle-icon" class="relative w-[20px] h-[100%] ml-auto">
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black"></span>
								<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black rotate-90"></span>
							</div>
						</div>
						<div class="faq-answer hidden">
							<p class="mt-4 text-base  lg:text-lg font-medium"> We actually help our Creators become true engaging influencers by providing advice and feedback while they are on the platform. </p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php
get_footer();
