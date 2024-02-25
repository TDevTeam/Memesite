document.addEventListener("DOMContentLoaded", function() {
    const body = document.body;
    const images = ["images/sanic-.jpg","images/huh_cat.jpg","images/img102.jpg"];

    let index = 0;

    function changeBackground() {
        body.style.backgroundImage = `url(${images[index]})`;
        index = (index + 1) % images.length;
    }

    setInterval(changeBackground, 10000);
    changeBackground();
});