<?php
/**
 * Page template for Brands
 *
 * @package lolly
 */

get_header();

?>
<style>

/* .custom_button_bg.active {
    color: #fff;
    background-color: #2872e1;
    border-color: #2872e1;
} */
body{
	background-color:#edf1f694;
}
/* .inner_pricing.first_bx {
    border: 3px solid #ecc5ff;
	background: white;
} */
/* .first_bx .start_button a {
    background: #b318ff;
    border: 2px solid white;
} */
/* .inner_pricing.first_bx h3 {
    color: #b318ff;
} */
/* .inner_pricing.middel_price {
    background-color: #ceedfa;
} */
/* .inner_pricing.middel_price h3 {
    color: #2872e1;
}
.inner_pricing.middel_price .start_button a {
    background-color: #2872e1;
}
.inner_pricing.last_bx {
    border: 3px solid #feeab6;
	background: #fff;
} */
/* .inner_pricing.last_bx h3 {
    color: #ffcc29;
} */
/* .last_bx .start_button a {
    background: #ffcc29;
    color: black;
    border: 2px solid #ffcc29;
}
.compair_plan{
	background: white;
    margin-top: 50px;
} */
/* .tooltip-text {
  visibility: hidden;
  position: absolute;
  z-index: 1;
  width: 100px;
  color: white;
  background-color: #192733;
  padding: 5px;
} */
.tooltip-text {
    visibility: hidden;
    position: absolute;
    z-index: 1;
    width: 200px;
    color: black;
    background-color: #ffffff;
    border: 1px solid #19273394;
    padding: 5px;
}
.hover-text:hover .tooltip-text {
  visibility: visible;
}
.right {
  top: -8px;
  left: 120%;
}

.hover-text {
  position: relative;
  display: inline-block;
  margin: 0px;
  text-align: center;
}
.flex.align-center.justify-center.gap-l.wrap.margin-top---s {
    grid-column-gap: 4rem;
    grid-row-gap: 4rem;
}
.icons .flex {
    grid-column-gap: 1rem;
}
section.icons {
    padding-top: 60px;
}
#site-header{
	background: #2b2a35 !important;
}


.talk_pricing{
	font-size: 29px !important;
}
.talk_price{
	font-size: 21px !important;
}

.start_button {
    margin: 22px -4px !important;
}

@media screen and (max-width: 575px){
   
   .flex.align-center.justify-center.gap-l.wrap.margin-top---s {
	   grid-column-gap: 2rem;
   }
   .talk_price{
	   font-size: 12px !important;
   }
}



