const setFullscreenImageBrands = () => {
    let fullscreenImage1 = document.getElementById('fullscreen-image-1');
    let fullscreenImage2 = document.getElementById('fullscreen-image-2');
    let fullscreenImage3 = document.getElementById('fullscreen-image-3');
    let fullscreenImage4 = document.getElementById('fullscreen-image-4');

    if ( 1024 <= window.innerWidth ){
        fullscreenImage1.style.backgroundImage = "url('"+LOLLY_URL+"/images/brands-all-in-one-manegement-desktop.webp')";
        fullscreenImage2.style.backgroundImage = "url('"+LOLLY_URL+"/images/brands-performance-based-desktop.webp')";
        fullscreenImage3.style.backgroundImage = "url('"+LOLLY_URL+"/images/brands-vetted-creators-desktop.webp')";
        fullscreenImage4.style.backgroundImage = "url('"+LOLLY_URL+"/images/brands-tracking-pixel-desktop.webp')";
    } else {
        fullscreenImage1.style.backgroundImage = "url('"+LOLLY_URL+"/images/brands-all-in-one-manegement-mobile.webp')";
        fullscreenImage2.style.backgroundImage = "url('"+LOLLY_URL+"/images/brands-performance-based-mobile.webp')";
        fullscreenImage3.style.backgroundImage = "url('"+LOLLY_URL+"/images/brands-vetted-creators-mobile.webp')";
        fullscreenImage4.style.backgroundImage = "url('"+LOLLY_URL+"/images/brands-tracking-pixel-mobile.webp')";
    }
}

const setFullscreenImageCreators = () => {
    let fullscreenImage1 = document.getElementById('fullscreen-image-1');
    let fullscreenImage2 = document.getElementById('fullscreen-image-2');
    let fullscreenImage3 = document.getElementById('fullscreen-image-3');

    if ( 1024 <= window.innerWidth ){
        fullscreenImage1.style.backgroundImage = "url('"+LOLLY_URL+"/images/creators-analyze-content-desktop.webp')";
        fullscreenImage2.style.backgroundImage = "url('"+LOLLY_URL+"/images/creators-discover-brands-desktop.webp')";
        fullscreenImage3.style.backgroundImage = "url('"+LOLLY_URL+"/images/creators-payment-protection-desktop.webp')";
    } else {
        fullscreenImage1.style.backgroundImage = "url('"+LOLLY_URL+"/images/creators-analyze-content-mobile.webp')";
        fullscreenImage2.style.backgroundImage = "url('"+LOLLY_URL+"/images/creators-discover-brands-mobile.webp')";
        fullscreenImage3.style.backgroundImage = "url('"+LOLLY_URL+"/images/creators-payment-protection-mobile.webp')";
    }
}

window.addEventListener('DOMContentLoaded', () => {

    if( 'brands' === document.querySelector('main').id ){

        setFullscreenImageBrands();

    } else if ( 'creators' === document.querySelector('main').id){

        setFullscreenImageCreators();

    }
    
});
