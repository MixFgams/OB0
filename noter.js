const btnNoter=document.querySelector("#noter button");
const elementRendreVisible=document.querySelectorAll(".invisible");
console.log(btnNoter);
const plus=document.querySelector("#plus")
const moins=document.querySelector("#moins")
const envoie=document.querySelector("#envoie")
const nbEtoile=document.querySelector("#nbEtoile")
let [compteurEtoile,mot]=nbEtoile.textContent.split(" ")
let IntcompteurEtoile=parseInt(compteurEtoile)



btnNoter.addEventListener("click",()=>{
    nbEtoile.textContent="0 etoiles"

    elementRendreVisible.forEach((elem)=>{
        elem.classList.toggle('invisible')
        elem.classList.toggle('visible')


    })
})


plus.addEventListener("click",()=>{
    if (IntcompteurEtoile<5){
        IntcompteurEtoile+=1
        nbEtoile.textContent=IntcompteurEtoile+" "+mot
        compteurEtoile=IntcompteurEtoile.toString()

    }
})

moins.addEventListener("click",()=>{
    if (IntcompteurEtoile>0){
        IntcompteurEtoile-=1
        nbEtoile.textContent=IntcompteurEtoile+" "+mot
        compteurEtoile=IntcompteurEtoile.toString()
    }
})

envoie.addEventListener('click',()=>{
    elementRendreVisible.forEach((elem)=>{
        elem.classList.toggle('visible')
        elem.classList.toggle('invisible')
    })
})