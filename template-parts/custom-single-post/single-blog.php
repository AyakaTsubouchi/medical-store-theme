<?php get_header(); ?>
<div class="single-blog container">
    <h2>Title</h2>
    <p>Meta info(/date/author/view/share/</p>

    <div class="row">
        <div class="col-lg-8 blog-main">
            <div class="row">
                <div class="col-lg-4 image">
                    <img src="http://www.perfectdecor.ca/en/wp-content/uploads/2015/01/uph06-300x300.jpg" alt="">
                </div>
                <div class="col-lg-8 text">
                    <p>Upholstery is the work of providing furniture, especially seats, with padding, springs, webbing, and fabric or leather covers. Upholstery has developed with furniture making over centuries, it can create a custom look as individual as you. With over 1000 fabrics, plus trims, designers can imaginatively correlate textures and patterns to create a sophisticated statement in your home. Relax in style and comfort today!</p>
                </div>
            </div>

            <div class="gallery">
                <img src="http://www.perfectdecor.ca/en/wp-content/uploads/2015/01/uph031.jpg" alt="">
                <img src="http://www.perfectdecor.ca/en/wp-content/uploads/2015/01/uph031.jpg" alt="">
                <img src="http://www.perfectdecor.ca/en/wp-content/uploads/2015/01/uph031.jpg" alt="">
                <img src="http://www.perfectdecor.ca/en/wp-content/uploads/2015/01/uph031.jpg" alt="">
            </div>

            <div class="share">
                <h5>Share</h5>
            </div>
            <div class="pagenation">
                <h5>Previous: </h5>
                <h5>Next: </h5>
            </div>
        </div>
        <div class="col-lg-4 sidebar">
            <?php
            if (is_active_sidebar('page-sidebar')) {
                dynamic_sidebar('page-sidebar');
            }
            ?>
          
        </div>
    </div>
</div>




<?php get_footer(); ?>