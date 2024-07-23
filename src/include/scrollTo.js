let scrollDownButton;
let sectionCount;
let scrollIndex;
let scrollDirection;
let scrollStartPosition;
let directionChange;

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

const handleScrollDown = () => {

    scrollIndex += 1;

    scrollTo(
        {
            top: window.scrollY + document.querySelector('[data-scroll-index="' + (scrollIndex) + '"]').getBoundingClientRect().top,
            left: 0,
            behavior: 'smooth'
        }
    );

    if (sectionCount === scrollIndex) {
        scrollDownButton.style.display = 'none';
        return;
    }

    console.log('scrollIndex: ' + scrollIndex);
}
const handleScrollUp = () => {

    if ( 1 !== scrollIndex) {
        scrollIndex -= 1;
    }

    scrollTo(
        {
            top: window.scrollY + document.querySelector('[data-scroll-index="' + (scrollIndex) + '"]').getBoundingClientRect().top,
            left: 0,
            behavior: 'smooth'
        }
    );

    if (sectionCount !== scrollIndex) {
        scrollDownButton.style.display = '';
        return;
    }

    console.log('scrollIndex: ' + scrollIndex);
}

const setScrollIndex = () => {
    setScrollDirection();


    if ( 'down' === scrollDirection ){

        if (sectionCount === scrollIndex) {
            return;
        }

        if ( 0 >= document.querySelector('[data-scroll-index="' + (scrollIndex + 1) + '"]').getBoundingClientRect().top) {

            handleScrollDown();
        
    
        }
    } else {

        if ( 1 === scrollIndex) {
            return;
        }


        if (  window.innerHeight  <= document.querySelector('[data-scroll-index="' + (scrollIndex - 1 ) + '"]').getBoundingClientRect().bottom) {

            handleScrollUp();

    
        }

    }

}

document.addEventListener("DOMContentLoaded", () => {
    scrollDownButton = document.getElementById('scroll-down');
    sectionCount = Array.from(document.querySelectorAll('[data-scroll-index]')).length;
    scrollIndex = 1;
    scrollDirection = 'down';
    scrollStartPosition = 0;
    directionChange = false;
    if (null !== scrollDownButton) {
        scrollDownButton.addEventListener('click', handleScrollDown);

        document.addEventListener('scroll', setScrollIndex);
    }
});
