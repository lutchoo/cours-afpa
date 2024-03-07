/*
Hoisting en javascript 

C'est l'effet pour le navigateur de faire remonter tout en haut du script les variable définie avec var et les fonctions qui ne sont pas contenues dans des variables . Cela rend le code moins prédictible et peut générer des effets de bord gênants. Préférez les solutions présentées ci dessous pour déclarer variables et fonctions

----- pour déclarer une variable 

let mavariable = valeur //let empêche de redéclarer la variable mais on peut toujours redéfinir sa valeur
ou 
const mavariable = valeur //const empêche de redéclarer ET de redéfinir la variable 

----- pour déclarer une fonction en javascript "moderne"

let myfunction = () => { //cette solution a l'avantage de ne pas réécrire this

} ou 
let myfunction = function() {

}

----- les sélecteurs javascript 

document.getElementById(id) => sélectionne l'élément html qui porte l'id en paramètre
document.getElementsByClassName(classe) => sélectionne les éléments qui portent la classe en paramètre 
document.getElementsByTagName(tag) => sélectionne les éléments html de la balise en paramètre

ces sélecteurs sont selon moi moins pratique que querySelector ou querySelectorAll car la distinction se fera en paramètre (#id, .class, tag)

----- pour écrire 

dans la console : console.log("mon message");
dans le document : document.write("mon message");

*/
