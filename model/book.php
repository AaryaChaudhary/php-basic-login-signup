<?php

class Book {

    public $bookName;

    public $isBN;

    public $authorName;

    public $edition;

    function setBookName($b) {
        $this->bookName = $b;
    }

    function getBookName() {
        return $bookName;
    }

    function setIsBn($isbn) {
        $this->isBn = $isBN;
    }

    function getIsBN() {
        return $isBN;
    }

    function setAuthorName($an) {
        $this->authorName = $authorName;
    }

    function getAuthorName() {
        return $authorName;
    }

    function setEdition($e) {
        return $authorName;
    }

    // public __construct($bn, $iB, $aN, $e) {
    //     $this->bookName = $bn;
    //     $this->isBN = $iB;
    //     $this->authorName = $aN;
    //     $this->edition = $e;
    // }

    // function displayName() {
    //     echo "Book Name : ".$this->bookName."<br/>";
    //     echo "ISBN : ".$this->isBN."<br/>";
    //     echo "Author Name : ".$this->authorName."<br/>";
    //     echo "Edition : ".$this->edition."<br/>";
    // }

}

// $book = new Book("PHP", "123", "Arya", "First");
// $book->displayName();
// $book = new Book("Java", "1234", "sandesh", "Second");
// $book->displayName();
// $book = new Book("Python", "1235", "Lhomi", "Third");
// $book->displayName();
// $book = new Book("Golang", "1237", "Bipin", "Fourth");
// $book->displayName();

$book = new Book();
$book->setBookName("Think and grow rich");
echo "Book Name is : ".$book->getBookName();

?>