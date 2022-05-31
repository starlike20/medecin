let taille=document.querySelectorAll('.taille')
let poids=document.querySelectorAll('.poid')
let Imc=document.querySelectorAll('.imc')
const p=document.querySelector('p')
let nav=document.querySelector('nav')
let hea=document.querySelector('header')
let b=document.querySelectorAll('nav a')
let patients=document.querySelectorAll('#patients')
let mails=document.querySelectorAll('#mail')
let nom=document.querySelectorAll('#nom')
let prenom=document.querySelectorAll('#prenom')
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
        i=0;
        n=recherche.value.length
        element.classList.add('nono')
        console.log("1")
        while(i<=element.innerHTML.length-n+1){
            j=0
            let mmai=1
            while(j<n && mmai==1){
                if(element.innerHTML[i+j]!=recherche.value[j]){
                    mmai=0;
                }
                j++
            }
            if(mmai==1){
                element.parentElement.parentElement.classList.remove('nono')
            }
            if(recherche.value==null){
                element.parentElement.parentElement.classList.remove('nono')
            }
            i++
        }
    });
    nom.forEach(element => {
        i=0;
        n=recherche.value.length
        element.parentElement.parentElement.classList.add('nono')
        while(i<=element.innerHTML.length-n+1){
            j=0
            let mnom=1
            while(j<n && mnom==1){
                if(element.innerHTML[i+j]!=recherche.value[j]){
                    mnom=0;
                }
                j++
            }
            if(mnom==1){
                element.parentElement.parentElement.classList.remove('nono')
            }
            if(recherche.value==null){
                element.parentElement.parentElement.classList.remove('nono')
            }
            i++
        }
    });
    prenom.forEach(element => {
        i=0;
        n=recherche.value.length
        element.parentElement.parentElement.classList.add('nono')
        while(i<=element.innerHTML.length-n+1){
            j=0
            let nprenom=1
            while(j<n && nprenom==1){
                if(element.innerHTML[i+j]!=recherche.value[j]){
                    nprenom=0;
                }
                j++
            }
            if(nprenom==1){
                element.parentElement.parentElement.classList.remove('nono')
            }
            if(recherche.value==null){
                element.parentElement.parentElement.classList.remove('nono')
            }
            i++
        }
    });
})
