<section class="action">
    <div class="container">
        <div class="row no-gutters">
            <?php foreach ($args['action'] as $item) : ?>
                <div class="col-md">
                    <div class="item">
                        <div class="image">
                            <img class="img-fluid" src="<?php echo $item['image']; ?>" class="attachment-full size-full" alt="<?php echo $item['title']; ?>">
                        </div>
                        <h6 class="header"><?php echo $item['title_1']; ?> <span> <?php echo $item['title_2']; ?> </span></h6>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>