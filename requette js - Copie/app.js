// Qu'est ce qu'une promesse ? 
/* Un objet qui prend une fonction en callback. Cette fonction prend ensuite 2 paramètres : un pour son status complété et un pour un status rejeté, ces 2 paramètres étant basiquement eux-mêmes des fonctions */
/*
const promise = new Promise((success, reject) => {
    let condition = false;
    if(condition){
        success('Promesse tenue');
    }else{
        reject('Promesse rompue');
    }
})

// Utilisons cette promesse, dans un exemple : 

promise
    .then((msg) => console.log(msg))
    .catch((err) => {
        console.error(err);
    })

// Reprenons maintenant l'exemple de fetch : 
*/
/*fetch('https://jsonplaceholder.typicode.com/posts')

    .then(response => response.json())
    .then((data) => {
        console.log(data);
    })
*/
// Avec la gestion d'erreur
/*
    .then(response => {
        console.log(response);
        if(response.ok){
            return response.json();
        }
        throw new Error('Something went wrong');
    })
    .then(data => {
        console.log(data);
    })
    .catch(error => console.error(error));
*/

// la même chose avec async/await
// Le mécanisme est identique mais il y a des petits changements qui rendent le code un poil plus lisible */

/*
const asyncFunction = async () => {
    let res = await fetch('https://jsonplaceholder.typicode.com/posts');
    let data = await res.json();
    console.log(data);
}
*/
let root = document.querySelector("#root")
let information = document.createElement('div')
root.appendChild(information)
// avec la gestion d'erreur 

fetch('https://api.npoint.io/33fe536f3a3bc2f018fb')

    .then(response => response.json())
    .then((data) => {
        console.log(data);
        //for(i=0;i<data.games.length; i++){
            data.games.map((elem) => {
            let info = elem.info
            let year = elem.year
            let genre = elem.genre
            let image = elem.image
            let title = elem.title
            let players = elem.players
            let designer = elem.designer
            let container = document.createElement('article')
            root.appendChild(container)
            container.className = "col-6" 
            container.setAttribute ('data-bs-toggle', 'offcanvas')
            container.setAttribute ("data-bs-target", "#offcanvasRight")
            let img = document.createElement("img")
            container.appendChild(img)
            img.src = image
            img.className = "d-block mx-auto"
            let titre = document.createElement("h1")
            container.appendChild(titre)
            titre.className = 'text-center'
            titre.innerText = title 
            //information.innerText = info
            information.className = "offcanvas offcanvas-end"
            information.id = "offcanvasRight"  
            container.addEventListener("click",function(){
                information.innerText = ""
                information.innerText = info + year + genre + designer
            })
      //  }
    })
    })
// Pour se rendre compte du côté asynchrone : 



//asyncFunction();

/* On constate que ce code est exécuté avant que la promesse ne soit terminée, il renvoie donc une promesse "pending", en attente. Puis le bloc try plus haut fait son oeuvre et on a bien les résultats en console. */
//asyncFunction()
