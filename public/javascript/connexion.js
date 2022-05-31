
let mail=document.getElementById("mail")
let mdp=document.getElementById('mdp')
let afficher=document.getElementById('aficher')
let masquer=document.getElementById('masque')
let selection=document.getElementById('selection')
let envoyer=document.getElementById('envoyer')
let erro=document.getElementById('error')
let t=["@","."]
selection.addEventListener('click',function(){
    if(selection.checked==true){
        // masquer.style.display='none'
        masquer.style.visibility='hidden'
        afficher.style.visibility='visible'
        mdp.type='text'
    }
    else{
        masquer.style.visibility='visible'
        // afficher.style.display='none'
        afficher.style.visibility='hidden'
        mdp.type='password'
    }
})
mail.addEventListener('keyup',function(){
    let n=mail.value
    if(n.includes(' ')){
        erro.innerText="entrez un mail valide"
        erro.style.color="red"
    }
    else if(n.includes('@') && n.includes('.')){
        erro.innerText="mail respectant le formatage"
        erro.style.color="green"
    }
    else{
        erro.innerText="ceci n'est pas encore un mail"
        erro.style.color="orange"
    }
})
