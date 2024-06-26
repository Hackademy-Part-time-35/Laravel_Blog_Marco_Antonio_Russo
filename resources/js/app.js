import './bootstrap';

// variabili per navbar responsive
let bars = document.querySelector("#navBarsBtn");
let navLinks = document.querySelector("#navLinks");

// variabili per alternanza articoli
let articlesComponent = document.querySelectorAll("article.articleComponent");
let articlesComponentPar = document.querySelectorAll("p.articleComponent");

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
    editField.addEventListener("input", function(){
        inputField.value = editField.textContent;
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


bars.onclick = toggleNavLinks;


// alternanza articoli
articlesComponent.forEach((el,idx) =>{
    if(idx % 2 != 0){
        el.classList.add("text-end", "flex", "flex-col");
    }
})

articlesComponentPar.forEach((el,idx) =>{
    if(idx % 2 != 0){
        el.classList.add("self-end");
    }
})


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
    bookCover.addEventListener("change", function(file){
        bookCoverImg.classList.remove("hidden");
        bookCoverImg.src = URL.createObjectURL(file.target.files[0]);
        bookCoverImg.onload = function(){
            URL.revokeObjectURL(bookCoverImg.src);
        }

        bookCoverLabel.classList.add("hidden")
    })
}

if(starInput){
    starDraw();
    starInput.addEventListener("input", starDraw)
}



if(titleEdit || authorEdit || dateEdit || descEdit){
    copyEditValues(titleEdit,title);
    copyEditValues(authorEdit,author);
    copyEditValues(dateEdit, date);
    copyEditValues(descEdit, desc);
}
