<?php
// Connect to my database 
require_once('./modules/db_connect.php');
$bdd = connectDB();
require_once('./dao/games_dao.php');

$title = "My Games";
include('./includes/header.php');
include('./includes/nav.php');

if(isset($_POST['delete'])){
    delete_game_by_id($bdd, $_POST['delete']);
}

$my_games = get_all_games($bdd);
?>

<div class="container-fluid d-flex justify-content-around flex-wrap">
<?php
for($i = 0; $i < count($my_games); $i++){
?>
<div class="card m-2" style="width: 18rem;">
  <img class="card-img-top" src="<?=$my_games[$i]['picture']?>" alt="<?=$my_games[$i]['name']?>">
  <div class="card-body">
    <h5 class="card-title"><?=$my_games[$i]['name']?></h5>
    <h5 class="card-title"><?=$my_games[$i]['price']?>€</h5>
    <form method="POST">
    <button name="delete" value="<?=$my_games[$i]['id']?>" class="btn btn-danger" type="submit">Delete Game</button>
    </form>
  </div>
</div>
<?php
}
?>
</div>

<?php
include('./includes/footer.php');