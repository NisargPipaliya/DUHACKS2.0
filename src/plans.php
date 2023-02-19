<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckOut - FarMart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="headfoot.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
    .wrapper {
        max-width: 1090px;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        margin: auto;
        justify-content: space-between;
        margin-top: 10rem;
    }
    
    .wrapper .table {
        background:  #175936;
        width: calc(33% - 20px);
        padding: 30px 30px;
        position: relative;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 1020px) {
        .wrapper .table {
            width: calc(50% - 20px);
            margin-bottom: 40px;
        }
    }

    @media (max-width: 698px) {
        .wrapper .table {
            width: 100%;
        }
    }

    .table .price-section {
        display: flex;
        justify-content: center;
    }

    .price-section .price-area {
        height: 120px;
        width: 120px;
        background: #ffd861;
        border-radius: 50%;
        padding: 2px;
    }

    .price-section .price-area .inner-area {
        height: 100%;
        width: 100%;
        border-radius: 50%;
        border: 3px solid #fff;
        color: #fff;

        line-height: 117px;
        text-align: center;
        position: relative;
    }

    .price-area .inner-area .text {
        font-size: 25px;
        font-weight: 400;
        position: absolute;
        top: -10px;
        left: 17px;
    }

    .price-area .inner-area .price {
        font-size: 55px;
        font-weight: 500;
    }

    .table .package-name {
        width: 100%;
        height: 2px;
        background: #ffecb3;
        margin: 35px 0;
        position: relative;
    }

    .table .package-name::before {
        position: absolute;
        content: "Basic";
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        font-size: 25px;
        padding: 0 10px;
        font-weight: bolder;
    }

    .table .features li {
        list-style: none;
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .features li .list-name {
        font-size: 17px;
        font-weight: 400;
    }

    .features li .icon {
        font-size: 15px;
    }

    .features li .icon.check {
        color: #2db94d;
    }

    .features li .icon.cross {
        color: #cd3241;
    }

    .table .btn {
        display: flex;
        justify-content: center;
        margin-top: 35px;
    }

    .table .btn button {
        width: 80%;
        height: 50px;
        font-weight: 700;
        color: #fff;
        font-size: 20px;
        border: none;
        outline: none;
        border-radius: 25px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .basic .price-area,
    .basic .inner-area {
        background: #ffd861;
    }

    .basic .btn button {
        background: #fff;
        color: #ffd861;
        border: 2px solid #ffd861;
    }

    .basic .btn button:hover {
        border-radius: 6px;
        background: #ffd861;
        color: #fff;
    }

    .Premium .price-area,
    .Premium .inner-area {
        background: #a26bfa;
    }

    .Premium .btn button {
        background: #fff;
        color: #a26bfa;
        border: 2px solid #a26bfa;
    }

    .Premium .btn button:hover {
        border-radius: 6px;
        background: #a26bfa;
        color: #fff;
    }

    .Ultimate .price-area,
    .Ultimate .inner-area {
        background: #43ef8b;
    }

    .Ultimate .btn button {
        background: #fff;
        color: #43ef8b;
        border: 2px solid #43ef8b;
    }

    .Ultimate .btn button:hover {
        border-radius: 6px;
        background: #43ef8b;
        color: #fff;
    }

    .basic .package-name {
        background: #ffecb3;
    }

    .Premium .package-name {
        background: #a26bfa;
    }

    .Ultimate .package-name {
        background: #43ef8b;
    }

    .basic .package-name::before {
        content: "Basic";
    }

    .Premium .package-name::before {
        content: "Premium";
    }

    .Ultimate .package-name::before {
        content: "Ultimate";
    }

    .basic ::selection,
    .basic .price-area,
    .basic .inner-area {
        background: #ffd861;
    }

    .Premium ::selection,
    .Premium .price-area,
    .Premium .inner-area {
        background: #a26bfa;
    }

    .Ultimate ::selection,
    .Ultimate .price-area,
    .Ultimate .inner-area {
        background: #43ef8b;
    }
</style>

<body>
<?php include('header.php')?>

    <main>
        <div class="main">
            <div class="wrapper">
                <div class="table basic">
                    <div class="price-section">
                        <div class="price-area">
                            <div class="inner-area" >
                                <span class="text">
                                    &#8377;
                                </span>
                                <span class="price" style="font-size: 2.5rem;">10k</span>
                            </div>
                        </div>
                    </div>
                    <div class="package-name">

                    </div>
                    <div class="features" style="color:white;">
                        <li>
                            <span class="list-name">3 employees</span>
                            <span class="icon check"><i class="fas fa-check-circle"></i></span>
                        </li>
                        <li>
                            <span class="list-name">6 tools</span>
                            <span class="icon check"><i class="fas fa-check-circle"></i></span>
                        </li>
                        <li>
                            <span class="list-name">Onfield Services</span>
                            <span class="icon cross"><i class="far fa-times-circle"></i></span>
                        </li>
                        <li>
                            <span class="list-name">Valid for 3 months</span>
                            <span class="icon cross"><i class="far fa-times-circle"></i></span>
                        </li>
                        
                        <div class="btn"><button>Purchase</button></div>
                    </div>
                </div>
                <div class="table Premium">
                    <div class="price-section">
                        <div class="price-area">
                            <div class="inner-area">
                                <span class="text">
                                    &#8377;
                                </span>
                                <span class="price" style="font-size: 2.5rem;">49k</span>
                            </div>
                        </div>
                    </div>
                    <div class="package-name">

                    </div>
                    <div class="features"  style="color:white;">
                        <li>
                            <span class="list-name">15 employees</span>
                            <span class="icon check"><i class="fas fa-check-circle"></i></span>
                        </li>
                        <li>
                            <span class="list-name">30 tools</span>
                            <span class="icon check"><i class="fas fa-check-circle"></i></span>
                        </li>
                        <li>
                            <span class="list-name">Onfield Services</span>
                            <span class="icon check"><i class="fas fa-check-circle"></i></span>
                        </li>
                        <li>
                            <span class="list-name">Valid for 12 months</span>
                            <span class="icon cross"><i class="far fa-times-circle"></i></span>
                        </li>
                        <div class="btn"><button>Purchase</button></div>
                    </div>
                </div>
                <div class="table Ultimate">
                    <div class="price-section">
                        <div class="price-area">
                            <div class="inner-area">
                                <span class="text">
                                    &#8377;
                                </span>
                                <span class="price"  style="font-size: 2.5rem;">99k</span>
                            </div>
                        </div>
                    </div>
                    <div class="package-name">

                    </div>
                    <div class="features" style="color:white;">
                        <li>
                            <span class="list-name">30 employees</span>
                            <span class="icon check"><i class="fas fa-check-circle"></i></span>
                        </li>
                        <li>
                            <span class="list-name">60 tools</span>
                            <span class="icon check"><i class="fas fa-check-circle"></i></span>
                        </li>
                        <li>
                            <span class="list-name">Onfield Services</span>
                            <span class="icon check"><i class="fas fa-check-circle"></i></span>
                        </li>
                        <li>
                            <span class="list-name">Valid for 24 months</span>
                            <span class="icon check"><i class="fas fa-check-circle"></i></span>
                        </li>
                        <div class="btn"><button>Purchase</button></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('footer.php')?>
</body>

</html>