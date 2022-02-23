<?php
require "header.php";
require "menu.php";
?>
    <br><br>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <!--name-->
        <label for="name">Product Name</label>
        <input type="text" name="name" id="name"><br><br>
        <!--brand-->
        <label for="brand">Brand</label>
        <input type="text" name="brand" id="brand"><br><br>
        <!--expiry date-->
        <label for="expiry_date">Expiry Date</label>
        <input type="date" name="expiry_date" id="expiry_date"><br><br>
        <!--add button-->
        <input type="submit" value="Add">
    </form>
<?php
if(isset($_POST['name'],$_POST['brand'],$_POST['expiry_date'])){

    $name=$_POST['name'];
    $brand=$_POST['brand'];
    $expiry_date=$_POST['expiry_date'];

    require "connection.php";

    $queryString=$connection->prepare('INSERT INTO products (name,brand,expiry_date)VALUES(?,?,?)');
    $queryString->execute([$name,$brand,$expiry_date]);
    header("Location: allproducts.php");
}
require "footer.php";
?>