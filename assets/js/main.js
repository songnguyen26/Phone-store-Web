const listImage=document.querySelector(`.list-image`)
const imgs=document.getElementsByTagName('img')
setInterval(() => {
    
}, 4000);
const handleMinus= ()=>{
    const minus=document.getElementById("quantity")
    minus.value=parseInt(minus.value)-1
    minus.innerHTML=minus.value
}
const handlePlus=()=>{
    const minus=document.getElementById("quantity")
    minus.value=parseInt(minus.value)+1
    minus.innerHTML=minus.value
}
