<html>
    <head>
    <link rel="stylesheet" href="header/style.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/slider2.css">

    <link rel="shortcut icon" href="img/lg.ico" type="image/x-icon">
    <link rel="stylesheet" href="header/style.css">
    <!-- <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<style>
    .abc
{
    color: rgb(7, 0, 0);
    text-align: center;
    padding-top: 35px;
    text-decoration: underline;
    font-family: serif;
}
</style>
    </head>
    <body>
    <h1 class="abc">TESTIMONIALS</h1>

    <section class="main-slider">
            <div class="slider">
                <div class="slides">
                    <!-- radio button start -->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <input type="radio" name="radio-btn" id="radio5">
                    <input type="radio" name="radio-btn" id="radio6">
                    <input type="radio" name="radio-btn" id="radio7">
                    
                    <!-- radio button end -->

                    <!-- image start -->
                    <div class="slide first">
                        <img src="slider/1.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="slider/2.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="slider/3.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="slider/4.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="slider/5.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="slider/6.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="slider/7.png" alt="">
                    </div>
                    
                    <!-- image end -->

                    <!-- automatic navigation sart -->
                    <div class="navigation-auto">
                        <div class="auto-btn-1"></div>
                        <div class="auto-btn-2"></div>
                        <div class="auto-btn-3"></div>
                        <div class="auto-btn-4"></div>
                        <div class="auto-btn-5"></div>
                        <div class="auto-btn-6"></div>
                        <div class="auto-btn-7"></div>
                        </div>
                    <div class="lr-change">
                        <img src="img/left-arrow.png" alt="" class="left-change" height="50px" onclick="leftchange()">
                        <img src="img/right-arrow.png" alt="" class="right-change" height="50px" onclick="rightchange()">
                    </div>
                    <!-- automatic navigation close -->
                </div>
                    <!-- manual navigation start -->
                    <div class="manual-navigation">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                        <label for="radio5" class="manual-btn"></label>
                        <label for="radio6" class="manual-btn"></label>
                        <label for="radio7" class="manual-btn"></label>
                        
                    </div>
                </div>

                <!-- manual navigation close -->
        </section>
        <script src="js/slide1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    </body>
</html>