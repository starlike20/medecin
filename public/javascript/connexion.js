let mail=document.getElementById("mail")
let mdp=document.getElementById('mdp')
let afficher=document.getElementById('aficher')
let masquer=document.getElementById('masque')
let selection=document.getElementById('selection')
let envoyer=document.getElementById('envoyer')
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
function verif(a,b){
    if(a==0){
        mail.style.borderColor='red'
        u=0
    }
    if(b==0){
        mdp.style.borderColor='red'
        u=0
    }
    if(u==0){
        event.preventDefault()
    }
    if(a==1 && b==1){

    }
    
}
