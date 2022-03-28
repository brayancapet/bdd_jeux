<?php
// Connect to my database 
require_once('./modules/db_connect.php');
$bdd = connectDB();

$title = "Brayan";
include('./includes/header.php');
include('./includes/nav.php');

?>



<div class="container-fluid welcome-effect">
    <div class="left-panel-home">
    <p>Welcome to our game app where you'll be able to keep a track of all the games you've played.🎮</p>
    </div>

    <div class="right-panel-home">
    <img src="./images/horizon_zero_dawn.jpg" class="img-fluid carousel" alt="Horizon zero dawn's poster">
    </div>
</div>

<?php
include('./includes/footer.php');