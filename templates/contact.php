<?php
/**
 * Page template for Brands
 *
 * @package lolly
 */

get_header();
?>
	<main id='contact'>
		<section id="hero">
			<div class="bg-black ">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
					<div
						class="wrap text-center lg:h-full lg:text-left lg:flex lg:flex-row-reverse lg:justify-evenly pt-24 lg:pt-32 pb-12 lg:pb-20 xl:pb-24">
						<div
							class="content text-white lg:self-center flex flex-col items-center max-lg:mb-4">
							<h1
								class="font-extrabold text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl pb-5 lg:pb-10 text-[#A597FF]">
								Contact Us
							</h1>
							<!-- <p class="max-lg:hidden text-md lg:text-lg xl:text-xl font-medium pb-6 lg:pb-12">
								Connect with vetted creators to drive sales and accelerate brand growth
							</p> -->
							<div id="form-wrap" class="flex flex-col items-center bg-white p-8 pb-4 lg:p-12 lg:pb-8 rounded-lg">
								<div id="form">
									<?php
									echo do_shortcode( '[gravityform id="4" title="false" description="false" ajax="true"]' );
									?>
								</div>
							</div>
						</div>
						<div class="relative flex flex-col max-lg:mt-12 mt-8">
							<h3 class="font-bold text-white text-xl lg:text-2xl xl:text-3xl max-lg:text-center">Connect with one of our <br class="max-lg:hidden">global offices</h3>
							<div class="flex max-lg:flex-col">
								<div
									class="bg-yellow text-center rounded-lg px-8 py-6 mt-8 min-w-[250px]">
									<h4 class="text-black text-lg lg:text-xl mb-2 font-bold">
									Los Angeles
									</h4>
									<p class="text-black font-medium lg:text-base">
										1999 Avenue of the Stars<br>
										Los Angeles<br>
										CA 90067<br>
										USA
									</p>

								</div>
								<div
									class="bg-purple text-center rounded-lg px-8 py-6 mt-8 lg:ml-4 min-w-[250px]">
									<h4 class="text-black text-lg lg:text-xl mb-2 font-bold">
									London
									</h4>
									<p class="text-black font-medium lg:text-base">
										91 Brick Lane<br>
										London<br>
										E1 6QL<br>
										UK
									</p>

								</div>
							</div>
							<h3 class="font-bold text-white text-lg lg:text-xl xl:text-2xl max-lg:text-center mt-12">Have more questions?</h3>
							<div class="flex max-lg:flex-col">
								<button
									class="bg-white border-white border-2 text-black hover:text-white hover:bg-black rounded-lg px-8 py-3 mt-8 min-w-[250px] text-center text-md lg:text-lg font-bold">
									<a href="/lp/lolly-get-a-demo">Talk To Sales</a> 
								</button>
								<button
									class="bg-white border-white border-2 text-black hover:text-white hover:bg-black rounded-lg px-8 py-3 mt-8 lg:ml-4 min-w-[250px] text-center text-md lg:text-lg font-bold">
									<a href="https://lolly.zohodesk.in/" target="_blank">Talk To Support</a>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php

get_footer();
