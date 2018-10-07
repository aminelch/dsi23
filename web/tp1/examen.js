// déclaration des variables 

var nom = document.querySelector("#nom");
var prenom = document.querySelector("#prenom");
var message = document.querySelector("#resultat-message");
var radioEelement1 = document.querySelector("#r1");
var radioEelement2 = document.querySelector("#r2");
//message.innerText="Je suis un test"

//Verifie si un champ radio est bien remplie ou nn 
function radioValidation(radioElem){
    var raValue = false;
    for(var i=0; i<radioElem.length;i++){
        if(radioElem[i].checked == true){
            raValue = true;    
        }
    }
    if(!raValue){
        alert("Veuillez choisir un option");
        return false;
    }

}


// cette fonction permet de verifier l'ensmeble de champs 
function correction() {
    
    // si le champs nom | prenom est vide 
    if (nom.value.length == 0 || prenom.value.length == 0) {
        alert("Nom ou prenom vide , veuillez remplir tous les champs ")
        nom.focus()

    }

    radioValidation(radioEelement1);
    radioValidation(radioEelement2);

    // lbeqi kamlo enty y fares haha awka bqat fonction mtaa moy heki fiha somme o tchouf kol input chnaya l valeur mtaaou 
    //bayelt ana ta ghdwa nkamel fih sinon rakah jawek hasel ;) 
    

}




// Au soummission de formulaire 
document.getElementById('formulaire').addEventListener('submit', function (e) {
    //on annulle le soummission de formulaire 
    e.preventDefault();

    correction();

})