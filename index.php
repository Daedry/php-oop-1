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

require __DIR__ . '/partials/db.php';

include __DIR__ . '/partials/head.php';

include __DIR__ . '/layout/header.php';
?>

<main>
    <div class="container">
        <div class="cards d-flex wrap m-auto">
            <?php include __DIR__ . '/layout/card.php'; ?>
        </div>
        <!-- /.cards -->
    </div>
    <!-- /.container -->
</main>
<!-- /.main -->

<?php

include __DIR__ . '/layout/footer.php';
