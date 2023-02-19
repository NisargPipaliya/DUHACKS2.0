<?php
require 'dbconnect.php';
session_start();
// print_r($_SESSION['cart']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarMart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="headfoot.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="cards.css">
    <style>
        .containe {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            color: #ccc;
        }

        .product {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
            padding-top: 20PX;
            width: 300px;
            background: #175936;
            border: 1px solid #ccc;
            box-shadow: 0 20PX 20px rgba(0, 0, 0, 0.5);
            
            border: 2px solid black;
            transition: box-shadow 0.3s ease-in-out;
        }

        .product:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
        }

        .product img {
            width: 80%;
            margin: 10PX;
            height: auto;
            cursor: pointer;
            object-fit: cover;
            border-radius: 100%;
            margin-bottom: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .product:hover img {
            transform: scale(1.05);
        }

        .product h3 {
            font-size: 24px;
            font-family: "Helvetica Neue", sans-serif;
            margin: 0 0 10px 0;
        }

        .product p {
            font-size: 18px;
            margin: 0 0 10px 0;
            text-align: center;
            transition: opacity 0.3s ease-in-out;
        }

        .product button {
            font-size: 18px;
            padding: 0.8rem;
            text-align: center;
            opacity: 1;
           
            cursor: pointer;
            color: rgb(177, 211, 189);
            border: 0px solid rgb(58, 105, 74);
            background: linear-gradient(315deg, #69d9cc, #199c4b);
        }

        .main {
            margin-top: 5rem;
        }

        .buttons {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            width: 100%;
            box-shadow: 0 0 7px #199c4b;
        }

        .buttons button {
            width: 100%;
            
        }

        @media (max-width:750px) {
            .main {
                flex-direction: column;
            }

            .containe {
                justify-content: center;
                align-items: center;
            }

            .card {
                width: 90%;
                margin: 1%;
            }
        }
    </style>


<body>
    <?php include('header.php')?>
    <main>
        <div class="main">
            <div class="containe">
                <?php 
                    $query='select * from fruits ';
                    $query_run=mysqli_query($conn,$query);
                    $check=mysqli_num_rows($query_run) >0 ;
                    if($check)
                    {   
                        while($row=mysqli_fetch_array($query_run))
                        {  ?>
                        <form method="post" action="manage.php">
                            <div class="product">
                                <img src="../images/farmer1.avif" alt="Product 1">
                                <h3> <?php echo $row['NAME'] ?></h3>
                            <p><h4  style=" padding:0px ; margin:0px;"> <?php echo  $row['price']?>/Kg</h4></p>

                                <p style=" padding: 0px 10px 0px 10px ;"> <?php  echo $row['description']?>
                                </p>
                                <input type=hidden value="<?php echo  $row['NAME'] ?>" name="Item_name">
                                <input type=hidden value="<?php  echo $row['price'] ?>" name="price">

                            <div class="buttons">

                                    <button style="color:#0e3d24; background:#6cbba1;font-weight:bold;" name="add" >Add To Cart</button>
                                    <!-- <button style="color:#6cbba1; background:#0e3d24; font-weight:bold;">Buy Now</button> -->
                                </div>
                            </div>
                        </form>
                     <?php
                     }
                    }else{
                        echo "no "; 
                    }
                     ?>   
            
                
                <!-- <div class="product">
                    <img src="../images/farmer1.avif" alt="Product 2">
                    <h3>Product 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                   <div class="buttons">

                        <button style="color:#0e3d24; background:#6cbba1;font-weight:bold;">Add To Cart</button>
                        <button style="color:#6cbba1; background:#0e3d24; font-weight:bold;">Buy Now</button>
                    </div>
                </div> -->
                <!-- <div class="product">
                    <img src="../images/farmer1.avif" alt="Product 2">
                    <h3>Product 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="buttons">

                        <button style="color:#0e3d24; background:#6cbba1;font-weight:bold;">Add To Cart</button>
                        <button style="color:#6cbba1; background:#0e3d24; font-weight:bold;">Buy Now</button>
                    </div>
                </div> -->
                <!-- <div class="product">
                    <img src="../images/farmer1.avif" alt="Product 2">
                    <h3>Product 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="buttons">

                        <button style="color:#0e3d24; background:#6cbba1;font-weight:bold;">Add To Cart</button>
                        <button style="color:#6cbba1; background:#0e3d24; font-weight:bold;">Buy Now</button>
                    </div>
                </div> -->
                <!-- <div class="product">
                    <img src="../images/farmer1.avif" alt="Product 2">
                    <h3>Product 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="buttons">

                        <button style="color:#0e3d24; background:#6cbba1;font-weight:bold;">Add To Cart</button>
                        <button style="color:#6cbba1; background:#0e3d24; font-weight:bold;">Buy Now</button>
                    </div>
                </div> -->
                <!-- <div class="product">
                    <img src="../images/farmer1.avif" alt="Product 2">
                    <h3>Product 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="buttons">

                        <button style="color:#0e3d24; background:#6cbba1;font-weight:bold;">Add To Cart</button>
                        <button style="color:#6cbba1; background:#0e3d24; font-weight:bold;">Buy Now</button>
                    </div>
                </div> -->
                <!-- <div class="product">
                    <img src="../images/farmer1.avif" alt="Product 2">
                    <h3>Product 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="buttons">

                        <button style="color:#0e3d24; background:#6cbba1;font-weight:bold;">Add To Cart</button>
                        <button style="color:#6cbba1; background:#0e3d24; font-weight:bold;">Buy Now</button>
                    </div>
                </div> -->
                <!-- <div class="product">
                    <img src="../images/farmer1.avif" alt="Product 2">
                    <h3>Product 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="buttons">

                        <button style="color:#0e3d24; background:#6cbba1;font-weight:bold;">Add To Cart</button>
                        <button style="color:#6cbba1; background:#0e3d24; font-weight:bold;">Buy Now</button>
                    </div>
                </div> -->

            </div>
    </main>
    <?php include('footer.php')?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // $("header").load("header.php");
        // $("footer").load("footer.php");
    </script>

    <script src="script.js"></script>

    <script src="script.js"></script>
</body>

</html>