<?php
/**
 * Gform Confirmation Loaded
 *
 * @package lolly
 */

?>
<script>
	document.addEventListener("DOMContentLoaded", (event) => {
		
        document.querySelectorAll('.gform_wrapper').forEach(gformWrapper => {
			jQuery('#' + gformWrapper.id.replace('gform_wrapper', 'gform_ajax_frame')).on('load', function () {
				if (0 != jQuery(this).contents().find('.GF_AJAX_POSTBACK .gform_confirmation_wrapper').length) {
					window.lollyDataFullName = jQuery('#' + gformWrapper.id).find('input[placeholder="Full Name"]').val();
					window.lollyDataEmail = jQuery('#' + gformWrapper.id).find('input[type=email]').val();
					window.lollyDataPhone = jQuery('#' + gformWrapper.id).find('input[type=tel]').val();
					window.lollyDataLeadType = jQuery('#' + gformWrapper.id).find('input[type=radio]:checked').val();
				}
			});
		});
		// jQuery(document).on('gform_confirmation_loaded', function () {
		// 	lollyGFormSuccess();
		// });

		jQuery(document).on('gform_confirmation_loaded', function () {
	     gtag('event', 'conversion', {'send_to': 'AW-834756789/YpzhCPGf4r8DELXBhY4D'});
			if (window.dataLayer) {
				window.dataLayer.push({
					'event': 'successful_form_submission'
				});
			}
			
			
			 if (window.lollyDataLeadType && 'Creator' === window.lollyDataLeadType) {
					// calendly = calendlyCreators;
					window.location.href = 'https://creator.lolly.com/authentication/sign-up/';
			}

			if (window['lpr'] && window.skprDataEmail) {
				window['lpr']('referral', { email: window.skprDataEmail });
			}
			if (window['lpr'] && window.skprDataPhone) {
				window['lpr']('referral', { phone: window.skprDataPhone });
			}

			let calendly = 'https://calendly.com/lolly-com/book-a-demo/';
		
			if (window.skprDataEmail) {
				calendly = calendly + '?email=' + skprDataEmail;
			}
			if (window.skprDataFullName) {
				calendly = calendly + '&name=' + encodeURIComponent(skprDataFullName);
			}
			let queryParams = window.location.search;
			if ('' !== queryParams) {
				calendly = calendly + queryParams.replace('?', '&');
			}
			if ( Calendly){
				document.getElementById('lp').remove();
				document.getElementById('site-header').remove();
				document.getElementById('calendly').classList.remove('hidden');
				Calendly.initInlineWidget({
					url: calendly,
					parentElement: document.getElementById('calendly'),
				});
			} 

			});
	});
</script>
<?php
