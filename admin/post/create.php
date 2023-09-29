<?php
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
            <a href="<?php echo BASE_URL . 'admin/post/create.php';?>" class="btn">Add post</a>

        </div>
        <div class="row title-table">
            <h2>Adding entries</h2>
        </div>
        <div class="row add-post">
            <form action="create.php" method="post">
                <div class="col">
                    <input value="" type="text" class="form-control" placeholder="Title" aria-label="Article title">
                </div>
                <div class="col">
                    <label for="editor" class="form-label">Record content</label>
                    <textarea name="content" id="editor" class="form-control" rows="6"></textarea>
                </div>
                <div class="input-group col">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
<!--                <select name="topic" class="form-select mb-2" aria-label="Default select example">-->
<!--                    <option selected>Open this select menu</option>-->
<!--                    --><?php //foreach ($topics as $key => $topic): ?>
<!--                        <option value="--><?php //=$topic['id']; ?><!--">--><?php //=$topic['name'];?><!--</option>-->
<!--                    --><?php //endforeach; ?>
<!--                </select>-->
                <div class="col">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--Остановилась здесь-->
<!--Footer-->
<?php include("../../app/include/footer.php"); ?>
<!-- END footer-->
<!-- Optional JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
<script src="../../assets/js/scripts.js"
</body>
</html>
