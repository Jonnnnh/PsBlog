<?php include "path.php";
include 'app/database/db.php'
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Requires meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PS4.Blog</title>
    <!--  Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/cook.css">
    <script src="assets/js/cookie.js"></script>
    <title>My blog</title>
</head>
<body>
<?php include("app/include/header.php"); ?>
<!-- Carousel -->
<div class="carousel" data-ride="carousel" id="slides">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/images/d2f6b975694a9912a6d7ce8edba8b0ac1b010fa5.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/images/d124731bc8e74d7fe8166d65a1834661d567044a.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/images/laKqfg7nxfK3G60O9STwBGPy.webp" class="d-block w-100" alt="...">
        </div>
    </div>
</div>
<!-- Carousel END-->
<!--Block Main-->
<div class="container">
    <div class="content row">
        <!--Main Content-->
        <div class="main-content col-md-9 col-12">
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/fb9fe7JhjCL5vOsWY3wpSOm8.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="single.php">WILD HEARTS™</a>
                    </h3>
                    <i class="genre">Adventure</i>
                    <i class="release">Release: 2/17/2023</i>
                    <p class="preview-text">
                        WILD HEARTS™ is a unique twist on the hunting genre where technology gives you a fighting chance
                        against fearsome beasts infused with the ferocious power of nature itself. Take on these
                        creatures alone or hunt with friends in seamless co-op.
                        No one remembers why the Kemono began their rampage through a once prosperous Azuma. Fueled by
                        desperation, they wield the power of primal nature at its most destructive. For a while, it
                        seemed that none could stand against their overwhelming might. But hope arrives in the form of a
                        formidable hunter, armed with deadly weapons and ancient technology called Karakuri that could
                        turn the tide of battle.
                    </p>
                </div>
            </div>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/87006287-664d-4b57-b9bf-c8ed415ceef9.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">NBA 2K23 for PS5™</a>
                    </h3>
                    <i class="genre">Sport</i>
                    <i class="release">Release: 9/9/2022</i>
                    <p class="preview-text">
                        Rise to the occasion and realize your full potential in NBA 2K23. Prove yourself against the
                        best players in the world and showcase your talent in MyCAREER or The W. Pair today’s All-Stars
                        with timeless legends in MyTEAM. Build a dynasty of your own as a GM, or lead the league in a
                        new direction as the Commissioner in MyNBA. Take on NBA or WNBA teams in PLAY NOW and experience
                        true-to-life gameplay. How will you Answer The Call?
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/BetMjkjJt9p8YH4EbvMDGhvt.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">WWE 2K23</a>
                    </h3>
                    <i class="genre">Action</i>
                    <i class="release">Release: 3/17/2023</i>
                    <p class="preview-text">
                        Pre-order the Cross-Gen Digital Edition of WWE 2K23 and get access to the Bad Bunny Bonus Pack
                        featuring global music phenom Bad Bunny as a playable character, and a ruby-tier MyFACTION card.
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/SSru3b0CYWviMXfW6bYgaWlX.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Atomic Heart</a>
                    </h3>
                    <i class="genre">Action, Role Playing Games</i>
                    <i class="release">Release: 2/21/2023</i>
                    <p class="previwe=text">
                        Welcome to a utopian world of wonders and perfection, in which humans live in harmony with their
                        loyal and fervent robots.

                        Well, that's how it used to be. With the launch of the latest robot-control system mere days
                        away, only a tragic accident or a global conspiracy could disrupt it…<br>

                        The unstoppable course of technology along with secret experiments have brought rise to mutant
                        creatures, terrifying machines and superpowered robots—all suddenly rebelling against their
                        creators. Only you can stop them and find out what lies behind the idealized world.<br>
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/430628d4872bbaef36b5458880a609af5094ff976778252b.png" alt=""
                         class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Call of Duty®: Modern Warfare® II</a>
                    </h3>
                    <i class="genre">Action</i>
                    <i class="release">Release: 10/28/2022</i>
                    <p class="previwe=text">
                        Welcome to the new era of Call of Duty®. <br>

                        Call of Duty®: Modern Warfare® II drops players into an unprecedented global conflict that
                        features the return of the iconic Operators of Task Force 141.<br>

                        Infinity Ward brings fans state-of-the-art gameplay, with all-new gun handling, advanced AI
                        system, a new Gunsmith and a suite of other gameplay and graphical innovations that elevate the
                        franchise to new heights.<br>

                        Modern Warfare® II launches with a globe-trotting single-player campaign, immersive Multiplayer
                        combat and an evolved Special Ops game mode featuring tactical co-op gameplay.<br>
                    </p>
                </div>
            </div>
        </div>
        <!--Sidebar Content-->
        <div class="sidebar col-md-3 col-12">
            <div class="section search">
                <h3>Search</h3>
                <form action="/" method="post">
                    <label>
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </label>
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
<!--Block Main END-->
<!--Footer-->
<?php include("app/include/footer.php"); ?>
<!-- END footer-->
<!-- Cookie -->
<div class="revoke" data-revoke>
    <button class="bnt_revoke">Cookies</button>
</div>
<div class="popup">
    <span id="cookie consent:desc" class="cc-message">This website uses cookies to ensure you get the best experience on our website. <a
            aria-label="learn more about cookies" tabindex="0" class="cc-link" href="https://www.cookiesandyou.com"
            target="_blank">Learn more</a></span>
    <button class="btn_cookie" data-cancel>Decline</button>
    <button class="btn_cookie" data-confirm>Allow cookies</button>
</div>
<!-- END Cookie -->
<!-- Optional JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>