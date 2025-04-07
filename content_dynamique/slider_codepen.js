// Sélectionne toutes les images du slider
const image = document.querySelectorAll('img');
// Nombre total d'images dans le slider
const nbSlide = image.length;
// Sélectionne le bouton de navigation droite
const suivant = document.querySelector('.droit');
// Sélectionne le bouton de navigation gauche
const precedent = document.querySelector('.gauche');

// Initialise le compteur pour suivre l'image active
let count = 0;

// Fonction pour afficher l'image suivante
function SlideSuivante() {
    // Retire la classe 'active' de l'image actuelle
    image[count].classList.remove('active');

    // Incrémente le compteur ou le réinitialise si c'est la dernière image
    if (count < nbSlide - 1) {
        count++;
    } else {
        count = 0;
    }

    // Ajoute la classe 'active' à la nouvelle image
    image[count].classList.add('active');
    console.log(count); // Affiche le compteur dans la console pour le débogage
}
// Ajoute un écouteur d'événement pour le clic sur le bouton 'suivant'
suivant.addEventListener('click', SlideSuivante);

// Fonction pour afficher l'image précédente
function SlidePrecedente() {
    // Retire la classe 'active' de l'image actuelle
    image[count].classList.remove('active');

    // Décrémente le compteur ou le réinitialise si c'est la première image
    if (count > 0) {
        count--;
    } else {
        count = nbSlide - 1;
    }

    // Ajoute la classe 'active' à la nouvelle image
    image[count].classList.add('active');
    console.log(count); // Affiche le compteur dans la console pour le débogage
}
// Ajoute un écouteur d'événement pour le clic sur le bouton 'précédent'
precedent.addEventListener('click', SlidePrecedente);

// Change automatiquement l'image toutes les 3,5 secondes
setInterval(SlideSuivante, 3500);
