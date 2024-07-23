<?php
/**
 * Page template for Brands
 *
 * @package lolly
 */

?>
	<footer id="site-footer" class="relative z-[100]">
		<div class="bg-black py-4">
			<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
				<div class=" flex w-full justify-between max-lg:flex-col max-lg:text-center">
					<div id="footer-left" class="max-lg:my-12">
						<div class="logo text-white pb-2 text-4xl font-bold max-lg:mb-4">
							<a href="/">lolly</a>
						</div>
						<div class="copy-right max-lg:hidden text-white">
							© 2024 Lolly. All right reserved.
						</div>
					</div>
					<div class="footer-middle flex max-lg:flex-col justify-between items-center max-lg:mb-12">
						<div class="text-white font-medium text-md px-4 max-lg:mb-8">
							<a href="/faqs">FAQs</a>
						</div>
						<div class="text-white font-medium text-md px-4 max-lg:mb-8">
							<a href="/contact-us">Contact</a>
						</div>
						<div class="text-white font-medium text-md px-4 max-lg:mb-8">
							<a href="/privacy">Privacy Policy</a>
						</div>
						<div class="text-white font-medium text-md px-4 max-lg:mb-8">
							<a href="/terms">Terms of Use</a>
						</div>
					</div>
					<div class="footer-end flex items-center justify-center max-lg:px-24 max-lg:mb-12">
						<!-- <div class="text-white px-4 ">
							<img src="<?php echo LY_ASSET_URI; ?>/images/Icon awesome-facebook.svg" alt="" class="w-5">
						</div> -->
						<a href="https://www.instagram.com/lollyapp/" target="_blank" class="text-white px-4">
							<img src="<?php echo LY_ASSET_URI; ?>/images/instagram-icon.svg" alt="" class="w-5">
						</a>
						<!-- <a href="javascript:void(0)" target="_blank" class="text-white px-4">
							<img src="<?php echo LY_ASSET_URI; ?>/images/tiktok-icon.svg" alt="" class="w-5">
						</a> -->
					</div>
					<div class="copy-right lg:hidden text-white max-lg:my-8">
						© 2022 Lolly. All right reserved.
					</div>
				</div>
			</div>
		</div>
	</footer>
	<aside id="login-choice" class="hidden fixed top-0 left-0 overflow-x-hidden z-[300] bg-trans-black-2 backdrop-blur-2xl min-h-screen w-screen flex items-center" onclick="handleLogin()" >
		<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16 ">
			<p class="font-bold text-center text-white text-md lg:text-lg xl:text-xl mb-4">Choose your Login</p>
			<div class="flex max-lg:flex-col items-center justify-center">
				<button
					class="bg-yellow border-white text-black text-md lg:text-lg px-8 lg:px-10 py-2 m-4 rounded-lg font-bold">
					<a href="https://app.lolly.com/authentication/" target="_blank" rel="noopener noreferrer"> I am a brand</a>
				</button>
				<button
					class="bg-purple border-white text-black text-md lg:text-lg px-8 lg:px-10 py-2 m-4 rounded-lg font-bold faq-selector">
					<a href="https://creator.lolly.com/authentication/" target="_blank" rel="noopener noreferrer"> I am a creator </a>
				</button>
			</div>

		</div>
	</aside>
	<?php
	wp_footer();
	?>
<script type="text/javascript">
const clientId = "777"; 
const pid = 'aeefb163f3395a3d1bafbbcbf8260a30b1f89ffdb0c329565b5a412ee79f00a7'; 
const puid = {
  client_id: clientId,
  purpose:  'website',
  partner: 'Lolly'
};
 
const encodedPuid = encodeURIComponent(JSON.stringify(puid));
const pixelUrl = 'https://a.usbrowserspeed.com/cs?pid=' + pid + '&puid=' + encodedPuid;
const script = document.createElement('script');
script.src = pixelUrl;
document.body.appendChild(script);
</script>
</body>

</html>
<?php
