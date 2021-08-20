<?php require_once('partials/header.php'); ?>
    <div class="container p-4">
        <?php
            require_once('./database/database.php');
            $id =$_GET['id'];

            $data = selectpostOne($id);
            foreach($data as $item):
        ?>
        <form action="edit_post_model.php" method="post">
            <input type="hidden" name="id" value="<?= $item['post_id'] ?>">
            <div class="form-group">

                <input type="text" class="form-control" placeholder=" name" name="name" value="<?= $item['name'] ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="image" name="image" value="<?= $item['image'] ?>">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="price" name="price" value="<?= $item['price'] ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="description" name="description" value="<?= $item['description'] ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="date" name="date" value="<?= $item['date'] ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </div>
        </form>
        <?php endforeach; ?> 
    </div>
<?php require_once('partials/footer.php'); ?>