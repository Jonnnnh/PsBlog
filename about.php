<?php include "path.php";
include 'app/database/db.php'
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
    <link rel="stylesheet" href="assets/css/style.css">
    <title>My blog</title>
</head>
<body>

<?php include("app/include/header.php"); ?>

<!-- Carousel -->

<!-- Carousel END-->
<!--Block Main-->
<div class="container">
    <div class="content row">
        <!--Main Content-->
        <div class="main-content col-md-9 col-12">
            <div class="single_post row">
                <div class="img col-12">
                    <img src="assets/images/i7j-yupo4m8.jpg" alt="" class="img-about">
                </div>
                <div class="about_post_text col-12 ">
                    <p>WILD HEARTS™ is a unique twist on the hunting genre where technology gives you a fighting chance
                        against fearsome beasts infused with the ferocious power of nature itself. Take on these
                        creatures alone or hunt with friends in seamless co-op. </p>
                    <p> No one remembers why the Kemono began their rampage through a once prosperous Azuma. Fueled by
                        desperation, they wield the power of primal nature at its most destructive. For a while, it
                        seemed that none could stand against their overwhelming might. But hope arrives in the form of a
                        formidable hunter, armed with deadly weapons and ancient technology called Karakuri that could
                        turn the tide of battle.
                    </p>
                </div>
            </div>
        </div>
        <!--Sidebar Content-->
        <div class="sidebar col-md-3 col-12">
            <div class="section search">
                <h3>Search</h3>
                <form action="/" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Search...">
                </form>
            </div>

            <div class="section topics">
                <h3>Genre</h3>
                <ul>
                    <li><a href="https://store.playstation.com/en-us/pages/latest">Action</a></li>
                    <li><a href="https://store.playstation.com/en-us/pages/latest">RPG</a></li>
                    <li><a href="https://store.playstation.com/en-us/pages/latest">Shooters</a></li>
                    <li><a href="https://store.playstation.com/en-us/pages/latest">Strategy</a></li>
                    <li><a href="https://store.playstation.com/en-us/pages/latest">Surviving</a></li>
                    <li><a href="https://store.playstation.com/en-us/pages/latest"> Adventure</a></li>
                    <li><a href="https://store.playstation.com/en-us/pages/latest">Role</a></li>
                    <li><a href="https://store.playstation.com/en-us/pages/latest">Fighting Games</a></li>
                    <li><a href="https://store.playstation.com/en-us/pages/latest">Multi-player</a></li>
                    <li><a href="https://store.playstation.com/en-us/pages/latest">Sport</a></li>


                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<!--Block Main END-->
<!--Footer-->
<?php include("app/include/footer.php"); ?>
<!-- END footer-->
<!-- Optional JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>