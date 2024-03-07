import { Groupes } from "./Groupe.jsx"
import { Age } from "./Age.jsx"


export function Contact({contact}){
    return (
    <div className="card mt-5" style={{width: "18rem"}}>
        <div className="card-body">
            <h5 className="card-title">{contact.lastName}</h5>
                <Groupe groupes={contact.grp} />   
            <h6 className="card-subtitle mb-2 text-body-secondary">{contact.firstName}</h6>
            <Age brithday={contact.brithday} /> ans
        </div>
    </div>
  )
}