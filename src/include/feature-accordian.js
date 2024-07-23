import '@dotlottie/player-component';

let accordian;
let featureAccordian;
let itemCount;
let lastItem;
let siteHeader;
let accordianH2;
let desktopMedia;
let scrollStartPosition;
let scrollDirection;
let directionChange;
let activeItemIndex;
let screenMidPoint;
let screenWidth;
let accodianMediaPlaceholder;
let accodianMediaPlaceholderSource;
let scrollSound;

const setScrollDirection = () => {

    if (document.body.getBoundingClientRect().top > scrollStartPosition) {
        if ('up' === scrollDirection) {
            directionChange = false;
        } else {
            scrollDirection = 'up';
            directionChange = true;
        }
    } else {
        if ('down' === scrollDirection) {
            directionChange = false;
        } else {
            scrollDirection = 'down';
            directionChange = true;
        }
    }
    scrollStartPosition = (document.body.getBoundingClientRect()).top;

}

const setActiveItem = () => {

    if (0 === activeItemIndex || (itemCount + 1) === activeItemIndex) {

        if (null !== accordian.querySelector('.ly-active')) {

            accordian.querySelector('.ly-active').classList.remove('ly-active');

        }

        return;

    }

    Array.from(accordian.children).forEach(accordianItem => {

        accordianItem.classList.remove('ly-active');

    });

    accordian.querySelector("[data-index='" + activeItemIndex + "']").classList.add('ly-active');

    // scrollSound.play();

}

const setActiveItemMedia = () => {

    if (1024 <= screenWidth) {

        if (0 === activeItemIndex || (itemCount + 1) === activeItemIndex) {

            if (null === accordian.querySelector('.ly-active')) {

                // document.querySelector('#accordian-desktop-media dotlottie-player').load( accodianMediaPlaceholderSource);
                document.querySelector('#accordian-desktop-media-target').innerHTML = '' ;
            
            }

            return;

        }
        if ( null !== document.querySelector('#accordian-desktop-media-target dotlottie-player') ){
            document.querySelector('#accordian-desktop-media-target dotlottie-player').stop();
        }
        let targetlottie = accordian.querySelector('.ly-active .accordian-media').innerHTML;
        document.querySelector('#accordian-desktop-media-target').innerHTML = targetlottie ;
        document.querySelector('#accordian-desktop-media-target dotlottie-player').addEventListener('ready', () => {
            if ( null !== document.querySelector('#accordian-desktop-media-target dotlottie-player') ){
                document.querySelector('#accordian-desktop-media-target dotlottie-player').play();
            }
        });
    } else {
        accordian.querySelectorAll('.accordian-media dotlottie-player').forEach( player => {
            player.stop();
        })
        if (0 !== activeItemIndex && (itemCount + 1) !== activeItemIndex) {
            accordian.querySelector('.ly-active .accordian-media dotlottie-player').play();
        }
    }
}

const setActiveItemIndex = () => {

    if ('up' === scrollDirection) {


        if (0 === activeItemIndex) {

            setActiveItem();

            setActiveItemMedia();

            return;

        }

        let activeItemScreenEdge;


        if (1 === activeItemIndex) {

            activeItemScreenEdge = accordian.querySelector(".accordian-item[data-index='" + (activeItemIndex) + "']").getBoundingClientRect().top;

            if (1024 <= screenWidth) {
                activeItemScreenEdge = activeItemScreenEdge - 100 ;
            }

        } else {

            activeItemScreenEdge = accordian.querySelector(".accordian-item[data-index='" + (activeItemIndex - 1) + "']").getBoundingClientRect().bottom;

        }

        if (screenMidPoint < activeItemScreenEdge) {

            activeItemIndex = activeItemIndex - 1;

            setActiveItem();

            setActiveItemMedia();

        }

    } else {

        if ((itemCount + 1) === activeItemIndex) {

            setActiveItem();

            setActiveItemMedia();

            return;

        }

        let activeItemScreenEdge;


        if ( itemCount === activeItemIndex) {

            activeItemScreenEdge = accordian.querySelector(".accordian-item[data-index='" + (activeItemIndex) + "']").getBoundingClientRect().bottom  ;

            if (1024 <= screenWidth) {
                activeItemScreenEdge = activeItemScreenEdge + 150;
            }

        } else {

            activeItemScreenEdge = accordian.querySelector(".accordian-item[data-index='" + (activeItemIndex + 1) + "']").getBoundingClientRect().top;

        }

        if (screenMidPoint > activeItemScreenEdge) {

            activeItemIndex = activeItemIndex + 1;

            setActiveItem();

            setActiveItemMedia();

        }

    }
}

const featureAccordianScrollEvent = () => {

    setScrollDirection();

    setActiveItemIndex();

}

const featureAccordianObserverCallback = (entries) => {

    // if (1024 >= screenWidth) {

    //     return;

    // }

    if (entries[0].isIntersecting) {

        document.addEventListener('scroll', featureAccordianScrollEvent);

    }

    else {

        document.removeEventListener('scroll', featureAccordianScrollEvent);

    }

}


document.addEventListener("DOMContentLoaded", () => {

    accordian = document.getElementById("accodian-items");
    featureAccordian = document.getElementById("feature-accordian");
    itemCount = null !== accordian ? Array.from(accordian.children).length : 0;
    lastItem = document.querySelector('.accordian-item[data-index="' + itemCount + '"]');
    siteHeader = document.querySelector('body > header');
    accordianH2 = featureAccordian ? featureAccordian.querySelector('h2') : null;
    desktopMedia = document.getElementById('accordian-desktop-media');
    scrollStartPosition = 0;
    scrollDirection = 'down';
    directionChange = false;
    activeItemIndex = 0;
    screenMidPoint = (window.innerHeight / 2) + (siteHeader.offsetHeight) / 2;
    // screenMidPoint = (window.innerHeight / 2);
    screenWidth = window.innerWidth;
    accodianMediaPlaceholder = document.querySelector('#accordian-desktop-media dotlottie-player');
    accodianMediaPlaceholderSource = accodianMediaPlaceholder ? accodianMediaPlaceholder.src : null;
    scrollSound = new Audio(LOLLY_URL+'/audio/scrollwheel.mp3');


    let featureAccordianObserver = new IntersectionObserver(featureAccordianObserverCallback);

    if (null !== desktopMedia && null !== accordian) {

        desktopMedia.style.top = (siteHeader.offsetHeight) / 2 + 'px';

        if (1024 <= screenWidth) {

            Array.from(accordian.children).forEach(accordianItem => {

                accordianItem.querySelector(".accordian-media").style.display = "none";

            });

        }

        featureAccordianObserver.observe(accordian);

    }
});