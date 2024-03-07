/* Les variables 
On peut lui attribuer une valeur immédiatement avec l'opérateur "="

On essaie toujours de donner un nom pertinent à nos variables, en anglais et 
en utilisant l'écriture camelCase si l'on souhaite utiliser plusieurs mots
*/

let formateur = "greg"

//les types de variables 
 
//string : 
let text = "ceci est un texte"; 
/*
On note une chaine de caractères avec les guillemets. 
Un contenu saisi par l'utilisateur depuis un input est toujours une string ! 
*/

//number : 
let number = 10;

//boolean : 
let happy = true; 
/* 
Un booléen ne peut être que vrai ou faux. Les 2 valeurs possibles sont donc true ou false 
A noter, le résultat d'une condition est toujours un booléen ! 
*/

//array : 
let stagiaires = ["Clément", "Djibril", "Julien", "Lucas", "Marceau", "Mathieu", "Mélanie", "Noé", "Romain", "Sami", "Youssef"]
/* 
On accède à une valeur dans un tableau en notant le nom du tableau suivi de l'index que l'on cherche (en commençant par 0 pour le premier)
par exemple : stagiaires[1] renverra "Laurent"
*/

//object : 
let greg = {
    name: "Fourmaux",
    firstname: "Grégory",
    age: 38,
}
/*
Les éléments à gauche des ":" sont apellés les "propriétés" de l'objet. 
On accède à leur valeur en notant le nom de l'objet suivi d'un point puis du nom de la propriété.
par exemple : greg.age renverra 38
*/


