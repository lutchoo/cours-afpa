export function Age({brithday}){
    const birth = new Date(brithday)
    const today = Date.now()
    const diff = parseInt((today-birth)/(1000*3600*24*365.25))
    //console.log(diff)
    return <span>{diff}</span>
}