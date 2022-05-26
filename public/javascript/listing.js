let taille=document.querySelectorAll('.taille')
let poids=document.querySelectorAll('.poid')
let Imc=document.querySelectorAll('.imc')
const p=document.querySelector('p')
let nav=document.querySelector('nav')
let hea=document.querySelector('header')
window.addEventListener('scroll',function(){
    let y=window.scrollY
    if(y>100){
        p.classList.add('deplamenttitre1')
        nav.classList.add('deplamentnav')
        hea.classList.add('deplamentheader')
    }
    else{
        console.log(y)
        p.classList=null
        nav.classList=null
        hea.classList=null
    }
})
function imec(taille,poids){
    let im 
    im=poids.innerHTML/taille.innerHTML
    return im
}
for(let i=0; i<taille.length;i++){
    Imc[i].innerHTML=imec(taille[i],poids[i])
}
