import 'swiper/scss';
import 'swiper/scss/autoplay';
// import Swiper JS
import Swiper, { Autoplay, FreeMode } from 'swiper';

document.addEventListener("DOMContentLoaded", () => {

    let carousel = document.querySelector('#carousel.swiper');

    if ( null === carousel ){
        return;
    }

    let swiper;

    if ( 'videoCarousel' in carousel.dataset ){

        swiper = new Swiper('#carousel.swiper', {
            grabCursor: true,
            loop: true,
            slidesPerView: 'auto',
            centeredSlides : true,
            breakpoints: {
                640: {

                },
                768: {

                },
                1024: {

                },
                1280: {

                },
    
            }
        });
        swiper.disable();
    
    } else {

        swiper = new Swiper('#carousel.swiper', {
            modules: [Autoplay, FreeMode],
            // Optional parameters
            autoplay: {
                delay: 1,
                disableOnInteraction: false
            },
            freeMode: true,
            grabCursor: true,
            loop: true,
            speed: 12000,
            slidesPerGroup: 6,
            slidesPerView: 1.5,
            spaceBetween: 20,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    speed: 15000,
                },
                1024: {
                    slidesPerView: 4,
                },
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                    speed: 20000,
                },
    
            }
        });
    
        swiper.autoplay.stop();

    }

    const handleSwiper = () =>{

        carousel.querySelector('.swiper-slide-active video').play();
        setTimeout( () =>{
            carousel.querySelector('.swiper-slide-active video').pause();
            swiper.slideNext();
        }, 5000);

    }

    const influencerCarouselObserverCallback = (entries) => {

        if (entries[0].isIntersecting) {

            if ( 'videoCarousel' in carousel.dataset ){
                handleSwiper();
                swiper.enable();
                swiper.on('slideChangeTransitionEnd', handleSwiper );

            } else {

                swiper.autoplay.start();

            }

        }

        else {

            if ( 'videoCarousel' in carousel.dataset ){

                swiper.disable();
                swiper.off('slideChange', handleSwiper );

            } else {

                swiper.autoplay.stop();
            }

        }

    }

    let influencerCarousel = document.getElementById('influencer-carousel');

    let influencerCarouselObserver = new IntersectionObserver(influencerCarouselObserverCallback);

    if (null !== influencerCarousel) {

        influencerCarouselObserver.observe(influencerCarousel);

    }


});

