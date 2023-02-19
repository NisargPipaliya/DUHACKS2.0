<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - FarMart</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="headfoot.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
  *,
  *:before,
  *:after {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  body {
    background: rgb(177, 228, 195);
    font-size: 12px;
  }

  body,
  button,
  input {
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    letter-spacing: 1.4px;
  }

  .background {
    display: flex;
    min-height: 80vh;
    margin-top: 3rem;
  }

  .container69 {
    flex: 0 1 700px;
    margin: auto;
    padding: 10px;
  }

  .screen {
    position: relative;
    background: #175936;
    border-radius: 15px;
  }

  .screen:after {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 20px;
    right: 20px;
    bottom: 0;
    border-radius: 15px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
    z-index: -1;
  }

  .screen-header {
    display: flex;
    align-items: center;
    padding: 10px 20px;
    background: #175936;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
  }

  .screen-header-left {
    margin-right: auto;
  }

  .screen-header-button {
    display: inline-block;
    width: 8px;
    height: 8px;
    margin-right: 3px;
    border-radius: 8px;
    background: white;
  }

  .screen-header-button.close {
    background: rgb(177, 228, 195);
  }

  .screen-header-button.maximize {
    background: #e8e925;
  }

  .screen-header-button.minimize {
    background: #74c54f;
  }

  .screen-header-right {
    display: flex;
  }

  .screen-header-ellipsis {
    width: 3px;
    height: 3px;
    margin-left: 2px;
    border-radius: 8px;
    background: #999;
  }

  .screen-body {
    display: flex;
  }

  .screen-body-item {
    flex: 1;
    padding: 50px;
  }

  .screen-body-item.left {
    display: flex;
    flex-direction: column;
  }

  .app-title {
    display: flex;
    flex-direction: column;
    position: relative;
    color: rgb(177, 228, 195);
    font-size: 26px;
  }

  .app-title:after {
    content: '';
    display: block;
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 25px;
    height: 4px;
    background: rgb(177, 228, 195);
  }

  .app-contact {
    margin-top: auto;
    font-size: 8px;
    color: #888;
  }

  .app-form-group {
    margin-bottom: 15px;
  }

  .app-form-group.message {
    margin-top: 40px;
  }

  .app-form-group.buttons {
    margin-bottom: 0;
    text-align: right;
  }

  .app-form-control {
    width: 100%;
    padding: 10px 0;
    background: none;
    border: none;
    border-bottom: 1px solid #175936;
    color: #ddd;
    font-size: 14px;
    text-transform: uppercase;
    outline: none;
    transition: border-color .2s;
  }

  .app-form-control::placeholder {
    color: #97d2b3;
  }

  .app-form-control:focus {
    border-bottom-color: #ddd;
  }

  .app-form-button {
    background: none;
    border: none;
    color: rgb(177, 225, 194);
    font-size: 14px;
    cursor: pointer;
    outline: none;
    margin: 0.3rem;
  }

  .app-form-button:hover(nth-child(odd)) {
    color: #b9134f;
  }

  .app-form-button:hover {
    color: #5dac82;
  }

  .dribbble {
    width: 20px;
    height: 20px;
    margin: 0 5px;
  }

  @media screen and (max-width: 520px) {
    .screen-body {
      flex-direction: column;
    }

    .screen-body-item.left {
      margin-bottom: 30px;
    }

    .app-title {
      flex-direction: row;
    }

    .app-title span {
      margin-right: 12px;
    }

    .app-title:after {
      display: none;
    }
  }

  @media screen and (max-width: 600px) {
    .screen-body {
      padding: 40px;
    }

    .screen-body-item {
      padding: 0;
    }
  }
</style>

<body>

  <!-- <header></header> -->
 <?php include('header.php')?>



  <main>

    <div class="main">
      <div class="background">
        <div class="container69">
          <div class="screen">
            <div class="screen-header">
            </div>
            <div class="screen-body">
              <div class="screen-body-item left">
                <div class="app-title">
                  <span>CONTACT</span>
                  <span>US</span>
                </div>
                <div class="app-contact">CONTACT INFO : +91 70XXXXXXXX</div>
              </div>
              <div class="screen-body-item">
                <div class="app-form">
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="NAME">
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="EMAIL">
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="CONTACT NO">
                  </div>
                  <div class="app-form-group message">
                    <input class="app-form-control" placeholder="MESSAGE">
                  </div>
                  <div class="app-form-group buttons">
                    <button class="app-form-button">CANCEL</button>
                    <button class="app-form-button">SEND</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



    </div>


  </main>
  <!-- <footer></footer> -->
  <?php include('footer.php')?>
</body>

</html>