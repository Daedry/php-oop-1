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