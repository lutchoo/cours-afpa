import { useEffect, useState } from "react"
import { Contact } from "./components/Contact"

function MyApp(){

    const [listContacts, setListContacts] = useState([])
    /*useEffect(()=>{
        listContacts.map((contact)=>{
            console.log(contact)
            return <h2>{contact.firstName}</h2>
        })
    })*/
    function getContact(){
        fetch('http://localhost:8000/api/contacts')
        .then((res)=>res.json())
        .then(data => setListContacts(data['hydra:member']))    
}
return (<>
    <h1>coucou</h1>
    <button onClick={getContact}>liste des contacts</button>
    {listContacts.map((contact, index)=>
      <Contact key={index} contact={contact} />
    )}
</>
)
}
export default MyApp