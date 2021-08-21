<?php require_once('partials/header.php'); ?>
    <div class="container p-4">
        <form action="create_category_model.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder=" name" name="name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder=" description" name="description">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </div>
        </form>
    </div>
<?php require_once('partials/footer.php'); ?>