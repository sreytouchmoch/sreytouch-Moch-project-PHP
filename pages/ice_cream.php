<?php require_once('partials/header.php'); ?>
    <div class="container p-4">
        <div class="d-flex justify-content-end p-2">
            <a href="create_category_html.php" class="btn btn-primary">Add +</a>
        </div>
        <?php
            require_once('./database/database.php');

            $categoryitem = getcategory();

            foreach($categoryitem as $item):
        ?>
        <div class="card mt-4">
            <div class="card-body">
               <div class="d-flex mt-5">
                    <div class="info">
                        <h1 class=""> <?= $item['name'] ?></h1>
                    </div>
                    <div class="action d-flex justify-content-end">
                        <p class=""> <?= $item['description'] ?></p>
                    </div>
                </div>
                <div class="action d-flex justify-content-end">
                    <a href="edit_category_html.php?id=<?= $item['category_id']?> " class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                    <a href="delete_category.php?id=<?= $item['category_id']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </div>
        </div>
    </div>
    <?php endforeach; ?>
<?php require_once('partials/footer.php'); ?>