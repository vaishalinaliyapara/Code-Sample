import '@dotlottie/player-component';

document.addEventListener('DOMContentLoaded', () => {
    const player = document.querySelector('dotlottie-player');
    player.load('http://localhost:10006/wp-content/themes/lolly-v2//lottie/brand-carousel-2.json')
});