<?php

class Movie
{

    public $title;
    public $original_title;
    public $genre;
    public $language;
    public $year;
    public $image;

    function __construct(String $title, String $original_title, String $genre, String $language, String $year, String $image)
    {
        $this->title = $title;
        $this->original_title = $original_title;
        $this->genre = $genre;
        $this->language = $language;
        $this->year = $year;
        $this->image = $image;
    }

    function setName(String $title)
    {
        $this->title = $title;
    }

    function getName()
    {
        return $this->title;
    }
}

$movies = [
    new Movie('Gandahar', 'Gandahar', 'Fantasy', 'Francese', '1988', 'https://upload.wikimedia.org/wikipedia/en/thumb/3/39/Gandahar-poster.jpg/220px-Gandahar-poster.jpg'),
    new Movie('Il cielo sopra Berlino', 'Der Himmel uber Berlin', 'Drammatico, Fantasy, Romantico', 'Tedesco', '1987', 'https://pad.mymovies.it/filmclub/2006/05/384/locandina.jpg'),
    new Movie('La montagna sacra', 'La montaña sagrada', 'Avventura , Drammatico , Fantasy', 'Spagnolo',  '1973', 'https://www.cinefacts.it/foto/h!La_Montagna_Sacra_cinefacts.jpg'),
    new Movie('L’uomo che venne dalla terra', 'The Man from Earth', 'Drammatico, Fantascienza', 'US',  '2007', 'https://www.ifilmdavedere.it/wpifilm/wp-content/uploads/2011/09/luomo-che-venne-dalla-terra.jpg'),
    new Movie('Cloud Atlas', 'Cloud Atlas', 'Drammatico, Fantascienza', 'US', '2014', 'https://mr.comingsoon.it/imgdb/locandine/big/48844.jpg'),
    new Movie('I ORIGINS', 'I ORIGINS', 'Drammatico', 'US', '1987', 'https://mr.comingsoon.it/imgdb/locandine/235x336/52776.jpg'),
    new Movie('Il pianeta verde', 'La belle verte', 'Fantascienza', 'Francese',  '1996', 'https://m.media-amazon.com/images/I/71TVa51OMfL._SL1024_.jpg'),
    new Movie('La profezia di celestino', 'The Celestine Prophecy', 'Avventura , Drammatico , Avventura', 'US',  '2006', 'https://pad.mymovies.it/filmclub/2001/09/028/locandina.jpg'),
];


// for ($i = 0; $i < count($movies); $i++) {
//     var_dump($movies[$i]->setName($movies[$i]->title));
//     var_dump($movies[$i]->getName());
// };