</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<main id="pricing">
		<section class="priceing">
			<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
				<div class="row">
					<h1>Explore which plan is better for your business</h1>
					<p>Lolly’s plans & pricing are designed to meet your needs as you grow</p>
				</div>
			</div>
		</section>
		<section id="faq-header" class="">
			<div 
				class="container flex flex-col text-center px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
				<div class="button_gropu_tab">
					<button
						class="bg-yellow custom_button_bg faq-selector active" data-target="faq-brands">
						<strong>Monthly billing</strong></br></br>
						<!-- No contacts, cancel anytime -->
					</button>
					<button
						class="bg-purple custom_button_bg faq-selector" data-target="faq-creators">
					<strong>Yearly billing</strong>	</br>
						Save 20%
					</button>
				</div>
			</div>
		</section>
		<section id="faq-brands" class="z-[2] pricing_tow_tab">
			<div
				class="container flex flex-col text-center px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">

				<div class="main_price">
					<div class="pricing_box">
						<div class="inner_pricing first_bx">
							<h3>Business</h3>
							<p>Powerful features to create & improve your brand identity to grow.</p>
							<div class="price_price">
								<h4><sup>$</sup>895 <span>/mo</span></h4>
								<p>Billed monthly</p>
								<!-- <h4 class="talk_pricing">Let's talk...</h4> -->
							</div>
							<div class="start_button">
								<a href="https://app.lolly.com/authentication/register-email?price_id=price_1NsIcZIp52mziCZnjQFL8ZIX" target="blank">
									<div class="arrow">
									<svg xmlns="http://www.w3.org/2000/svg" width="18.398" height="15.573" viewBox="0 0 18.398 15.573">
									<g id="Icon_feather-arrow-right" data-name="Icon feather-arrow-right" transform="translate(-2.846 -6.086)">
									  <path id="Path_21569" data-name="Path 21569" d="M7.5,18H23.9" transform="translate(-3.654 -4.128)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
									  <path id="Path_21570" data-name="Path 21570" d="M18,7.5l6.372,6.372L18,20.244" transform="translate(-4.128)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
									</g>
								  </svg>
								</div> 
								 <span> Start free 7-day trial</span></a>
							</div>
							<div class="list_price_div">
								<ul>
									<li>5,000 Searches
										<p class="hover-text"><i class="fa fa-info-circle"></i>
											<span class="tooltip-text right">Number of available discovery searches.</span>
										</p>
									</li> 
									<li>60 Save Searches

									<p class="hover-text"><i class="fa fa-info-circle"></i>
										<span class="tooltip-text right">Save your search queries for easy access</span>
									</p>
									</li> 
									<li>500 Detailed Profiles
									<p class="hover-text"><i class="fa fa-info-circle"></i>
										<span class="tooltip-text right">In-Depth Insights: Access influencer demographics and more</span>
									</p>
									</li>
									
									<li>250 Emails (View email ids)
									<p class="hover-text"><i class="fa fa-info-circle"></i>
										<span class="tooltip-text right">Get access to creator emails ids and communicate promptly with them</span>
									</p>
									</li>
									<li>Advanced Search</li>
									<li>240 Influencers Export</li>
									<li>5 Mail Accounts</li>
									<li>Unlimited Users</li>
								</ul>
							</div>
						</div>
						<div class="inner_pricing middel_price">
							<p><img alt="" loading="lazy" src="https://assets-global.website-files.com/60e5f2de011b86acebc30db7/6447dd0049378e8f47155cdf_Stars.svg" class="icon---xs" data-airgap-id="228"> Most Popular</p>
							<div class="middel_inner">
							<h3>Teams</h3>
							<p>Advanced features to search Influencers for multiple brands & manage with campaigns.</p>
							<div class="price_price">
								<h4><sup>$</sup>350 <span>/mo</span></h4>
								<p>Billed monthly</p>
								<!-- <h4 class="talk_pricing">Let's talk...</h4> -->
							</div>
							<div class="start_button">
								<a href="https://app.lolly.com/authentication/register-email?price_id=price_1NqWH9Ip52mziCZnuJSZoOwr" target="blank">
									<div class="arrow">
									<svg xmlns="http://www.w3.org/2000/svg" width="18.398" height="15.573" viewBox="0 0 18.398 15.573">
									<g id="Icon_feather-arrow-right" data-name="Icon feather-arrow-right" transform="translate(-2.846 -6.086)">
									  <path id="Path_21569" data-name="Path 21569" d="M7.5,18H23.9" transform="translate(-3.654 -4.128)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
									  <path id="Path_21570" data-name="Path 21570" d="M18,7.5l6.372,6.372L18,20.244" transform="translate(-4.128)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
									</g>
								  </svg>
								</div> 
								<span> Start free 7-day trial</span></a>
							</div>
							<div class="list_price_div">
								<ul>
									<li>2,000 Searches
										<p class="hover-text"><i class="fa fa-info-circle"></i>

										<span class="tooltip-text right">Number of available discovery searches.</span>
										</p>
									</li>
									<li>40 Save Searches
										<p class="hover-text"><i class="fa fa-info-circle"></i>
											<span class="tooltip-text right">Save your search queries for easy access</span>
										</p>
									</li>
									<li>250 Detailed Profiles
									<p class="hover-text"><i class="fa fa-info-circle"></i>
										<span class="tooltip-text right">In-Depth Insights: Access influencer demographics and more</span>
									</p>
									</li>
									<li>100 Emails (View email ids)
									<p class="hover-text"><i class="fa fa-info-circle"></i>
										<span class="tooltip-text right">Get access to creator emails ids and communicate promptly with them</span>
									</p>
									</li>
									<li>160 Influencers Export</li>
									<li>3 Mail Accounts</li>
									<li>5 Users</li>
								</ul>
							</div>
						</div>
						</div>
						<div class="inner_pricing last_bx">
							<h3>Starter</h3>
							<p>Powerful features to create & improve your brand identity to grow.</p>
							<div class="price_price">
								<h4><sup>$</sup>150 <span>/mo</span></h4>
								<p>Billed monthly</p>
								<!-- <h4 class="talk_pricing">Let's talk...</h4> -->
							</div>
							<div class="start_button">
								<a href="https://app.lolly.com/authentication/register-email?price_id=price_1NqWG0Ip52mziCZnnam2igE7" target="blank">
									<div class="arrow">
									<svg xmlns="http://www.w3.org/2000/svg" width="18.398" height="15.573" viewBox="0 0 18.398 15.573">
									<g id="Icon_feather-arrow-right" data-name="Icon feather-arrow-right" transform="translate(-2.846 -6.086)">
									  <path id="Path_21569" data-name="Path 21569" d="M7.5,18H23.9" transform="translate(-3.654 -4.128)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
									  <path id="Path_21570" data-name="Path 21570" d="M18,7.5l6.372,6.372L18,20.244" transform="translate(-4.128)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
									</g>
								  </svg>
								</div> 
								<span> Start free 7-day trial</span></a>
							</div>
							<div class="list_price_div">
								<ul>
									<li>1,000 Searches
									<p class="hover-text"><i class="fa fa-info-circle"></i>
										<span class="tooltip-text right">Number of available discovery searches.</span>
									</p>
									</li>
									<li>20 Save Searches
										<p class="hover-text"><i class="fa fa-info-circle"></i>
											<span class="tooltip-text right">Save your search queries for easy access</span>
										</p>
									</li>
									<li>100 Detailed Profiles
									<p class="hover-text"><i class="fa fa-info-circle"></i>
										<span class="tooltip-text right">In-Depth Insights: Access influencer demographics and more</span>
									</p>
									</li>
									<li>50 Emails (View email ids)
									<p class="hover-text"><i class="fa fa-info-circle"></i>
										<span class="tooltip-text right">Get access to creator emails ids and communicate promptly with them</span>
									</p>
									</li>
									<li>1 Mail Accounts</li>
									<li>1 Users</li>
								</ul>
							</div>
						</div>
					</div>
					</div>
			</div>
		</section>
		<section id="faq-creators" class="z-[2]  hidden pricing_tow_tab ">
		<div
				class="container flex flex-col text-center px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">

				<div class="main_price">
					<div class="pricing_box ">
						<div class="inner_pricing first_bx">
							<h3>Business</h3>
							<p>Powerful features to create & improve your brand identity to grow.</p>
							<div class="price_price">
								<h4><sup>$</sup>716 <span>/mo</span></h4>
								<p>Save 20% when billed yearly</p>
								<!-- <h4 class="talk_pricing">Let's talk...</h4> -->
							</div>
							<div class="start_button">
								<a href="https://app.lolly.com/authentication/register-email?price_id=price_1NsIcZIp52mziCZnPgVveSlh" target="blank">
									<div class="arrow">
									<svg xmlns="http://www.w3.org/2000/svg" width="18.398" height="15.573" viewBox="0 0 18.398 15.573">
									<g id="Icon_feather-arrow-right" data-name="Icon feather-arrow-right" transform="translate(-2.846 -6.086)">
									  <path id="Path_21569" data-name="Path 21569" d="M7.5,18H23.9" transform="translate(-3.654 -4.128)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
									  <path id="Path_21570" data-name="Path 21570" d="M18,7.5l6.372,6.372L18,20.244" transform="translate(-4.128)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
									</g>
								  </svg>
								</div> 
								 <span> Start free 7-day trial</span></a>
							</div>
							<div class="list_price_div">
								<ul>
									<li>5,000 Searches
									<p class="hover-text"><i class="fa fa-info-circle"></i>
										<span class="tooltip-text right">Number of available discovery searches.</span>
									</p>
									</li>
									<li>60 Save Searches
									<p class="hover-text"><i class="fa fa-info-circle"></i>
											<span class="tooltip-text right">Save your search queries for easy access</span>
										</p>
									</li>
									<li>500 Detailed Profiles
									<p class="hover-text"><i class="fa fa-info-circle"></i>
										<span class="tooltip-text right">In-Depth Insights: Access influencer demographics and more</span>
									</p>
									</li>
									<li>250 Emails (View email ids)
									<p class="hover-text"><i class="fa fa-info-circle"></i>
										<span class="tooltip-text right">Get access to creator emails ids and communicate promptly with them</span>
									</p>
									</li>
									<li>Advanced Search</li>
									<li>240 Influencers Export</li>
									<li>5 Mail Accounts</li>
									<li>Unlimited Users</li>
								</ul>
							</div>
						</div>
						<div class="inner_pricing middel_price">
							<p><img alt="" loading="lazy" src="https://assets-global.website-files.com/60e5f2de011b86acebc30db7/6447dd0049378e8f47155cdf_Stars.svg" class="icon---xs" data-airgap-id="228">Most Popular</p>
							<div class="middel_inner">
							<h3>Teams</h3>
							<p>Advanced features to search Influencers for multiple brands & manage with campaigns.</p>
							<div class="price_price">
								<h4><sup>$</sup>280 <span>/mo</span></h4>
								<p>Save 20% when billed yearly</p>
								<!-- <h4 class="talk_pricing">Let's talk...</h4> -->
							</div>
							<div class="start_button">
								<a href="https://app.lolly.com/authentication/register-email?price_id=price_1NqWH9Ip52mziCZnrIRWyVUA" target="blank">
									<div class="arrow">
									<svg xmlns="http://www.w3.org/2000/svg" width="18.398" height="15.573" viewBox="0 0 18.398 15.573">
									<g id="Icon_feather-arrow-right" data-name="Icon feather-arrow-right" transform="translate(-2.846 -6.086)">
									  <path id="Path_21569" data-name="Path 21569" d="M7.5,18H23.9" transform="translate(-3.654 -4.128)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
									  <path id="Path_21570" data-name="Path 21570" d="M18,7.5l6.372,6.372L18,20.244" transform="translate(-4.128)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
									</g>
								  </svg>
								</div> 
								<span> Start free 7-day trial</span></a>
							</div>
							<div class="list_price_div">
								<ul>
									<li>2,000 Searches
									<p class="hover-text"><i class="fa fa-info-circle"></i>
										<span class="tooltip-text right">Number of available discovery searches.</span>
									</p>
									</li>
									<li>40 Save Searches
									<p class="hover-text"><i class="fa fa-info-circle"></i>
											<span class="tooltip-text right">Save your search queries for easy access</span>
										</p>
									</li>
									<li>250 Detailed Profiles
									
										<p class="hover-text"><i class="fa fa-info-circle"></i>
										<span class="tooltip-text right">In-Depth Insights: Access influencer demographics and more</span>
									</p>
									</li>
									<li>100 Emails (View email ids)
									<p class="hover-text"><i class="fa fa-info-circle"></i>
										<span class="tooltip-text right">Get access to creator emails ids and communicate promptly with them</span>
									</p>
									</li>
									<li>160 Influencers Export</li>
									<li>3 Mail Accounts</li>
									<li>5 Users</li>
								</ul>
							</div>
						</div>
						</div>
						<div class="inner_pricing last_bx">
							<h3>Starter</h3>
							<p>Powerful features to create & improve your brand identity to grow.</p>
							<div class="price_price">
								<h4><sup>$</sup>120 <span>/mo</span></h4>
								<p>Save 20% when billed yearly</p>
								<!-- <h4 class="talk_pricing">Let's talk...</h4> -->
							</div>
							<div class="start_button">
								<a href="https://app.lolly.com/authentication/register-email?price_id=price_1NqWG0Ip52mziCZnZt3XbCiY" target="blank">
									<div class="arrow">
									<svg xmlns="http://www.w3.org/2000/svg" width="18.398" height="15.573" viewBox="0 0 18.398 15.573">
									<g id="Icon_feather-arrow-right" data-name="Icon feather-arrow-right" transform="translate(-2.846 -6.086)">
									  <path id="Path_21569" data-name="Path 21569" d="M7.5,18H23.9" transform="translate(-3.654 -4.128)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
									  <path id="Path_21570" data-name="Path 21570" d="M18,7.5l6.372,6.372L18,20.244" transform="translate(-4.128)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
									</g>
								  </svg>
								</div> 
								<span> Start free 7-day trial</span></a>
							</div>
							<div class="list_price_div">
								<ul>
									<li>1,000 Searches
									<p class="hover-text"><i class="fa fa-info-circle"></i>
										<span class="tooltip-text right">Number of available discovery searches.</span>
									</p>
									</li>
									<li>20 Save Searches
									<p class="hover-text"><i class="fa fa-info-circle"></i>
											<span class="tooltip-text right">Save your search queries for easy access</span>
										</p>
									</li>
									<li>100 Detailed Profiles
									<p class="hover-text"><i class="fa fa-info-circle"></i>
										<span class="tooltip-text right">In-Depth Insights: Access influencer demographics and more</span>
									</p>
									</li>
									<li>50 Emails (View email ids)
									<p class="hover-text"><i class="fa fa-info-circle"></i>
										<span class="tooltip-text right">Get access to creator emails ids and communicate promptly with them</span>
									</p>
									</li>
									<li>1 Mail Accounts</li>
									<li>1 Users</li>
								</ul>
							</div>
						</div>
					</div>
					</div>
			</div>
			
		</section>
		<section class="icons">
			<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
				<div class="flex align-center justify-center gap-l wrap margin-top---s">
					<div class="flex align-center justify-center">
						<img alt="Green Check" src="https://assets-global.website-files.com/60e5f2de011b86acebc30db7/64b5a7c1d48b7aea67102d34_Time%20Reverse%20Icon.svg" class="icon---medium" data-airgap-id="571">
						<div class="body-small">7-day risk<br>free cancelation</div>
					</div>
					<div class="flex align-center justify-center">
						<img src="https://assets-global.website-files.com/60e5f2de011b86acebc30db7/64b5a7c2febdbcd70ff5a11e_Satisfaction%20Guarantee.svg" alt="Green Check" class="icon---medium" data-airgap-id="573">
						<div class="body-small">Award-winning<br>customer&nbsp;support</div>
					</div>
				</div>
			</div>
		</section>
		<section class="compair_plan">
			<div class="container flex flex-col text-center px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
				<div class="compair_plan_btn">
					<p class="compair_plan_button">Compare Plans</p>
				</div>
				<div class="plan_main" id="plan_main">
					<div class="plan_inner_main">
						<div class="plan_inner no_bdr desktop">
							<fieldset class="radio-switch">
								<legend>
								  Settings
								</legend>
								<input type="radio" value="monthly" name="lol" id="monthly" checked>
								<label for="monthly" class="lb_monthly">
									Monthly
								</label>
							  
								<input type="radio" value="annually" name="lol" id="annually">
								<label for="annually" class="lb_annually">
									Annually
								</label>
						</fieldset>
						<h4>Features</h4>
						</div>
						<div class="plan_inner no_bdr mobile">
							<h4>Features</h4>
						</div>
						<div class="plan_inner monthly-1">
							<h3>Business</h3>
							<p><sup>$</sup>895 <span>/mo</p>
							<!-- <p class="talk_price">Let's talk...</p> -->
							<a href="https://app.lolly.com/authentication/register-email?price_id=price_1NsIcZIp52mziCZnjQFL8ZIX" target="blank">Start free 7-day trial</a>
						</div>
						<div class="plan_inner clr_perpl monthly-2">
							<h3>Teams</h3>
							<p><sup>$</sup>350 <span>/mo</p>
							<!-- <p class="talk_price">Let's talk...</p> -->
							<a href="https://app.lolly.com/authentication/register-email?price_id=price_1NqWH9Ip52mziCZnuJSZoOwr" target="blank">Start free 7-day trial</a>
						</div>
						<div class="plan_inner monthly-3">
							<h3>Starter</h3>
							<p><sup>$</sup>150 <span>/mo</p>
							<!-- <p class="talk_price">Let's talk...</p> -->
							<a href="https://app.lolly.com/authentication/register-email?price_id=price_1NqWG0Ip52mziCZnnam2igE7" target="blank">Start free 7-day trial</a>
						</div>
						<div class="plan_inner annually-1" style="display:none">
							<h3>Business</h3>
							<p><sup>$</sup>716 <span>/mo</p>
							<!-- <p class="talk_price">Let's talk...</p> -->
							<a href="https://app.lolly.com/authentication/register-email?price_id=price_1NsIcZIp52mziCZnPgVveSlh" target="blank">Start free 7-day trial</a>
						</div>
						<div class="plan_inner clr_perpl annually-2" style="display:none">
							<h3>Teams</h3>
							<p><sup>$</sup>280 <span>/mo</p>
							<!-- <p class="talk_price">Let's talk...</p> -->
							<a href="https://app.lolly.com/authentication/register-email?price_id=price_1NqWH9Ip52mziCZnrIRWyVUA" target="blank">Start free 7-day trial</a>
						</div>
						<div class="plan_inner annually-3" style="display:none">
							<h3>Starter</h3>
							<p><sup>$</sup>120 <span>/mo</p>
							<!-- <p class="talk_price">Let's talk...</p> -->
							<a href="https://app.lolly.com/authentication/register-email?price_id=price_1NqWG0Ip52mziCZnZt3XbCiY" target="blank">Start free 7-day trial</a>
						</div>
					</div>
					<div class="pricing_table">
					<table style="width:100%">
						<tr>
							<td>Detailed creator profiles</td>
							<td><i class="tick_icon"></i></td>
							<td><i class="tick_icon"></i></td>
							<td><i class="tick_icon"></i></td>
						</tr>
						<tr>
							<td>Access to creator emails</td>
							<td><i class="tick_icon"></i></td>
							<td><i class="tick_icon"></i></td>
							<td><i class="tick_icon"></i></td>
						</tr>
						<tr>
							<td>Campaigns</td>
							<td><i class="tick_icon"></i></td>
							<td><i class="tick_icon"></i></td>
							<td><i class="tick_icon"></i></td>
						</tr>
						<tr>
							<td>Lists</td>
							<td>Unlimited</td>
							<td>Unlimited</td>
							<td>Unlimited</td>
						</tr>
						<tr>
							<td>24 hr ticket support</td>
							<td><i class="tick_icon"></i></td>
							<td><i class="tick_icon"></i></td>
							<td><i class="tick_icon"></i></td>
						</tr>
						<tr>
							<td>CRM</td>
							<td><i class="tick_icon"></i></td>
							<td><i class="tick_icon"></i></td>
							<td><i class="tick_icon"></i></td>
						</tr>
						<tr>
							<td>Bulk save</td>
							<td><i class="tick_icon"></i></td>
							<td><i class="tick_icon"></i></td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Team Functionality</td>
							<td><i class="tick_icon"></i></td>
							<td><i class="tick_icon"></i></td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Onboarding & Training Sessions </td>
							<td><i class="tick_icon"></i></td>
							<td><i class="tick_icon"></i></td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Bonus mail accounts </td>
							<td><i class="tick_icon"></i></td>
							<td><i class="tick_icon"></i></td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Exports </td>
							<td><i class="tick_icon"></i></td>
							<td><i class="tick_icon"></i></td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Import </td>
							<td><i class="tick_icon"></i></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Premium Technical Support </td>
							<td><i class="tick_icon"></i></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Analysis of best times for outreach </td>
							<td><i class="tick_icon"></i></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Advance search </td>
							<td><i class="tick_icon"></i></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
					</table>
					</div>
				</div>
			</div>
		
		</section>
		<section class="faq_pricing_section">
			<div class="container flex flex-col text-center px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
				<div class="faq_cover">
					<div class="faq_title">
						<h2>Frequently</br> asked questions</h2>
					</div>
					<div class="faq_right">
						<div id="brand-faq-items" class="max-w-[900px] w-full m-auto">
							<div class="border-2 border-black text-left px-8 py-4 rounded-2xl my-4 lg:my-8">
								<div id="faq-question" class="flex items-center">
									<h2 class="text-md  lg:text-lg xl:text-xl font-semibold"> What if I want to upgrade? </h2>
									<div id="faq-toggle-icon" class="relative w-[20px] h-[100%] ml-auto">
										<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black"></span>
										<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black rotate-90"></span>
									</div>
								</div>
								<div class="faq-answer hidden">
									<p class="mt-4 text-base  lg:text-lg font-medium">Simple! Take a look to see all our plan options and find the features that are best for you. </p>
								</div>
							</div>
							<div class="border-2 border-black text-left px-8 py-4 rounded-2xl my-4 lg:my-8">
								<div id="faq-question" class="flex items-center">
									<h2 class="text-md  lg:text-lg xl:text-xl font-semibold">Can I change my subscription plan at any time? </h2>
									<div id="faq-toggle-icon" class="relative w-[20px] h-[100%] ml-auto">
										<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black"></span>
										<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black rotate-90"></span>
									</div>
								</div>
								<div class="faq-answer hidden">
									<p class="mt-4 text-base  lg:text-lg font-medium"> Yes, you can easily change your subscription plan at any time through your account settings. Our platform is designed to accommodate your evolving needs. </p>
								</div>
							</div>
							<div class="border-2 border-black text-left px-8 py-4 rounded-2xl my-4 lg:my-8">
								<div id="faq-question" class="flex items-center">
									<h2 class="text-md  lg:text-lg xl:text-xl font-semibold">Is customer support included in all subscription plans? </h2>
									<div id="faq-toggle-icon" class="relative w-[20px] h-[100%] ml-auto">
										<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black"></span>
										<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black rotate-90"></span>
									</div>
								</div>
								<div class="faq-answer hidden">
									<p class="mt-4 text-base  lg:text-lg font-medium"> Yes, our dedicated customer support is available to all users, regardless of their subscription plan. We're here to assist you every step of the way. </p>
								</div>
							</div>
							<?php /*
							<div class="border-2 border-black text-left px-8 py-4 rounded-2xl my-4 lg:my-8">
								<div id="faq-question" class="flex items-center">
									<h2 class="text-md  lg:text-lg xl:text-xl font-semibold">Do I have to commit to a full year? </h2>
									<div id="faq-toggle-icon" class="relative w-[20px] h-[100%] ml-auto">
										<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black"></span>
										<span class="absolute top-0 bottom-0 m-0 w-[20px] md:w-[25px] xl:w-[30px] h-[2px] lg:h-[3px] bg-black rotate-90"></span>
									</div>
								</div>
								<div class="faq-answer hidden">
									<p class="mt-4 text-base  lg:text-lg font-medium"> No. There are monthly plans available starting from $120, paid monthly, and which can be cancelled any time. If you decide that Modash is a great fit for you long-term, there are discounts available for annual plans. </p>
								</div>
							</div> */ ?>
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
				</div>
			</div>
		</section>
		<section class="bookcall">
			<div class="book_call_inner">
				<h2>Not sure which plan is right for you?</h2>
				<div class="boolcall_btn">
					<a href="https://www.lolly.com/get-started/" class="bkcall">Book a Call</a>
					<a href="https://www.lolly.com/get-started/" class="lrnmore">Learn More</a>	
				</div>
			</div>
		</section>

		<aside id="scroll-down"
			class="hidden fixed z-50 w-max cursor-pointer mx-auto left-0 right-0 bottom-[20px] bg-[#2B2A357a] backdrop-blur-2xl rounded-full">
			<img src="<?php echo LY_ASSET_URI; ?>/images/scroll-down.svg" width="40" height="40" alt="" srcset="">
		</aside>
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<script>
			$('.bg-yellow.custom_button_bg').click(function(){
				$(this).addClass("active");
				$('.bg-purple.custom_button_bg').removeClass("active");
				$('#faq-brands').removeClass("hidden");
				$('#faq-creators').addClass("hidden");
			});
			$('.bg-purple.custom_button_bg').click(function(){
				$(this).addClass("active");
				$('.bg-yellow.custom_button_bg').removeClass("active");
				$('#faq-brands').addClass("hidden");
				$('#faq-creators').removeClass("hidden");
			});

			
			$("input[name='lol']").click(function(){
				
				if($('input:radio[name=lol]:checked').val() == "annually"){
					$('.monthly-1').hide();
					$('.monthly-2').hide();
					$('.monthly-3').hide();

					$('.annually-1').show();
					$('.annually-2').show();
					$('.annually-3').show();

					$('.lb_monthly').addClass('active-lb');
					$('.lb_annually').removeClass('active-lb');
					//$('#select-table > .roomNumber').attr('enabled',false);
				}else {
					$('.monthly-1').show();
					$('.monthly-2').show();
					$('.monthly-3').show();

					$('.annually-1').hide();
					$('.annually-2').hide();
					$('.annually-3').hide();
					$('.lb_annually').addClass('active-lb');
					$('.lb_monthly').removeClass('active-lb');
				}
			});

			

			
		// (function(window, document){
			// 'use strict';
			var slice = [].slice;

			var removeClass = function(elem){
				elem.classList.remove('focus-within');
			};

			// var update = (function(){
			// 	var running, last;
			// 	var action = function(){
			// 	var element = document.activeElement;

			// 	// document.getElementById('monthly').checked = false;;
			
			// 	if('annually' == element.id){
			// 		$('.monthly-1').hide();
			// 		$('.monthly-2').hide();
			// 		$('.monthly-3').hide();

			// 		$('.annually-1').show();
			// 		$('.annually-2').show();
			// 		$('.annually-3').show();

			// 		$('.lb_monthly').addClass('active-lb');
			// 		$('.lb_annually').removeClass('active-lb');
			// 	}else{
			// 		$('.monthly-1').show();
			// 		$('.monthly-2').show();
			// 		$('.monthly-3').show();

			// 		$('.annually-1').hide();
			// 		$('.annually-2').hide();
			// 		$('.annually-3').hide();
			// 		$('.lb_annually').addClass('active-lb');
			// 		$('.lb_monthly').removeClass('active-lb');

			// 	}
			// 	running = false;
			// 	// if(last !== element){
			// 	// 	last = element;
			// 	// 	slice.call(document.getElementsByClassName('focus-within')).forEach(removeClass);
			// 	// 	while(element && element.classList){
			// 	// 	element.classList.add('focus-within');
			// 	// 	element = element.parentNode;
			// 	// 	}
			// 	// }
			// 	};
			// 	return function(){
			// 	if(!running){
			// 		requestAnimationFrame(action);
			// 		running = true;
			// 	}
			// 	};
			// })();

			// document.addEventListener('focus', update, true);
			// document.addEventListener('blur', update, true);
			// update();
			// })(window, document);
		</script>
		<script>
			$( document ).ready(function() {
				$('.compair_plan_button').click(function() {
					$('#plan_main').toggle();
					$(this).toggleClass("custom_is_active");
				});
			});
	</script>
	</main>
<?php

get_footer();

