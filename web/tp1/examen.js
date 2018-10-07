// déclaration des variables 

    let nom = document.querySelector("#nom")
    let prenom= document.querySelector("#prenom")
    let message =document.querySelector("#resultat-message")
    //message.innerText="Je suis un test"
    
    
    
    // cette fonction permet de verifier l'ensmeble de champs 
function correction() { 
    //si le champs nom | prenom est vide 
    if(nom.value.length==0 ||prenom.value.length==0 ){
     alert("Nom ou prenom vide , veuillez remplir tous les champs ")
     nom.focus() 
        
     let radiobutton1=document.querySelector("#r1")
     let elementCoche=false; 
     for(var i=0;i<=radiobutton1.length;i++ ){
         if(radiobutton1.item(0).checked==true){
             console.log(i)
            elementCoche=true;
         }
     }
     console.log(elementCoche)
}
// if()
}


// Au soummission de formulaire 
document.getElementById('formulaire').addEventListener('submit', function(e){
    //on annulle le soummission de formulaire 
    e.preventDefault();
    //on appel au fonction correction 
    correction() 


})