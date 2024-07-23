<?php
/**
 * Header
 *
 * @package lolly
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lolly</title>
	<script>
		const LOLLY_URL = "<?php echo LY_ASSET_URI; ?>"
	</script>
	<?php
	wp_head();
	?>
	<script type="text/javascript" data-id="alocdn-ldr" data-label="LABELTEXT" async defer src="//js.alocdn.com/c/8zFuVnUnQ.js"></script>  
	<script async src="https://tag.prospectdesk.ai/ldc.js?pid=shakespeare&aid=1a12046d"></script>
	<script>
	!(function (d, a, p, t, r) {
	t = a.createElement(p)
	r = a.getElementsByTagName(p)[0]
	t.src = '
	https://s3.us-west-2.amazonaws.com/p2.identitygraphdata.com/a6889b85-8cc8-4e8c-be9d-94d590174045.js'
	r.parentNode.insertBefore(t, r)
	})(window, document, 'script')
	</script>
	<script async="async" src="https://static.mobilemonkey.com/js/mm_43479015-f7c3-4123-a60b-eaa58766a920-44835894.js"></script>
</head>

<body class="relative">
	
	<header id="site-header" class="fixed top-0 w-full z-[200] overflow-x-hidden">
		<div class="max-sm:hidden bg-trans-black backdrop-blur-2xl flex flex-row">
			<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
				<div class="flex space-between items-center h-[70px] lg:h-[75px]">
					<div class="logo text-white text-2xl lg:text-4xl font-bold">
						<a href="/">lolly</a>
					</div>
					<nav class="cta flex items-center ml-auto">
						<div class="text-white text-md font-medium mx-6">
							<a href="/"> For Brands </a>
						</div>
						<div class="text-white text-md font-medium mx-6">
							<a href="/features"> Features </a>
						</div>
						<div class="text-white text-md font-medium mx-6">
							<a href="/pricing"> Pricing </a>
						</div>
						<div class="text-white text-md font-medium mx-6">
							<a href="/creators"> For Creators </a>
						</div>
						<div onclick="handleLogin()" class="text-white text-md font-medium  mx-6 cursor-pointer">
							Login
						</div>
						<button onclick="handleGetStarted()"
							class="bg-white hover:text-white border-white hover:bg-black border-2 text-black hover:text-white px-8 py-2 text-md lg:ml-6 rounded-lg font-semibold">
							Get a Demo
						</button>
					</nav>
				</div>
			</div>
		</div>
		<div id="site-header-wrap" class="sm:hidden bg-trans-black backdrop-blur-2xl flex flex-row text-white h-[60px] lg:h-[75px] transition-[height] transition-color ease-linear duration-300 overflow-hidden">
			<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
				<div id="site-header" class="flex items-center space-between h-[60px] lg:h-[75px]">
					<div class="logo text-2xl lg:text-4xl font-bold ">
						<a href="/">lolly</a>
					</div>
					<div class="cta flex items-center ml-auto">
						<button id="header-cta-primary" onclick="handleGetStarted()"
							class="bg-white text-black px-6 py-2 rounded-lg font-semibold mr-4">
							<a href="javascript:void(0)">Get Started</a>
						</button>
						<button id="menu-bar" class="cta-primary text-white">
							<img src="<?php echo LY_ASSET_URI; ?>/images/menu-hamburger.svg" alt="" class="w-8">
						</button>
						<button id="menu-close" class="cta-primary hidden">
							<img src="<?php echo LY_ASSET_URI; ?>/images/menu-close.svg" alt="" class="h-6">
						</button>
					</div>
				</div>
				<nav id="site-header-nav"
					class="text-white flex flex-col text-center items-center justify-center mt-[20vh]">
					<div class="font-semibold my-4 text-lg ">
						<a href="/"> For Brands </a>
					</div>
					<div class="font-semibold my-4 text-lg">
						<a href="/features"> Features </a>
					</div>
					<div class="font-semibold my-4 text-lg">
						<a href="/pricing"> Pricing </a>
					</div>
					<div class="font-semibold my-4 text-lg">
						<a href="/creators"> For Creators </a>
					</div>
					<div onclick="handleLogin()" class="font-semibold my-4 text-lg cursor-pointer">
						Login
					</div>
					<button onclick="handleGetStarted()" class="bg-white px-8 py-2 text-md text-black my-4 rounded-lg font-semibold">
						Get Started
					</button>
				</nav>
			</div>
		</div>
	</header>
	<?php
