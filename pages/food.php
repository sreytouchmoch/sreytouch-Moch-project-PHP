<?php require_once('partials/header.php'); ?>
    <div class="container p-4">
        <div class="d-flex justify-content-end p-2">
            <a href="create_post_html.php" class="btn btn-primary">Add +</a>
        </div>
        <?php
            require_once('database/database.php');
            $postitem = getpost();
            foreach($postitem as $item):
        ?>
        <div class="card">
            <div class="card-body">
               <div class="d-flex">
                    <div class="card-image mr-3">
                        <img class="img-fluid" width="200" src="<?=$item['image']?>" alt="">
                    </div>
                    <div class="info">
                        <h1 class="display-3"> <?= $item['name'] ?> </h1>
                        <span> <?= $item['price'] ?>$</span>
                        <span> <?= $item['description'] ?></span>
                    </div>
               </div>
                <div class="action d-flex justify-content-end">
                    <span> <?= $item['date'] ?></span>
                </div>
                <div class="action d-flex justify-content-end">
                    <a href="edit_post_html.php?id=<?= $item['post_id']?> " class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                    <a href="delete_post_model.php?id=<?= $item['post_id']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
<?php require_once('partials/footer.php'); ?>