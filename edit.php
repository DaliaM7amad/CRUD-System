<?php
require "connection.php";
require "header.php";
require "menu.php";

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $oldString=$connection->prepare('SELECT * FROM products WHERE id=?');
    $oldString->execute([$id]);
    $product =$oldString->fetch(PDO::FETCH_ASSOC);
    ?>

    <br><br>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <!--id-->
        <input type="hidden" name="id" value="<?=$product['id']?>">
        <!--name-->
        <label for="name">Product Name</label>
        <input type="text" name="name" id="name" value="<?=$product['name']?>"><br><br>
        <!--brand-->
        <label for="brand">Brand</label>
        <input type="text" name="brand" id="brand" value="<?=$product['brand']?>"> <br><br>
        <!--expiry date-->
        <label for="expiry_date">Expiry Date</label>
        <input type="date" name="expiry_date" id="expiry_date" value="<?=$product['expiry_date']?>"><br><br>
        <!--add button-->
        <input type="submit" value="Update">
    </form>

    <?php
}
?>


<?php
if(isset($_POST['id'],$_POST['name'],$_POST['brand'],$_POST['expiry_date'])){

    $id = $_POST['id'];
    $name=$_POST['name'];
    $brand=$_POST['brand'];
    $expiry_date=$_POST['expiry_date'];

    $queryString=$connection->prepare('UPDATE products SET name=?,brand=?,expiry_date=? WHERE id=?');
    $queryString->execute([$name,$brand,$expiry_date,$id]);
    header("Location: allproducts.php");
}
require "footer.php";
?>