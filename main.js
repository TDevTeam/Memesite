var imageArray = ["images/sanic-.jpg", "images/huh_cat.jpg", "images/smudge.png"];
var currentImageIndex = 0;

function changeImage() {
    var bruhImage = document.getElementById("bruh-image");

    // Set opacity to 0 to create a fade-out effect
    bruhImage.style.opacity = 0;

    // Change the image source after a short delay
    setTimeout(function() {
        bruhImage.src = imageArray[currentImageIndex];
    }, 500); // Use a shorter delay than the transition duration

    // Set opacity back to 1 to create a fade-in effect after the transition duration
    setTimeout(function() {
        bruhImage.style.opacity = 1;
    }, 500); // Use the same duration as the transition (1 second)
    
    // Increment the index for the next image
    currentImageIndex = (currentImageIndex + 1) % imageArray.length;
}

setInterval(changeImage, 5000);