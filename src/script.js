import './style.scss';
import './include/nav-menu';
import './include/fullscreen-Image';
import './include/influencer-carousel';
import './include/feature-accordian';
import './include/brand-video';
import './include/faq';
import './include/ip';

window.addEventListener('beforeunload', () => {

    window.scrollTo(0, 0);

})

const lollyGFormSuccess = () => {
    if (window.dataLayer) {
        window.dataLayer.push({
            'event': 'successful_form_submission'
        });
    }

    if (window['lpr'] && window.lollyDataEmail) {
        window['lpr']('referral', { email: window.lollyDataEmail });
    }
    if (window['lpr'] && window.lollyDataPhone) {
        window['lpr']('referral', { phone: window.lollyDataPhone });
    }

   
    gtag('event', 'conversion', {'send_to': 'AW-834756789/YpzhCPGf4r8DELXBhY4D'});


    let calendly = 'https://calendly.com/team-lolly/30-minutes-meeting-with-team-lolly/'
    let calendlyCreators = 'https://calendly.com/vanessa-642/creator-meeting'

    if (window.lollyDataLeadType) {
        if ('Creator' === window.lollyDataLeadType) {
            // calendly = calendlyCreators;
            window.location.href = 'https://creator.lolly.com/authentication/sign-up/';
        }
    }
    if (window.lollyDataEmail) {
        calendly = calendly + '?email=' + lollyDataEmail;
    }
    if (window.lollyDataFullName) {
        calendly = calendly + '&name=' + encodeURIComponent(lollyDataFullName);
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
}

const handleGetStarted = () => {
    if ('/creators/' === window.location.pathname || '/creators' === window.location.pathname) {
        window.open('https://creator.lolly.com/authentication/sign-up/', '_blank');
    } else {
        window.location.href = window.location.origin + '/get-started/';
    }
    if( window['lpr']){
        window['lpr']('click', { email: null });
    }
}

const handleLogin = () => {
    let loginOverlay = document.getElementById('login-choice');
    loginOverlay.classList.toggle('hidden');
}

window.handleGetStarted = handleGetStarted;
window.handleLogin = handleLogin;
window.lollyGFormSuccess = lollyGFormSuccess;

