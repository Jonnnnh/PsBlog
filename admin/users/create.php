<?php
global $name, $email;
include "../../path.php"?>

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
            <a href="<?php echo BASE_URL . 'admin/users/create.php'; ?>" class="btn">Set up a user</a>
        </div>
        <div class="row title-table">
            <h2>User creation</h2>
        </div>
        <div class="row add-post">
            <form action="create.php" method="post">
                <div class="col">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="name" value="<?=$name;?>" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                    <div id="nameHelp" class="form-text"></div>
                </div>
                <div class="col">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" value="<?=$email;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="col">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
        </div>
        <select class="form-select" aria-label="Default select example">
            <option value="1">user</option>
            <option value="2">admin</option>

        </select>
        <div class="col">
            <button class="btn btn-primary" type="submit">Creation</button>
        </div>
        </form>
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
</body>
</html>

