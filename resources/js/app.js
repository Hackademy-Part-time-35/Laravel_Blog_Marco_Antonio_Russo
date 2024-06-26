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
    console.log(bookStar);
})
