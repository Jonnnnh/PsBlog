<?php
include "../../path.php" ?>
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
            <a href="<?php echo BASE_URL . 'admin/users/.php'; ?>" class="btn">Set up a user</a>
        </div>
        <div class="row title-table">
            <h2>User management</h2>
            <div class="id col-1">Id</div>
            <div class="id col-5">Login</div>
            <div class="id col-2">Role</div>
            <div class="id col-4">Governance</div>

        </div>
        <div class="row post">
            <div class="id col-1">1</div>
            <div class="id col-5">andrea</div>
            <div class="id col-2">Admin</div>
            <div class="id col-2"><a href="">Edit</a></div>
            <div class="id col-2"><a href="">Delete</a></div>
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
</body>
</html>

