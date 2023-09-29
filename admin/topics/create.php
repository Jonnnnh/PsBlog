<?php
global $errMsg, $name, $description;
include "../../path.php";
include "../../app/controllers/topics.php";
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Requires meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!--  Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <!--    <link rel="stylesheet" href="assets/css/cook.css">-->
    <!--    <script src="assets/js/cookie.js"></script>-->
    <title>My blog</title>
</head>
<body>
<?php include("../../app/include/header-admin.php"); ?>
<div class="container">
    <?php include("../../app/include/sidebar-admin.php"); ?>
    <div class="posts col-9">
        <div class="button row">
            <a href="<?php echo BASE_URL . 'admin/topics/create.php'; ?>" class="btn">Create a
                category</a>
        </div>
        <div class="form__span err">
            <p><?=$errMsg?></p>
        </div>
        <div class="row title-table">
            <h2>Adding category</h2>
        </div>

        <div class="row add-post">
            <form action="create.php" method="post">
                <div class="col">
                    <input name="name" value="<?=$name;?>" type="text" class="form-control" placeholder="Category"
                           aria-label="Article category">
                </div>
                <div class="col">
                    <label for="content" class="form-label">Record category</label>
                    <textarea name="description" class="form-control" id="content"
                              rows="3"><?=$description;?></textarea>
                </div>
                <div class="col">
                    <button name="topic-create" class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--Footer-->
<?php include("../../app/include/footer.php"); ?>
<!-- END footer-->
<!-- Optional JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
<script src="../../assets/js/scripts.js"></script>
</body>
</html>
