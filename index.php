<?php
/* 
create un file index.php in cui:
è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
 vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo 
 i valori delle relative proprietà
*/

class Movie
{

    public $title;
    public $genre;
    public $language;
    public $year;
    public $image;

    function __construct(String $title, String $genre, String $language, String $year, String $image)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->language = $language;
        $this->year = $year;
        $this->image = $image;
    }
}





