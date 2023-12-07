 // Sélectionnez tous les liens dans la section des miniatures
    var miniaturesLinks = document.querySelectorAll('.miniatures a');
    const suivant = document.querySelector('.suivant');
const precedent = document.querySelector('.precedent');
const numero_html = document.querySelector('.preview strong');
const dessin_img = document.querySelector('.preview img');
const dessins = document.getElementById('dessins');
let numero_dessin = 1;
    // Ajoutez un gestionnaire d'événement clic à chaque lien
    miniaturesLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {

            // Affichez la section des dessins
            dessins.style.display = 'flex';
            var imageSrc = this.querySelector('img').getAttribute('src');
            dessin_img.src = imageSrc;
            numero_dessin = this.querySelector('img').getAttribute('data-id');
            numero_html.innerHTML = numero_dessin;
        });
    });
    const carres = document.querySelectorAll('.carre');

    carres.forEach(function(carre) {
        carre.addEventListener('click', function(event) {
            dessins.style.display = 'none';
            event.stopPropagation(); // Prevent the click event from propagating to document
        });
    });
    // DESSINS
function dessin_suivant () {
numero_dessin = (numero_dessin % 21) + 1;
numero_html.innerHTML = numero_dessin;
dessin_img.src = 'Images/Dessins/' + numero_dessin + '.jpg';
if (numero_dessin === 7) {
  dessin_img.src = 'Images/Dessins/7.gif';
}
}

function dessin_precedent () {
  numero_dessin = (numero_dessin === 1) ? 21 : numero_dessin - 1;
  numero_html.innerHTML = numero_dessin;
  dessin_img.src = 'Images/Dessins/' + numero_dessin + '.jpg';
  if (numero_dessin === 7) {
    dessin_img.src = 'Images/Dessins/7.gif';
  }
  }

suivant.addEventListener('click',dessin_suivant);
precedent.addEventListener('click',dessin_precedent);