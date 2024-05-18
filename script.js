// Sélectionner l'image
const image = document.getElementById('logo');

// Variables pour contrôler l'animation
let angle = 0;
const amplitude = 20;  // Amplitude du flottement
const frequency = 0.05;  // Fréquence du flottement

// Fonction pour animer l'image
function floatImage() {
    const y = amplitude * Math.sin(angle);
    image.style.transform = `translateY(${y}px)`;
    angle += frequency;

    requestAnimationFrame(floatImage);
}

// Démarrer l'animation
floatImage();

