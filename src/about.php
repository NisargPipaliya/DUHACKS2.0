<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About - FarMart</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="headfoot.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <style>
    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      background-color: rgb(177, 228, 195);
    }

    .about-section {
      background: url(../images/about-us.avif) no-repeat left;
      background-size: 55%;
      background-color: rgb(177, 228, 195);
      overflow: hidden;
      padding: 100px 0;
    }

    .inner-container {
      width: 55%;
      float: right;
      background-color: rgb(177, 228, 195);
      padding: 150px;
    }

    .inner-container h1 {
      margin-bottom: 30px;
      font-size: 30px;
      font-weight: 900;
    }

    .text {
      font-size: 13px;
      color: #545454;
      line-height: 30px;
      text-align: justify;
      margin-bottom: 40px;
    }

    .skills {
      display: flex;
      justify-content: space-between;
      font-weight: 700;
      font-size: 13px;
    }

    @media screen and (max-width:1200px) {
      .inner-container {
        padding: 80px;
      }
    }

    @media screen and (max-width:1000px) {
      .about-section {
        background-size: 100%;
        padding: 100px 40px;
      }

      .inner-container {
        width: 100%;
      }
    }

    @media screen and (max-width:600px) {
      .about-section {
        padding: 0;
      }

      .inner-container {
        padding: 60px;
      }
    }

    header.header {
      position: fixed;
    }
  </style>

</head>

<body>
  <header>
    <?php include('header.php') ?>
  </header>
  <main>

    <div class="about-section">
      <div class="inner-container">
        <h1>About Us</h1>
        <p class="text">
          Welcome to FarMart!
          We are an online platform that connects farmers with customers looking for fresh, high-quality produce
          straight from the farm. Our mission is to support farmers and promote sustainable agriculture practices by
          making it easy for consumers to purchase locally sourced, farm-fresh products.

          At FarMart, we offer a wide range of products including fresh fruits and vegetables,
          herbs, dairy products, meat, and poultry. All of our products come directly from local farms, and we ensure
          that they are of the highest quality and free from any harmful chemicals or pesticides.

          Our user-friendly platform makes it easy for customers to browse through the available products, place orders,
          and make payments online. We offer a secure payment gateway and flexible payment options, so you can choose
          the method that works best for you.

          As FarMart, we believe in providing fair prices to our farmers and ensuring that they
          receive a fair share of the profits. By choosing to shop with us, you are supporting local farmers and helping
          to promote sustainable farming practices in your community.

          At FarMart, we are committed to providing excellent customer service and ensuring that
          our customers are satisfied with their purchases. We welcome feedback and suggestions, and we are always
          looking for ways to improve our platform to better serve our customers.
          Thank you for choosing FarMart. We look forward to serving you and helping you to
          connect with local farmers and access fresh, healthy, and sustainable products.
        </p>
        <div class="skills">
          <span>Let's connect Customers and Farmers</span>

        </div>
      </div>
    </div>
  </main>
  <footer>
    <?php include('footer.php') ?>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="script.js"></script>
</body>

</html>
