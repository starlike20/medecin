let année=document.getElementById("année")
let jour=document.getElementById("jour")
let date
let a
let years
let imois
let p
let n
const d = new Date();
let year = d.getFullYear();
m=year-1950
for(let i=0; i<m; i++){
    a=1950+i
    année.innerHTML+="<option valeur='"+i+1+"'>"+a+"</option>"
    console.log(m)
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
            console.log(p.getDate())
            if(p.getDate()==1){
                n=o[i]
            }
        };
        for(let i=1 ;i<=n;i++){
            jour.innerHTML+="<option>"+i+"</option>"
        }
        return imois
    }
    else{
        imois=-1
    }
}