// Sélectionner l'image
const image = document.getElementById('logo');

// Définir la position initiale et la vitesse de déplacement
let position = 0;
const speed = 2;

// Fonction pour animer l'image
function animateImage() {
    position += speed;
    image.style.left = position + 'px';

    // Recommence à 0 lorsque l'image sort de l'écran
    if (position > window.innerWidth) {
        position = -image.width;
    }

    requestAnimationFrame(animateImage);
}

// Démarrer l'animation
animateImage();
