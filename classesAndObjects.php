<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Book {
        private $title;
        private $author;
        private $pages;

        function __construct($title, $author, $pages){
            $this->title = $title;
            $this->author = $author;
            $this->pages = $pages;
        }

        function printDetails(){
            echo "The title is "; echo $this->title; echo "<br>";
            echo "The author is "; echo $this->author; echo "<br>";
            echo "The number of pages are "; echo $this->pages; echo "<br>";        
        }
    }

    $book1 = new Book("Harry Potter and the Chamber of Secrets", "J.K. Rowling", 300);
    $book1->printDetails();
    echo "<br>";
    $book2 = new Book("Lord of the Rings", "Balidan Bharadwaj", 700);
    $book2->printDetails();
    
    ?>
</body>
</html>