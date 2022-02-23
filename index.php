<?php
require "header.php";
require "menu.php";
?>

<div class="row mt-4">
    <div class="col-4"></div>
<div class="col-4">
<h2>Login:</h2>
<hr>
<form action="allproducts.php" method="post">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
<div class="col-4"></div>
</div>


<?php require "footer.php";?>
