let taille=document.querySelectorAll('.taille')
let poids=document.querySelectorAll('.poid')
let Imc=document.querySelectorAll('.imc')
const p=document.querySelector('p')
let nav=document.querySelector('nav')
let hea=document.querySelector('header')
let b=document.querySelectorAll('nav a')
let patients=document.querySelectorAll('.patients')
let mails=document.querySelectorAll('.mail')
let nom=document.querySelectorAll('.nom')
let prenom=document.querySelectorAll('.prenom')
let recherche=document.getElementById("rechercher")
window.addEventListener('scroll',function(){
    let y=window.scrollY
    if(y>100){
        p.classList.add('deplamenttitre1')
        nav.classList.add('deplamentnav')
        hea.classList.add('deplamentheader')
        b.forEach(element => {
            element.classList.add('deplacemnta')
        });
    }
    else{
        p.classList=null
        nav.classList=null
        hea.classList=null
        b.forEach(elemen => {
            elemen.classList=null
        });
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
recherche.addEventListener('keyup',function(){
    patients.forEach(element => {
        element.classList.add('nono')
        if(recherche.value==null){
            element.classList.remove("nono")
        }
        else
        {
            i=0;
            n=recherche.value.length
            let nmail=element.querySelector(".mail").textContent
            let nnom=element.querySelector(".nom").textContent
            let nprenom=element.querySelector(".prenom").textContent
            let nmaila=0
            let nnoma=0
            let nprenoma=0
            while(i<=nmail.length-n+1 && nmaila==0){
                j=0
                nmaila=1
                while(j<n && nmaila==1){
                    if(nmail[i+j]!=recherche.value[j]){
                    nmaila=0;
                    }
                    j++
                }
                i++
            }
            i=0
            while(i<=nnom.length-n+1 && nnoma==0){
                j=0
                nnoma=1
                while(j<n && nnoma==1){
                    if(nnom[i+j]!=recherche.value[j]){
                        nnoma=0;
                    }
                    j++
                }
                i++
            }
            i=0
            while(i<=nprenom.length-n+1 && nprenoma==0){
                j=0
                nprenoma=1
                while(j<n && nprenoma==1){
                    if(nprenom[i+j]!=recherche.value[j]){
                        nprenoma=0;
                    }
                    j++
                }
                i++
            }
            if(nmaila==1||nnoma==1||nprenoma==1){
                element.classList.remove("nono")
            }
        }
    });
})
