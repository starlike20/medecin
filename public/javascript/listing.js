let taille=document.getElementById('taille').innerHTML
let poids=document.getElementById('poid').innerHTML
let Imc=document.getElementById('imc')
    let im 
    im=poids/taille
    console.log(typeof(poids))
    Imc.innerHTML=im
