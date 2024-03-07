import { useState } from "react"

export function Groupe({groupes}){
    const [ListGroupes, setListGroupes] = useState()
     
        fetch('http://localhost:8000'+groupes)
        .then((res)=>res.json())
        .then(data => setListGroupes(data.name))


 
    return (
    
       <h2>{ListGroupes}</h2> 
    )
}
