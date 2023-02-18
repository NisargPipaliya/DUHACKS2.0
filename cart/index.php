<?php 
require "header.php";
session_start();

?>
<html>
    <body>
        <?php
        print_r($_SESSION['cart']);

        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

<form  action="manage.php" method="post">
        <div class="card" style="width: 18rem;">
            <img src="../images/farmer1.avif" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Bag 1</h5>
                <p class="card-text">Price: Rs. 450</p>
                <button type="submit" name='add' class="btn btn-primary">Add to Cart</button>
                <input type="hidden" name="Item_name" value="bag 1" >
                <input type="hidden" name="price" value="450" >
        </div>
    </div>
</form>

<form  action="manage.php" method="post">
        <div class="card" style="width: 18rem;">
            <img src="../images/farmer1.avif" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Bag 1</h5>
                <p class="card-text">Price: Rs. 450</p>
                <button type="submit" name="add" class="btn btn-primary">Add to Cart</button>
                <input type="hidden" name="Item_name" value="bag 1" >
        </div>
    </div>
</form>
<form  action="manage.php" method="post">
        <div class="card" style="width: 18rem;">
            <img src="../images/farmer1.avif" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Bag 1</h5>
                <p class="card-text">Price: Rs. 450</p>
                <button type="submit"   name="add" class="btn btn-primary">Add to Cart</button>
                <input type="hidden" name="Item_name" value="bag 1" >
                <input type="hidden" name="price" value="450" >

        </div>
    </div>
</form>

            </div>

        </div>
</body>
</html>