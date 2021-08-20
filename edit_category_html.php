<?php require_once('partials/header.php'); ?>
    <div class="container p-4">
        <?php
            require_once('./database/database.php');
            $id =$_GET['id'];

            $data = selectcategoryOne($id);
            foreach($data as $item):
        ?>
        <form action="edit_category_model.php" method="post">
            <input type="hidden" name="id" value="<?= $item['category_id'] ?>">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Item name" name="name" value="<?= $item['name'] ?>">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </div>
        </form>
        <?php endforeach; ?> 
    </div>
<?php require_once('partials/footer.php'); ?>