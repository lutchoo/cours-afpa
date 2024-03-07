// les écouteurs d'évenements 
let btnName = document.querySelector('#btnName');
btnName.addEventListener('click', function() {
    //récupérer ce qui a été saisi
    let usrvalue  = document.querySelector('#name').value;
    
    //écrire un script qui va vérifier que quelque chose a bien été saisi
    if(usrvalue){
        //l'afficher en console
        console.log(usrvalue);
    }else{
        alert('vous devez remplir les champs');
    }
});

// la création d'éléments HTML 
let title = document.createElement('h2');
title.innerText = "Mon super titre";
title.id = "identifiant";
title.style.color = "blue";

let root = document.querySelector('#root');
root.appendChild(title);