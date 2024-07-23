function lollyAboutVideo() {

    let brandVideo = document.querySelector('.video');
    let brandPlayButton = document.getElementById('ly-play');
    let brandVideoOverlay = document.getElementById('ly-play');

    if (null !== brandVideo) {
        brandPlayButton.addEventListener('click', function () {
            brandVideo.play();
            brandPlayButton.style.display = 'none';
            brandVideoOverlay.style.display = 'none';
            if (brandVideo.requestFullscreen) brandVideo.requestFullscreen();
            else if (brandVideo.ebkitRequestFullscreen) brandVideo.webkitRequestFullscreen();
            else if (brandVideo.mozRequestFullScreen) brandVideo.mozRequestFullScreen();
            else if (brandVideo.msRequestFullscreen) brandVideo.msRequestFullscreen();
            else if (brandVideo.webkitEnterFullscreen) brandVideo.webkitEnterFullscreen();

        });
        brandVideo.addEventListener('pause', function () {
            brandVideo.pause();
            brandVideoOverlay.style.display = 'block';
        });
        brandVideo.addEventListener('ended', function () {
            brandVideoOverlay.style.display = 'block';
            brandPlayButton.style.display = 'block';
        });
        brandVideo.addEventListener('click', function (event) {
            event.preventDefault();
            if (brandVideo.paused) {
                brandVideo.play();
                brandVideoOverlay.style.display = 'none';
            } else {
                brandVideo.pause();
                brandVideoOverlay.style.display = 'block';
            }
        });
    }


}

function lollyAboutVideo1() {

    let brandVideo = document.querySelector('.video');
    let brandPlayButton = document.getElementById('ly-play1');
    let brandVideoOverlay = document.getElementById('ly-play1');

    if (null !== brandVideo) {
        brandPlayButton.addEventListener('click', function () {
            brandVideo.play();
            brandPlayButton.style.display = 'none';
            brandVideoOverlay.style.display = 'none';
            if (brandVideo.requestFullscreen) brandVideo.requestFullscreen();
            else if (brandVideo.ebkitRequestFullscreen) brandVideo.webkitRequestFullscreen();
            else if (brandVideo.mozRequestFullScreen) brandVideo.mozRequestFullScreen();
            else if (brandVideo.msRequestFullscreen) brandVideo.msRequestFullscreen();
            else if (brandVideo.webkitEnterFullscreen) brandVideo.webkitEnterFullscreen();

        });
        brandVideo.addEventListener('pause', function () {
            brandVideo.pause();
            brandVideoOverlay.style.display = 'block';
        });
        brandVideo.addEventListener('ended', function () {
            brandVideoOverlay.style.display = 'block';
            brandPlayButton.style.display = 'block';
        });
        brandVideo.addEventListener('click', function (event) {
            event.preventDefault();
            if (brandVideo.paused) {
                brandVideo.play();
                brandVideoOverlay.style.display = 'none';
            } else {
                brandVideo.pause();
                brandVideoOverlay.style.display = 'block';
            }
        });
    }


}

document.addEventListener("DOMContentLoaded", () => {
    lollyAboutVideo();
    lollyAboutVideo1();
});
