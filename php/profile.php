<?php
include 'dbconnect.php';
    session_start();
    $user = $_SESSION['username'];
    $sql = "SELECT * FROM promoter WHERE ownername = '$user'";
    $result = mysqli_query($conn,$sql);
    $check=mysqli_fetch_assoc($result);
?>


<html>

<head>
    <link rel="stylesheet" href="in.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>

<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row jus">
            <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">      <?php 
                                
                            
                                echo $check["ownername"];
                        ?></span><span
                        class="text-black-50">      <?php 
                                
                            
                                echo $check["email"];
                        ?></span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name :</label><div> <p><?php echo $_SESSION['username']; ?></p></div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Email ID :</label><div> 
                            <p>
                                <?php 
                                echo $check["email"];
                        ?>
                    </p>
                </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Mobile Number :</label><div> <p>       <?php 
                                echo $check["mno"];
                        ?></p></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Education :</label><div> <p></p></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Designation : </label><div> <p></p></div>
                    </div>


                    <!-- for promoter -->

                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Product name :</label><div> <p>       <?php 
                                echo $check["productname"];
                        ?></p></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Startup name :</label><div> <p>       <?php 
                                echo $check["startupname"];
                        ?></p></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">amount required :</label><div> <p>       <?php 
                                echo $check["amount"];
                        ?></p></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">description :</label><div> <p>       <?php 
                                echo $check["desc"];
                        ?></p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>