<?php
require __DIR__ . '/../layout/head.php';

require __DIR__ . '/../layout/header.php';
?>

<main>
    <div class="container">
        <div class="cards d-flex wrap m-auto">
            <?php require __DIR__ . '/../partials/card.php'; ?>
        </div>
        <!-- /.cards -->
    </div>
    <!-- /.container -->
</main>
<!-- /.main -->

<?php

require __DIR__ . '/../layout/footer.php';

?>