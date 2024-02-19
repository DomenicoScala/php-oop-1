<?php

    class Movie {
        
        public $title;
        public $year;
        public $genre;
        private $director;
        public $duration;
        public $description;
        public $availableForStreaming;


        public function __construct(string $title, string $director)
        {
            $this->title = $title;
            $this->setDirector($director); 
        }


        public function getDirector(){
            return $this->director;
        }

        public function setDirector($director){
            if(is_string($director)){
                $this->director = $director;
            }
            else{
                echo '<h2> ERRORE: director non è una stringa</h2>';
            }
        }

    }

    $movieUno = new Movie('Oppenheimer','Crhistopher Nolan');
   /*  $movieUno->title = 'Oppenheimer';
    $movieUno->setDirector('Crhistopher Nolan'); */
    var_dump($movieUno);
    var_dump($movieUno->getDirector());

    $movieDue = new Movie('Arancia Meccanica','Stanley Kubrik');
   /*  $movieDue->title = 'Arancia Meccanica';
    $movieDue->setDirector('Stanley Kubrik'); */
    var_dump($movieDue);
    var_dump($movieDue->getDirector());




?>







<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHO OOP 1</title>
    </head>
    <body>
        <header>
            header
        </header>

        <main>
            main
        </main>

        <footer>
            footer
        </footer>
    </body>
</html>