let année=document.getElementById("année")
let moi=document.getElementById("mois")
let jour=document.getElementById("jour")
let mail=document.getElementById("mail")
let erro=document.getElementById("error")
let image=document.getElementById("image")
let envoyer=document.getElementById("envoyer")
let nom=document.getElementById("nom")
let prenom=document.getElementById("prenom")
let jours=document.getElementsByClassName("jours")
let date
let a
let valimage,valimail,valipoid,valitaill
let years
let imois
let p
let n
let taille=document.getElementById("taille")
let poid=document.getElementById("poid")
const d = new Date();
let year = d.getFullYear();
m=year-1950
for(let i=0; i<=m; i++){
    a=1950+i
    année.innerHTML+="<option valeur='"+i+1+"'>"+a+"</option>"
}
function getyear(){
    years=document.getElementById("année").value
    if(years!="choisir une année"){
        return years
    }
    else{
        years=0
    }
}
function getmois(){
    let mois=document.getElementById("mois").value
    jours.innerHTML=null
    let t=['janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decembre']
    let o=[28,29,30,31];
    if(mois!="choisir un mois"){
        for(let i=0; i<t.length;i++){
            if(t[i]==mois){
                imois=i
            }
        }
        for(let i=0;i<o.length;i++){
            p=new Date(getyear(),imois,o[i]+1)
            if(p.getDate()==1){
                n=o[i]
            }
        };
        for(let i=1 ;i<=n;i++){
            jour.innerHTML+="<option  valeur='"+i+"'class='jours'>"+i+"</option>"
        }
        return imois
    }
    else{
        imois=-1
    }
}
function verfimg(nom){
    let image=document.getElementById("image")
    if(nom==0){
        image.style.border='red'
    }
    else{
        image.style.border='green'
    }
}
taille.addEventListener('keyup',function(){
    a=taille.value
    a=parseInt(a)
    let errortai=document.getElementById("error-taille")
    valitaill=1
    if(Number.isInteger(a)){
        errortai.innerText=""
    }
    else{
        errortai.innerText= "veillez entrez une valeur entiere "
        errortai.style.color="red"
        valitaill=0
    }
})
poid.addEventListener('keyup',function(){
    a=poid.value
    a=parseInt(a)
    let errorpoid=document.getElementById("error-poid")
    valipoid=1
    if(Number.isInteger(a)){
        errorpoid.innerText=""
    }
    else{
        errorpoid.innerText= "veillez entrez une valeur entiere "
        errorpoid.style.color="red"
        valipoid=0
    }
})
// verification du mail
mail.addEventListener('keyup',function(){
    let n=mail.value
    valimail=1
    if(n.includes(' ')){
        erro.innerText="entrez un mail valide"
        erro.style.color="red"
        valimail=0
    }
    else if(n.includes('@') && n.includes('.')){
        erro.innerText="mail respectant le formatage"
        erro.style.color="green"
        valimail=1
    }
    else{
        erro.innerText="ceci n'est pas encore un mail"
        erro.style.color="orange"
        valimail=0
    }
})
// l'image
function verifimage(){
    let i, files, allowedFileTypes;
    errorr=document.getElementById("errorr");
    files = image.files;
    valimage=1
    if(files[0].size>5000000){
        errorr.innerText="image trop lourde"
        errorr.style.color="red"
        valimage=0
    }
    else{
        allowedFileTypes = ["image/png", "image/jpeg", "image/gif"];
        for (i = 0; i < files.length; i++) {
            if (allowedFileTypes.indexOf(files[i].type)==-1) {
                errorr.innerText="erreure veillez entrez un fichier image"
                errorr.style.color="red"
                valimage=0
            }
            else{
                valimage=1
            }
        }
    }
}
//avant l'envoie du formulaire
function verificationtous(){
    let errou=document.getElementById("errou")
    errou.innerText=""
    image.classList=null
    mail.classList=null
    poid.classList=null
    taille.classList=null
    nom.classList=null
    prenom.classList=null
    jour.classList=null
    console.log(nom.value)
    if(valimail==0||valimail==undefined||valipoid==0||valipoid==undefined||valitaill==0||valitaill==undefined){
        event.preventDefault()
        errou.innerText="veillez bien remplire avec les formatage indiquer"
        errou.style.color="red"
        if(valimail==0||valimail==undefined){
            mail.classList.add("faux")
        }
        if(valipoid==0||valipoid==undefined){
            poid.classList.add("faux")
        }
        if(valitaill==0||valitaill==undefined){
            taille.classList.add("faux")
        }
        if(nom.value==""){
            nom.classList.add("faux")
        }
        if(prenom.value==""){
            prenom.classList.add("faux")
        }
        if(jour.value=="choisir un jour"){
            jour.classList.add("faux")
        }
    }
    else if(jour.value=="choisir un jour"||nom.value==""||prenom.value==""||taille==""||poid==""||moi.value=="choisir un mois"||année.value=="choisir une année"){
        event.preventDefault()
        errou.innerText="veillez bien renseigné tous les champs"
        errou.style.color="red"
        if(nom.value==""){
            nom.classList.add("faux")
        }
        if(prenom.value==""){
            prenom.classList.add("faux")
        }
        if(jour.value=="choisir un jour"){
            jour.classList.add("faux")
        }
        if(moi.value=="choisir un mois"){
            moi.classList.add("faux")
        }
        if(année.value=="choisir une année"){
            année.classList.add("faux")
        }
    }
}
function verificationtouss(){
    let errou=document.getElementById("errou")
    errou.innerText=""
    mail.classList=null
    poid.classList=null
    taille.classList=null
    nom.classList=null
    prenom.classList=null
    jour.classList=null
    console.log(nom.value)
    if(valimail==0||valipoid==0||valitaill==0){
        event.preventDefault()
        errou.innerText="veillez bien remplire avec les formatage indiquer"
        errou.style.color="red"
        if(valimail==0){
            mail.classList.add("faux")
        }
        if(valipoid==0){
            poid.classList.add("faux")
        }
        if(valitaill==0){
            taille.classList.add("faux")
        }
        if(nom.value==""){
            nom.classList.add("faux")
        }
        if(prenom.value==""){
            prenom.classList.add("faux")
        }
        if(jour.value=="choisir un jour"){
            jour.classList.add("faux")
        }
    }
    else if(jour.value=="choisir un jour"||nom.value==""||prenom.value==""||taille==""||poid==""||moi.value=="choisir un mois"||année.value=="choisir une année"){
        event.preventDefault()
        errou.innerText="veillez bien renseigné tous les champs"
        errou.style.color="red"
        if(nom.value==""){
            nom.classList.add("faux")
        }
        if(prenom.value==""){
            prenom.classList.add("faux")
        }
        if(jour.value=="choisir un jour"){
            jour.classList.add("faux")
        }
        if(moi.value=="choisir un mois"){
            moi.classList.add("faux")
        }
        if(année.value=="choisir une année"){
            année.classList.add("faux")
        }
    }
}