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
    new Movie('Gandahar', 'Gandahar', 'Fantasy', 'Francese', '1988', 'https://ultimavisione.files.wordpress.com/2018/07/gandahar.jpg'),
    new Movie('Il cielo sopra Berlino', 'Der Himmel uber Berlin', 'Drammatico, Fantasy, Romantico', 'Tedesco', '1987', 'https://upload.wikimedia.org/wikipedia/it/4/4a/Il_cielo_sopra_Berlino.jpg?20091227090915'),
    new Movie('La montagna sacra', 'La montaña sagrada', 'Avventura , Drammatico , Fantasy', 'Spagnolo',  '1973', 'https://www.cinefacts.it/foto/h!La_Montagna_Sacra_cinefacts.jpg'),
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
    <link rel="stylesheet" href="/assets/style.css">
</head>

<body>

    <div class="container">
        <div class="cards">
            <?php for ($i = 0; $i < count($movies); $i++) : ?>
                <div class="card">
                    <div class="card-img"></div>
                    <div class="card-text">
                        <h4><?php echo $movies[$i]->title ?></h4>
                        <h5><?php echo $movies[$i]->genre ?></h5>
                        <p>
                            <?php echo $movies[$i]->language ?> <br>
                            <?php echo $movies[$i]->year ?>
                        </p>
                    </div>
                <?php endfor; ?>
                </div>
                <!-- /.card -->
        </div>
        <!-- /.cards -->
    </div>
    <!-- /.container -->

</body>

</html>