<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <?php include("includes/include_css.html") ?>
</head>

<body>
    <?php include("includes/browser_upgrade.html") ?>
    <?php include("includes/loader.html") ?>
    <?php include("includes/header.html") ?>
    <?php include("includes/sidebar.html") ?>

    <main id="index_page" class="smooth_scroll_pages">
        <!--  insert body content  -->

        <div class="container">
            <h2 class="text_xxxxl">Lorem, ipsum dolor</h2>
            <h2 class="text_xxxl">Lorem, ipsum dolor</h2>
            <h2 class="text_xxl">Lorem, ipsum dolor</h2>
            <h2 class="text_xl">Lorem, ipsum dolor</h2>
            <h2 class="text_lg">Lorem, ipsum dolor</h2>
            <h2 class="text_md">Lorem, ipsum dolor</h2>
            <p class="text_reg">Lorem, ipsum dolor</p>
            <p class="text_sm">Lorem, ipsum dolor</p>
            <p class="text_xs">Lorem, ipsum dolor</p>
            <br>
            <a class="btn_project_default" href="">Sign In </a>
            <br>
            <br>
            <a class="btn_project_default black_btn" href="">Create Account</a>
        </div>

        <section class="journey_main ptb_100">
      <div class="container">
        <div class="journey_title toTop pb_60" data-scroll>
          <h2 class="text_xxl">Our illustrious journey at a glance</h2>
        </div>

        <div class="illustrious_flex d_flex">
          <div class="illustrious_left">
            <img class="line_two" src="img/home/line_two.png" alt="line_two" />
            <div class="slider slider-nav">
                <div class="thumbnail_txt">
                    <h2 class="text_xxl">2021</h2>
                    <p class="text_reg">Lorem ipsum dolor sit amet, consetetur 
                    sadipscing elitr, sed diam nonumy eirmod tempor 
                    invidunt ut labore et dolore magna aliquyam erat.</p>
                </div>
                <div class="thumbnail_txt">
                 <h2 class="text_xxl">2022</h2>
                    <p class="text_reg">Lorem ipsum dolor sit amet, consetetur 
                    sadipscing elitr, sed diam nonumy eirmod tempor 
                    invidunt ut labore et dolore magna aliquyam erat.</p>
                </div>
                <div class="thumbnail_txt">
                    <h2 class="text_xxl">2023</h2>
                    <p class="text_reg">Lorem ipsum dolor sit amet, consetetur 
                    sadipscing elitr, sed diam nonumy eirmod tempor 
                    invidunt ut labore et dolore magna aliquyam erat.</p>
                </div>
                    <div class="thumbnail_txt">
                    <h2 class="text_xxl">2024</h2>
                    <p class="text_reg">Lorem ipsum dolor sit amet, consetetur 
                    sadipscing elitr, sed diam nonumy eirmod tempor 
                    invidunt ut labore et dolore magna aliquyam erat.</p>
                </div>
                <div class="thumbnail_txt">
                    
                <h2 class="text_xxl">2026</h2>
                    <p class="text_reg">Lorem ipsum dolor sit amet, consetetur 
                    sadipscing elitr, sed diam nonumy eirmod tempor 
                    invidunt ut labore et dolore magna aliquyam erat.</p>
                </div>
                
            </div>
          </div>

          <div class="illustrious_right">
            <div class="slider_layer">
                <img class="slider_layer_one" src="img/home/working_layer_four.png" alt="slider_one" />
                <img class="slider_layer_three" src="img/home/nature_vector_two.png" alt="slider_one" />
            </div>
            <div class="slider slider-for">
                <div class="slider_image">
                    <img src="img/home/slider_one.jpg" alt="slider_one" />
                    <img class="line_layer" src="img/home/line_layer.png" alt="line_layer" />
                    <img class="slider_layer_two" src="img/home/review_layer_two.png" alt="slider_one" />
                </div> 
                <div class="slider_image">
                    <img src="img/home/slider_one.jpg" alt="slider_one" />
                </div> 
                <div class="slider_image">
                    <img src="img/home/slider_one.jpg" alt="slider_one" />
                </div> 
                <div class="slider_image">
                    <img src="img/home/slider_one.jpg" alt="slider_one" />
                </div>
                <div class="slider_image">
                    <img src="img/home/slider_one.jpg" alt="slider_one" />
                </div>
            </div>
          </div>


        </div>

      </div>
      
    </section>

        <!--  end body content -->
    </main>
    <?php include("includes/include_js.html") ?>

    <!-- <script>
        $(".slider-for").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: ".slider-nav",
        });

        $(".slider-nav").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            vertical: true,
            asNavFor: ".slider-for",
            dots: false,
            focusOnSelect: true,
            verticalSwiping: true,
            prevArrow:
                '<img src="img/arrow_prev.png" class="slide-arrow prev-arrow">',
            nextArrow:
                '<img src="img/arrow_next.png" class="slide-arrow next-arrow">',
            responsive: [
                {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
                },
                },
                {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                },
                },
                {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    dots: true,
                    arrows: false,
                },
                },
            ],
        });
    </script> -->
</body>

</html>