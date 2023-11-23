const triggers_jeu = document.querySelectorAll(".question");
const fleche = document.querySelector(".fleche");
const questions = document.querySelector(".questions");
const reponse = document.querySelector(".reponse")

const reponses = {
    etudes: "Formation académique et apprentissage continu.",
    skills: "Compétences techniques et savoir-faire spécifiques.",
    projet: "Réalisation de projets concrets pour appliquer les compétences.",
    soft: "Compétences interpersonnelles et traits de personnalité."
  };
  
//petite fleche qui se déplace quand on hover sur les boutons
function fleche_entre () {
fleche.classList.add('visible')

const question_coords = this.getBoundingClientRect();
const questions_coords = questions.getBoundingClientRect();

const coords = {
    top: question_coords.top - questions_coords.top,
    left: question_coords.left -questions_coords.left + question_coords.width - 10
}

fleche.style.setProperty('transform',`translate(${coords.left}px, ${coords.top}px)`)
}

//fonction qui fait que les lettres d'un texte s'affichent 1 par 1
function afficherLettreParLettre(texte, delai) {
    let index = 0;
  
    function afficherLettre() {
      if (index < texte.length) {
        reponse.innerHTML += texte[index];
        index++;
        setTimeout(afficherLettre, delai);
      }
    }
  
    afficherLettre();
  }

//texte qui s'affiche quand on clique sur un bouton
function question_click () {
    let image = document.querySelector('.mini_jeu');

  // Sauvegarder l'ancien src
  let ancienSrc = image.src;

  // Changer le src avec le nouveau chemin d'image
  image.src = 'Images/talk.jpg';

  // Rétablir l'ancien src après 1 seconde
  setTimeout(function() {
    image.src = ancienSrc;
  }, 1000);

    if (this.value == "etudes") {
        reponse.innerHTML= "";
        afficherLettreParLettre("Formation académique et apprentissage continu.", 30);
    } else if (this.value == "skills") {
        reponse.innerHTML= "";
        afficherLettreParLettre("Compétences techniques et savoir-faire spécifiques.", 30);
    } else if (this.value == "projet") {
        reponse.innerHTML= "";
        afficherLettreParLettre("Réalisation de projets concrets pour appliquer les compétences.", 30);
    } else if (this.value == "soft") {
        reponse.innerHTML= "";
        afficherLettreParLettre("Compétences interpersonnelles et traits de personnalité.", 30);
    }

}
triggers_jeu.forEach(trigger => trigger.addEventListener('mouseenter',fleche_entre));
triggers_jeu.forEach(trigger => trigger.addEventListener('click',question_click));