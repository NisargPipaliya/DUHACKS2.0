<?php
include "dbconnect.php";

$check = "SELECT * FROM promoter";
$result = mysqli_query($conn, $check);
$sinfo=mysqli_fetch_all($result,MYSQLI_ASSOC);
$nrow = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            .container-fluid{
              padding:3% 5%;
              filter: drop-shadow(-20px 20px 40px #398cc0);
              box-shadow: -10px 10px 10px rgba(0,0,0,0.15);
            }
            #quad{
      color:#0030ff;  
    }
    .con{
      padding:1% 6%;
    }
        </style>
    </head>
    <body>
      <div class="con">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="home.php"><span>ULTRA</span><span id="quad">SOFT</span></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <!-- <a class="nav-link hover-effect" href="">Contact</a> -->
            </li>
            <li class="nav-item">
                <a class="nav-link hover-effect" href="websquad/aboutus.php">Aboutus</a>
            </li>
            <li class="nav-item">
                <a class="nav-link hover-effect" href="websquad/faq.php">FAQs</a>
            </li>
        </ul>
     </div>
    </nav>
  </div>
      <div class="container-fluid">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">OwnerName</th>
                <th scope="col">StartupName</th>
                <th scope="col">ProductName</th>
                <th scope="col">Description</th>
                <th scope="col">Email</th>
                <th scope="col">Contact N.O</th>



              </tr>
            </thead>
            <tbody>
              <?php $i=1;
              foreach($sinfo as $info){
                if($info['productname'] !=NULL){
                ?>
              <tr>
                <th scope="row"><?php echo $i?></th>
                <td><?php echo(htmlspecialchars($info['ownername'])) ?></td>
                <td><?php echo(htmlspecialchars($info['startupname'])) ?></td>
                <td><?php echo(htmlspecialchars($info['productname'])) ?></td>
                <td><?php echo(htmlspecialchars($info['desc'])) ?></td>
                <td><?php echo(htmlspecialchars($info['email'])) ?></td>
                <td><?php echo(htmlspecialchars($info['mno'])) ?></td>



              </tr>
              <?php $i+=1; 
              }
              else
              continue;

            }?>
            </tbody>
          </table>
          
          </div>
    </body>
</html>