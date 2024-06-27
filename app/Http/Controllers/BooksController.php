<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    // private $books = [
    //     ["title" => "Il Signore degli Anelli", "author"=> "J.R.R. Tolkien", "date" => 1955, "rank" => 10, "description" => "Il Signore degli Anelli narra della missione di nove personaggi che compongono la Compagnia dell'Anello, partiti per distruggere il più potente Anello del Potere, un'arma che potrebbe rendere invincibile il suo malvagio creatore Sauron se tornasse nelle sue mani, dandogli il potere di dominare tutta la Terra di Mezzo. ", "img" => "https://img.illibraio.it/images/9788845294044_92_310_0_75.jpg"],

    //     ["title" => "Naruto", "author"=> "Masashi Kishimoto", "date" => 1999, "rank" => 9, "description" => "La trama segue le peripezie e le vicissitudini del giovane Naruto Uzumaki, il quale, partendo da ninja inetto e diventando via via più forte, cerca di cambiare il suo mondo, inseguendo il sogno di diventare hokage.", "img" => "https://www.lafeltrinelli.it/images/9788828742470_0_536_0_75.jpg"],

    //     ["title" => "Il fu Mattia Pascal", "author"=> "Luigi Pirandello", "date" => 1904, "rank" => 6, "description" => "Nella premessa il protagonista annuncia che ha deciso di mettere per iscritto la sua strana vicenda per poi lasciare il manoscritto nella biblioteca dove lavora, con l'obbligo di aprirlo solo cinquant'anni dopo la sua terza, ultima e definitiva morte. Il consiglio di mettere per iscritto il suo caso gli è venuto dal suo amico bibliotecario, don Eligio. ", "img" => "https://m.media-amazon.com/images/I/615tweD7PdL._AC_UF1000,1000_QL80_.jpg"],

    //     ["title" => "Marcovaldo ovvero Le stagioni in città", "author"=> "Italo Calvino", "date" => 1963, "rank" => 5, "description" => "Marcovaldo ovvero Le stagioni in città è una raccolta di venti novelle di Italo Calvino, alcune delle quali già uscite a episodi sulle pagine de L'Unità, organo editoriale del Partito Comunista Italiano, all'epoca in cui Calvino ne era militante. La prima edizione fu pubblicata nel novembre del 1963 in una collana di libri per ragazzi di Giulio Einaudi Editore. ", "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8JMb6fb8vBbn3KBIGzJ-vOWjBk97uIxu9Iw&s"],

    //     ["title" => "Harry Potter e la pietra filosofale", "author"=> "J.K. Rowling", "date" => 1997, "rank" => 10, "description" => "Harry Potter è una serie di romanzi fantasy scritta da J. K. Rowling, incentrata sulle avventure del giovane mago Harry Potter e dei suoi migliori amici Ron Weasley ed Hermione Granger, studenti della Scuola di Magia e Stregoneria di Hogwarts. ", "img" => "https://m.media-amazon.com/images/I/718kKmxQBWL._AC_UF1000,1000_QL80_.jpg"],

    //     ["title" => "Orgoglio e pregiudizio", "author"=> "Jane Austen", "date" => 1813, "rank" => 7, "description" => "La famiglia Bennet è composta dai coniugi Bennet e dalle loro cinque figlie: Jane, Elizabeth (detta anche Lizzy), Mary, Catherine (detta anche Kitty) e Lydia. L'obiettivo della signora Bennet, vista la mancanza di un figlio maschio che possa ereditare la loro tenuta di Longbourn nell'Hertfordshire, è quello di vedere sposate tutte le figlie con uomini ricchi o per lo meno benestanti. Orgoglio e pregiudizio si incentra in particolare sul rapporto tra Lizzy e Mr Darcy. ", "img" => "https://www.ibs.it/images/9788807900846_0_536_0_75.jpg"],

    //     ["title" => "Dieci piccoli indiani", "author"=> "Agatha Christie", "date" => 1939, "rank" => 6, "description" => "Anthony Marston, John Macarthur, Emily Brent, Lawrence Wargrave, William Blore, Edward Armstrong, Philip Lombard e Vera Claythorne vengono invitati per diversi motivi a Nigger Island (o Soldier Island nelle nuove edizioni) da un certo signor U.N.Owen, proprietario dell'unica abitazione sull'isola. Gli invitati non si conoscono tra di loro e una volta arrivati scoprono che il signor Owen e sua moglie non sono presenti; ad accoglierli vi sono solamente i due domestici, i coniugi Thomas ed Ethel Rogers, i quali, come ognuno di loro, non hanno ancora conosciuto i proprietari della villa.In ognuna delle camere assegnate agli ospiti è appesa al muro una filastrocca che recita la storia di dieci negretti i quali, uno dopo l'altro, muoiono in modi differenti, e allo stesso modo inizieranno a morire anche tutti gli ospiti. ", "img" => "https://edicola.shop/media/catalog/product/cache/1/thumbnail/400x/17f82f742ffe127f42dca9de82fb58b1/1/a/1afc18177e.jpg"],

    //     ["title" => "Nel regno della fantasia", "author"=> "Geronimo Stilton", "date" => 2003, "rank" => 9, "description" => "Nel regno della fantasia è una serie di romanzi per ragazzi, appartenente al mondo di Geronimo Stilton, personaggio scrittore e giornalista che vive nell'isola dei Topi (nella città di Topazia) e dirige il giornale più famoso della sua isola: L'eco del roditore.  ", "img" => "https://m.media-amazon.com/images/I/713ZyooyO+L._AC_UF1000,1000_QL80_.jpg"],
    
    // ];

    private $books;

    public function __construct(){
        $this->books = Book::all();
    }
    public function books(){    

        return view("pages.books",["title" =>  "libri", "books" => $this->books]);
    }

    public function book(Book $book){
        return view("pages.book",["book"=> $book]);
    }

    public function insertRecord(){
        // foreach($this->books as $book){
        //     Book::create([
        //         "title" => $book["title"],
        //         "author" => $book["author"],
        //         "date" => $book["date"],
        //         "rank" => $book["rank"],
        //         "description" => $book["description"],
        //         "img" => $book["img"]
        //     ]);
        // }
    }
}
