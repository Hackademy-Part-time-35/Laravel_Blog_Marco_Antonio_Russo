import axios from 'axios';
import './bootstrap';
import 'flowbite';

// variabili per navbar responsive
let bars = document.querySelector("#navBarsBtn");
let navLinks = document.querySelector("#navLinks");

// variabili per alternanza articoli
// let articlesComponent = document.querySelectorAll("article.articleComponent");
// let articlesComponentPar = document.querySelectorAll("p.articleComponent");

// variabili per colore stelle rank
let rankStar = Array.from(document.querySelectorAll("i.starRank"));
let rankVote = document.querySelectorAll("span.starRank");

// variabili per preview img nuovo articolo
let previewContainer = document.querySelector("div#preview-container");
let outputIMG = document.querySelector("img#preview");
let inputIMG = document.querySelector("input#image");

// variabili per preview img nuovo libro
let bookCover = document.querySelector("input#coverInput");
let bookCoverLabel = document.querySelector("label#coverLabel");
let bookCoverImg = document.querySelector("img#coverImg");

// variabili per la creazione di un nuovo libro
let starInput = document.querySelector("input#starInput");
let bookRank = document.querySelector("span#bookRank");
let titleEdit = document.querySelector("#titleEdit");
let title = document.querySelector("input[name='title']");
let authorEdit = document.querySelector("#authorEdit");
let author = document.querySelector("input[name='author']");
let dateEdit = document.querySelector("#dateEdit");
let date = document.querySelector("input[name='date']");
let descEdit = document.querySelector("#descEdit");
let desc = document.querySelector("input[name='description']");

// variabili per dashboard
let profileImgInput = document.querySelector("input#profileImgInput");
let clickAreaProfileImage = document.querySelector("#clickAreaProfileImage");
let profileImgLabel = document.querySelector("label#profileImgLabel");
let profileImg = document.querySelector("img#profileImg");
let profileImgForm = document.querySelector("form#profileImgForm");

// variabili per cambiare visibilità all'articolo nell'index
let visibilityBtn = document.querySelector("button#visibilityBtn");

//variabili per crea categoria nel crea articolo
let modalTitle = document.querySelector("input#modalTitle"); 
let modalDescription = document.querySelector("input#modalDescription"); 
let body = document.querySelector("textarea[name='body']");
let modalBody = document.querySelector("input#modalBody"); 


// const formData = new FormData();
// formData.append("key1", "value1");
// formData.append("key2", "value2");

// let btnaxios = document.querySelector("#axiosBtn");
// btnaxios.addEventListener("click" ,  function(){
//     axios.delete("/dashboard/categories", {
//         body: formData
//     }).then(response => window.location.href = "/dashboard/categories")
// })

// Funzioni


// toggle nav links show on mobile
function toggleNavLinks(){   
    navLinks.classList.toggle("hidden");
    navLinks.classList.toggle("absolute");
    navLinks.classList.toggle("right-0");
    navLinks.classList.toggle("top-16");
    navLinks.classList.toggle("text-right");
    navLinks.classList.toggle("border");
    navLinks.classList.toggle("border-red-700");
    navLinks.classList.toggle("rounded-lg");
    navLinks.classList.toggle("m-2");
    navLinks.classList.toggle("p-5");
}


function copyEditValues(editField, inputField){
    inputField.value = editField.textContent;
    editField.addEventListener("input", function(){
        inputField.value = editField.textContent;
    })
}

function copyHiddenInput(visibleInput, hiddenInput){
    hiddenInput.value = visibleInput.value
    visibleInput.addEventListener("input", function(){
        hiddenInput.value = visibleInput.value;
    })

}

function starDraw(){
    rankStar = Array.from(document.querySelectorAll("i.starRank"));
        rankStar.forEach((star,idStar) =>{

            if(idStar + 0.5 == starInput.value / 2){
                star.classList.remove("fa-regular", "fa-star")
                star.classList.add("fa-solid", "fa-star-half-stroke")
            }else if(idStar < starInput.value / 2) {
                star.classList.remove("fa-regular", "fa-star-half-stroke")
                star.classList.add("fa-solid", "fa-star")
            }else{
                star.classList.add("fa-regular", "fa-star");
                star.classList.remove("fa-star-half-stroke", "fa-solid")
            }
        })
        bookRank.textContent = starInput.value;
}

function imagePreview(input,previewArea,inputLabel){
    input.addEventListener("change", function(file){
        previewArea.classList.remove("hidden");
        previewArea.src = URL.createObjectURL(file.target.files[0]);
        previewArea.onload = function(){
            URL.revokeObjectURL(previewArea.src);
        }
        if(inputLabel)inputLabel.classList.add("hidden")
    })
}





// Codice 

bars.onclick = toggleNavLinks;

// alternanza articoli
// articlesComponent.forEach((el,idx) =>{
//     if(idx % 2 != 0){
//         el.classList.add("text-end", "flex", "flex-col");
//     }
// })

// if(articlesComponentPar){
//     articlesComponentPar.forEach((el,idx) =>{
//         if(idx % 2 != 0){
//             el.classList.add("self-end");
//         }
//     })
// }


// disegno stelle
rankVote.forEach((el,idx) =>{
    let bookStar = rankStar.splice(0,5);
    let bookVote = parseInt(el.textContent);
    bookStar.forEach((star,idStar) =>{
        if(idStar + 0.5 == bookVote / 2){
            star.classList.remove("fa-regular", "fa-star")
            star.classList.add("fa-solid", "fa-star-half-stroke")
        }else if(idStar < bookVote / 2) {
            star.classList.remove("fa-regular")
            star.classList.add("fa-solid")
        }
    })
})


// preview immagine al caricamento
if(inputIMG){
    inputIMG.addEventListener("change", function(file){
        previewContainer.classList.remove("hidden");
        previewContainer.classList.add("flex");
        outputIMG.src = URL.createObjectURL(file.target.files[0]);
        outputIMG.onload = function(){
            URL.revokeObjectURL(outputIMG.src);
        }
    })
}




if(bookCover){
    imagePreview(bookCover, bookCoverImg, bookCoverLabel);
}

if(profileImgInput){
    imagePreview(profileImgInput, profileImg);
}

if(starInput){
    starDraw();
    starInput.addEventListener("input", starDraw)
}


// auto insert da div editabili a input sez. libri
if(titleEdit || authorEdit || dateEdit || descEdit){
    copyEditValues(titleEdit,title);
    copyEditValues(authorEdit,author);
    copyEditValues(dateEdit, date);
    copyEditValues(descEdit, desc);
}



if(modalTitle || modalDescription || modalBody){
    copyHiddenInput(title, modalTitle);
    copyHiddenInput(desc, modalDescription);
    copyHiddenInput(body, modalBody);

}

