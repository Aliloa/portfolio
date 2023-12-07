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
  function activerBoutons() {
    // Réactiver tous les boutons
    triggers_jeu.forEach(triggers_jeu => triggers_jeu.disabled = false);
}
//texte qui s'affiche quand on clique sur un bouton
function question_click () {
  triggers_jeu.forEach(triggers_jeu => triggers_jeu.disabled = true);
  for (let i = 0; i < 7; i++) {
    let image = document.querySelector('.mini_jeu');
      // Changer le src avec le nouveau chemin d'image pendant 100 millisecondes
      setTimeout(function() {
        image.src = 'Images/talk.jpg';
      }, i * 300); // Augmentez le délai pour chaque itération
  
      // Rétablir l'ancien src après 100 millisecondes supplémentaires
      setTimeout(function() {
        image.src = 'Images/interview.jpg';
      }, (i * 300) + 100);
  }


    if (this.value == "etudes") {
        reponse.innerHTML= "";
        afficherLettreParLettre("Formation académique et apprentissage continu.", 30);
        setTimeout(activerBoutons, 2000);
    } else if (this.value == "skills") {
        reponse.innerHTML= "";
        afficherLettreParLettre("Compétences techniques et savoir-faire spécifiques.", 30);
        setTimeout(activerBoutons, 2000);
    } else if (this.value == "projet") {
        reponse.innerHTML= "";
        afficherLettreParLettre("Réalisation de projets concrets pour appliquer les compétences.", 30);
        setTimeout(activerBoutons, 2000);
    } else if (this.value == "soft") {
        reponse.innerHTML= "";
        afficherLettreParLettre("Compétences interpersonnelles et traits de personnalité.", 30);
        setTimeout(activerBoutons, 2000);
    }

}
triggers_jeu.forEach(trigger => trigger.addEventListener('mouseenter',fleche_entre));
triggers_jeu.forEach(trigger => trigger.addEventListener('click',question_click));

// MENU BURGER
const burgerMenu = document.querySelector('.burger-menu');
const menuList = document.querySelector('.menu-list');

burgerMenu.addEventListener('click', function () {
    // Toggle la classe 'show' sur le menu-list
    menuList.classList.toggle('show');
});