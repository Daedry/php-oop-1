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
//     var_dump($movies[$i]->title);
// };

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Movie </title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>

    <header>
        <nav>
            <h1>Movies</h1>
        </nav>
    </header>
    <!-- /.header -->

    <main>
        <div class="container">
            <div class="cards d-flex wrap m-auto">
                <?php for ($i = 0; $i < count($movies); $i++) : ?>
                    <div class="card ">
                        <div class="card-img">
                            <img src="<?php echo $movies[$i]->image ?>" alt="">
                        </div>
                        <div class="card-text">
                            <h4><?php echo $movies[$i]->title ?></h4>
                            <h5><?php echo $movies[$i]->genre ?></h5>
                            <p>
                                <?php echo $movies[$i]->language ?> <br>
                                <?php echo $movies[$i]->year ?>
                            </p>
                        </div>
                    </div>
                <?php endfor; ?>
                <!-- /.card -->
            </div>
            <!-- /.cards -->
        </div>
        <!-- /.container -->
    </main>
    <!-- /.main -->

    <footer>
        <h2> Original Movies&copy; </h2>
    </footer>
    <!-- /.footer -->

</body>

</html>