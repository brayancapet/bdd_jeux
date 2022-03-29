<?php
session_start();

// Connect to my database 
require_once('./modules/db_connect.php');
$bdd = connectDB();
require_once('./dao/games_dao.php');

$title = "Add Games";
include('./includes/header.php');
include('./includes/nav.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $_SESSION['new_game'] = $_POST;
    insert_games($bdd, $_SESSION['new_game']);

}
?>

<form method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Game</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select class="form-select" aria-label="Default select example" id="category" name="category">
        <option selected>Open this select menu</option>
        <option value="Open World">Open World</option>
        <option value="RPG">RPG</option>
        <option value="FPS">FPS</option>
        <option value="Fight Games">Fight Games</option>
        <option value="MMORPG">MMORPG</option>
        <option value="Action / Aventure">Action / Aventure</option>
        <option value="Survival / Horror">Survival / Horror</option>
        <option value="Sandbox">Sandbox</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="price" class="form-control" id="price" name="price">
  </div>
  <div class="mb-3">
    <label for="picture" class="form-label">Picture path</label>
    <input type="text" class="form-control" id="picture" name="picture">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
    include('./includes/footer.php');