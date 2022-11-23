/* DECLARATION DES VARIABLES */
const buttons = document.querySelectorAll(".form-check-input");//select all the buttons elements
const card = document.getElementById("card1")
function listenToButtons(){
    // ajout des eventListeners sur les boutons
    buttons.forEach(button => button.addEventListener("click", changeVisibility) );

}


function changeVisibility(e){
    console.log(e);
    console.log(card);
    nextCard = card.nextSibling;
    card.classList.add("invisible-question");
    nextCard.classList.remove("invisible-question");
}

listenToButtons();