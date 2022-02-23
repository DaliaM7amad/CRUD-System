<?php
require "header.php";
require "menu.php";
//heading
echo"<br><h1>All Products</h1><br>";
//get data
require "connection.php";
$queryString=$connection->prepare('SELECT * FROM products');
$queryString->execute();
$products=$queryString->fetchAll();?>
<!--print data-->
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Brand</th>
            <th scope="col">Expiry Date</th>
            <th scope="col">Manage</th>
        </tr>
        </thead><tbody>
        <?php
        foreach ($products as $product){?>

            <tr>
                <th scope="row"><?= $product['id']?></th>
                <td><?= $product['name']?></td>
                <td><?= $product['brand']?></td>
                <td><?= $product['expiry_date']?></td>
                <td>
                    <a href="delete.php?id=<?= $product['id']?>" style="text-decoration: none"><i class="material-icons">delete</i> </a>
                    |
                    <a href="edit.php?id=<?= $product['id']?>" style="text-decoration: none"><i class="material-icons">app_registration</i></a>
                </td>
            </tr>

            <?php
        }
        ?> </tbody>
    </table>

<?php
require "footer.php";