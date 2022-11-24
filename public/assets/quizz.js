/* DECLARATION DES VARIABLES */
const buttons = document.querySelectorAll(".form-check-input");//select all the buttons elements

const card = document.getElementsByClassName('questions');
let i =0;
function listenToButtons(){
    // ajout des eventListeners sur les boutons
    buttons.forEach(button => button.addEventListener("click", changeVisibility));

}


function changeVisibility(e){

    let currentCard = card[i];
    nextCard = currentCard.nextSibling;
    currentCard.classList.add("invisible-question");
    nextCard.classList.remove("invisible-question");
    i++;

}

listenToButtons();